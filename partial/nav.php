<?php 
if(isset($_SESSION["user"]) && isset($_SESSION["conn"])){
echo "
<div class=\"col-2\">
  <nav class=\"navbar col-2\">
    <div class=\"container-fluid\">
    <div class=\"content_main\">
        <ul class=\"nav flex-column content_main-ul\">
            <li class=\"nav-item h3\">
                <a href=\"http://localhost/localbrand/\">LEVENTS</a>
            </li>
            <li class=\"nav-item\">
                <div class=\"\">
                    <a href=\"#demo1\" class=\"btn\" data-bs-toggle=\"collapse\" class=\"nav-link\" >SHOP</a>
                    <div id=\"demo1\" class=\"collapse\">
                        <ul>
                            <li><a href=\"http://localhost/localbrand/Contacts/admin\">ALL</a></li>
                            <li><a href=\"http://localhost/localbrand/Contacts/admin\">T-SHIRT</a></li>
                            <li><a href=\"http://localhost/localbrand/Contacts/admin\">HOODIE</a></li>
                        </ul>
                    </div>
                  </div>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">ACCOUNT</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">ABOUT US</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">STORE</a>
            </li>
          </ul>
    </div>
    </div>
  </nav>
</div>";
    }
    else
echo "
<div class=\"col-2\">
  <nav class=\"navbar col-2\">
    <div class=\"container-fluid\">
    <div class=\"content_main\">
        <ul class=\"nav flex-column content_main-ul\">
            <li class=\"nav-item h3\">
                <a href=\"http://localhost/localbrand/\">LEVENTS</a>
            </li>
            <li class=\"nav-item\">
                <div class=\"\">
                    <a href=\"#demo1\" class=\"btn\" data-bs-toggle=\"collapse\" class=\"nav-link\" >SHOP</a>
                    <div id=\"demo1\" class=\"collapse\">
                        <ul>
                            <li><a href=\"http://localhost/localbrand/danhMuc/sanpham\">ALL</a></li>
                            <li><a href=\"http://localhost/localbrand/danhMuc/aoThun\">T-SHIRT</a></li>
                            <li><a href=\"http://localhost/localbrand/danhMuc/hooDie\">HOODIE</a></li>
                        </ul>
                    </div>
                  </div>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">ACCOUNT</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">ABOUT US</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link\">STORE</a>
            </li>
          </ul>
    </div>
    </div>
  </nav>
</div>";
