<?php
include_once('../scripts/product-details.php');
?>

<html>

<head>
    <title><?php echo $product_name; ?></title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once('./includes/header.php'); ?>

        <div id="pageContent">
            <?php include_once('./includes/product-content.php'); ?>
        </div>

        <?php include_once('./includes/footer.php'); ?>
    </div>
</body>

</html>