<?php 

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model", "admin_model");
    }

    public function index()
    {
    	 $data['title'] = 'Admin Laundry Pintar';
         //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       
         $id_user =  $this->session->userdata('id_user');

         $data['edit'] = $this->db->get_where('tb_user', array('id_user' => $id_user))->row_array();

         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('username', 'Username', 'required');   
         $this->form_validation->set_rules('outlet_id', 'Nama Outlet', 'required');
         
        if( $this->form_validation->run() === FALSE) {

         //$this->load->model('Admin_model', 'menu');

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/profil/index', $data);
        $this->load->view('admin/templates/footer', $data);

         } else {        
             $data = [
                'nama' => $this->input->post('nama', true),
                'username' => $this->input->post('username', true),
                'outlet_id' => $this->input->post('outlet_id', true)
            ];  

             $this->db->where('id_user', $id_user);
             $this->db->update('tb_user', $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/profil'); 

        }

    }

     public function gantipassword()
    {
         $data['title'] = 'Admin Laundry Pintar';
         //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->load->model('Admin_model', 'menu');
             //$data['pecah'] = $this->menu->get_id_pembelian($id_pembelian);



         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');  
         
        if( $this->form_validation->run() === FALSE) {     
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/profil/gantipassword', $data);
        $this->load->view('admin/templates/footer', $data);

        } else {        
             $data = [
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
            ];  

             $this->db->where('id_user', $id_user);
             $this->db->update('tb_user', $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/profil/gantipassword'); 

            }

        
    }



     
}