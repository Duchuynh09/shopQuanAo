<div id="mainBody">
        <div id="main" style="position:relative;top:0;">
                <div class="row">
                        <?php require_once "./partial/nav.php"; ?>
                        <div class="col-10 ">
                                <?php
                                require_once "./partial/header.php";
                                ?>
                                <div class="row">
                                        <div class="select d-flex justify-content-between">
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                        <h1 class="title">Ten sp</h1>
                                                        <div class="alert-no-filter"></div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <?php

                                        // print_r(mysqli_fetch_assoc($data['content']));
                                        while ($row = mysqli_fetch_assoc($data["content"])) {

                                                echo "<div class=\"col-lg-4 col-md-6\">
                                                        <img style=\"width:100%\" src=\"http://localhost/localbrand/{$row['img_source']}\"
                                                                alt=\"aothun\">
                                                        <a href=\"\" class=\"text-muted\">{$row['ten']}</a>
                                                        <p>{$row['gia']}</p>
                                                        </div>";
                                        }
                                        ?>

                                </div>
                        </div>
                </div>
        </div>
</div>
</div>