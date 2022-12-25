<?php @include 'DatabaseConnect.php';
session_start();
$name = $_SESSION['name'];

if(isset($_POST['CancelReceipt'])){
    $del = "DELETE FROM orderlist WHERE Username = '$name';";
    $res = mysqli_query($conn, $del);
    $deleto  =  "<br>
    <p style = 'font-size: 22px'>Your List has been deleted. You can go ahead and make a new one now.</p>";
} else {
    $deleto = "";}

if (isset($_POST['EmptyCancelReceipt'])) {
    $nothing  =  "<br>
    <p style = 'font-size: 22px'>You didn't add anything to the cart :/.</p>";
}else {
    $nothing = "";}

    if (isset($_POST['EmptyReceipt'])) {
        $nothing  =  "<br>
        <p style = 'font-size: 22px'>You didn't add anything to the cart :/.</p>";
    }else {
        $nothing = "";}

?>
<!DOCTYPE html>
<html>

<head><title>Your Cart</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<style>
body{ 
    background-color: black;
    font: Arial;
    font-size: 18px;
    border-color: rgb(147, 208, 243);
    color: #69b8ec;
    margin-top: 1px;
    margin-left: 1px;
    
    
} .MainThing{ 
    border-radius: 10px;
    margin-top: 0px;
    padding: 1px;
    height: 100%;
    width: 100%;
} .Content{
    margin-top: 25px;
}
 p{
    font: Arial;
    font-size: 20px;
    margin-bottom: 20px;
    
   } a{
    text-decoration: none;
    color: rgb(114, 173, 212);
    
   }
   
   a:hover{
    transition: 0.3s; 
             color: aliceblue;
             
   } img:hover{
transition: 0.3s;
opacity: 0.7;
   }

   .material-symbols-outlined{
    font-size: 60px;
    color: aliceblue;
    
   }

   .Menu{
    color: rgb(128, 183, 219);
    text-decoration: none;
    height: 115px;
    width: 100%;
    display: block;
    

}  .MenuBar{
    display: block;
    height:30px;
    border-radius: 10px;
    border-color:rgb(147, 208, 243);
    border-width: 1px;
    border-style: solid;
    padding-left: 10px;
    padding-right: 10px;
    padding-top:7px;
    padding-bottom:7px;
    margin-left: 5px;

} .Home{
    display: inline-block;
    color: rgb(119, 180, 221);
    margin-right: 25px;
    margin-left: 5px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    padding-bottom: 4px;
} .Title{
    margin-top: 25px;
    margin-bottom: 10px;
    margin-left: 5px;
    padding-left: 10px;
    padding-top: 20px;
    display: block;
    font-size: 50px;
    font-weight: bold;
    border-radius: 20px;
    border-color:rgb(122, 175, 211);
    border-width: 1px;
    border-style: solid;
    border-width: 1px;
} .SignUp:hover{
    font-size: 19px;
    transition:0.3s;
}

.SideBar{
    display: inline-block;
    width: 270px;
    height:fit-content;
    vertical-align: top;
    border-radius: 10px;
    border-width: 1px;
    border-style: solid;
    margin-top: 0px;
    
    
} .SideBarName{
     color:rgb(147, 208, 243);
     font-size: 25px;
     width: 258px;
    border-radius: 5px;
    border-width: 1px;
    border-style: solid;
    display: block;
    padding-right: 3px;
    padding-left: 3px;
    padding-top: 20px;
    padding-bottom:5px;
    margin-top: 2px;
    margin-bottom: 4px;
    margin-left: 2px;
    
} .SideGameImg{
    display: block;
    width: 260px;
    height: 300px;
    border-radius: 10px;
    border-width: 1px;
    border-style: solid;
    padding-top: 10px;
}  .SideGameName{ font-size: 30x;
    display: block;
    color: aliceblue;
    border-radius: 5px;
    border-width: 1px;
    border-style:none;
    margin-right: 3px;
    padding-left: 6px;
    margin-top: 3px;
    margin-bottom: 3px;
    
} .SideGames{
    display: block;
    margin-left: 3px;
    margin-top: 3px;
    height: 355px;
    
} .SideGameName:hover{
    transition: 0.3s; 
    text-decoration:underline;
    font-weight: 700;
}


.Horizontal{
    width:1050px;
    height: 2941px;
    display: inline-block;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    border-style: solid;
    margin-left: 5px;
    margin-right: 5px;
}

.MakeAccount{
    width:1040px;
    display:block;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    
    margin-left: 3px;
    margin-right: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    height: 1000px;

} .ColorText{
    margin-left: 3px;
    color:rgb(226, 241, 255);
    font-weight:700;
    font-size: 20px;
} .Text{
    Margin-left: 20px;
} .TextLink{
color: aliceblue;
} .TextLink:hover{
    font-size: 18px;
    font-weight: 600;
}.OrderName{
margin-left: 20px;
width: 300px;
height: auto;
border-width: 1px;
border-left-width: 0px;
border-right-width: 0px;
border-top-width: 0px;
vertical-align: top;
display: inline-block;
border-style: solid;
border-color: rgb(147, 208, 243);
text-align: center;

} .ReceiptButton, .CanReceiptButton{
    display: inline-block;
    font-size: 25px; 
    background-color:black; 
    color:rgb(147, 208, 243);
    border-style:solid; 
    border-radius: 10px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px; 
    border-width:1px;
    margin-right: 1px;
    border-color:rgb(226, 241, 255);
    margin-top: 40px;
} .CanReceiptButton{
    border-radius: 10px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    margin-left:1px;
} h2{
    border-width: 1px;
border-left-width: 0px;
border-right-width: 0px;
border-top-width: 0px;
vertical-align: top;
border-style: solid;
border-color: rgb(147, 208, 243);
}



