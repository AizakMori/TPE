<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="text-center">
  <div class = "container text-center">
  <div class="mt-5 w-25 mx-auto">
  <h2>Log in</h2>
  <form method="POST" action="validate">
      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" required class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Entrar</button>
      </form>
      </div>
      {if $error != null}
        <div>
          <p class="alert alert-dark" role="alert">{$error}</p>
        </div>
    {/if}
  <div>
    <h4>Si sos nuevo <a href="signin">crea tu usuario aqui</a></h4>
  </div>
  </div>
  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>