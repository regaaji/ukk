<?php 

class Member extends CI_Controller
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
       

         //$this->load->model('Admin_model', 'menu');

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/member/index', $data);
        $this->load->view('admin/templates/footer', $data);

    }

     public function tambahmember()
    {
        $data['title'] = 'Admin Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('alamat', 'Alamat', 'required');
         $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');   
         $this->form_validation->set_rules('tlp', 'Telepon', 'required|numeric'); 
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/member/tambahmember', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'alamat' => $this->input->post('alamat', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'tlp' => $this->input->post('tlp', true)
            ];  

            $this->db->insert('tb_member', $data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/member');
        }
    }

     public function editmember($id_member)
    {
         $data['title'] = 'Admin Laundry Pintar';
         //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->load->model('Admin_model', 'menu');
         $data['edit'] = $this->admin_model->get_member($id_member);
             //$data['pecah'] = $this->menu->get_id_pembelian($id_pembelian);



         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('alamat', 'Alamat', 'required');
         $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');   
         $this->form_validation->set_rules('tlp', 'Telepon', 'required|numeric');   
         
        if( $this->form_validation->run() === FALSE) {     
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/member/editmember', $data);
        $this->load->view('admin/templates/footer', $data);

        } else {        
             $data = [
                'nama' => $this->input->post('nama', true),
                'alamat' => $this->input->post('alamat', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'tlp' => $this->input->post('tlp', true)
            ];  

             $this->db->where('id_member', $id_member);
             $this->db->update('tb_member', $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/member'); 

            }

        
    }

     public function hapusmember($id_member)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tb_member', ['id_member' => $id_member]);
         $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/member/');
    }
}