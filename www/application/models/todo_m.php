<?php if(!defined('BASEPATH')) exit('NO direct script access allowed');
/*
* todo모델
*/
  class Todo_m extends CI_Model{
    function __construct(){
      parent::__construct();
    }
    /*
    * todo 목록 가져오기
    */
    function get_list(){
      $sql = "SELECT * FROM items";
      $query = $this->db->query($sql);
      $result = $query->result();

      return $result;
    }
  }
 ?>