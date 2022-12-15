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

} .DetailName{font-size: 35px;
    margin-top: 10px;
    margin-bottom:20px;
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

.ListDetails{
    display:inline-block;
    width:870px;
    height: 210px;
    border-style: solid;
    border-radius: 20px;
    margin-top:5px;
    margin-bottom: 5px;
    vertical-align: top;
    border-width: 1px;
} .Thumbnail{
    display: inline-block;
    width:160px;
    height: 210px;
    border-style: solid;
    border-radius: 20px;
    border-width: 1px;
    margin-top:5px;
    margin-bottom: 5px;
    margin-left:5px;
    
} .TextSameLine{ 
    margin-top: 5px;
    margin-left: 5px;
    margin-bottom: 10px;
    margin-right: 5px;
    display: block;
    font-size: 20px;
} .ParaSorting{
    margin-top: 20px;
    display: inline-block;
    text-align: left;
    width: 400px;

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


<div class="Menu">
    <a class="Title" href="GVFrontPage.html">GAMEVAULT</a>
    <div class="MenuBar">
<a class="Home" href="GVFrontPage.html">Home</a>
<a class="Home" href="#">Games</a>
<a class="Home" href="#">Hardware</a> 
<a class="Home" style="font-weight:600;" href="GVLogInPage.html">Log In</a>
<a class="SignUp" style="font-weight:600; color:aliceblue" href="GVSignUpPage.html">Sign Up</a>
</div>
</div>

<div class="Content">
<div class = Horizontal>

    <div class="ListContent">
        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game1</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#">ewa;faw</a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game2</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game3</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine">Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game4</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game5</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game6</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game7</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game8</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game9</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game10</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game11</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game12</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game13</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game14</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>

        <img class="Thumbnail" src="#">
        <div class="ListDetails">
            <p class="DetailName">Game15</p>
            <div class="ParaSorting">
            <p class="TextSameLine">Genre: <a href="#"></a></p>
            <p class="TextSameLine">Price</p>
            </div> <div class="ParaSorting">
            <P class="TextSameLine">YearofRelease</P>
            <p class="TextSameLine" >Discount</p>
        </div>
        </div>
        
        
    </div>

</div>



<?php
include_once('Sidegames.php');
?>



</div>


</div></body>





</html>
