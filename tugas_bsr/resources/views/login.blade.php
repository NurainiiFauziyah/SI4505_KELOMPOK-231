<!doctype html>
<html lang="en">
<head>
  <title>farmedic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="logres.css">
</head>
<body>
<div class="card-front" id="loginForm">
    <div class="center-wrap">
        <div class="section text-center">
            <h4 class="mb-3 pb-3" onclick="toggleForms()">Log In</h4>
            <div class="form-group">
                <input type="email" id="email" class="form-style" name="email" placeholder="Email">
                <i class="input-icon uil uil-at"></i>
            </div>  
            <div class="form-group mt-2">
                <input type="password" id="password" class="form-style" name="password" placeholder="Password">
                <i class="input-icon uil uil-lock-alt"></i>
            </div>
            <button type="submit" class="btn mt-4" onclick="toggleForms()" form="loginForm">Login</button>
        </div>
    </div>
</div>

</body>
</html>
