<?php session_start();
 @include 'DatabaseConnect.php';
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
    height: 3332px;
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

} .DetailName{font-size: 20px;
    margin-top: 10px;
    margin-bottom:5px;
    margin-left:50px;
    

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
    font-size: 20px;
    font-weight: 500;
    margin-top: 50px;
    margin-bottom:5px;
    margin-left:3px;
} .DetailDiscounts{
    color: rgb(255, 123, 123);
    font-size:20px;
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

.ListDetails{
    width:800px;
    height: 110px;
    border-style: solid;
    border-radius: 20px;
    margin-top:5px;
    margin-bottom: 5px;
    vertical-align: top;
    border-width: 1px;
    display: inline-block;
} .ListContent{
    width:800px;
    border-radius: 20px;
    margin-top:5px;
    margin-bottom: 5px;
    vertical-align: right;
    border-width: 1px;
    display: inline-block;
} .TextSameLine{ 
    margin-top: 5px;
    margin-left: 5px;
    margin-bottom: 10px;
    margin-right: 5px;
    display: block;
    font-size: 15px;
} .ParaSorting{
    margin-top: 5px;
    display: inline-block;
    text-align: left;
    width: 200px;
    vertical-align: top;

}

.Users{
    display: inline-block;
    width: 450px;
    height: 2000px;
    border-style: solid;
    border-color: color: rgb(144, 255, 129);
    border-width: 1px;
    border-radius: 20px;
    vertical-align: top;
} .Individ{
    height: 300px;
    width: 100%;
    border-style: solid;
    border-color: color: rgb(144, 255, 129);
    border-width: 1px;
    border-radius: 20px;
}
.inp{
    color: aliceblue;
    border-color: #69b8ec;
    background-color: black;
    
    width: 200px;
    display: block;
    border-right-width:0px;
    border-top-width:0px;
    border-bottom-width:0px;
    margin-bottom: 10px;
    margin-top: 2px;
      
} .inp:hover{
    transition: 0.1s; border-color: aliceblue; border-color: aliceblue; font-size: 14px;
}
.QueryBox{
margin-top:5px;
margin-left:5px;
margin-bottom:5px;
border-style:solid;
border-width: 1px;
border-top-width: 0px;
border-radius:20px;
} input{
    width:1000px;
    background-color: black;
    border-style: solid;
    border-width: 1px;
    color: #69b8ec;
    display: inline-block;
    margin-bottom: 10px;
    margin-left: 5px;
} input:hover{
    border-color: aliceblue;
    transition:0.2s;
}



</style>

</head>



<body><div class="MainThing">


<?php
include_once('header.php');
?>

<div class="Content">

<div class= "QueryBox">

<?php

if(isset($_POST['query'])){

    $sql = $_POST['querybox'];
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)){
        $row = mysqli_fetch_assoc($res);
    } else{
        echo 'done';
    }
}

?>

    <p style = "font: Arial; font-size:30px;margin-top:10px;margin-bottom:5px;margin-left:5px">QueryBox</p>
<form method="post"><input type="text" name = "querybox"><input style="width:80px" type="submit" name = "query"></form>

    </div>

<div class = "Users" style = "border-top-width:0px; margin-top:5px">
<p style = "font: Arial; font-size:30px;margin-top:10px;margin-bottom:5px;margin-left:5px">Users</p><?php

$sel = "SELECT Name,Phone, Address, Email, UserType, FaveGame FROM users;";
        $res = mysqli_query($conn, $sel);
    
        if(mysqli_num_rows($res)>0){while($row = mysqli_fetch_assoc($res)){

        echo '<div style = "margin-top:5px; margin-bottom:5px; border-style:solid; border-width:1px;border-radius:20px;width: 100%;border-top-width:0px">
            <p style = "margin-left:10px">Name: <span style = "color: aliceblue;">' . $row['Name'] . '</span></p>
            <p style = "margin-left:10px"><span style = "color: aliceblue; font-weight: 600">' . $row['UserType'] . '</span></p>
            
            <p style = "margin-left:10px">Email: <span style = "color: aliceblue;">' . $row['Email'] . '</span></p>
            <p style = "margin-left:10px">Phone: <span style = "color: aliceblue;">' . $row['Phone'] . '</span></p>
            <p style = "margin-left:10px">Address: <span style = "color: aliceblue;">' . $row['Address'] . '</span></p>
            <p style = "margin-left:10px">Favourite Game: <span style = "color: aliceblue;">' . $row['FaveGame'] . '</span></p>
            </div>';
        }}

        ?>
</div>

<div class="ListContent"> <p style = "font: Arial; font-size:30px; margin-top:5px;margin-bottom:5px;">Inventory</p>
        <?php

if(isset($_POST['order'])){

}if(isset($_POST['delete'])){
    $product = $row['ProdName'];
    $sel = "DELETE FROM product WHERE ProdName = '$product';";
    $res = mysqli_query($conn, $sel);
}



        $sel = "SELECT ProductID,ProdName, InStock, Price, Discount, Ordered FROM product;";
        $res = mysqli_query($conn, $sel);
    
        if(mysqli_num_rows($res)>0){while($row = mysqli_fetch_assoc($res)){
        echo' 
        <div class="ListDetails" style = "border-top-width:0px">
        
            <p class="DetailName">'.$row['ProdName'].'</p>
            <div class="ParaSorting" style = "margin-left:5px; width:50px;><p style = "font-size:30px">'.$row['ProductID'].'</p></div>
            <div class="ParaSorting">
            <p class="TextSameLine" >Ordered: '.$row['InStock'].'</p>
            <p class="TextSameLine" style = "color:rgb(144, 255, 129);">Price: '.$row['Price'].'</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">In Stock: '.$row['Ordered'].'</P>
            <p class="TextSameLine" style = "color:rgb(144, 255, 129);">Discount: '.$row['Discount'].'</p>
        </div> <div class="ParaSorting">
        <form style = "display:inline-block" method = "post"><input class = "inp" name = "order" value = "Leave Order" type = "submit"</form>
        <form style = "display:inline-block" method = "post"><input class = "inp" name = "delete" value = "Delete" type = "submit"</form>
        </div>
        </div>
        ';}}
?>
       
        
     
    </div>

</div>
</body>


</html>
