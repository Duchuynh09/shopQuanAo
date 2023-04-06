<div id="mySidenav" class="sidenav">
	<p>Giỏ hàng</p>
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div>
		<table id="cart-view">
			 <!-- <tbody>
				 <tr class="item_2">
					 <td class="img">
						 <a href="#" title=""><img style="width :100%" src="https://levents.vn/products/levents-earth-tee-purple" alt=""></a></td>
					<td>
					 <a class="pro-title-view" href="#" title="">LEVENTS® EARTH TEE/ PURPLE</a>
						 <span class="variant">PURPLE / SIZE 1</span>
						 <span class="pro-quantity-view">1</span>
						 <span class="pro-price-view">370,000₫</span>
						 <span class="remove_link remove-cart">
							 </span>
						</td>
					 </tr>
				</tbody> -->
			
			<tbody><tr><td>Hiện chưa có sản phẩm</td></tr></tbody>
			
		</table>
		<?php

		// 	while ($row = mysqli_fetch_array($data['content'])) {
		// echo "<table id=\"cart-view\">
		// 		<tbody>
		// 				<tr class=\"item_2\">
		// 				<td class=\"img\">
		// 					<a href=\"#\" title=\"\"><img style=\"width :100%\" src=\"http://localhost/localbrand/{$row['src_img']}\" alt=\"\"></a></td>
		// 				<td>
		// 					<a class=\"pro-title-view\" href=\"#\" title=\"\">{$row['ten']}</a>
		// 					<span class=\"variant\">size</span>	
		// 					<span class=\"pro-quantity-view\">so luong</span>
		// 					<span class=\"pro-price-view\">{$row['gia']}</span>
		// 					<span class=\"remove_link remove-cart\">					
		// 					</span>				
		// 				</td>
		// 			</tr>   
		// 		</tbody>
		// 			<!-- <tbody><tr><td>Hiện chưa có sản phẩm</td></tr></tbody> -->
		// 		</table>";
		// }
		?>


		<hr>
		<table class="table-total">
			<tbody>
				<tr>
					<td class="text-left">TỔNG TIỀN:</td>
					<td class="text-right" id="total-view-cart">0₫</td>
				</tr>
				<tr>
					<td><button class="btn btn-danger">xem san pham</button></td>
					<td><button class="btn btn-danger">thanh toan</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>