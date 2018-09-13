<?php
Class data_model extends CI_Model{

  function getData($id=null){
    if($id==null)$query = "select * from tbl_berat order by date desc";
    else $query = "select * from tbl_berat where id = '$id'";
    $select=$this->db->query($query);
    $q=$select->result();
		return $q;
  }

  function addberat(){
    $date = (string)$_POST['date'];
    $max=$_POST['max'];
    $min=$_POST['min'];
    $query="insert into tbl_berat (date,max,min) values ('$date','$max','$min')";
    $this->db->query($query);
  }

  function editberat(){
    $id = $_POST['id'];
    $date = (string)$_POST['date'];
    $max=$_POST['max'];
    $min=$_POST['min'];
    $query="update tbl_berat set date='$date', max='$max', min='$min' where id='$id'";
    $this->db->query($query);
  }

  function deleteberat($id){
    $query="delete from tbl_berat where id = '$id'";
    $this->db->query($query);

  }

}


?>
