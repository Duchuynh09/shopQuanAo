<?php
$conn = $data["conn"];
// print_r($_POST);
if (isset($_POST['submit'])  && isset($_POST["submit"])) {
    // $user="SELECT email from users WHERE id != 0";
    // $result = mysqli_query($conn,$user);
    
    $ten = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pswd"];
    $error=false;
    // $query = "INSERT INTO users(ten,pass,email)  VALUES (' $ten','$pass','$email')";
    // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $error=true;
    //   }
    // if($error)
    if (mysqli_query($conn, $query)) {
        echo "<div class=\"alert alert-success\">New record created successfully</div>";
    } else {
        echo "<div class=\"alert alert-danger\">Error: " . $insert . "<br>" . mysqli_error($data["conn"]) . "</div>";
    }
}

?>
<div class="userbox pt-5 m-5">
    <form  class="was-validated" action="" method="post">
        <div class="mb-3">

            <input type="text" class="form-control" id="pwd" placeholder="Nhập tên của bạn" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3">

            <input type="text" class="form-control" id="uname" placeholder="Nhập email .." name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">

            <input type="password" class="form-control" id="pwd" placeholder="Nhập password .." name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <input type="submit" name="submit" value="Đăng kí" class="btn btn-primary"></input>
    </form>
</div>
<!-- 

