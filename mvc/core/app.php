<?php 
    // file này chủ yếu xử lí url và chạy hàm chính xác vs url
    class app {
        protected $controller ="home";
        protected $action="defauAction";
        protected $params=[];

        function __construct(){
            $arr = $this -> url_handle();
            // Xu li controller
            if(isset($arr[0])){
                // nếu có arr[0] thì kiểm tra xem arr[0] đó có trong thư mục hay k
                if(file_exists("./mvc/controller/".$arr[0].".php")){
                    $this->controller = $arr[0];
                    require_once("./mvc/controller/".$arr[0].".php");
                    unset($arr[0]);
                }else{
                    // arr[0] không có trong thư mục thì require trang $controller mặc định
                    require_once("./mvc/controller/".$this->controller.".php");
                    unset($arr[0]);
                }
            }else {
                // không có arr[0]cũng require trang $controller mặc định
                require_once("./mvc/controller/".$this->controller.".php");
            }
            
            $this->controller = new $this->controller;

            // Xu li action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    $this -> action = $arr[1];
                }
                unset($arr[1]);
            }

            // Xu li param
            // Lay het mang, luc nay mang đã k còn controller và action
            if($arr){
                $this -> params = $arr;
            }else {
                $this -> params = [];
            }
            // hàm này để xác định chạy hàm nào
           // call_user_func_array(["tên lớp","tên hàm muốn chạy"],"tham số truyền vào hàm")
             
            call_user_func_array([$this->controller,$this->action],$this->params);
        }
        
        function url_handle(){
            if(isset($_GET["url"])){
               // cắt các khoảng trắng trên url
               return explode("/",filter_var(trim($_GET["url"],"/")));
            }
        }

        function currency_format($number, $suffix = 'đ') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }

       
    }


?>