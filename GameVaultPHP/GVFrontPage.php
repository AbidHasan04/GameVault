<?php 
 @include 'DatabaseConnect.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head><title>GameVault</title>
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
} .Content{
    margin-top: 25px;
    display: inline-block;
}
 p{
    font: Arial;
    font-size: 17px;
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
    margin-left: 5px;
    padding-top: 7px;
    padding-bottom: 7px;

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
    display: block;
    font-size: 50px;
    font-weight: bold;
    border-radius: 20px;
    border-style: solid;
    border-color:rgb(122, 175, 211);
    border-width: 1px;
    background-image: url("Untitled434_20221203190942.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 35%;
    background-position-x: right;
    
    
    padding-left: 10px;
    padding-top:20px;
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
    margin-top: 25px;
    
    
} .SideBarName{
     color:rgb(147, 208, 243);
     font-size: 25px;
     width: 258px;
    border-radius: 10px;
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

.Jargon{
    width:1040px;
    display:block;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    
    margin-left: 3px;
    margin-right: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    padding-bottom: 20px;
} .ColorText{
    margin-left: 3px;
    color:rgb(226, 241, 255);
    font-weight:700;
    font-size: 20px;
} .IntroText{
    Margin-left: 5px;
} .TextLink{
color: aliceblue;
text-decoration:underline;
} .TextLink:hover{
    font-size: 18px;
    font-weight: 600;
}

.Options{
    width:1040px;
    height: 290px;
    display:block;
    border-width: 1px;
    border-radius: 20px;
    border-color: rgb(147, 208, 243);
    border-style: solid;
    margin-left: 3px;
    margin-right: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
} .Ga, .Co, .Ac{
    display: block;
    font-size: 30px;
    margin-top: 14px;
    margin-bottom: 14px;
}.Co{
    margin-left:200px;
    margin-right:400px;
} .Ga{
    margin-top: 24px;
    margin-left: 2px;
} .Ac
{margin-left: 60px;
}.Ga:hover, .Co:hover, .Ac:hover{
    font-size: larger;
    transition: 0.1s;
}

.Faves{
    width: 1018px;
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
<div class="Jargon" align="center">
<p align="center" style="color:aliceblue; margin-top: 40px; font-size: 17px;">Every game of your childhood in one safe vault.</p>
<p class="ColorText" align = "left">Greetings visitor,</p>
<p align="left" class="IntroText">Remember the good ol' times when you used to save up pennies day by day until you had enough to buy that one game that you've been eyeing for months in the local shopping mall,
    spending hours and hours trying to figure out a water level and then handing your older brother the joystick and accepting defeat, the uproar upon defeating a particularly difficult mob,
    those timeless games that gave you innumerable hours of joy, are they lost to time?</p>
<p align="left" class="IntroText"><span class="ColorText">Not while we're here!</span><br>We give you a <span style="color:aliceblue">one-stop-shop for games</span> and everything related Go through our carefully curated library of classics every generation and genre, all from a variety of consoles of the past.</p>
<p align="center">And if you aren't looking for old games and just want to try something new out, we have a collection of our admins favourites.</p>
<p>So <a href="GVLogInPage.php" class="TextLink">Log In</a> or <a href="GVSignUpPage.php" class="TextLink">Sign Up</a> if you haven't and buy the games you want. Happy gaming!</p>
</div>

<div class= "Options" align="center">
<a class="Ga" href="GVListofGamesPage.php"><span class="material-symbols-outlined">
    videogame_asset
    </span>Games<br></a>
<a class="Co" href="#">Consoles<span class="material-symbols-outlined">
    sports_esports
    </span><br></a>
<a class="Ac" href="#"><span class="material-symbols-outlined">
    cable
    </span>Accessories<br></a>
</div>

<?php
include_once('FaveMonthlyList.php');

?>

</div>
<?php
include_once('sidegames.php'); ?>
</div></body>





</html>
