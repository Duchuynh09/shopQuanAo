<?php
define('TITLE', 'ADMIN');
$conn=$data["conn"];
   if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
   (isset($_POST['delete']))) {

$id=$_POST["delete"];
$query = "DELETE FROM sanPham where id = $id  ";
mysqli_query($conn, $query);
$query = "SELECT img_source FROM sanPham where id = $id  ";
mysqli_query($conn, $query);
echo $_POST["src_img"];
unlink($_POST["src_img"]);
}


?>
<div id="mainBody">
        <div id="main" style="position:relative;top:0;">
                <div class="row">
                        <div class="col-12 ">
                                <?php
                                require_once "./partial/header.php";
                                ?>
                                <div class="row">
                                        <div class="select d-flex justify-content-between">
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                        <h1 class="title text-muted">Các sản phẩm đã có</h1>
                                                        <div class="alert-no-filter"></div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <?php
                                       // require_once "./manager/delete.php";
                                        while ($row = mysqli_fetch_assoc($data['content'])) {
                                                // $id [] =$row["id"];
                                                echo "<div class=\"col-lg-2 col-md-6 product\">
                                                        <img style=\"width:100%\" src=\"http://localhost/localbrand/{$row['img_source']}\"
                                                                alt=\"aothun\">
                                                        <a href=\"\" class=\"text-muted \">{$row['ten']}</a>
                                                        <p class=\" text-center\">{$row['gia']}</p>
                                                        
                                                        <button type=\"button\" class=\"btn-close\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal{$row["id"]}\" aria-label=\"Close\"></button>
                                                </div>";
                                                echo "
                                        <div class=\"modal\" id=\"myModal{$row["id"]}\">
                                                <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">

                                                                <!-- Modal Header -->
                                                                <div class=\"modal-header\">
                                                                        <h4 class=\"modal-title\">Modal Heading</h4>
                                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class=\"modal-body\">
                                                                        {$row["id"]}
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class=\"modal-footer\">
                                                                        <form action=\"\" method=\"POST\"><button type=\"sumit\" name=\"delete\"class=\"btn btn-danger\" value=\"{$row["id"]} \"data-bs-dismiss=\"modal\">Delete</button>
                                                                        <button class=\"d-none\" name=\"src_img\"type=\"button\" values=\"{$row["img_source"]}\"></button>
                                                                        </form>
                                                                        <button type=\"button\" class=\"btn btn-light \" data-bs-dismiss=\"modal\">Cancel</button>
                                                                </div>

                                                        </div>
                                                </div>
                                        </div>";
                                        }
                                        
                                        
                                        echo "<div class=\"col-lg-2 col-md-6 d-flex justify-content-center align-items-center bg-warning\">
                                                <a href=\"http://localhost/localbrand/contacts/add\" class=\"btn btn-primary\" style=\"\">them san pham</a>
                                                        </div>";
                                        ?>
                                </div>
                        </div>
                </div>
        </div>
</div>
</div>
                                