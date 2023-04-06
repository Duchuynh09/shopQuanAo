<?php
class Contacts extends controller
{
    public $select;
    public $get;
    public function defauAction()
    {
        echo "Nothing!!";
        // Khi ng dùng k nhập url
    }
    
    public function user()
    {
        $this->get = $this->model("UserModel");
        $this->select = $this->model("sanPhamModel");
        $this->view("layout", [
            "Page" => "sanPham",
            "user" => $this->get->User(),
            "content" => $this->select->GetAll()
        ]);
    }
    public function admin()
    {
        $this->get = $this->model("UserModel");
        $this->select = $this->model("sanPhamModel");
        $this->view("layout", [
            "Page" => "sanPham",
            "user" => $this->get->User(),
            "content" => $this->select->GetAll(),
            "conn" => $this->get->GetConn()
        ]);
    }
    public function login()
    {
        $this->get = $this->model("UserModel");
        $this->select = $this->model("sanPhamModel");
        $this->view("layout", [
            "Page" => "login_page",
            "content" =>  $this->get->User()
            
        ]);

    }
    public function register(){
        $this->get = $this->model("UserModel");
        $this->view("layout", [
            "Page" => "register_page",
            "content" =>  $this->get->User(),
            "conn" => $this->get->GetConn()
        ]);
        
    }
    public function logout(){
       
        $this->get = $this->model("UserModel");
        $this->view("layout", [
            "Page" => "logout",
            "content" =>  $this->get->User()
        ]);
        
        
    }
    public function add()
    {  
        $this->select = $this->model("sanPhamModel");
        $this->view("layout", [
            "Page" => "add_page",
            "content" => $this->select->GetAll(),
            "conn"=>$this->select->conn
        ]);
    }
    
    
}
