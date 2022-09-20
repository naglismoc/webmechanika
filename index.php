<?php
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     header('Location: ./pages/about.php');
    //     die;
    // }

   if(isset($_GET['name'])){
    echo "wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";
   }
   
 
?>

<?php  include $_SERVER['DOCUMENT_ROOT']."/20220901VCSWEBDIE/php/webmechanika/pages/header.php"; ?>

<form action="" method="get">
    name   <input type="text" name="vardas" >
    surname   <input type="text" name="surname" >
    <input type="hidden" name="telefonas" value="huawei">
    <button type="submit">Touch me!</button>
</form>

<a href="./index.php?name=jonas">kas cia</a>

<?php  include $url."pages/footer.php"; ?>

