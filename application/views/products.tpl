<h1>Our products</h1>
<div class="productList">
    {foreach from=$productlist item=product}
        <div class="product">
            <img src="{$product->img_url}" alt="{$product->product_name}" title="{$product->product_name}" />
            <label>{$product->product_name}</label>
            <label>{$product->product_price} USD</label>
        </div>
    {/foreach}
</div>