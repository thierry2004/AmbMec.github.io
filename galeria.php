<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #ffffff;
    }

    .contenedor {
        width: 90%;
        max-width: 1200px;
        overflow: hidden;
        margin: auto;
        padding: 60px 0;
    }

    .subtitulo {
        text-align: center;
        font-weight: 700;
        color: #9f8ad0;
        margin-bottom: 40px;
        font-size: 40px;
    }

    .gallery {
        background-color: #ffffff;
        /*background: #f2f2f2;*/
    }

    .contenedor-galeria {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .img-galeria {
        object-fit: cover;
        width: 30%;
        display: block;
        margin-bottom: 15px;
        box-shadow: 0 0 6px rgb(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .img-galeria:hover {
        transition: all 0.3s ease-in-out;
        transform: scale(1.1);
    }

    .imagen-light {
        position: fixed;
        background: rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translate(100%);
        transition: transform .2s ease-in-out;
    }

    .show {
        transform: translate(0);
    }

    .agregar-imagen {
        object-fit: cover;
        width: 60%;
        border-radius: 10px;
        transform: scale(0);
        transition: transform .3s .2s;
    }

    .showImage {
        transform: scale(1);
    }

    .close {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 40px;
        cursor: pointer;
        color: #fff;
        font-size: 25px;
    }
</style>

<body>

    <section class="gallery" id="portafolio">
        <div class="contenedor">
            <h2 class="subtitulo" id="topo">Galería</h2>
            <div class="contenedor-galeria">
                <img src="images\galeria\img2.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img3.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img4.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img5.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img6.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img7.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img8.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\img9.jpeg" alt="" class="img-galeria">
                <img src="images\galeria\IMG_0311.jpeg" alt="" class="img-galeria">

            </div>
        </div>
    </section>

    <div data-scrool="suave" data-anima="scroll">
        <a href="#topo">
            <div class="topo">
                <img src="images\322-circle-up.svg" alt="voltar ao topo">
            </div>
        </a>
    </div>

    <section class="imagen-light">
        <i class="fas fa-times close"></i>
        <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
    </section>

    <script>const imagenes = document.querySelectorAll('.img-galeria');
        const imagenesLight = document.querySelector('.agregar-imagen');
        const contenedorLight = document.querySelector('.imagen-light');

        imagenes.forEach(imagen => {
            imagen.addEventListener('click', () => {
                aparecerImagen(imagen.getAttribute('src'))

            })
        })

        contenedorLight.addEventListener('click', (e) => {
            if (e.target !== imagenesLight) {
                contenedorLight.classList.remove('show');
                imagenesLight.classList.remove('showImage');
            }
        })

        const aparecerImagen = (imagen) => {
            imagenesLight.src = imagen;
            contenedorLight.classList.add('show');
            imagenesLight.classList.add('showImage');
        }</script>

</body>

</html>