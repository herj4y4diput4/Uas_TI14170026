<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['contents']='admin/dashboard';
		$this->load->view('templates/index',$data);
	}
	public function jenis()
	{
		$data['contents']='admin/jenis';
		$this->load->view('templates/index',$data);
	}
	public function kondisi()
	{
		$data['contents']='admin/kondisi';
		$this->load->view('templates/index',$data);
	}
	public function ruang()
	{
		$data['contents']='admin/ruang';
		$this->load->view('templates/index',$data);
	}
	public function satuan()
	{
		$data['contents']='admin/satuan';
		$this->load->view('templates/index',$data);
	}
	public function sumber()
	{
		$data['contents']='admin/sumber';
		$this->load->view('templates/index',$data);
	}
	public function tahun()
	{
		$data['contents']='admin/tahun';
		$this->load->view('templates/index',$data);
	}
}
