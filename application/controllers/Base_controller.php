<?php
class Base_controller extends CI_controller{
public function __construct(){
  parent::__construct();
  $this->load->model('BaseModel','bm');
  $this->load->helper(array('form'));
  $this->load->library('session');
  $this->load->library('pagination');
}


public function admin(){
  $admin_email = $this->session->userdata('admin_email');
  if(!empty($admin_email)){
    redirect('dashboard');
  }
  extract($_POST);
  if(isset($login_button)){
    $form_data = array(
      'email'    => $email,
      'password' => $password
    );

    $resp=$this->bm->admin_login($form_data,'admin_login');
    if($resp==1){
      $set_session = array(
         'admin_email' => $email
     );
     $this->session->set_userdata($set_session);
     redirect('Base_controller/admin_dashboard');
   }else{
     $this->load->view('admin/index.php');
   }
  }else{
  $this->load->view('admin/index.php');
}
}

public function admin_dashboard(){
  $admin_email = $this->session->userdata('admin_email');
    if(empty($admin_email)){
     redirect('admin');
   }
  $this->load->view('admin/dashboard.php');
}
public function read_user_data(){
  $data = json_decode(file_get_contents("php://input"));
  $res=$this->bm->common_insert($data,'user');
  if($res){
    echo "success";
  }
}

public function contact_form(){
  $data = json_decode(file_get_contents("php://input"));
  $res=$this->bm->common_insert($data,'contact');
  if($res){
    echo "success";
  }
}


public function get_user_data(){
  $res=$this->bm->common_select('user');
  foreach($res->result() as $row){
      $output[] = $row;
    }
    $o['records']=$output;
    echo json_encode($o);
}


public function get_contact(){
  $res=$this->bm->common_select('contact');
  foreach($res->result() as $row){
      $output[] = $row;
    }
    $o['contact']=$output;
    echo json_encode($o);
}


public function delete_user(){
  $id=file_get_contents("php://input");
  $cond = array(
    'id'=>$id
  );
  $res=$this->bm->common_delete($cond,'user');
  if($res){
    echo "success";
  }
}


public function single_records(){
  $id=file_get_contents("php://input");
  $cond = array(
    'id'=>$id
  );
  $res=$this->bm->single_select($cond,'user');
  foreach($res->result() as $row){
      $output[] = $row;
    }
  $o['single']=$output;
  echo json_encode($o);
}

public function total_users(){
  $rs = $this->db->get('user');
  $count_records = $rs->num_rows();
  echo $count_records;
}

public function total_applications(){
  $rs = $this->db->get('contact');
  $count_records = $rs->num_rows();
  echo $count_records;
}




public function update_now(){
  $data=json_decode(file_get_contents("php://input"));
  $array =  (array) $data;
  $cond=array(
    'id'=>$array['id']
  );
  $data=array(
    'name'=>$array['name'],
    'Address'=>$array['address'],
    'Pan'=>$array['pan'],
    'Adhar'=>$array['adhar'],
  );
  $res=$this->bm->common_update($cond,$data,'user');
  if($res){
    echo "success";
  }
}



public function index(){
  $this->load->view('index.php');
}

public function page_not_found(){
  $this->load->view('404.php');
}

}

?>
