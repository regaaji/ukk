<?php 

/**
 * 
 */
class Admin_model extends CI_Model
{

    public function create_multiple_table($transaksi_input_data, $detail_transaksi_input_data)
    {
        $this->db->insert('tb_transaksi', $transaksi_input_data);
        $transaksi_id = $this->db->insert_id();

        $detail_transaksi_input_data['transaksi_id'] = $transaksi_id;
        $detail_transaksi_input_data['paket_id'] = $this->input->post('paket_id',TRUE);
        $detail_transaksi_input_data['qty'] = $this->input->post('quantity',TRUE);
        $detail_transaksi_input_data['keterangan'] = $this->input->post('keterangan',TRUE);

        $this->db->insert('tb_detail_transaksi', $detail_transaksi_input_data);
        return $insert_id = $this->db->insert_id();
    }

    
	
	public function get_detailtransaksi($transaksi_id)
	{
		$data = [
			'tb_detail_transaksi.transaksi_id' => $transaksi_id
		];

		$this->db->select('*');
		$this->db->from('tb_detail_transaksi');
		$this->db->join('tb_transaksi','tb_detail_transaksi.transaksi_id  = tb_transaksi.id_transaksi');
    $this->db->join('tb_member','tb_transaksi.member_id = tb_member.id_member');
    $this->db->join('tb_paket','tb_paket.id_paket = tb_detail_transaksi.paket_id');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->row_array();
	}


  // public function get_riwayat($id_user)
  // {
  //   $data = [
  //     'tb_transaksi.user_id' => $id_user
  //   ];

  //   $this->db->select('*');
  //   $this->db->from('tb_detail_transaksi');
  //   $this->db->join('tb_transaksi','tb_detail_transaksi.transaksi_id  = tb_transaksi.id_transaksi');
  //   $this->db->join('tb_member','tb_transaksi.member_id = tb_member.id_member');
  //   $this->db->join('tb_paket','tb_paket.id_paket = tb_detail_transaksi.paket_id');
  //   $this->db->where($data);
  //   $query = $this->db->get();
  //   return $query->row_array();
  // }

  public function get_paket($id_paket)
  {
        return $this->db->get_where('tb_paket', ['id_paket' => $id_paket])->row_array();
  } 

   public function get_member($id_member)
  {
        return $this->db->get_where('tb_member', ['id_member' => $id_member])->row_array();
  } 

   public function get_outlet($id_outlet)
  {
        return $this->db->get_where('tb_outlet', ['id_outlet' => $id_outlet])->row_array();
  } 

   function getAllCetak()
   {
    $this->db->select('*');
    $this->db->from('tb_detail_transaksi');
    $this->db->join('tb_transaksi','tb_detail_transaksi.transaksi_id  = tb_transaksi.id_transaksi');
    $this->db->join('tb_member','tb_transaksi.member_id = tb_member.id_member');
    $this->db->join('tb_paket','tb_paket.id_paket = tb_detail_transaksi.paket_id');
    $query = $this->db->get();
    return $query->result();
   } 

	public function updateproduk($id_produk, $filename)
    {
         $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "nama_penulis" => $this->input->post('nama_penulis', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "detail_produk" => $this->input->post('detail_produk', true),
            "stok_produk" => $this->input->post('stok_produk', true),
            "foto_produk" => $filename
            
        ];

        $this->db->where('id_produk', $this->input->post('id_produk', true));
        $this->db->update('produk', $data);
    }


    public function ubahproduk()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "nama_penulis" => $this->input->post('nama_penulis', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "detail_produk" => $this->input->post('detail_produk', true),
            "stok_produk" => $this->input->post('stok_produk', true)
        ];  

        $this->db->where('id_produk', $this->input->post('id_produk',$id_owner));
        $this->db->update('produk', $data);
    }

    public function getById($id_produk)
    {
        return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
    }


    public function addproduk($filename)
    {
         $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "nama_penulis" => $this->input->post('nama_penulis', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "stok_produk" => $this->input->post('stok_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "detail_produk" => $this->input->post('detail_produk', true),
            "foto_produk" => $filename
            
        ];

        $this->db->insert('produk', $data);
    }  



     public function get_edit_kurir($id_kurir)
    {
        return $this->db->get_where('kurir', ['id_kurir' => $id_kurir])->row_array();
    } 

    public function get_pembelian($id_pembelian)
     {
         $data = [
            'tb_detail_transaksi.transaksi_id' => $id_pembelian
        ];

        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->join('pelanggan','pembelian.id_pelanggan= pelanggan.id_pelanggan');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row_array();
     } 

     public function get_id_pembelian($id_pembelian)
     {
         return $this->db->get_where('pembelian_produk', ['id_pembelian' => $id_pembelian])->row_array();
     }

     public function get_pelanggan($id_pelanggan)
     {
         return $this->db->get_where('pelanggan', ['id_pelanggan' => $id_pelanggan])->row_array();
     }

}
 ?>