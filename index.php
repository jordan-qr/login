<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
        <div class="col-10 col-sm-10 col-md-4 col-lg-4">
            <br><br><br><br><br>
            <form id="formulario" method="post">
                <h1 class="text-center"><strong>Login</strong></h1>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="True" maxlength="10" minlength="3">
                <br>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="True" maxlength="10" minlength="3">
                <br>
                <button type="submit">Ingresar</button>
                <br><br>
                <div id="alerta"></div>
            </form>
        </div>
        <div class="col-1"></div>
    </div>

    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>