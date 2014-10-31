<h1>Your admin panel</h1>
<form method="post" action="<?=base_url()?>product/create" class="addProductForm">
	<div class="addProduct">
		<div class="productImage">
			<input type="file" name="product_file" />
		</div>
		<div class="productName">
			<input type="text" name="product_name"/>
		</div>
		<div class="productDescription">
			<input type="text" name="product_description"/>
		</div>
		<div class="productQuantity">
			<input type="text" name="product_quantity"/>
		</div>
		<div class="productType">
			<select name="product_type">
				{producttypes}
					<option value="{producttype_id}">{producttype_name}</option>
				{/producttypes}
			</select>
		</div>
	</div>
</form>