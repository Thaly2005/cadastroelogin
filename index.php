<?php
$nomeDoLink = "GitHub";
$urlDoLink = "https://github.com/Thaly2005/cadastroelogin";
?> 

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade Cadastro e Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Início</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" href="index.php">Início</a>
                <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                <a class="nav-link active" aria-current="page" href="login.php">Log in</a>
            </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Seja bem-vind@</h1>
    <p class="lead">Essa é a página principal feita para uma atividade avaliativa do segundo trimeste em Programação Web</p>
    <p class="lead">
    <a href="<?php echo $urlDoLink; ?>"><?php echo $nomeDoLink; ?></a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>


    
  </body>
</html>
