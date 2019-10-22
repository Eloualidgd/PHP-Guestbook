<?php
require '../Controller/HomeController.php';
//require '../model/PostLoader.php';
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    $authorName = $_POST['authorName'];

    $additionalArray = array(
        'title' => $title,
        'date' => $date,
        'content' => $content,
        'authorName' => $authorName

    );

//open or read json data
    $data_results = file_get_contents('../data/guestbook.json');
    $tempArray = json_decode($data_results);

//append additional json to json file
    $tempArray[] = $additionalArray;
    $jsonData = json_encode($tempArray);

    file_put_contents('../data/guestbook.json', $jsonData);

}


?>


<!DOCTYPE html>
<html>
<body>

<h1>PHP Guestbook </h1>

<form method="post">
    Title:<br>
<!--    si existe un titulo ensena el titulo con echo-->
    <input type="text" name="title" id="title" value="<?php if (isset($_POST['title'])){
        echo ($_POST['title']);
    } ?>">
    <br>
    Date:<br>
<!--    si existe una fecha ensena la fecha con echo correspondiente-->
    <input type="text" name="date" id="date" value="<?php if (isset($_POST['date'])){
        echo ($_POST['date']);
    } ?>">
    <br>
    Content:<br>
<!--    si pones algun contenido en el content tienes que ensenarlo-->
    <input type="text" name="content" id="content" value="<?php if (isset($_POST['content'])){
        echo ($_POST['content']);
    } ?>">
    <br>
    Author Name:<br>
<!--    ensena el nombre del author si existe con echo-->
    <input type="text" name="authorName" id="authorName" value="<?php if (isset($_POST['authorName'])){
        echo ($_POST['authorName']);
    } ?>">
    <br><br>
    <input type="submit" value="Submit" name="submit">

</form>

<br>


<div>
<!--     pido el titulo con getTitle desde el objeto Mypost que e creado en el HomeController-->
<!--    --><?php
    echo "Title: ".$Mypost->getTitle(). "<br>";
    echo "Date: ".$Mypost->getDate(). "<br>";
    echo "Content: ".$Mypost->getContent(). "<br>";
    echo "Author Name: ".$Mypost->getAuthorName(). "<br>";


    ?>

</div>



</body>
</html>
