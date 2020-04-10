<?php 

class Laporan extends CI_Controller
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
        $this->load->view('admin/laporan/index', $data);
        $this->load->view('admin/templates/footer', $data);

    }

    public function laporan()
    {
        $dari = $this->input->post('nama', true);
        $ke = $this->input->post('nama', true);
        $data = array(
          'record'  => $this->db->query("SELECT * FROM `tb_detail_transaksi` INNER JOIN tb_transaksi ON tb_detail_transaksi.transaksi_id = tb_transaksi.id_transaksi INNER JOIN tb_member ON tb_transaksi.member_id = tb_member.id_member INNER JOIN tb_paket ON tb_paket.id_paket = tb_detail_transaksi.paket_id  where (tb_transaksi.tgl LIKE '%$dari%' and tb_transaksi.tanggal_bayar LIKE '%$ke%')"),
        );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('admin/laporan/data_laporan', $data);

    }

        public function laporan_pdf(){

       // $data = array(
          //  "dataku" => array(
             //   "nama" => "Petani Kode",
             //   "url" => "http://petanikode.com"
            //)
       // );

         $data['dataLaporan'] = $this->admin_model->getAllCetak();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('admin/laporan/data_laporan_pdf', $data);


}

}
