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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 88;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 88;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 88;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 88;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 88;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 88;";
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
        <input  type="submit" value="Add" name="Cart3" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 89;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 89;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 89;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 89;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 89;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 89;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart4'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart4" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete4'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 90;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 90;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 90;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 90;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 90;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 90;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart5'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart5" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete5'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 91;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 91;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 91;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 91;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 91;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 91;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart6'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart6" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete6'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 92;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 92;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 92;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 92;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 92;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 92;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart7'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart7" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete7'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 93;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 93;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 93;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 93;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 93;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 93;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart8'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart8" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete8'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 94;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 94;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 94;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 94;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 94;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 94;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart9'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart9" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete9'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 95;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 95;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 95;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 95;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 95;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 95;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart10'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart10" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete10'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 96;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 96;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 96;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 96;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 96;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 96;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart11'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart11" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete11'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 97;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 97;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 97;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 97;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 97;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 97;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart12'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart12" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete12'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 98;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 98;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 98;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 98;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 98;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 98;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart13'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart13" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete13'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
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
    $select = "SELECT ImageLink FROM product WHERE ProductID = 99;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ImageLink'];
    } 
    ?>">
    <div class="ListDetails">
<form action="GVConsoleDetailsPage.php" method="post">

            <input class="DetailName" type="submit" name="submitGame" value ="<?php
    $select = "SELECT ProdName FROM product WHERE ProductID = 99;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['ProdName'];
        $ProdName3 = $row['ProdName']; 
    } 
    ?>" >

</form>
            <div class="ParaSorting">
            <p class="TextSameLine"> <?php
    $select = "SELECT Colors FROM console WHERE ProductID = 99;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Colors'];
    } 
    ?></p>
            <p class="TextSameLine">Price: Tk <span class="DetailPrice"> <?php
    $select = "SELECT Price FROM product WHERE ProductID = 99;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Price'];
        $Price3 = $row['Price'];
    } 
    ?> </span></p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">Memory: <?php
    $select = "SELECT Memory FROM console WHERE ProductID = 99;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Memory'];
    } 
    ?> </P>
            <p class="TextSameLine" >Discount: Tk <span class="DetailDiscounts"><?php
    $select = "SELECT Discount FROM product WHERE ProductID = 99;";
    $res = mysqli_query($conn, $select);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        echo $row['Discount'];
        $Discount3 = $row['Discount'];
    } 
    ?> </span></p>
            </div> </div> </div>
            <?php
            if(isset($_POST['Cart14'])){
                
    $insert = "INSERT INTO orderlist(OrderName, OrderPrice, OrderDiscount,Username) VALUES('$ProdName3','$Price3', '$Discount3','$name');";
                $res = mysqli_query($conn, $insert);
            }?>
         <form method= "post" class = "CartButton" style="border-style:none;">       
        <input  type="submit" value="Add" name="Cart14" class = "CartButton" style = "border-bottom-right-radius:0px; border-top-right-radius: 0px">
         </form>
        
<?php
 if (isset($_POST['Delete14'])) {
    $del = "DELETE FROM orderlist WHERE OrderName = '$ProdName3' AND Username = '$name';";
    $res = mysqli_query($conn, $del);
}
?>

         <form method= "post" class = "CartButton" style="border-style:none">             
        <input type="submit" value="Delete" name="Delete14" class = "CartButton">
         </form>
    </div>



    

</div>



<?php
include_once('Sidegames.php');
?>



</div>


</div></body>





</html>