<div class="row product-detail-wrapper">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row product-detail-main pr_style_01">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="product-gallery">
                    <div class="product-gallery__thumbs-container hidden-sm hidden-xs">
                        <div class="product-gallery__thumbs thumb-fix">

                            <div class="product-gallery__thumb active">
                                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/1000378196/product/z3355739013255_da22f30c9018cbfb6cff4f814f7098e6_2f2de7cd8ffe4a4f9edd40bf94a1acad_master.jpg" data-zoom-image="//product.hstatic.net/1000378196/product/z3355739013255_da22f30c9018cbfb6cff4f814f7098e6_2f2de7cd8ffe4a4f9edd40bf94a1acad_master.jpg">
                                    <img alt=" LEVENTS® EARTH TEE/ WHITE " src="//product.hstatic.net/1000378196/product/z3355739013255_da22f30c9018cbfb6cff4f814f7098e6_2f2de7cd8ffe4a4f9edd40bf94a1acad_compact.jpg" data-image="//product.hstatic.net/1000378196/product/z3355739013255_da22f30c9018cbfb6cff4f814f7098e6_2f2de7cd8ffe4a4f9edd40bf94a1acad_master.jpg">
                                </a>
                            </div>

                            <div class="product-gallery__thumb">
                                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/1000378196/product/z3355739001532_3c988c87452110d31530aba176dc2626_10a02ea7c6804ba1a590c45dbcd2e74f_master.jpg" data-zoom-image="//product.hstatic.net/1000378196/product/z3355739001532_3c988c87452110d31530aba176dc2626_10a02ea7c6804ba1a590c45dbcd2e74f_master.jpg">
                                    <img alt=" LEVENTS® EARTH TEE/ WHITE " src="//product.hstatic.net/1000378196/product/z3355739001532_3c988c87452110d31530aba176dc2626_10a02ea7c6804ba1a590c45dbcd2e74f_compact.jpg" data-image="//product.hstatic.net/1000378196/product/z3355739001532_3c988c87452110d31530aba176dc2626_10a02ea7c6804ba1a590c45dbcd2e74f_master.jpg">
                                </a>
                            </div>

                            <div class="product-gallery__thumb">
                                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/1000378196/product/z3355739006913_ae9ff021140a82786c9fb4789b59b0bc_6903afa75ba64257896b9a8dd91433e5_master.jpg" data-zoom-image="//product.hstatic.net/1000378196/product/z3355739006913_ae9ff021140a82786c9fb4789b59b0bc_6903afa75ba64257896b9a8dd91433e5_master.jpg">
                                    <img alt=" LEVENTS® EARTH TEE/ WHITE " src="//product.hstatic.net/1000378196/product/z3355739006913_ae9ff021140a82786c9fb4789b59b0bc_6903afa75ba64257896b9a8dd91433e5_compact.jpg" data-image="//product.hstatic.net/1000378196/product/z3355739006913_ae9ff021140a82786c9fb4789b59b0bc_6903afa75ba64257896b9a8dd91433e5_master.jpg">
                                </a>
                            </div>

                            <div class="product-gallery__thumb">
                                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/1000378196/product/z3355739024960_fc43714b155682f6119b80203f626748_be0ed08e763f42e9a192309227b1a3c7_master.jpg" data-zoom-image="//product.hstatic.net/1000378196/product/z3355739024960_fc43714b155682f6119b80203f626748_be0ed08e763f42e9a192309227b1a3c7_master.jpg">
                                    <img alt=" LEVENTS® EARTH TEE/ WHITE " src="//product.hstatic.net/1000378196/product/z3355739024960_fc43714b155682f6119b80203f626748_be0ed08e763f42e9a192309227b1a3c7_compact.jpg" data-image="//product.hstatic.net/1000378196/product/z3355739024960_fc43714b155682f6119b80203f626748_be0ed08e763f42e9a192309227b1a3c7_master.jpg">
                                </a>
                            </div>

                            <div class="product-gallery__thumb">
                                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/1000378196/product/z3355739030027_3cb0eb95849dda7871f1805e81ea4ded_ddb41908892d4dfa8b9704e4aca199d4_master.jpg" data-zoom-image="//product.hstatic.net/1000378196/product/z3355739030027_3cb0eb95849dda7871f1805e81ea4ded_ddb41908892d4dfa8b9704e4aca199d4_master.jpg">
                                    <img alt=" LEVENTS® EARTH TEE/ WHITE " src="//product.hstatic.net/1000378196/product/z3355739030027_3cb0eb95849dda7871f1805e81ea4ded_ddb41908892d4dfa8b9704e4aca199d4_compact.jpg" data-image="//product.hstatic.net/1000378196/product/z3355739030027_3cb0eb95849dda7871f1805e81ea4ded_ddb41908892d4dfa8b9704e4aca199d4_master.jpg">
                                </a>
                            </div>

                            <div class="product-gallery__thumb">
                                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="//product.hstatic.net/1000378196/product/z3355739019540_37970b0b3df195a13f25357e05e558a4_efb8d3226268407f806e838b00345153_master.jpg" data-zoom-image="//product.hstatic.net/1000378196/product/z3355739019540_37970b0b3df195a13f25357e05e558a4_efb8d3226268407f806e838b00345153_master.jpg">
                                    <img alt=" LEVENTS® EARTH TEE/ WHITE " src="//product.hstatic.net/1000378196/product/z3355739019540_37970b0b3df195a13f25357e05e558a4_efb8d3226268407f806e838b00345153_compact.jpg" data-image="//product.hstatic.net/1000378196/product/z3355739019540_37970b0b3df195a13f25357e05e558a4_efb8d3226268407f806e838b00345153_master.jpg">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="product-image-detail box__product-gallery scroll">
                        <ul id="sliderproduct" class="site-box-content slide_product">

                            <li class="product-gallery-item gallery-item current">
                                <img class="product-image-feature" src="//product.hstatic.net/1000378196/product/z3355739013255_da22f30c9018cbfb6cff4f814f7098e6_2f2de7cd8ffe4a4f9edd40bf94a1acad_master.jpg" alt=" LEVENTS® EARTH TEE/ WHITE ">
                            </li>

                            <li class="product-gallery-item gallery-item">
                                <img class="product-image-feature" src="//product.hstatic.net/1000378196/product/z3355739001532_3c988c87452110d31530aba176dc2626_10a02ea7c6804ba1a590c45dbcd2e74f_master.jpg" alt=" LEVENTS® EARTH TEE/ WHITE ">
                            </li>

                            <li class="product-gallery-item gallery-item">
                                <img class="product-image-feature" src="//product.hstatic.net/1000378196/product/z3355739006913_ae9ff021140a82786c9fb4789b59b0bc_6903afa75ba64257896b9a8dd91433e5_master.jpg" alt=" LEVENTS® EARTH TEE/ WHITE ">
                            </li>

                            <li class="product-gallery-item gallery-item">
                                <img class="product-image-feature" src="//product.hstatic.net/1000378196/product/z3355739024960_fc43714b155682f6119b80203f626748_be0ed08e763f42e9a192309227b1a3c7_master.jpg" alt=" LEVENTS® EARTH TEE/ WHITE ">
                            </li>

                            <li class="product-gallery-item gallery-item">
                                <img class="product-image-feature" src="//product.hstatic.net/1000378196/product/z3355739030027_3cb0eb95849dda7871f1805e81ea4ded_ddb41908892d4dfa8b9704e4aca199d4_master.jpg" alt=" LEVENTS® EARTH TEE/ WHITE ">
                            </li>

                            <li class="product-gallery-item gallery-item">
                                <img class="product-image-feature" src="//product.hstatic.net/1000378196/product/z3355739019540_37970b0b3df195a13f25357e05e558a4_efb8d3226268407f806e838b00345153_master.jpg" alt=" LEVENTS® EARTH TEE/ WHITE ">
                            </li>
                        </ul>
                        <div class="product-image__button">
                            <div id="product-zoom-in" class="product-zoom icon-pr-fix" aria-label="Zoom in" title="Zoom in">
                                <span class="zoom-in" aria-hidden="true">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width: 30px; height: 30px;" xml:space="preserve">
                                        <polyline points="6,14 9,11 14,16 16,14 11,9 14,6 6,6 "></polyline>
                                        <polyline points="22,6 25,9 20,14 22,16 27,11 30,14 30,6 "></polyline>
                                        <polyline points="30,22 27,25 22,20 20,22 25,27 22,30 30,30 "></polyline>
                                        <polyline points="14,30 11,27 16,22 14,20 9,25 6,22 6,30 "></polyline>
                                    </svg>
                                </span>
                            </div>
                            <div class="gallery-index icon-pr-fix"><span class="current">1</span> / <span class="total">6</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
                <div class="product-title">
                    <h1>LEVENTS® EARTH TEE/ WHITE</h1>
                </div>
                <div class="product-price" id="price-preview"><span class="pro-price">370,000₫</span></div>


                <form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
                    <div class="select clearfix">
                        <div class="selector-wrapper"><label for="product-select-option-0">Màu sắc</label><span class="custom-dropdown custom-dropdown--white"><select class="single-option-selector custom-dropdown__select custom-dropdown__select--white" data-option="option1" id="product-select-option-0">
                                    <option value="WHITE">WHITE</option>
                                </select></span></div>
                        <div class="selector-wrapper"><label for="product-select-option-1">Kích thước</label><span class="custom-dropdown custom-dropdown--white"><select class="single-option-selector custom-dropdown__select custom-dropdown__select--white" data-option="option2" id="product-select-option-1">
                                    <option value="Size 1">Size 1</option>
                                    <option value="Size 2">Size 2</option>
                                    <option value="Size 3">Size 3</option>
                                    <option value="Size 4">Size 4</option>
                                </select></span></div><select id="product-select" name="id" style="display: none;">

                            <option value="1084374096">WHITE / Size 1 - 370,000₫</option>

                            <option value="1084374097">WHITE / Size 2 - 370,000₫</option>

                            <option value="1084374098">WHITE / Size 3 - 370,000₫</option>

                            <option value="1084374099">WHITE / Size 4 - 370,000₫</option>

                        </select>
                    </div>
                    <div class="select-swatch clearfix hidden">
                        <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                            <div class="header hide">Màu sắc:</div>

                            <div class="header"><span>WHITE</span></div>

                            <div class="select-swap">

                                <div data-value="WHITE" class="n-sd swatch-element color white ">
                                    <input class="variant-0" id="swatch-0-white" type="radio" name="option1" value="WHITE" data-vhandle="white" checked="">


                                    <label class="white sd" for="swatch-0-white">
                                        <span>WHITE</span>
                                    </label>

                                </div>
                   </div>
                        </div>

                        <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
                            <div class="header hide">Kích thước:</div>

                            <div class="select-swap">
                                <div data-value="Size 1" class="n-sd swatch-element size-1">
                                    <input class="variant-1" id="swatch-1-size-1" type="radio" name="option2" value="Size 1" data-vhandle="size-1" checked="">

                                    <label for="swatch-1-size-1" class="sd">
                                        <span>Size 1</span>
                                    </label>

                                </div>
                                <div data-value="Size 2" class="n-sd swatch-element size-2">
                                    <input class="variant-1" id="swatch-1-size-2" type="radio" name="option2" value="Size 2" data-vhandle="size-2">

                                    <label for="swatch-1-size-2">
                                        <span>Size 2</span>
                                    </label>

                                </div>
                                <div data-value="Size 3" class="n-sd swatch-element size-3">
                                    <input class="variant-1" id="swatch-1-size-3" type="radio" name="option2" value="Size 3" data-vhandle="size-3">

                                    <label for="swatch-1-size-3">
                                        <span>Size 3</span>
                                    </label>

                                </div>
                        <div data-value="Size 4" class="n-sd swatch-element size-4">
                                    <input class="variant-1" id="swatch-1-size-4" type="radio" name="option2" value="Size 4" data-vhandle="size-4">

                                    <label for="swatch-1-size-4">
                                        <span>Size 4</span>
                                    </label>

                                </div>


                            </div>
                        </div>
                </div>
                    <div class="product-description">
                        <div class="title-bl">
                            <h2>Mô tả</h2>
                        </div>
                        <div class="description-content">
                            <div class="description-productdetail">
                                <p>+ LEVENTS® EARTH TEE/ WHITE</p>
                                <p>COLOR : WHITE</p>
                                <p>MATERIAL: 100% COTTON</p>
                                <p>SIZE: 1/2/3/4</p>
                                <p>_________________________</p>
                                <p>Form áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.<br><br>Size 1 : Chiều Cao Từ 1m65 , Cân Nặng trên 55 kg<br>Size 2 : Chiều Cao từ 1m65-&nbsp; 1 m 72, Cân Nặng Dưới 65 kg<br>Size 3 : Chiều Cao từ 1m70-&nbsp; 1m77 , Câng Nặng Dưới 80 kg<br>Size 4 :&nbsp;Chiều&nbsp;Cao Trên 1m72, Cân Nặng dưới 95kg</p>&nbsp;<p style="text-align: center"><img src="//file.hstatic.net/1000378196/file/untitled-1-03_db9a9b6197f84ca1bfed74ab6bd5b38e_grande.jpg"></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <p><a href="" class="xemthem">Xem thêm</a></p>
                        <p><a href="" class="thugon">Thu gọn</a></p>
                    </div>
                    <div class="selector-actions">

                        <div class="quantity-area hidden clearfix">
                            <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                            <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                            <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                        </div>

                        <div class="wrap-addcart clearfix">
                            <button type="button" id="add-to-cart" class="add-to-cartProduct button dark btn-addtocart addtocart-modal" name="add">Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product-action-bottom visible-xs">
                        <div class="input-bottom">
                            <input id="quan-input" type="number" value="1" min="1">
                        </div>
                        <button type="button" id="add-to-cartbottom" class="add-to-cartProduct add-cart-bottom button dark addtocart-modal" name="add">Thêm vào giỏ</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="list-productRelated clearfix">
            <div class="heading-title text-center">
                <h2>Sản phẩm liên quan</h2>
            </div>
            <div class="content-product-list row">
                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                    <div class="product-block site-animation" data-anmation="1">
                        <div class="product-img">


                            <a href="/products/levents-spaceship-longsleeve-cream" title="LEVENTS® SPACESHIP SWEATER / CREAM">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/z2596904679410_73e6183a9a600f41fe77b43495827be9_a7d0ee80f42241259712fd4aa4d61659_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/z2596904679410_73e6183a9a600f41fe77b43495827be9_a7d0ee80f42241259712fd4aa4d61659_grande.jpg">
                                    <img class="img-loop" alt=" LEVENTS® SPACESHIP SWEATER / CREAM " src="//product.hstatic.net/1000378196/product/z2596904679410_73e6183a9a600f41fe77b43495827be9_a7d0ee80f42241259712fd4aa4d61659_grande.jpg">
                                </picture>

                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/z2596904682306_9aae9bca908ae414669d93acf4c06b0b_79ff477757e348fcbcae5c10cf43d7d8_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/z2596904682306_9aae9bca908ae414669d93acf4c06b0b_79ff477757e348fcbcae5c10cf43d7d8_grande.jpg">
                                    <img class="img-loop img-hover" alt=" LEVENTS® SPACESHIP SWEATER / CREAM " src="//product.hstatic.net/1000378196/product/z2596904682306_9aae9bca908ae414669d93acf4c06b0b_79ff477757e348fcbcae5c10cf43d7d8_grande.jpg">
                                </picture>
                            </a>
                            <div class="button-add hidden">
                                <button type="submit" title="Buy now" class="action" onclick="buy_now('1072896141')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                            </div>
                            <div class="pro-price-mb">
                                <span class="pro-price">470,000₫</span>

                            </div>
                        </div>
                        <div class="product-detail clearfix">
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="/products/levents-spaceship-longsleeve-cream" title="LEVENTS® SPACESHIP SWEATER / CREAM">
                                        LEVENTS® SPACESHIP SWEATER / CREAM
                                    </a>
                                </h3>
                                <div class="box-pro-prices">
                                    <p class="pro-price ">470,000₫
                                        <span class="pro-price-del"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
           <div class="product-block site-animation" data-anmation="2">
                        <div class="product-img">


                            <a href="/products/levents-earth-tee-purple" title="LEVENTS® EARTH TEE/ PURPLE">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/z3370728736105_b355c87d43431b4afd035723f521e029_0ac53717a2ae4855a9d4411ecc9b7f3b_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/z3370728736105_b355c87d43431b4afd035723f521e029_0ac53717a2ae4855a9d4411ecc9b7f3b_grande.jpg">
                                    <img class="img-loop" alt=" LEVENTS® EARTH TEE/ PURPLE " src="//product.hstatic.net/1000378196/product/z3370728736105_b355c87d43431b4afd035723f521e029_0ac53717a2ae4855a9d4411ecc9b7f3b_grande.jpg">
                                </picture>

                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/z3370728685608_337bffffdec12dfe56a6c10559a4e9db_e46c813addd24935a8902f8995c34d6d_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/z3370728685608_337bffffdec12dfe56a6c10559a4e9db_e46c813addd24935a8902f8995c34d6d_grande.jpg">
                                    <img class="img-loop img-hover" alt=" LEVENTS® EARTH TEE/ PURPLE " src="//product.hstatic.net/1000378196/product/z3370728685608_337bffffdec12dfe56a6c10559a4e9db_e46c813addd24935a8902f8995c34d6d_grande.jpg">
                                </picture>
                            </a>
                            <div class="button-add hidden">
                                <button type="submit" title="Buy now" class="action" onclick="buy_now('1084374102')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                            </div>
                            <div class="pro-price-mb">
                                <span class="pro-price">370,000₫</span>

                            </div>
                        </div>
                        <div class="product-detail clearfix">
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="/products/levents-earth-tee-purple" title="LEVENTS® EARTH TEE/ PURPLE">
                                        LEVENTS® EARTH TEE/ PURPLE
                                    </a>
                                </h3>
                                <div class="box-pro-prices">
                                    <p class="pro-price ">370,000₫
                                        <span class="pro-price-del"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">

                    <div class="product-block site-animation" data-anmation="4">
                        <div class="product-img">


                            <a href="/products/levents-popular-logo-2-0-tee-white" title="LEVENTS® POPULAR LOGO 2.0 TEE/ WHITE">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/b52c61e67d62b33cea7324_59ac98c6c9344c44adb1531a46065ca4_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/b52c61e67d62b33cea7324_59ac98c6c9344c44adb1531a46065ca4_grande.jpg">
                                    <img class="img-loop" alt=" LEVENTS® POPULAR LOGO 2.0 TEE/ WHITE " src="//product.hstatic.net/1000378196/product/b52c61e67d62b33cea7324_59ac98c6c9344c44adb1531a46065ca4_grande.jpg">
                                </picture>

                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/e7b9847398f756a90fe623_4b1e15fa979c4e9ab7a26d3e6030a5db_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/e7b9847398f756a90fe623_4b1e15fa979c4e9ab7a26d3e6030a5db_grande.jpg">
                                    <img class="img-loop img-hover" alt=" LEVENTS® POPULAR LOGO 2.0 TEE/ WHITE " src="//product.hstatic.net/1000378196/product/e7b9847398f756a90fe623_4b1e15fa979c4e9ab7a26d3e6030a5db_grande.jpg">
                                </picture>
                            </a>
                            <div class="button-add hidden">
                                <button type="submit" title="Buy now" class="action" onclick="buy_now('1084374016')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                            </div>
                            <div class="pro-price-mb">
                                <span class="pro-price">370,000₫</span>

                            </div>
                        </div>
                        <div class="product-detail clearfix">
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="/products/levents-popular-logo-2-0-tee-white" title="LEVENTS® POPULAR LOGO 2.0 TEE/ WHITE">
                                        LEVENTS® POPULAR LOGO 2.0 TEE/ WHITE
                                    </a>
                                </h3>
                                <div class="box-pro-prices">
                                    <p class="pro-price ">370,000₫
                                        <span class="pro-price-del"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

           </div>
              <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">

                    <div class="product-block site-animation" data-anmation="5">
                        <div class="product-img">


                            <a href="/products/levents-popular-logo-2-0-tee-red" title="LEVENTS® POPULAR LOGO 2.0 TEE/ RED">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/38dbb288a10c6f52361d14_70b67914a8e04618a9a91d305c8ae92e_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/38dbb288a10c6f52361d14_70b67914a8e04618a9a91d305c8ae92e_grande.jpg">
                                    <img class="img-loop" alt=" LEVENTS® POPULAR LOGO 2.0 TEE/ RED " src="//product.hstatic.net/1000378196/product/38dbb288a10c6f52361d14_70b67914a8e04618a9a91d305c8ae92e_grande.jpg">
                                </picture>

                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/c2b49e3e8dba43e41aab13_6b5d49d4f54543c6804f5352109e94ca_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/c2b49e3e8dba43e41aab13_6b5d49d4f54543c6804f5352109e94ca_grande.jpg">
                                    <img class="img-loop img-hover" alt=" LEVENTS® POPULAR LOGO 2.0 TEE/ RED " src="//product.hstatic.net/1000378196/product/c2b49e3e8dba43e41aab13_6b5d49d4f54543c6804f5352109e94ca_grande.jpg">
                                </picture>
                            </a>
                            <div class="button-add hidden">
                                <button type="submit" title="Buy now" class="action" onclick="buy_now('1084374021')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                            </div>
                            <div class="pro-price-mb">
                                <span class="pro-price">370,000₫</span>

                            </div>
                        </div>
                        <div class="product-detail clearfix">
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="/products/levents-popular-logo-2-0-tee-red" title="LEVENTS® POPULAR LOGO 2.0 TEE/ RED">
                                        LEVENTS® POPULAR LOGO 2.0 TEE/ RED
                                    </a>
                                </h3>
                                <div class="box-pro-prices">
                                    <p class="pro-price ">370,000₫
                                        <span class="pro-price-del"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
          <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                    <div class="product-block site-animation" data-anmation="6">
                        <div class="product-img">


                            <a href="/products/levents-popular-logo-2-0-tee-blue" title="LEVENTS® POPULAR LOGO 2.0 TEE/ BLUE">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/db7ced02ff8631d868976_51e2a353cec44b28bf99de44e9e6af77_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/db7ced02ff8631d868976_51e2a353cec44b28bf99de44e9e6af77_grande.jpg">
                                    <img class="img-loop" alt=" LEVENTS® POPULAR LOGO 2.0 TEE/ BLUE " src="//product.hstatic.net/1000378196/product/db7ced02ff8631d868976_51e2a353cec44b28bf99de44e9e6af77_grande.jpg">
                                </picture>

                                <picture>
                                    <source media="(max-width: 767px)" srcset="//product.hstatic.net/1000378196/product/f64499358bb145ef1ca05_9bb969b374434ddca643944d4f713261_large.jpg">
                                    <source media="(min-width: 768px)" srcset="//product.hstatic.net/1000378196/product/f64499358bb145ef1ca05_9bb969b374434ddca643944d4f713261_grande.jpg">
                                    <img class="img-loop img-hover" alt=" LEVENTS® POPULAR LOGO 2.0 TEE/ BLUE " src="//product.hstatic.net/1000378196/product/f64499358bb145ef1ca05_9bb969b374434ddca643944d4f713261_grande.jpg">
                                </picture>
                            </a>
                            <div class="button-add hidden">
                                <button type="submit" title="Buy now" class="action" onclick="buy_now('1084373992')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                            </div>
                            <div class="pro-price-mb">
                                <span class="pro-price">370,000₫</span>

                            </div>
                        </div>
                        <div class="product-detail clearfix">
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                    <a href="/products/levents-popular-logo-2-0-tee-blue" title="LEVENTS® POPULAR LOGO 2.0 TEE/ BLUE">
                                        LEVENTS® POPULAR LOGO 2.0 TEE/ BLUE
                                    </a>
                                </h3>
                                <div class="box-pro-prices">
                                    <p class="pro-price ">370,000₫
                                        <span class="pro-price-del"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div> -->