<!DOCTYPE html>
<html>
    <head>
        <link href="<?=base_url()?>styles/styles.css" rel="stylesheet" type="text/css">
        <title>Yoshiki's shop</title>
    </head>
    <body>
        <div class="mainBody">
            <div class="banner">
                <img src="<?=base_url()?>styles/site_banner.jpg"/>
            </div>
            <div class="menuBar">

                <a href="<?=base_url()?>welcome">Home</a>


                <a href="<?=base_url()?>products">Products</a>


                <a href="<?=base_url()?>contact">Contact</a>

            </div>
            <div class="content">
                <?php echo $body; ?>
            </div>
        </div>
    </body>
</html>
