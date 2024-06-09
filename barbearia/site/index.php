<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
         body {
            overflow-x: hidden;
        }

#header {
    width: 1349px;
            height: 90px;
            background-color:black;
}

#card {
width: 1349px;
height: 320px ;
background-color:khaki;
display: block;
border-radius: 15px;
}
#button {
    width: 200px;
    height: 50px;
    background-color: whitesmoke;
    border-radius: 5px;
    color: brown;
}
.divisor {
    width: 1350px;
    height: 10px;
    background-color: whitesmoke;
}

#circulo {
    background-color:brown;
    width: 50px;
    height: 50px;
    border-radius: 30px;
}
nav,
scroll-container {
  display: block;
  margin: 0 auto;
  text-align: center;
}

scroll-container {
  display: block;
  overflow-y: scroll;
  scroll-behavior: smooth;
}

#section1 {
    width: 1345px;
    height: 500px;
    background-color: black;
}
#conteudo {
    width: 1349px;
    height: 500px;
    background-color: brown;
}
.circulo2 {
    width: 80px;
    height: 75px;
    background-color: brown;
    border-radius: 50px;
display:inline-block;
margin: 15px;
}
.filter {
    background-color: whitesmoke;
    width: 1343px;
    height: 460px;
    border-radius: 10px;
}

   </style>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
 </head>
    <script src="js/main.js" type="text/javascript" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id = "header">
        <img src="icon/logo.png" width="145px" height="83px" style="float: left;">
    <a href="#"><img src="icon/instagram.svg" width="60px" height="60px" style="float: right; margin: 10px;"></a>
    <a href="agendar.php"><div id="button" style="float: right; margin: 15px;"><center><h2>Agendar</h2></center></div></a>
    <br>
    <br>
    <br>
    <br>
    <div id="divisor" style="background-color: whitesmoke; width: 1348px; height: 8px;" ></div>
    <div class="slick-carousel">
        <div><img src="images/barber.jpg" width="1366px" height="470px" ></div>
        <div><img src="images/proximo.jpg" width="1366px" height="470px"></div>
        <div><img src="images/material.jpg" width="1366px" height="470px"></div>
        <div><img src="images/banner.jpg" width="1366px" height="470px"></div>
        <div><img src="images/lugar.jpg" width="1366px" height="470px"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>
            // Inicializando o carrossel automático
            $(document).ready(function(){
                $('.slick-carousel').slick({
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false
                });
            });
        </script>
        
    <div id="card">     
<center><a href="#index"><div id="circulo"><img src="icon/baixo.svg" width="50px" height="50px"></div></a></center>
<br>
<scroll-container>
    <scroll-page id="index"></scroll-page>
</scroll-container>

<center>
    <h1 style="color: brown;">Porque você deve ser nosso cliente?</h1>
    <div class="circulo2" style="float: left;margin-left: 105px;"><img src="icon/cadeira.png" width="45px" height="65px"><br><br><h2 style="font-size: 20px; color: brown;">Nosso foco é o visagismo</h2></div>
    <div class="circulo2" style="float: center;"><img src="icon/cerveja.png" width="65px" height="60px"><br><br><h2 style="font-size: 23px; color: brown;">Cerveja á vontade</h2></div>
    <div class="circulo2" style="float: right; margin-right:105px";><img src="icon/escova.png" width="55px" height="65px"><br><br><h2 style="font-size: 18px; color: brown;">Equipamentos de perfeita qualidade</h2></div>

</center>
</div>
    </div>
<br>

 <div id="conteudo"></div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div id="section1">
     <img src="images/corte2.png" width="300px" height="300px" style="margin:30px">
     <img src="images/barbear.png" width="300px" height="300px">
     <img src="images/logo.png" width="300px" height="300px">
     <img src="images/equipamentos.png" width="300px" height="300px">


     <div class="filter">
      <center>
          <br>
          
          <h1 style="color: brown; font-size: 60px;font-family: 'Times New Roman', Times, serif; background-color: black; width: 200px; height: 80px;">
            Ofertas
          </h1> 
        </center>
          <img src="images/COMBO.jpg" style="display: inline-block; margin: 10px;" width="650px" height="300px">
        <img src="images/segunda a quarta.jpg" width="650px" height="300px">

</body>
</html>