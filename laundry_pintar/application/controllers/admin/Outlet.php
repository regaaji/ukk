<?php 

class Outlet extends CI_Controller
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
        $this->load->view('admin/outlet/index', $data);
        $this->load->view('admin/templates/footer', $data);

    }

     public function tambahoutlet()
    {
        $data['title'] = 'Admin Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('alamat', 'Alamat', 'required');
         $this->form_validation->set_rules('tlp', 'Telepon', 'required|numeric'); 
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/outlet/tambahoutlet', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'alamat' => $this->input->post('alamat', true),
                'tlp' => $this->input->post('tlp', true)
            ];  

            $this->db->insert('tb_member', $data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/member');
        }
    }

     public function editoutlet($id_outlet)
    {
         $data['title'] = 'Admin Laundry Pintar';
         //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->load->model('Admin_model', 'menu');
         $data['edit'] = $this->admin_model->get_outlet($id_paket);
             //$data['pecah'] = $this->menu->get_id_pembelian($id_pembelian);



          $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('alamat', 'Alamat', 'required');
         $this->form_validation->set_rules('tlp', 'Telepon', 'required|numeric');   
         
        if( $this->form_validation->run() === FALSE) {     
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/paket/editpaket', $data);
        $this->load->view('admin/templates/footer', $data);

        } else {        
             $data = [
                'nama' => $this->input->post('nama', true),
                'alamat' => $this->input->post('alamat', true),
                'tlp' => $this->input->post('tlp', true)
            ];  

             $this->db->where('id_outlet', $id_outlet);
             $this->db->update('tb_outlet', $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/outlet'); 

            }

        
    }

     public function hapusoutlet($id_outlet)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tb_outlet', ['id_outlet' => $id_outlet]);
         $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/outlet/');
    }
}