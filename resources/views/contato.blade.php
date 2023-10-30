<?php
include('base/base.html');
?>
<!-- Código JavaScript do BootStrap para funcionar o dropdown da Navbar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin = 'anonymous'>
    <link rel = 'stylesheet' href = 'css/style-fc.css'>
</head>
    
<body>

    <div class="container">

        <div class="form_box">
            
            <h2 class="title">Envie sua pergunta!</h2>
            @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
            @endif  
            <form method="POST" action="{{ route('validate.contato') }}" novalidate>
                @csrf
                
                <input type="text" name="name" placeholder="Seu nome">
                <input type="email" name="email" placeholder="Seu e-mail">
                <input type="text" name="subject" placeholder="Assunto">

                <textarea name="message" placeholder="Digite sua mensagem"></textarea>

                <button type="submit" name="send" value="Submit">Enviar Mensagem</button>
        
            </form>

        </div>
    </div>

</body>
</html>

<footer>&copy;Criado por Grupo007 de PI UNIVESP 2023</footer>