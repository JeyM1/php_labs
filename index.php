<?php 
    class POST{
        private $inst;
        private function __construct() {}
        public static function ini() {
            if(!isset($inst)) $inst = new POST();
            return $inst;
        }
    };
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OKnov</title>
    <meta name="description" content="Best windows and constructing solutions for everyone!">
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

        $page = strip_tags("./pages/".($_GET['page'] ?? "landing")).".php";

        require(file_exists($page) ? $page : "./pages/404.php");
        require_once('./parts/footer.php');
    ?>
</body>
</html>