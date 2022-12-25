<?php @include 'DatabaseConnect.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head><title>Login successful</title>
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
    border-style: solid;
    margin-left: 3px;
    margin-right: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    height: 400px;

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

.LoginTitle{
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    display: block;
    font-size: 30px;
    border-radius: 20px;
    border-color:rgb(122, 175, 211);
    border-width: 1px;
} .Name{
    margin-bottom: 5px;
    margin-left: 10px;
    display: inline-block;
} .Pass{
    margin-bottom: 20px;
    margin-left: 10x;
    display: inline-block;
} .NameText{
    display: inline-block;
    margin-left: 44px;
    margin-right: 1px;
} .PassText{
    display: inline-block;
    margin-left: 20px;
    margin-right: 10px;
} .MakeAccButton{
    margin-left: 5px;
    display: inline-block;
    font-size: 15px;
    color:#ffffff;
    background-color: black;
    border-radius: 5px;
    border-width: 1px;
    font-weight: 500;
    text-align: bottom;
} .MakeAccButton:hover{
    color:#ffffff;
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

<div class="MakeAccount">

    <p class="LoginTitle">Login Successful!</p>
    <p style="margin-left:20px">We've sent an email to you as verification, now you can proceed with the videogame shopping!</p>

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



<div class = "SideBar">
<p class="SideBarName" align = "center">Latest Releases</p>
<div class="SideGames">
<img class="SideGameImg" src="https://th.bing.com/th/id/R.b79cc9df9d20d711d8a41a35245da399?rik=Q0NOkg%2b8KuY3cQ&pid=ImgRaw&r=0">
<a class="SideGameName"> God of War </a> 
</div> 
<div class="SideGames">
<img class="SideGameImg" src="https://th.bing.com/th/id/R.c0a68a9f7a75ace2a4aca691e7c8eecf?rik=LSdhXaKt6cgehw&pid=ImgRaw&r=0">
<a class="SideGameName"> Mario Kart</a>
</div>
<div class="SideGames">
<img class="SideGameImg" src="https://upload.wikimedia.org/wikipedia/en/5/57/The_Legend_of_Zelda_Ocarina_of_Time.jpg">
<a class="SideGameName"> Legend of Zelda: Occarina of Time</a>
</div>
<div class="SideGames">
<img class="SideGameImg" src="https://upload.wikimedia.org/wikipedia/en/c/c7/2002_FIFA_World_Cup_Coverart.jpg">
<a class="SideGameName"> Fifa 2002</a>
</div>
<div class="SideGames">
<img class="SideGameImg" src="https://th.bing.com/th/id/R.216e443c7cdb03fb7a022ce4eba396e0?rik=1LmONmQ3lXp3BQ&riu=http%3a%2f%2fwww.firsthour.net%2fscreenshots%2fprince-of-persia%2fprince-of-persia-cover.jpg&ehk=rGA1ZZW9BhPG8ETN8zUeWY1A5qRpLtaIJnobn%2bBVq3s%3d&risl=&pid=ImgRaw&r=0">
<a class="SideGameName"> Prince of Persia</a>
</div>
<div class="SideGames">
<img class="SideGameImg" src="https://th.bing.com/th/id/R.bbf8bbc8ca74a74fe83694c2fae4450e?rik=SfyQFGFytZ%2biuw&pid=ImgRaw&r=0">
<a class="SideGameName"> House of The Dead 2</a>
</div>
<div class="SideGames">
<img class="SideGameImg" src="https://www.mobygames.com/images/covers/l/75614-pokemon-ranger-nintendo-ds-front-cover.jpg">
<a class="SideGameName"> Pokemon Rangers</a>
</div>
<div class="SideGames">
<img class="SideGameImg" src="https://th.bing.com/th/id/R.628135498271fe88c211c728e17890af?rik=PiLueysAKaCBvQ&pid=ImgRaw&r=0">
<a class="SideGameName"> King of Fighters PS2</a>
</div>
</div>




</div>

</div>
</body>





</html>
