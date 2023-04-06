<?php
define('TITLE', 'Login');
function is_admin($id_ad = "0")
{
  return (isset($_SESSION['user']) && $_SESSION['user']["id"] === $id_ad);
}
$loggedin = false;
$error = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['email']) && !empty($_POST['pswd'])) {
    // print_r(mysqli_fetch_assoc($data["content"]));
    while ($row = mysqli_fetch_assoc($data["content"])){
      print_r($row);
      if ((strtolower($_POST['email']) == $row['email']) && ($_POST['pswd'] == $row['pass'])) {
        $_SESSION['user'] = $row;
        $_SESSION['user']["id"] = $row["id"];
        $_SESSION['user']["email"] = $_POST['email'];
        $_SESSION ["loggein"] =$loggedin;
        // print_r($_SESSION["user"]);
        $loggedin = true;
      } else {
        $error = 'Địa chỉ email và mật khẩu không khớp!';
      }
    }
  } else {
    $error = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ email và mật khẩu!';
  }
}


if ($loggedin) {

  if (is_admin()) {
    echo "<script>window.location.href=\"http://localhost/localbrand/Contacts/admin\"</script>";
  } else echo "<script>window.location.href=\"http://localhost/localbrand/Contacts/user\"</script>";
} else {
  // print_r($_SESSION);
  echo "
<div id=\"mainBody\">
  <div id=\"main\" style=\"position:relative;top:0;\">
    <div class=\"row\">";
  require_once "./partial/nav.php";


  echo "
      <div class=\"col-10\">
        <div class=\"container mb-2\">
          <form action=\"\" method=\"POST\">
            <div class=\"mb-2 mt-2\">
              <label for=\"email\">Email:</label>
              <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Nhập email\" name=\"email\">
            </div>
            <div class=\"mb-2\">
              <label for=\"pwd\">Password:</label>
              <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Nhập password\" name=\"pswd\">
            </div>
            <button type=\"submit\" class=\"btn content_main-dn\">Đăng nhập</button>
            <a href=\"http://localhost/localbrand/contacts/register\" class=\"btn content_main-dk\">Đăng ký</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
";
}
