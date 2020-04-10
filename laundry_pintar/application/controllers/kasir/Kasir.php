<?php 

class Kasir extends CI_Controller
{

   public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model", "admin_model");
    }

    public function index()
    {

        $data['title'] = 'Kasir Laundry Pintar';
        //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
         //total member
         $data['total_member'] = $this->db->from("tb_member")->get()->num_rows();
         //tatal transaksi
        $data['total_transaksi'] = $this->db->from("tb_transaksi")->get()->num_rows();
       

         //$this->load->model('Admin_model', 'menu');

        $this->load->view('kasir/templates/header', $data);
        $this->load->view('kasir/templates/sidebar', $data);
        $this->load->view('kasir/kasir/index', $data);
        $this->load->view('kasir/templates/footer', $data);
    }

      public function tambahtransaksi()
    {
        $data['title'] = 'Kasir Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
       

          $this->form_validation->set_rules('kode_invoice', 'Kode Invoice', 'required');
          $this->form_validation->set_rules('outlet_id', 'Nama Outlet', 'required');
          $this->form_validation->set_rules('member_id', 'Nama Customer', 'required');
          $this->form_validation->set_rules('keterangan', 'alamat', 'required');
          $this->form_validation->set_rules('tanggal_ambil', 'Tanggal Ambil', 'required');
          $this->form_validation->set_rules('biaya', 'Biaya', 'required');
          $this->form_validation->set_rules('paket_id', 'Nama Paket', 'required');
          $this->form_validation->set_rules('quantity', 'Berat', 'required');
          $this->form_validation->set_rules('status', 'Status', 'required');
          $this->form_validation->set_rules('dibayar', 'Dibayar', 'required');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('kasir/templates/header', $data);
        $this->load->view('kasir/templates/sidebar', $data);
        $this->load->view('kasir/kasir/tambahtransaksi', $data);
        $this->load->view('kasir/templates/footer', $data);
        } else {
            //$data = [
              //  'kode_invoice' => $this->input->post('kode_invoice', true),
            //    'meber_id' => $this->input->post('meber_id', true)
            //];  

            // $this->db->insert('tb_transaksi', $data);

            $transaksi_input_data = array();
            $detail_transaksi_input_data = array();

             $transaksi_input_data['outlet_id'] = $this->input->post('outlet_id',TRUE);
             $transaksi_input_data['kode_invoice'] = $this->input->post('kode_invoice',TRUE);
             $transaksi_input_data['member_id'] = $this->input->post('member_id',TRUE);
             $transaksi_input_data['tgl'] = $this->input->post('tgl',TRUE);
             $transaksi_input_data['batas_waktu'] = $this->input->post('tanggal_ambil',TRUE);
             $transaksi_input_data['tanggal_bayar'] = $this->input->post('tanggal_ambil',TRUE);
             
             $transaksi_input_data['biaya_tambahan'] = $this->input->post('biaya',TRUE);
            

             

             $data = [
                'id_paket' => $detail_transaksi_input_data['paket_id']
             ];

             $this->db->select('harga');
             $this->db->from('tb_paket');
             $this->db->where($data);
             $query = $this->db->get();
             $harga = $query->row_array();

             
             
             $harga_paket = $harga['harga']*$detail_transaksi_input_data['quantity'];

            
             $pajak = (($harga_paket*5)/100);
             $hitung_pajak = ($harga_paket+$pajak);
             $transaksi_input_data['pajak'] = $hitung_pajak;


             if ($detail_transaksi_input_data['quantity'] > 10) {
              $diskon = (($hitung_pajak*5)/100);
              $hitung_diskon = ($hitung_pajak-$diskon);
              $transaksi_input_data['diskon'] = $hitung_diskon;
              } else {
                  $hitung_diskon = 0;
                  $transaksi_input_data['diskon'] = $hitung_diskon;
              }

               $transaksi_input_data['status'] = $this->input->post('status',TRUE);
             $transaksi_input_data['dibayar'] = $this->input->post('dibayar',TRUE);
              $transaksi_input_data['user_id'] = $this->input->post('user_id',TRUE);
            

            

             
            $this->admin_model->create_multiple_table($transaksi_input_data, $detail_transaksi_input_data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kasir/kasir');
        }
    }

    public function detailtransaksi($transaksi_id)
    {
        $data['title'] = 'Kasir Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();       


         $data['detail'] = $this->admin_model->get_detailtransaksi($transaksi_id);


        $this->form_validation->set_rules('status', 'Status Order', 'required');
        $this->form_validation->set_rules('dibayar', 'Tipe Pembayaran', 'required');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('kasir/templates/header', $data);
        $this->load->view('kasir/templates/sidebar', $data);
        $this->load->view('kasir/kasir/detailtransaksi', $data);
        $this->load->view('kasir/templates/footer', $data);
        } else {
                 
             $data = [
            'status' => $this->input->post('status', true),
            'dibayar' => $this->input->post('dibayar', true)
          ];  

           $this->db->where('id_transaksi', $transaksi_id, true);
           $this->db->update('tb_transaksi', $data);
         $this->session->set_flashdata('flash', 'Diubah');
            redirect('kasir/kasir');   
        }  
    }


    public function riwayattransaksi()
    {
        $data['title'] = 'Admin Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();       
         
         // $id_user =  $this->session->userdata('id_user');

         // $data['detail'] = $this->admin_model->get_riwayat($id_user);

   
        $this->load->view('kasir/templates/header', $data);
        $this->load->view('kasir/templates/sidebar', $data);
        $this->load->view('kasir/kasir/riwayattransaksi', $data);
        $this->load->view('kasir/templates/footer', $data);
         
    }



}
 ?>