<?php @include 'DatabaseConnect.php';
session_start();

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    } else{
        $name = "";
    }
?>
<!DOCTYPE html>
<html>

<head><title>Games Available</title>
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
    padding: 1px;
    height: 100%;
    width: 100%;
    margin-top: 0px;
} .Content{
    margin-top: 25px;
}
 p{
    font: Arial;
    font-size: 18px;
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
   } .RelatedGameDetails:hover, .SideGames:hover{
    opacity: 0.8;
    transition:0.3s;
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
    border-width: 1px;
    border-color:rgb(122, 175, 211);
    border-width: 1px;
    border-style: solid;
    
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
} .SideGameName{ font-size: 30x;
    display: block;
    color: aliceblue;
    border-radius: 5px;
    border-width: 1px;
    border-style:none;
    margin-left: 2px;
    margin-right: 3px;
    margin-top: 3px;
    margin-bottom: 3px;
    padding-left: 6px;
    
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
    height: 3650px;
    display: inline-block;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    border-style: solid;
    margin-left: 5px;
    margin-right: 5px;
}

.ClickedGameDetails{
    width:1040px;
    display:block;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    border-style: solid;
    margin-left: 3px;
    margin-right: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    height: 865px;

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
}

.DetailImage{
    width:300px;
    height: 450px;
    display: inline-block;
    margin-top:30px;
    margin-bottom: 10px;
    margin-left: 10px;
    border-radius: 10px;
    border-style: solid
    ;
} .DetailText{
    color:#69b8ec;
    display: inline-block;
    margin-top: 10px;
    margin-bottom:10px;
    
    border-radius: 10px;
    border-width: 1px;
    font-size:25px;
    margin-left: 30px;
    margin-top: 30px;
    vertical-align: top;


    

} .DetailRandom1{
    margin-top: 5px;
    margin-bottom:20px;
    margin-left:10px;
    font-size:22px;

} .DetailRandom2{
    margin-top: 10px;
    margin-bottom:10px;
    margin-left:10px;
    font-size:22px;

}
 .DetailPrice{color: rgb(144, 255, 129);
    font-size: 25px;
    font-weight: 500;
    margin-top: 50px;
    margin-bottom:5px;
    margin-left:3px;
} .DetailDiscounts{
    color: rgb(255, 123, 123);
    font-size:25px;
    margin-left: 3px;
} .BuyButton{
    margin-left:10px;
    margin-left: 10px;
    font-size: 25px;
    border-style: solid;
    border-color: #69b8ec;
    border-width:1px;
    border-radius: 8px;
    background-color:#000000;
    color: aliceblue;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-left: 12px;
    padding-right: 12px;
    text-align: center;
} .BuyButton:hover{
    border-color: #69b8ec;
    border-width:2px;
    transition: 0.1s;
    border-radius: 4px;
    padding-right: 15px;
    padding-left:15px;

} .ConsoleLink:hover{
    font-size: 25px;
    font-weight: 700; 
    transition: 0.1s;
}
.NormalText{
    color:#69b8ec;
    margin-left: 10px;
}

.ListContent{ 
    width: 1050px;
    height: 210px;
    margin-bottom: 10px;
    
}

.DetailName{font-size: 28px;
    margin-top: 20px;
    margin-bottom:8px;
    margin-left:10px;
    display: inline-block;
    width: 500px;
    background-color: black;
    text-align: left;
    color: #69b8ec;

} .DetailName:Hover{
transition: 0.4s;
color: aliceblue;
}
.ListDetails{
    display:inline-block;
    width:700px;
    height: 200px;
    border-style: solid;
   
    margin-top:5px;
    margin-bottom: 5px;
    vertical-align: top;
    border-width: 1px;
    border-top-right-radius:0px;
    border-bottom-right-radius:0px;
    margin-right: 1px;
} .Thumbnail{
    display: inline-block;
    width:160px;
    height: 200px;
    border-style: solid;
    border-radius: 20px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-width: 1px;
    margin-top:5px;
    margin-bottom: 5px;
    margin-left:5px;
    
} .TextSameLine{ 
    margin-top: 2px;
    margin-left: 5px;
    margin-bottom: 20px;
    margin-right: 2px;
    display: block;
    font-size: 20px;
} .ParaSorting{
    margin-top: 20px;
    margin-left:5px ;
    display: inline-block;
    text-align: left;
    width: 320px;

} .CartButton{
    display: inline-block;
    color: #69b8ec;
    background-color: black;
    border-style: solid;
    border-color: #69b8ec;
    border-width: 1px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    width: 75px;
    height: 202px;
    margin-top: 5px;
    margin-left: 1px;
    margin-bottom: 5px;
    vertical-align: top;


} .CartButton:hover{
    color: aliceblue;
    margin-left:4px;
}

.bbbox{

    display: inline-block;
    width: 875px;
    height: 202px;
    margin-right: 1px;
    margin-top: 5px;

} input{
    background-color: black;
    font-size:20px;
    font-color:#69b8ec;
    color:#69b8ec;
    font-weight: 500;
}


</style>

</head>



<body><div class="MainThing">


<?php
include_once('header.php');
?>

<div class="Content">
<div class = Horizontal>

   
<div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 19;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVGameDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 19;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 19;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 19;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 19;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 19;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart3'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart3" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart3'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
        
