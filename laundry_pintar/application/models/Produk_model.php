<?php 



/**
 * 
 */
class Produk_model extends CI_Model
{


	function get_new($keyword = null)
	{
		if ($keyword) {
			$this->db->like('nama_produk', $keyword);
			$this->db->or_like('nama_penulis', $keyword);
		}

		$query = $this->db->query("SELECT * FROM `produk` INNER JOIN kategori ON produk.kategori_id = kategori.id_kategori WHERE id_produk BETWEEN 18 and 21");
		return $query->result_array();
	}
	

	function get_produk()
	{

		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori','produk.kategori_id = kategori.id_kategori');
		$this->db->where("id_produk BETWEEN 1 AND 17");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_kategori($id_kategori)
	{
		$data = [
			'id_kategori' => $id_kategori
		];

		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detail($id_produk)
	{
		$data = [
			'id_produk' => $id_produk
		];
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori','produk.kategori_id = kategori.id_kategori');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_kurir()
	{
		return $this->db->get('kurir')->result_array();
	}

	public function get_pembelian($id_pembelian_barusan)
	{
		$data = [
			'id_pembelian' => $id_pembelian_barusan
		];
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->join('pelanggan','pembelian.id_pelanggan = pelanggan.id_pelanggan');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_pembelian_produk($id_pembelian_barusan)
	{
		$data = [
			'id_pembelian' => $id_pembelian_barusan
		];
		$this->db->select('*');
		$this->db->from('pembelian_produk');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_jenis($id_kategori)
	{
		$data = [
			'id_kategori' => $id_kategori
		];
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->join('produk','kategori.id_kategori = produk.kategori_id');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
	}
}