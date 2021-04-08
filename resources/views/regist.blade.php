<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Register Account</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
        <a class="navbar-brand" href="/"><b>CTIS</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/regist">Register</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/login">About Us</a>
        </div>
        </div>
  </div>
</nav>
<form>
<div class="container">
  <div class="mb-3">
    <label for="InputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="InputName" placeholder="Enter your name" required>
  </div>
  <div class="mb-3">
    <label for="InputAge" class="form-label">Age</label>
    <input type="number" class="form-control" id="InputAge" placeholder="Set your age" required>
  </div>
  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" required>
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="InputPassword1" placeholder="Set your password" required>
  </div>
  <button type="submit" class="btn btn-primary">Register Account</button>
  </div>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>