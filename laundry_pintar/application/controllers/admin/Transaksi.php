<?php 

class Transaksi extends CI_Controller
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
        $this->load->view('admin/transaksi/index', $data);
        $this->load->view('admin/templates/footer', $data);

    }

     public function hapustransaksi($transaksi_id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tb_detail_transaksi', ['transaksi_id' => $transaksi_id]);
        $this->db->delete('tb_transaksi', ['id_transaksi' => $transaksi_id]);
         $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/transaksi/');
    }
}