<?php
include_once('Sidegames.php');
?>

<div class = "SideBar">
<p class="SideBarName" align = "center">Latest Releases</p>
<div class="SideGames">
<img class="SideGameImg" src="
<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 24);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>
">
<form action="GVGameDetailsPage.php" method="post"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 24;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div> 

<div class="SideGames">
<img class="SideGameImg" src="
<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 25);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
<form method="post"action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 25;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>

<div class="SideGames">
<img class="SideGameImg" src="
<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 23);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>
">
<form method="post" action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 23;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>

<div class="SideGames">
<img class="SideGameImg" src="<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 22);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
<form method="post" action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 22;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>
<div class="SideGames">
<img class="SideGameImg" src="<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 21);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
<form method="post" action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 21;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>
<div class="SideGames">
<img class="SideGameImg" src="<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 20);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
<form method="post" action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 20;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>
<div class="SideGames">
<img class="SideGameImg" src="<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 19);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
<form method="post" action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 19;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>
<div class="SideGames">
<img class="SideGameImg" src="<?php
$sel = "SELECT ImageLink FROM product WHERE ProdName = (SELECT GameName FROM game WHERE GameID = 18);";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['ImageLink'];}
?>">
<form method="post" action="GVGameDetailsPage.php"><input type="submit" name="gamename" value="<?php
$sel = "SELECT GameName FROM game WHERE GameID = 18;";
$res = mysqli_query($conn, $sel);
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    echo $row['GameName'];}
?>" style="background-color:black; font-size: 14px;" class="SideGameName"></form>
</div>

</div>