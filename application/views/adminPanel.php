<h1>Your admin panel</h1>
<?php if (isset($errors) and is_array($errors) and count($errors)){
    foreach($errors as $name=>$text){
        echo $name . ": " . $text . "<br/>";
    }
} ?>
<form method="post" action="<?=base_url()?>admin" class="addProductForm" enctype="multipart/form-data">
	<div class="addProduct">
		<div class="productImage">
            <label>Product's image</label>
			<input type="file" name="product_img" accept="image/jpeg" required />
		</div>
		<div class="productName">
            <label>Product's name</label>
			<input type="text" name="product_name"/>
		</div>
		<div class="productDescription">
            <label>Product's description</label>
            <textarea name="product_description"></textarea>
		</div>
		<div class="productQuantity">
            <label>Product's quantity</label>
			<input type="number" name="product_quantity" value="1"/>
		</div>
		<div class="productType">
            <label>Product's type</label>
			<select name="product_type">
				{producttypes}
					<option value="{producttype_id}">{producttype_name}</option>
				{/producttypes}
			</select>
		</div>
        <div class="formButton">
            <input type="submit" value="Insert"/>
        </div>
	</div>
</form>