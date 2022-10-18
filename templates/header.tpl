<!DOCTYPE html>
<html lang="en">
<head>
<base href="{BASE_URL}">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Productos de Belleza</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">Productos de Bellaza</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-link dropdown">
                    <a class="navbar-brand" href="categorias"> Categorias </a>
                </li>
              </ul>
              {if !isset($smarty.session.USER_ID)}
                <a href="acceso"><button class="btn btn-outline-success me-2" type="button">Acesso</button></a>
              {else}
                <a href="cerrarSesion"><button class="btn btn-outline-light" type="button">Cerrar Sesion</button></a>
                <span>
                  <p style="color:#777777" class="user-select-none">Usuario: {$smarty.session.USER_EMAIL}</p>
                </span>
              {/if}
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">