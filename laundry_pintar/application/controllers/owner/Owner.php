<?php 

 /**
  * 
  */
 class Owner extends CI_Controller
 {

     public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model", "admin_model");
    }

  public function index()
    {

        $data['title'] = 'Owner Laundry Pintar';
        //total order terbaru
         $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();
         //total member
         $data['total_member'] = $this->db->from("tb_member")->get()->num_rows();
         //tatal transaksi
        $data['total_transaksi'] = $this->db->from("tb_transaksi")->get()->num_rows();
       

         //$this->load->model('Admin_model', 'menu');

        $this->load->view('owner/templates/header', $data);
        $this->load->view('owner/templates/sidebar', $data);
        $this->load->view('owner/owner/index', $data);
        $this->load->view('owner/templates/footer', $data);
    }

    public function detailtransaksi($transaksi_id)
    {
        $data['title'] = 'Owner Laundry Pintar';
        $data['total_order'] = $this->db->get_where('tb_transaksi', array('status' => 'baru'))->num_rows();       


         $data['detail'] = $this->admin_model->get_detailtransaksi($transaksi_id);


        $this->form_validation->set_rules('status', 'Status Order', 'required');
        $this->form_validation->set_rules('dibayar', 'Tipe Pembayaran', 'required');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('owner/templates/header', $data);
        $this->load->view('owner/templates/sidebar', $data);
        $this->load->view('owner/owner/detailtransaksi', $data);
        $this->load->view('owner/templates/footer', $data);
        } else {
                 
             $data = [
            'status' => $this->input->post('status', true),
            'dibayar' => $this->input->post('dibayar', true)
          ];  

           $this->db->where('id_transaksi', $transaksi_id, true);
           $this->db->update('tb_transaksi', $data);
         $this->session->set_flashdata('flash', 'Diubah');
            redirect('owner/owner');   
        }  
    }
 	
 }