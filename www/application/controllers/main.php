<?php if(!defined('BASEPAHT')) exit('No direct scrpit access allowed');
/*
* todo 컨트롤러
*/

  class Main extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->model('todo_m');
      $this->load->helper('url');
    }
  }
/*
* 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드
*/

  public function lists(){
    $data['list'] = $this->todo_m->get_list();
    $this->load->view('todo/list_v', $data);
  }
 ?>
