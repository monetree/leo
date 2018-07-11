<?php
class BaseModel extends CI_model{


public function admin_login($data,$table){
  $this->db->where($data);
  $rs = $rs = $this->db->get($table);
  $count = $rs->num_rows();
    if($count == 1){
      return $rs;
    }
}


public function common_insert($data,$table){
  $obj=$this->db->insert($table,$data);
  if($obj){
    return true;
  }
}

public function common_update($cond,$data,$table){
  $this->db->where($cond);
  $obj=$this->db->update($table,$data);
  if($obj){
    return true;
  }
}

public function common_select($table){
  $rs=$this->db->get($table);
  return $rs;
}

public function single_select($cond,$table){
  $this->db->where($cond);
  $res=$rs=$this->db->get($table);
  return $res;
}

public function common_delete($cond,$table){
  $this->db->where($cond);
  $obj=$this->db->delete($table);
  if($obj){
    return true;
  }
}

}


?>
