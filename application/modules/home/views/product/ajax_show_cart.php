	<table cellspacing='0' cellpadding='0' width="475" style="float:left">
		<tr>
			
			<td>
				Tên sản phẩm
			</td>
			<td width="75" align="center">
				Đơn giá <br />VND
			</td>
			<td width="50" align="center">
				Số lượng
			</td>
			<td width="80" align="center">
				Thành tiền <br />VND
			</td>
			<td width="40" align="center">
				Xóa
			</td>
		</tr>
        <?php 
        foreach($list_cart as $product)
        {
            $get_sale_off = $this->productmodel->get_sale_off_product($product['id_product']);
            if(empty($get_sale_off))
            {
                $price = $product['cost'];
            }
            else
            {
                $price = $product['cost'] - (($get_sale_off[0]['percent']*$product['cost'])/100);
            }
        ?>
        <tr>
			
			<td>
				<?php echo $product['title']?>
			</td>
			<td width="75" align="center">
			<?php echo $price;?>VND
			</td>
			<td width="50" align="center">
				<?php echo $product['quantity']?>
			</td>
			<td width="80" align="center">
				<?php echo number_format($price*$product['quantity'])?>VND
			</td>
			<td width="40" align="center">
				<a onclick="delete_product(<?php echo $product['id_product']?>,'<?php echo base_url();?>');">Xóa</a>
			</td>
		</tr>
       <?php } ?> 
	</table>