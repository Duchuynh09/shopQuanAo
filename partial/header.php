<?php
if(isset($_SESSION["user"])){
        if(!isset($_data["conn"])){
echo "
<div class=\"row\">
        <div class=\"d-flex justify-content-end fs-4\">
                <div class=\"icon_bar\"><div id=\"demo\" class=\"collapse\">
                                <ul>
                                        <li><a href=\"http://localhost/localbrand/Contacts/logout\">Logout</a></li>
                                </ul>
                        </div>
                        <a href=\"#demo\" style=\"font-size:30px;cursor:pointer\"  data-bs-toggle=\"collapse\"  class=\"p-1\"><i class=\"fas fa-user-circle\"></i>{$_SESSION["user"]["ten"]}</a>
                        
                        <a href=\"\" class=\"p-1\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"p-1\" style=\"font-size:30px;cursor:pointer\" onclick=\"openNav()\"><i class=\"fas fa-shopping-cart\"></i></a>
                </div>
        </div>
</div>";
        }else
echo "
<div class=\"row\">
        <div class=\"fs-4\">
                <div class=\"icon_bar\">
                        <div href=\"#demo\" style=\"font-size:30px;cursor:pointer\" data-bs-toggle=\"collapse\" class=\"p-1\"><i class=\"fas fa-user-circle\">admin</i></div>
                        <div id=\"demo\" class=\"collapse\">
                                <ul>
                                        <li><a href=\"http://localhost/localbrand/Contacts/sanpham\">ALL</a></li>
                                        <li><a href=\"http://localhost/localbrand/danhMuc/aoThun\">T-SHIRT</a></li>
                                        <li><a href=\"http://localhost/localbrand/danhMuc/hooDie\">HOODIE</a></li>
                                        <li><a href=\"http://localhost/localbrand/mvc/views/Pages/author/logout.php\">Logout</a></li>
                                </ul>
                        </div>
                </div>
        </div>
</div>
";
}else echo "
<div class=\"row\">
        <div class=\"d-flex justify-content-end fs-4\">
                        <a href=\"http://localhost/localbrand/Contacts/login\" style=\"font-size:30px;cursor:pointer\" class=\"p-1\"><i class=\"fas fa-user-circle\"></i></a>
                        
                        <a href=\"\" class=\"p-1\"><i class=\"fas fa-search\"></i></a>
                        <a class=\"p-1\" style=\"font-size:30px;cursor:pointer\" onclick=\"openNav()\"><i class=\"fas fa-shopping-cart\"></i></a>
                </div>
</div>";