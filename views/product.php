<?php
include_once('../controllers/productController.php')
?>

<html>

<head>
    <title><?php echo $product_name; ?></title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once('./includes/templateHeader.php'); ?>

        <div id="pageContent">
            <?php include_once('./includes/productPageContent.php'); ?>
        </div>

        <?php include_once('./includes/templateFooter.php'); ?>
    </div>
</body>

</html>