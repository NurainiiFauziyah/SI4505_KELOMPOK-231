<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h2 class="mb-4 pb-3">Log In</h2>
                <div class="card-3d-wrap mx-auto">
                    <div class="card-3d-wrapper">
                        <div class="card-front" id="loginForm">
                            <div class="center-wrap">
                                <div class="section text-center">
                                    <form id="loginForm" action="/welcome" method="post">
                                        @csrf
                                        <div class="form-group mt-2">
                                            <input type="email" value="{{Session::get('email')}}" id="email" class="form-style" name="email" placeholder="Email">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" id="password" class="form-style" name="password"  placeholder="Password">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button type="submit" class="btn mt-4">Login</button>
                                       
                                    </form>
                                    <a href="/register">register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
         </div>
     </div>
</div>
</body>
</html>

