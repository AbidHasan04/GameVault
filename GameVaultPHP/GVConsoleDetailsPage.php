<?php @include 'conn/DatabaseConnect.php';
 session_start();
 if (isset($_POST['submitGame'])) {
    $prodname = $_POST['submitGame'];
    $_SESSION['prod'] = $prodname;
}
 if (isset($_POST['nam'])) {
    $prodname = $_POST['nam'];
    $_SESSION['prod'] = $prodname;
}
if(isset($_SESSION['prod'])) {
    $prodname = $_SESSION['prod'];
}


if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    } else{
        $name = "";
    }
 ?>
<!DOCTYPE html>
<html>

<head><title>Game Details</title>

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
    height: 2941px;
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
    height: 965px;

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
    width:320px;
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

} .DetailName{font-size: 40px;
    margin-top: 5px;
    margin-bottom:30px;
    margin-left:10px;
    

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
    font-size: 32px;
    font-weight: 500;
    margin-top: 50px;
    margin-bottom:5px;
    margin-left:3px;
} .DetailDiscounts{
    color: rgb(255, 123, 123);
    font-size:30px;
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


.RelatedGames{ 
    display: block;
    border-style: solid;
    border-width: 1px;
    border-radius: 20px;
    margin-left:5px;
    margin-right:5px;
    width: 1030px;
    height:358px;

} .RelatedGameDetails{
    display:inline-block;
    margin: 7px;
    margin-left: 5px;
    margin-right: 5px;
    border-style: solid;
    border-radius: 20px;
    border-width: 1px;
} .RelatedGameTitle{
    font-size: 30px;
    margin-bottom:5px;
    margin-top:12px;
    margin-left: 5px;
} 
.RelatedImg{
    border-radius:20px;
    width:150px;
    height: 210px;
    display: block;
}.RelatedName{
    font-size: 15px;
    margin: 2px;

} .RelatedPrice{
    color: rgb(109, 214, 95);
    font-size:15px;
    margin-left: 5px;
}


.Faves{
    width: 1040px;
    height: 1400px;
    display: block;
    border-style: solid;
    border: none;
    padding-top: 10px;
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
margin-left:10px;
} .FaveGameName:hover{
    transition: 0.3s; 
    text-decoration:underline;
} .FaveGamePrice{
    color: rgb(109, 214, 95);
    font-size: 25px;
    margin-left: 10px;
    margin-top:5px;
}


</style>

</head>



<body><div class="MainThing">


<?php
include_once('header.php');
?>

<div class="Content">
<div class = Horizontal>

<div class="ClickedGameDetails">    
    <img class="DetailImage" src="<?php $sql = "SELECT ImageLink FROM product WHERE ProdName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ImageLink'];
        }
        ?>" >
    <div class="DetailText">
    <p class="DetailName"><?php $sql = "SELECT ProdName FROM product WHERE ProdName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['ProdName'];
        }
        ?></p>
    <p class="DetailRandom1">Developer: <?php $sql = "SELECT Developer FROM console WHERE ConsoleName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Developer'];
        }
        ?></p>
    <p class="DetailRandom1">Memory: <?php $sql = "SELECT Memory FROM console WHERE ConsoleName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Memory'];
        }
        ?></p>
    <p class="DetailRandom2">Colors: <span class="ConsoleLink" style="color: aliceblue"><?php $sql = "SELECT Colors FROM console WHERE ConsoleName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Colors'];
        }
        ?></span></p>
    <p class="DetailPrice"><span class="NormalText">Price: </span>TK. <?php $sql = "SELECT Price FROM product WHERE ProdName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Price'];
        }
        ?></p>
    <p class="DetailDiscounts"><span class="NormalText">Discounts:</span> TK. <?php $sql = "SELECT Discount FROM product WHERE ProdName = '$prodname';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
                echo $row['Discount'];
        }
        ?></p>
        <?php
    if(isset($_SESSION['name'])){
            echo '<form method="post"><input type="submit" name="CartAdd" value="Add To Cart" class="BuyButton"></form>';
    } else echo '<form action = "GVLogInPage.php" method="post"><input type="submit" name="CartAdd" value="Add To Cart" class="BuyButton"></form>';
    ?>
<?php

if(isset($_POST['CartAdd'])){
    $name = $_SESSION['name'];
    $sql = "SELECT Price FROM product WHERE ProdName = '$prodname';";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $price = $row['Price'];
    $sql = "INSERT INTO orderlist(OrderName, OrderPrice, Username) VALUES ('$prodname','$price','$name');";
    $res = mysqli_query($conn, $sql);

    }
?>
    </div>



    <?php
include_once('relatedgames.php');
?>
    
</div>





<?php
include_once('FaveMonthlyList.php');
?>
</div>



<?php
include_once('Sidegames.php');
?>



</div>


</div></body>





</html>
