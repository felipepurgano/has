<?php
include( 'base/base.html' );
?>

<!DOCTYPE html>
<html lang='pt-br'>
  <!-- Link do CSS do Bootstrap -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <!-- Link do CSS da página -->
<link rel='stylesheet' href='css/style.css'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <title>Hipertensão Auto-Cuidado</title>
    <meta name='description' content='Página para pessoas tirarem dúvidas sobre suto-cuidado dom HAS'>
    <meta name='author' content='Grupo PI Univesp 2023'>
    <meta name='keywords' content='auto-cuidado, has, comorbidades'>
    <meta name='robots' content='index,follow'>
    <meta http-equiv='content-type' content='text/html;charset=utf-8'>
    <meta charset='utf-8'>
    <meta http-equiv='refresh' content='3600'>
    <link rel='shortcut icon' href='img/logo.ico'>
    <!-- Carrossel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/has.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Primeiro Slide</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/classificacao.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Segundo Slide</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            <!-- </div>
            <div class="carousel-item">
                <img src="../img/HAS.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Terceiro Slide</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</head>

<body>

<div class="quebra">
  <h3>Guia Médico</h3>
  <p>Acesse e veja a classificação da Hipertensão Arterial Sistêmica</p>
  <button><a href="../o-que-e">Clique Aqui</a></button>
</div>

    <h3> Cuidados com a Hipertensão Arterial Sistêmica</h3>
    <iframe class='video' src='https://www.youtube.com/embed/qrzcftrboy8?si=E5XSspRk1Cjk01ha'
        title='YouTube video player' frameborder='0' allow='autoplay, loop, controls' allowfullscreen='false'
        muted></iframe>
    <br>

    <p>Saiba Mais à respeito: <a href='https://www.redalyc.org/journal/3240/324044160008/html/' target='_blank'>
            Vantagens do auto-cuidado na HAS </a></p>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
<?php /**PATH C:\Users\Felipe\Desktop\PI\Novo\HAS\resources\views/home.blade.php ENDPATH**/ ?>