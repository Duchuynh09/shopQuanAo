<?php
// Truy van lai csdl
class UserModel extends db_sanPham
{
    public function User()
    {
        $query = "SELECT * FROM users";
        return mysqli_query($this->conn, $query);
    }
    public function GetConn(){
        return $this->conn;
    }
    public function add_aoThun()
    {
        // $aothun = $this->GetAoThun();
        // if
        // $row = $aothun->fetch_assoc();
        if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
            (isset($_POST['submit'])) &&
            (isset($_FILES['fileupload']))
        ) {
            $allowUpload   = true;


            $files = $_FILES['fileupload'];

            $name     = $files['name'];
            $tmp_name  = $files['tmp_name'];
            $error     = $files['error'];
            $tensp = $_POST['ten'];
            $giasp = $_POST['gia'];
            $loaisp = $_POST['loaisp'];
            $target_file = "mvc/public/img/" . $name;

            //Lấy phần mở rộng của file (jpg, png, ...)
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $allowtypes    = array('jpg', 'png', 'jpeg', 'gif', "webp");
            if ($error == 0) {
                //kiểm tra tồn tai trên csdl
                if (file_exists($target_file)) {
                    echo "Tên file đã tồn tại trên server, không được ghi đè";
                    $allowUpload = false;
                }

                // Kiểm tra kiểu file
                if (!in_array($imageFileType, $allowtypes)) {
                    echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF, WEBP";
                    $allowUpload = false;
                }
                if ($allowUpload) {
                    
                    $insert = "INSERT INTO sanpham(ten,gia,img_source,loaisp,user_id)  VALUES ('$tensp',$giasp,'$target_file','$loaisp',1)";
                    if (mysqli_query($this->conn, $insert)) {
                        echo "<div class=\"alert alert-success\">New record created successfully</div>";
                        move_uploaded_file($tmp_name, $target_file);
                    } else {
                        echo "<div class=\"alert alert-danger\">Error: " . $insert . "<br>" . mysqli_error($this->conn) . "</div>";
                    }
                } else
                    echo "file ton tai ,hoac khong dung cau truc";
            } else echo "Loi file anh <br>$error ";
        }
    }
   
}
