<?php
declare(strict_types=1);
require '../model/Post.php';
require '../model/PostLoader.php';




//$_title, $_date, $_content, $_authorName
// es lo que necesito coger
if (isset($_POST['submit'])) {
    $Mypost = new Post($_POST['title'], $_POST['date'], $_POST['content'], $_POST['authorName']);
}

