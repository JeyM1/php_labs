<?php
require_once("./scripts/config.php");
require_once("./scripts/Database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $cfg['site_name']?></title>
    <?= "<meta name=\"description\" content=".$cfg['site_title'].">"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/selector.css">
    <link href='./fonts/SegoeUI/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='./fonts/Adamina/stylesheet.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="./scripts/selector.js"></script>

</head>
<body>
    <?php
        require_once('./parts/header.php');
        $page = "./pages/".($_GET['page'] ?? "landing").".php";
        require(file_exists($page) ? $page : "./pages/404.php");
        require_once('./parts/footer.php');
    ?>
</body>
</html>