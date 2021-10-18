<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaciones</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div class="centrado" id="onload">
        <div class="Logo"><img src="Media\freddy.gif" width=150px height=150px; alt= ""></div>
        <div class="lds-hourglass"></div>
    </div>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="codigo.js"></script>

    <section id="sec1" class="Espacio">
        <div class="contenedor-texto"> 
            <h2 class="animate__animated animate__rubberBand">Section 1</h2>
            <p class="animate__animated animate__bounceInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, similique.</p>
            <a href="#sec2" class="animate__animated animate__fadeInDownBig">section 2</a>
        </div>
        <img src="Media/finger-food.png" alt="" class="img">
    </section>
    <section id="sec2" class="Espacio2">
        <div class="contenedor-texto">
            <h2 class="animate__animated animate__rubberBand">Section 2</h2>
            <p class="animate__animated animate__bounceInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, similique.</p>
            <a href="#sec3" class="animate__animated animate__fadeInBottomLeft">section 3</a>
        </div>
        <img src="Media/dish.png" alt="" class="img">
    </section>
    <section id="sec3" class="Espacio3">
        <div class="contenedor-texto">
            <h2 class="animate__animated animate__rubberBand">Section 3</h2>
            <p class="animate__animated animate__bounceInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, similique.</p>
            <a href="#sec1" class="animate__animated animate__fadeInUpBig">section 1</a>
        </div>
        <img src="Media/bibimbap.png" alt="" class="img">
    </section>
</body>

</html>

