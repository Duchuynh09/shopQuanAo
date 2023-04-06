<?php
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

        $loaisp = $_POST['loaisp'];
        $tensp = $_POST['ten'];
        $giasp = $_POST['gia'];
        $target_file = "./mvc/public/img/" . $name;
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
                
                $insert = "INSERT INTO sanpham(loaisp,ten,gia,img_source)  VALUES ('$loaisp','$tensp',$giasp,'$target_file')";
                if (mysqli_query($data["conn"], $insert)) {
                    move_uploaded_file($tmp_name, $target_file);
                    echo "<div class=\"alert alert-success\">New record created successfully</div>";
                } else {
                    echo "<div class=\"alert alert-danger\">Error: " . $insert . "<br>" . mysqli_error($data["conn"]) . "</div>";
                }
            } else echo "file ton tai ,hoac khong dung cau truc";
        } else echo "Loi file anh <br>$error";
    }
?>
<div id="mainBody">
    <div id="main" style="position:relative;top:0;">
        <div class="row">
            <?php
            require_once "./partial/nav.php";
            ?>
            <div class="col-sm-10 pt-5">
                <?php require_once "./partial/header.php";?>
                <form method="post" enctype="multipart/form-data">
                    <p>Chọn file để upload:</p>
                    Nhap ten sp <input type="text" name="ten"><br>
                    Nhap gia sp <input type="text" name="gia"><br>
                    Loai sp :
                    <input type="radio" name="loaisp" value="ao_thun">
                      <label for="ao_thun">Áo thun</label>
                      <input type="radio" name="loaisp" value="ao_khoat">
                      <label for="ao_khoat">Áo khoát</label>
                      <input type="radio" name="loaisp" value="quan">
                      <label for="quan">Quần</label><br>
                    anh minh hoa
                    <input name="fileupload" type="file" /><br>
                    <input type="submit" value="Đăng ảnh" name="submit">
                </form>
            </div>