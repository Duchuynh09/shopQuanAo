<?php
session_start();
// echo TITLE;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chua ro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/LoCalBrand/mvc/public/css/layout.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    </style>
</head>

<body>

    <?php
    if (!isset($data['user']) || !isset($data['conn']) || $data['Page'] !== "login_page") {
        require_once "./partial/sideBar.php";
    }
    ?>
    <?php
    //    echo $data["Page"];
    if ($data['Page'] == "home_page") {

        echo "<div id=\"mainBody\">";
        echo "<div id=\"main\" style = \"position:relative;top:0;\">
                <div class=\"row\">";
        require_once "./partial/header.php";
        require_once "./partial/nav.php";
        require_once "./mvc/views/Pages/" . $data['Page'] . ".php";
        echo "</div>
        </div></div>";
        die();
    }
    if ($data['Page'] == "login_page" || $data['Page'] == "logout" || $data['Page'] == "register_page") {
        // require_once "./partial/header.php";
        require_once "./mvc/views/Pages/author/" . $data['Page'] . ".php";
    } else 
    if ($data['Page'] == "sanPham") {
        if (isset($data["conn"])) {
            require_once "./manager/" . $data['Page'] . ".php";
        } else {
            require_once "./mvc/views/Pages/" . $data['Page'] . ".php";
        }
    } else require_once "./mvc/views/Pages/" . $data['Page'] . ".php";

    require_once "./partial/footer.php";
    ?>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.left = "0";
            document.getElementById("mainBody").style.left = "400px";
            // document.getElementById("mySidenav").style.padding = "60px 70px 100px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            // document.getElementById("mySidenav").style.width = "0";

            document.getElementById("mainBody").style.left = "0px";
            document.getElementById("mySidenav").style.left = "-400px";

            // document.getElementById("mySidenav").style.padding = "0";
            // document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
</body>

</html>