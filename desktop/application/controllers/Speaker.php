<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaker extends Mobile_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		 parent::__construct();
		 
	}
	public function index()
	{
		$data = $this->db->where('displays',1)->get('speaker_category')->result_array();
		$in = array(); 
		$in['arr'] = $data; 								
		 										
		$in['bread']['#'] = 'News';
		
		$in['title'] = ""; 
		$in['tpl'] = "speaker/main";
		$in['page_header'] = "speaker/page_header";
		$this->load->view('manager/layout',$in);
		return; 
	}
	public function seed()
	{
		$limit = isset($_GET['limit'])?$_GET['limit']:"";
		$ctype = isset($_GET['ctype'])?$_GET['ctype']:"highlight";
		$cid = isset($_GET['cid'])?$_GET['cid']:"";
		if(!empty($cid))
		{
			$data = $this->db->where('displays',1)->where('id_speaker_category',$cid)->get('speaker')->result_array();
		}else
		{
			$data = $this->db->where('displays',1)->order_by('id_speaker_category asc')->get('speaker')->result_array();
		}
		$in['arr'] = $data;  
		$cname = "content";
		$in['temps'] = $this->load->view('manager/speaker/'.$cname, $in, true);
		json(array('error'=>false,'message'=>'Proccess',"arr"=>$in,"temp"=>$in['temps'],'security'=>token()));
		return;
	}
	 
	 
	 
}

