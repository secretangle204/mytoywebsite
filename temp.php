<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Karma", sans-serif
}

.w3-bar-block .w3-bar-item {
    padding: 20px
}
</style>

<body>



    <!-- Top menu -->
    <div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-center w3-padding-16">Products</div>
        </div>
    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <?php
            include('productCRUD.php');
            $obj = new productCRUD();
            $list = $obj->readProduct();
            foreach ($list as $item) {
            ?>
        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
            <div class="w3-quarter">
                <img src="img\<?= $item["image"] ?>" style="width:100%">
                <h3><?php echo $item["name"] ?></h3>
                <p><?php echo $item["price"] ?></p>
                <p><?php echo $item["details"] ?></p>
            </div>
            <div class="w3-quarter">
                <img src="img\<?= $item["image"] ?>" style="width:100%">
                <h3><?php echo $item["name"] ?></h3>
                <p><?php echo $item["price"] ?></p>
                <p><?php echo $item["details"] ?></p>
            </div>
            <div class="w3-quarter">
                <img src="img\<?= $item["image"] ?>" style="width:100%">
                <h3><?php echo $item["name"] ?></h3>
                <p><?php echo $item["price"] ?></p>
                <p><?php echo $item["details"] ?></p>
            </div>
            <div class="w3-quarter">
                <img src="img\<?= $item["image"] ?>" style="width:100%">
                <h3><?php echo $item["name"] ?></h3>
                <p><?php echo $item["price"] ?></p>
                <p><?php echo $item["details"] ?></p>
            </div>
        </div>

    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <img src="img\<?= $item["image"] ?>" style="width:100%">
            <h3><?php echo $item["name"] ?></h3>
            <p><?php echo $item["price"] ?></p>
            <p><?php echo $item["details"] ?></p>
        </div>
        <div class="w3-quarter">
            <img src="img\<?= $item["image"] ?>" style="width:100%">
            <h3><?php echo $item["name"] ?></h3>
            <p><?php echo $item["price"] ?></p>
            <p><?php echo $item["details"] ?></p>
        </div>
        <div class="w3-quarter">
            <img src="img\<?= $item["image"] ?>" style="width:100%">
            <h3><?php echo $item["name"] ?></h3>
            <p><?php echo $item["price"] ?></p>
            <p><?php echo $item["details"] ?></p>
        </div>
        <div class="w3-quarter">
            <img src="img\<?= $item["image"] ?>" style="width:100%">
            <h3><?php echo $item["name"] ?></h3>
            <p><?php echo $item["price"] ?></p>
            <p><?php echo $item["details"] ?></p>
        </div>
    </div>

    <?php } ?>
    <hr>



</body>

</html>