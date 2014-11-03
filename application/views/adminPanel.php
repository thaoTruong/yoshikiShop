<div class="adminPanel">

    <h1>Your admin panel</h1>
    <?php if (isset($errors) and is_array($errors) and count($errors)){
        foreach($errors as $name=>$text){
            echo $name . ": " . $text . "<br/>";
        }
    } ?>


    <form method="post" action="<?=base_url()?>products/add" class="addProductForm" enctype="multipart/form-data">
        <h2>Add a product</h2>
        <div class="addProduct">
            <div class="productImage">
                <label>Product's image</label>
                <input type="file" name="product_img" accept="image/jpeg" required  />
            </div>
            <div class="productName">
                <label>Product's name</label>
                <input type="text" name="product_name" placeholder="Enter product's name"/>
            </div>
            <div class="productDescription">
                <label>Product's description</label>
                <textarea name="product_description" placeholder="Enter product's description"></textarea>
            </div>
            <div class="productQuantity">
                <label>Product's quantity</label>
                <input type="number" name="product_quantity" value="1" placeholder="How much of this do you have?"/>
            </div>
            <div class="productPrice">
                <label>Product's price</label>
                <input type="number" name="product_price" placeholder="Price in USD"/>
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


    <form method="post" action="<?=base_url()?>products/update" class="updateProductForm" enctype="multipart/form-data">
        <h2>Update a product</h2>
        <div class="updateProduct">
            <div class="productSearchBox">
                <label>Search for product</label>
                <input list="productNames" onchange="showProductForm()" />
                <datalist id="productNames">
                    {products}
                        <option value="{product_name}" id="{product_id}">{product_id}</option>
                    {/products}
                </datalist>
            </div>
        </div>
    </form>
</div>

<script>
    function showProductForm(){

    }
</script>