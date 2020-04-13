<?php 
require_once("./POST.php");
require_once("./Database.php");

$post = POST::ini();
$name = strip_tags($post->comment_name);
$comment = strip_tags($post->comment);

if(!$comment || !$name){
    die("Comment or Name cannot include tags!");
}

$stmt = "INSERT INTO comments VALUES('$name', NOW(), '$comment');";

if ($Database->conn->query($stmt) !== TRUE) {
    die("SQL Error: $stmt <br>".$Database->conn->error);
}

header("Location: ../?page=about-us#comments");

?>