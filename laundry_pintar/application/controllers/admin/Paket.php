<?php 

class Paket extends CI_Controller
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
        $this->load->view('admin/paket/index', $data);
        $this->load->view('admin/templates/footer', $data);

    }

     public function editpaket($id_paket)
    {
         $data['title'] = 'Admin Laundry Pintar';
         //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->load->model('Admin_model', 'menu');
         $data['edit'] = $this->admin_model->get_paket($id_paket);
             //$data['pecah'] = $this->menu->get_id_pembelian($id_pembelian);



         $this->form_validation->set_rules('outlet_id', 'Nama Outlet', 'required');
         $this->form_validation->set_rules('jenis', 'Jenis', 'required');
         $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required');   
         $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');   
         
        if( $this->form_validation->run() === FALSE) {     
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/paket/editpaket', $data);
        $this->load->view('admin/templates/footer', $data);

        } else {        
             $data = [
                'outlet_id' => $this->input->post('outlet_id', true),
                'jenis' => $this->input->post('jenis', true),
                'nama_paket' => $this->input->post('nama_paket', true),
                'harga' => $this->input->post('harga', true)
            ];  

             $this->db->where('id_paket', $id_paket);
             $this->db->update('tb_paket', $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/paket'); 

            }

        
    }

     public function hapuspaket($id_paket)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tb_paket', ['id_paket' => $id_paket]);
         $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/paket/');
    }


     public function tambahpaket()
    {
        $data['title'] = 'Admin Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

         $this->form_validation->set_rules('outlet_id', 'Nama Outlet', 'required');
         $this->form_validation->set_rules('jenis', 'Jenis', 'required');
         $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required');   
         $this->form_validation->set_rules('harga', 'Harga', 'required|numeric'); 
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/paket/tambahpaket', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
            $data = [
                'outlet_id' => $this->input->post('outlet_id', true),
                'jenis' => $this->input->post('jenis', true),
                'nama_paket' => $this->input->post('nama_paket', true),
                'harga' => $this->input->post('harga', true)
            ];  

            $this->db->insert('tb_paket', $data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/paket');
        }
    }
}