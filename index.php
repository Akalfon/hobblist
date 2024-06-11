<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto HobbList</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body class="d-flex flex-column h-100 bg-light">
    <header class="d-flex flex-wrap p-3 bg-primary border-bottom border-2 border-info">
      <a href="index.html" class="col-3"><img src="./img/logo.png" alt="Logo" width="80" height="80" style="margin-left: 40px;"></a>
      <div class="col-6 text-center">
        <h1 class="inika-regular text-dark">HobbList</h1>
        <h3 class="inika-regular text-dark">Pon orden a tu caos</h3>
      </div>
      
      <div class="col-3 text-end">
        <a href="login.html" class="abeezee-bold btn btn-secondary w-25 h-50" type="submit" name="login" id="login" style="margin-top: 28px; color:	rgba(1, 22, 39, 0.65); font-size: 20px;">Login</a>
        <a href="signup.html" class="abeezee-bold btn btn-secondary w-25 h-50" type="submit" name="signup" id="signup" style="margin-top: 28px; border: 0; border-radius: 10px; color:rgba(1, 22, 39, 0.65); font-size: 20px;">Register</a>
      </div>
    </header>
    <nav class=" nav nav-pills nav-fill bg-secondary text-white text-align border-bottom border-2 border-info">
              <a href="movies.html" class="inika-regular nav-link w-25 col-3 text-white text-center border-end border-info border-2" aria-current="page" style="font-size: 24px;">Peliculas</a>
              <a href="#" class="inika-regular nav-link w-25 col-3 text-white text-center border-end border-info border-2" style="font-size: 24px;">Series</a>
              <a href="#" class="inika-regular nav-link w-25 col-3 text-white text-center border-end border-info border-2" style="font-size: 24px;">Videojuegos</a>
              <a href="#" class="inika-regular nav-link w-25 col-3 text-white text-center" style="font-size: 24px;">Libros</a>
    </nav>
    <main>
      <div class="container w-100 h-90 bg-primary border rounded border-4 border-secondary mt-4 p-5" >
        <h2 class="inika-regular text-center" style="font-size: 64px;">¡Bienvenido a HobbList!</h2>
        <p class="inika-regular text-center" style="font-size: 32px;">En HobbList podras organizar todo ese entretenimiento que 
          tienes pendiente o que quieres guardar para poder recomendarlo... o no...</p>
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img class="rounded shadow-lg justify-content-start" width="565" height="328" src="collagefilms.png" alt="img">
          </div>
          <div class="inika-regular flex-grow-1 ms-3 text-center" style="font-size: 32px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Morbi condimentum, quam eu scelerisque sodales, metus nisi accumsan turpis, id 
          varius elit tortor nec nulla. Vestibulum pharetra nisi erat, id facilisis libero pharetra vitae. </div> 
        </div>
      </div>
      <!--Modal-->
      <div class="modal fade" id="mail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h5 class="modal-title abeezee-bold" id="exampleModalLabel">Contacte con nosotros</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-form">
              <form class="d-flex flex-column" action="" method="POST" >
                <label class="abeezee-regular" for="nombre" style="font-size: 20px; margin-bottom: 4px; :focus{outline: 1px solid #C47335;}">Nombre</label>
                <input type="text" name="nombre" id="nombre" style="border: 1px; padding: 7px 4px; border-radius: 10px; border-color: #011627; margin-bottom: 4px;">
                <label class="abeezee-regular" for="email" style="font-size: 20px; margin-bottom: 4px;">Correo Electrónico</label>
                <input type="email" name="email" id="email" style="border: 1px; padding: 7px 4px; border-radius: 10px; border-color: #011627; margin-bottom: 4px;">
                <label class="abeezee-regular" for="asunto" style="font-size: 20px; margin-bottom: 4px;">Asunto</label>
                <input type="text" name="asunto" id="asunto" style="border: 1px; padding: 7px 4px; border-radius: 10px; border-color: #011627; margin-bottom: 4px;">
                <label class="abeezee-regular" for="comentario" style="font-size: 20px; margin-bottom: 4px;">Comentarios</label>
                <textarea name="comentario" id="comentario" cols="30" rows="5" style="border: 1px; padding: 7px 4px; border-radius: 10px; border-color: #011627; margin-bottom: 8px;"></textarea>

                <button type="submit" class="btn btn-light" style="width: 25%; align-self: flex-end; cursor: pointer;">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
    <footer class="footer mt-auto p-3 bg-primary fixed-bottom">
      <div class="d-flex justify-content-between">
        <div class="d-flex align-items-start">
          <input type="button" class="btn btn-secondary icon-night-mode" style="width: 41px; height: 41px; border-radius: 15px;">
          <div class="abeezee-regular flex-grow-1 align-self-center ms-3" style="font-size: 16px;">Modo oscuro</div>
        </div>
        <div class="abeezee-regular d-flex align-items-center">
          Copyright © 2024 Alfonso Mantas
        </div>
        <div class="d-flex align-items-end">
          <input type="button" class="btn btn-secondary icon-mail" data-bs-toggle="modal" data-bs-target="#mail" style="width: 41px; height: 41px; border-radius: 15px; margin-right: 5px;">
          <a href="https://twitter.com"><input type="url" class="btn btn-secondary icon-tw" style="width: 41px; height: 41px; border-radius: 15px; margin-right: 5px"></a>
          <a href="https://instagram.com"><input type="button" class="btn btn-secondary icon-ig" style="width: 41px; height: 41px; border-radius: 15px; margin-right: 5px"></a>
          <a href="https://facebook.com"><input type="button" class="btn btn-secondary icon-fb" style="width: 41px; height: 41px; border-radius: 15px; margin-right: 5px"></a>
      </div>
    </footer>
</body>
</html>