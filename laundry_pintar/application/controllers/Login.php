<?php 


 class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->view('templates/navbar', $data);
		$this->load->view('login/index');			
		$this->load->view('templates/footer');	
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		 
		if( $this->form_validation->run() === FALSE ){
				$data['judul'] = 'E-Laundry | Masuk';

			$this->load->view('templates/navbar', $data);
			$this->load->view('login/index');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');

			$cek = $this->Daftar_model->cekUsername($username);
			if ( $cek->num_rows() === 0 ) {

				//$this->session->set_flashdata('message', 'Gagal');
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                     Anda telah gagal masuk
                    </div>');
				redirect('login/index');

			} else {
				$password = $this->input->post('password');

				if ( password_verify($password, $cek->row()->password) ) {

	
					if ($cek->row()->role == 'admin') {
						$session['admin'] = 'admin';
						$session['role'] = $cek->row()->role;
						$session['username'] = $cek->row()->username;
						$session['nama'] = $cek->row()->nama;
						$session['outlet_id'] = $cek->row()->outlet_id;
						$session['id_user'] = $cek->row()->id_user;
						
						$this->session->set_userdata($session);
						echo "<script>alert('Login Admin');</script>";
						redirect('admin/admin');
						exit;								
					} elseif($cek->row()->role == 'kasir') {
						$session['kasir'] = 'kasir';
						$session['role'] = $cek->row()->role;
						$session['username'] = $cek->row()->username;
						$session['nama'] = $cek->row()->nama;
						$session['outlet_id'] = $cek->row()->outlet_id;
						$session['id_user'] = $cek->row()->id_user;
						
						$this->session->set_userdata($session);
						echo "<script>alert('Login Kasir');</script>";
						redirect('kasir/kasir');
						exit;		
					} elseif($cek->row()->role == 'owner'){
						$session['owner'] = 'owner';
						$session['role'] = $cek->row()->role;
						$session['username'] = $cek->row()->username;
						$session['nama'] = $cek->row()->nama;
						$session['outlet_id'] = $cek->row()->outlet_id;
						$session['id_user'] = $cek->row()->id_user;
						
						$this->session->set_userdata($session);
						echo "<script>alert('Login Owner');</script>";
						redirect('owner/owner');
						exit;	
					} else {
						//$this->session->set_flashdata('message', 'Gagal');
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		                     Anda telah gagal masuk
		                    </div>');
						redirect('login/index');
					}

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                     Password Salah
                    </div>');
					//$this->session->set_data('message', 'Salah');
					redirect('login/index');
				}

			}
		}
	}

	

	public function logout()
	{
		 $this->session->set_flashdata('message', '<script>
                     alert("an")
                    </script>');
		$this->session->sess_destroy();
		redirect('login/index');
	}
}