.Faves{
    width: 1040px;
    height: 1400px;
    display: block;
    border-style: solid;
    border: none;
    padding-top: 10px
} .GameDetails{
    width: 315px;
    height:500px;
    display: inline-block;
    border-style: solid;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    border-style: solid;
    margin-left: 11px;
    margin-right: 3px;
    margin-top: 3px;
    margin-top: 3px;
} .FaveCover{
    display: block;
    width:314px;
    height: 400px;
    border-radius: 20px;
    margin-bottom: 5px;

} .FaveTitle{
    color:rgb(118, 183, 221);
     font-size: 30px;
     font-weight: 600;
     width: 340px;
    border-radius: 5px;
    border-width: 1px;

    display: block;
    padding-right: 650px;
    padding-left: 5px;
    margin-top: 7px;
    margin-bottom: 5px;
    margin-right: 3px;
    margin-left: 14px;
} .FaveGameName{
font-size: 20px;
font-weight: 600;
color: aliceblue;
} .FaveGameName:hover{
    transition: 0.3s; 
    text-decoration:underline;
}


</style>

</head>



<body><div class="MainThing">

<?php
include_once('header.php');
?>
 

<div class="Content">
<div class = Horizontal>

<div class="MakeAccount" align = "center">
<br>
<h1 align = "left" style = "margin-left:20px; ">Here's what's in your cart so far <span style = "color: aliceblue"><?php echo $_SESSION['name']; ?> </span></h1>

<div class="OrderName">
<h2>Product</h2>
<?php
$upd = "UPDATE orderlist SET Status = 'Not Processed' WHERE Username = '$name'";
$res = mysqli_query($conn, $upd);

$sel = "SELECT OrderName, OrderPrice FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed';";
$result = mysqli_query($conn, $sel);


{while($row = mysqli_fetch_assoc($result)){
        echo '<p>'.$row['OrderName'].'</p>';
}}
?> 

</div>
<div class="OrderName">
    <h2>Price</h2>
    <?php
$sel = "SELECT OrderName, OrderPrice FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed'";
$result = mysqli_query($conn, $sel);


{while($row = mysqli_fetch_assoc($result)){
        echo '<p>Tk. '.$row['OrderPrice'].'</p>';
}}
?>
</div>
<div class="OrderName">
    <h2>Discount</h2>
    <?php
$sel = "SELECT OrderDiscount FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed'";
$result = mysqli_query($conn, $sel);


{while($row = mysqli_fetch_assoc($result)){
        echo '<p>Tk. '.$row['OrderDiscount'].'</p>';
}}
?>
</div>


<div class = "OrderName" style="vertical-align: top; display: inline-block;">
<p style="font-weight: 600">Total: </p>
</div>
<div class = "OrderName" style="vertical-align: top;  display: inline-block">
<?php
$sel = "SELECT SUM(OrderPrice) FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed';";
$result = mysqli_query($conn, $sel);
    $row = mysqli_fetch_assoc($result);
    echo '<p style = "color: aliceblue; font-weight: 600">Tk. '.$row['SUM(OrderPrice)'].'</p>';
    ?>
</div>
<div class = "OrderName" style="vertical-align: top;  display: inline-block">
<?php
$sel = "SELECT SUM(OrderDiscount) FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed';";
$result = mysqli_query($conn, $sel);
    $row = mysqli_fetch_assoc($result);
    echo '<p style = "color: aliceblue; font-weight: 600">Tk. '.$row['SUM(OrderDiscount)'].'</p>';
    ?>
</div>


<div class = "OrderName" align = "left" style="vertical-align: top; display: inline-block;border-width:0px;">
<p style="font-weight: 600; font-size: 25px">Grand Total: </p>
</div>

<div class = "OrderName" style="vertical-align: top; display: inline-block;border-width:0px;">
<?php
$sel = "SELECT (SUM(OrderPrice)-SUM(OrderDiscount)) FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed';";
$result = mysqli_query($conn, $sel);
    $row = mysqli_fetch_assoc($result);
    echo '<p style = "color: aliceblue; font-weight: 600; font-size: 25px">Tk. '.$row['(SUM(OrderPrice)-SUM(OrderDiscount))'].'</p>';
    ?>
</div>

<br>

<?php
$sel = "SELECT OrderName FROM orderlist WHERE Username = '$name' AND Status = 'Not Processed';";
$result = mysqli_query($conn, $sel);

if(mysqli_num_rows($result)>0){echo '<form action = "GVOrderReceipt.php" method="post" style="display:inline-block"><input class="ReceiptButton" name = "Receipt" type="submit" value="Make The Order"></form>
    <form method="post" style="display:inline-block" ><input class="CanReceiptButton" name = "CancelReceipt" type="submit" value="Delete The List"></form>';
    }
    else{
    '<form method="post" style="display:inline-block"><input class="ReceiptButton" name = "EmptyReceipt" type="submit" value="Make The Order"></form>
        <form method="post" style="display:inline-block" ><input class="CanReceiptButton" name = "EmptyCancelReceipt" type="submit" value="Delete The List"></form>';
    }
?>

<?php
echo '<br>'.$deleto;
echo '<br>'.$nothing;

?>

</div>



</div>

 
<?php
include_once('Sidegames.php');
?>

</div>




</div>

</div>
</body>





</html>