<?php
 if (isset($_POST['Delete3'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete3" class = "CartButton">
         </form>
    </div>

    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 20;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 20;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName4 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 20;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 20;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price4 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 20;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 20;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount4 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart4'])){
            
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName4','$Price4','$Discount4','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart4" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart4'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete4'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName4' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete4" class = "CartButton">
         </form>

        
    </div>





    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 25;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 25;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName5 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 25;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 25;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price5 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 25;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart5'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice,Username) VALUES('$ProdName5','$Price5','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart5" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart5'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete5'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName5' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete5" class = "CartButton">
         </form>

        
    </div>





    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 28;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 28;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName6 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 28;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 28;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price6 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 28;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 28;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount6 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart6'])){
             
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName6','$Price6','$Discount6','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart6" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart6'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete6'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName6' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete6" class = "CartButton">
         </form>
        
    </div>





    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 29;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 29;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName7 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 29;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 29;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price7 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 29;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 29;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount7 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart7'])){
               
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName7','$Price7','$Discount7','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart7" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart7'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>" >
         </form>
         <?php
 if (isset($_POST['Delete7'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName7' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete7" class = "CartButton">
         </form>
        
    </div>





    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 30;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 30;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName8 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 30;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 30;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price8 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 30;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 30;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount8 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart8'])){
               
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName8','$Price8','$Discount8','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart8" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart8'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete8'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName8' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete8" class = "CartButton">
         </form>
        
    </div>





    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 31;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 31;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName9 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 31;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 31;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price9 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 31;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 31;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount9 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart9'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName9','$Price9','$Discount9','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart9" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart9'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete9'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName9' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete9" class = "CartButton">
         </form>

        
    </div>





    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 32;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 32;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName10 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 32;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 32;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price10 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 32;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 32;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount10 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart10'])){
               
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName10','$Price10','$Discount10','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart10" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart10'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete10'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName10' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete10" class = "CartButton">
         </form>

        
    </div>




    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 33;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 33;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName11 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 33;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 33;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price11 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 33;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 33;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount11 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart11'])){
               
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName11','$Price11','$Discount11','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart11" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart11'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete11'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName11' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete11" class = "CartButton">
         </form>

        
    </div>



    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 34;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 34;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName12 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 34;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 34;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price12 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 34;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 34;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount12 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart12'])){
               
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName12','$Price12','$Discount12','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart12" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart12'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete12'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName12' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete12" class = "CartButton">
         </form>

        
    </div>



    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 35;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 35;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName13 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 35;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 35;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price13 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 35;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 35;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount13 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart13'])){
           
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName13','$Price13','$Discount13','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart13" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart13'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete13'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName13' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete13" class = "CartButton">
         </form>

        
    </div>



    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 36;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 36;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName14 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 36;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 36;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price14 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 36;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 36;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount14 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart14'])){
               
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName14','$Price14','$Discount14','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart14" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart14'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete14'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName14' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete14" class = "CartButton">
         </form>

        
    </div>



    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 37;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 37;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName15 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 37;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 37;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price15 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 37;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 37;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount15 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart15'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName15','$Price15', '$Discount15','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart15" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart15'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete15'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName15' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete15" class = "CartButton">
         </form>

        
    </div>



    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 38;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 38;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName16 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 38;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 38;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price16 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 38;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 38;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount16 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart16'])){
                 
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName16','$Price16', '$Discount16','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart16" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart16'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete16'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName16' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete16" class = "CartButton">
         </form>

        
    </div>


    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 39;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 39;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName17 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 39;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 39;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price17 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 39;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 39;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount17 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart17'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName17','$Price17', '$Discount17','$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart17" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart17'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete17'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName17' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete17" class = "CartButton">
         </form>

        
    </div>



    <div class="ListContent" >   
    
    <div class="bbbox">
    <img class="Thumbnail" src="<?php
    $select = "SELECT ImageLink FROM product WHERE ProductID = 40;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
    <form action="GVGameDetailsPage.php" method="post">

<input class="DetailName" type="submit" name="submitGame" value ="<?php
$select = "SELECT ProdName FROM product WHERE ProductID = 40;";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);
echo $row['ProdName'];
$ProdName18 = $row['ProdName']; 
} 
?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <?php
    $select = "SELECT Genre1, Genre2, Genre3 FROM game WHERE ProductID = 40;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Genre1'].", ".$row['Genre2'].", ".$row['Genre3'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 40;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price18 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Console: <?php
    $select = "SELECT PlayedIn FROM game WHERE ProductID = 40;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['PlayedIn'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 40;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount18 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            
            <?php
            if(isset($_POST['Cart18'])){
                 
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount, Username) VALUES('$ProdName18','$Price18', '$Discount18', '$name');";
                $res = mysqli_query($conn, $insert);
}
    ?>
         <form method= "post" class = "CartButton" style = "border-style: none;">   
        <input class="CartButton" type="submit" value="Add To Cart" name="Cart18" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px;<?php
         if (isset($_POST['Cart18'])) {
             echo 'border-color: rgb(144, 255, 129); color: rgb(144, 255, 129)';}?>">
         </form>
         <?php
 if (isset($_POST['Delete18'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName18' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete18" class = "CartButton">
         </form>

        
    </div>
    
    


        
   


    <p align = "center">Page: <a href = 'GVListofGamesPage1.php'>1</a><span style = "text-decoration: underline;"> 2 </span><a href = 'GVListofGamesPage3.php' >3</a> <a href = 'GVListofGamesPage4.php'>4</a></p>
    </div>






<?php
include_once('Sidegames.php');
?>



</div>


</div></body>





</html>
