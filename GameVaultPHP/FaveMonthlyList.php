<?php
include_once('FaveMonthlyList.php'); ?>


<div class="Faves">
    <p class="FaveTitle">This Month's Faves</p>
    
    <div class="GameDetails" style="margin-left:16px;" >
    <input type ="image" class="FaveCover" src="<?php $sel ="SELECT ImageLink FROM product WHERE ProdName = 'Pokemon Emerald';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
    <form action="GVGameDetailsPage.php" method="post"> <input type="submit" name="nam" class="FaveGameName" style = "margin-left: 10px; background-color:black" value = "Pokemon Emerald"></form>
    <p class="FaveGamePrice" style = "margin-left: 10px;color:rgb(144, 255, 129);">Tk: 
    <?php $sel ="SELECT Price FROM product WHERE ProdName = 'Pokemon Emerald';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['Price'];}
?></p>
    </div>



    <div class="GameDetails">
    <input type ="image"  class="FaveCover" src="<?php $sel ="SELECT ImageLink FROM product WHERE ProdName = 'Prototype';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
        <form action="GVGameDetailsPage.php" method="post"> <input type="submit" name="nam" class="FaveGameName"style = "margin-left: 10px; background-color:black" value = "Prototype"></form>
        <p class="FaveGamePrice" style = "margin-left: 10px;color:rgb(144, 255, 129);">Tk: 
        <?php $sel ="SELECT Price FROM product WHERE ProdName = 'Prototype';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['Price'];}
?></p>
    </div>




    <div class="GameDetails">
      <input type ="image" name="nam" class="FaveCover" src="<?php $sel ="SELECT ImageLink FROM product WHERE ProdName = 'Metroid Fusion';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">

        <form action="GVGameDetailsPage.php" method="post"><input type="submit" name="nam" class="FaveGameName" style = "margin-left: 10px; background-color:black" value = "Metroid Fusion"></form>
        <p class="FaveGamePrice" style = "margin-left: 10px;color:rgb(144, 255, 129);">Tk: 
        <?php $sel ="SELECT Price FROM product WHERE ProdName = 'Metroid Fusion';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['Price'];}
?></p>
    </div>



    <div class="GameDetails">
    <input type ="image" name="nam" class="FaveCover" src="<?php $sel ="SELECT ImageLink FROM product WHERE ProdName = 'God of War';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
        <form action="GVGameDetailsPage.php" method="post"><input name="nam" type="submit" class="FaveGameName" style = "margin-left: 10px; background-color:black" value = "God of War"></form>
        <p class="FaveGamePrice" style = "margin-left: 10px;color:rgb(144, 255, 129);">Tk: 
        <?php $sel ="SELECT Price FROM product WHERE ProdName = 'God of War';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['Price'];}
?></p>
    </div>




     <div class="GameDetails">
     <input type ="image" name="nam" class="FaveCover" src="<?php $sel ="SELECT ImageLink FROM product WHERE ProdName = 'Dragon Ball Z: Shin Budokai';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
            <form action="GVGameDetailsPage.php" method="post"> <input name="nam" type="submit" class="FaveGameName" style = "margin-left: 10px; background-color:black" value = "Dragon Ball Z: Shin Budokai"></form>
            <p class="FaveGamePrice" style = "margin-left: 10px;color:rgb(144, 255, 129);">Tk: 
            <?php $sel ="SELECT Price FROM product WHERE ProdName = 'Dragon Ball Z: Shin Budokai';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['Price'];}
?></p>
    </div>





     <div class="GameDetails">
     <img name="nam" class="FaveCover" src="<?php $sel ="SELECT ImageLink FROM product WHERE ProdName = 'Radiant Silvergun';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
        <form action="GVGameDetailsPage.php" method="post"> <input name="nam" type="submit" class="FaveGameName" style = "margin-left: 10px; background-color:black" value="Radiant Silvergun"></form>
        <p class="FaveGamePrice" style = "margin-left: 10px;color:rgb(144, 255, 129);">Tk: 
        <?php $sel ="SELECT Price FROM product WHERE ProdName = 'Radiant Silvergun';";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['Price'];}
?></p>
    </div>

</div>