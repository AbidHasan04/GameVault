<style>
.HomeLog{
    border-width: 2px; 
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-top-width: 0px;
    border-color: rgb(147, 208, 243);
    border-style: solid;
    padding-left:10px;
    margin-left:90px; 
}
.HomeLog:hover{
    transition: 0.2s;
color: aliceblue;
}   

</style>


<?php
include_once('header.php');


@include 'DatabaseConnect.php';
?>

<div class="Menu">
    <a class="Title" href="GVFrontPage.php">GAMEVAULT</a>
    <div class="MenuBar">
        <div style="width: 830px; display:inline-block;">
<a class="Home" href="GVFrontPage.php">Home</a>
<a class="Home" href="GVListofGamesPage1.php">Games</a>
<a class="Home" href="GVConsoleListPage.php">Consoles</a>
<a class="Home" href="GVAccListPage.php">Accessories</a>
<a class="Home" href="GVLogInPage.php">Log In</a>
<a class="SignUp" style="font-weight:600; color:aliceblue" href="GVSignUpPage.php">Sign Up</a>
<?php

    if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
        $sel = "SELECT UserType FROM users WHERE Name = '$name' AND UserType = 'Admin';";
        $res = mysqli_query($conn, $sel);
        if (mysqli_num_rows($res)>0) {
         
            echo '<a class="Home" style = "margin-left: 30px;" href="GVAdminGameList.php">Warehouse</a>';
        }
    }
?> </div>
<div style = "display: inline-block">
<?php if (isset($_SESSION['name'])) {
    
        echo '<form style= "display: inline-block; background-color:black" method = "post" action = "GVOrderDetails.php"><input name = "order" type = "submit" class = "Home" style = "background-color:black;font-size: 20px; margin-left:2px; font-weight:700; margin-right:2px; color: aliceblue;" value = "Look Into Cart"></form>
         <a class = "HomeLog" href = "LogOutPage.php"  style="font-weight:600; margin-right:2px;">Logout</a>
<a href = "GVUserDashboardPage.php" class="Home" style=" margin-left:2px; font-weight:600; color:aliceblue" >' . $_SESSION['name'] . ' </a>
';
}?>
</div>
</div>
</div>