<?php 
@include 'DatabaseConnect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pw = $_POST['password'];
    $pwR = $_POST['passrepeat'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addr = $_POST['address'];
    $Favegame = $_POST['FavouriteGame'];
 
$select = "SELECT *FROM users WHERE Name = '$name' AND Email = '$email';";
$res = mysqli_query($conn, $select);

if(mysqli_num_rows($res) >0){
        $error = 'Sorry but you already have an account';
} if($pw != $pwR){
        $error = 'Passwords do not match!';
} if(!$pw || !$name || !$phone || !$email || !$addr){
    $error= 'You left a box empty!';
} if(!$pwR){
    $error = 'Please fill the password fields.';
}

else{
    
    $insert = "INSERT INTO users(Name, Password, Phone, Address, Email, FaveGame)
    VALUES ('$name','$pw', '$phone', '$addr', '$email','$Favegame');";
    $result = mysqli_query($conn, $insert);
    
            $ins = "INSERT INTO customer(Username, OrderCount) VALUES ('$name',0);";
            $res = mysqli_query($conn, $ins);

            $sel = "SELECT CustID FROM customer WHERE Username = '$name';";
                $res = mysqli_query($conn, $sel);
                    $row = mysqli_fetch_assoc($res);
                    $ID = $row['CustID'];
                $_SESSION['ID'] = $ID;
        

        
    header('location:GVSignupSuccessfulPage.php');

}
}  


?>
<!DOCTYPE html>
<html>
    

<head><title>Signup</title>
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
   input{ margin-left: 10px;}
   
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
    border-style: solid;
    margin-left: 3px;
    margin-right: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    height: 550px;

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

.SignUpTitle{
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    display: block;
    font-size: 50px;
    border-radius: 20px;
    border-color:rgb(122, 175, 211);
    border-width: 1px;
} .Name{
    margin-bottom: 5px;
    margin-left: 10px;
    display: inline-block;
    border-radius: 5px;
} .Pass{
    margin-bottom: 20px;
    margin-left: 10x;
    display: inline-block;
    border-radius: 5px;
} .Email{
    margin-bottom: 20px;
    margin-left: 10x;
    display: inline-block;
    border-radius: 5px;
} .UserFaveGame{
    margin-bottom: 20px;
    margin-left: 10x;
    display: inline-block;
    border-radius: 5px;
}
.NameText{
     margin-left: 20px;
     display: inline-block;
} .UserFaveGameText{
    display: inline-block;
    margin-left: 20px;
    margin-right: 10px;
    margin-top:10px;
    color: aliceblue;

} .MakeAccButton{
    margin-left: 1px;
    display: inline-block;
    font-size: 15px;
    color:#69b8ec;
    background-color: black;
    border-radius: 5px;
    border-width: 1px;
    font-weight: 500;
    text-align: center;
} .MakeAccButton:hover{
    color:#69b8ec;
    background-color: #000000;
    border-radius: 2px;
    border-style: solid;
    border-color: #69b8ec;
    font-weight: 700;
    transition: 0.3s;
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

<div class="MakeAccount">

    <p class="SignUpTitle">Sign Up</p>
    <p class="Text">You can only download if youre logged in.</p>
    <form action="" method="post">

    <?php
    if (isset($error)) {
        foreach ($error as $error) {
            echo '<span class= "NameText">!<a href = "GVLogInPage.php" class = "TextLink">' . $error . 'Login</a> here.</span>';
            header('location: GVSignUpPage.php');

        }
    }
?>
<div style="display: inline-block;height: 100%; width: 500px; margin-left:10px; ">
<input type="Text" name="name" placeholder="eg. Niloy321" class="Name"><p class="NameText">Name</p><br>
<input type="Text" name="email" placeholder="eg. asn@gmail.com" class="Email"><p class="NameText">Email</p><br>
<input type="Text" name="phone" placeholder="eg. 0088017********" class="Email"><p class="NameText">PhoneNo</p><br>
<input type="password" name="password" placeholder="max.10 characters" class="Pass"><p class="NameText">Password</p><br>
<input type="password" name="passrepeat" placeholder="Type again" class="Pass"><p class="NameText">Password(Type again)</p><br> <?php
if(isset($error)){
        foreach ($error as $error) {
            echo '<p style = "display: inline-block; margin-left: 10px;"><span>Sorry!</span> Username already exists!</p>';
        }   
}
?>
</div>

<div style="display: inline-block; height: 100%; width: 500px;  vertical-align: top;">

<p style="margin-left: 20px; display: inline-block; ">Address</p><input type="Text" name = "address" placeholder="eg. 22, Jump Street, Hollywood, USA" style="display: inline-block; padding-right:60px ;">
<p style="margin-left: 20px; margin-bottom: 25px; margin-top: 20px;">One more thing,</p>
<p class="UserFaveGameText">Favourite Game?</p><input type="Text" name="FavouriteGame" class="UserFaveGame"><br>
<p style="margin-left: 10px; margin-right: 2px; display:inline-block; color:aliceblue">Ok now let's </p><button type="submit" name="submit" class="MakeAccButton">Sign Up!</button>

</div>

</form>
</div>



<div class="Faves">
    <p class="FaveTitle">This Month's Faves</p>
    
    <div class="GameDetails" style="margin-left:16px;" >
    <img class="FaveCover" src="https://static.wikia.nocookie.net/pokemon/images/8/85/Pok%C3%A9mon_Emerald_boxart_EN-US.jpg/revision/latest/scale-to-width-down/1000?cb=20120128161444">
    <a class="FaveGameName">Pokemon Emerald</a>
    <p class="FaveGamePrice">$10</p>
    </div>

    <div class="GameDetails">
        <img class="FaveCover" src="https://th.bing.com/th/id/R.22b80f1b204fbe14769ef06dd6de9b06?rik=v160rzei74Kx6g&pid=ImgRaw&r=0">
        <a class="FaveGameName">Metal Gear Solid</a>
        <p class="FaveGamePrice">$6.99</p>
    </div>

    <div class="GameDetails">
        <img class="FaveCover" src="https://cdromance.com/wp-content/uploads/2018/06/68059_front.jpg">
        <a class="FaveGameName">Dragon Ball Z: Budokai Tenkaichi</a>
        <p class="FaveGamePrice">$8</p>
    </div>

    <div class="GameDetails">
        <img class="FaveCover" src="https://www.mobygames.com/images/covers/l/188479-disney-s-tarzan-untamed-gamecube-front-cover.jpg">
        <a class="FaveGameName">Tarzan</a>
        <p class="FaveGamePrice">$10</p>
    </div>
     <div class="GameDetails">
            <img class="FaveCover" src="https://www.mobygames.com/images/covers/l/33719-counter-strike-xbox-front-cover.jpg">
            <a class="FaveGameName">Counter Strike</a>
            <p class="FaveGamePrice">$15</p>
    </div>

     <div class="GameDetails">
        <img class="FaveCover" src="https://th.bing.com/th/id/OIP.kxqZSvay6MtlwC_4Zq_oOgHaFa?pid=ImgDet&rs=1">
        <a class="FaveGameName">Kirby 3</a>
        <p class="FaveGamePrice">$8</p>
    </div>

</div>

</div>



<?php
include_once('Sidegames.php');
?>



</div>


</div></body>





</html>
