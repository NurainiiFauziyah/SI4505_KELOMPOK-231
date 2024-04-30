<!doctype html>
<html lang="en">
<head>
  <title>farmedic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="logres.css">
  <script>
    function toggleForms() {
      var signUpForm = document.getElementById("signUpForm");
      var loginForm = document.getElementById("loginForm");
      var checkbox = document.getElementById("reg-log");
      
      // Jika checkbox di-check
      if (checkbox.checked) {
        // Tampilkan form login dan sembunyikan form pendaftaran
        signUpForm.style.display = "none";
        loginForm.style.display = "block";
      } else {
        // Tampilkan form pendaftaran dan sembunyikan form login
        signUpForm.style.display = "block";
        loginForm.style.display = "none";
      }
    }

    function toggleCard() {
      var card = document.querySelector('.card-3d-wrapper');
      card.classList.toggle('is-flipped');
    }
  </script>
</head>
<body>
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Sign Up </span><span>Log In</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" onchange="toggleForms()"/>
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front" id="signUpForm">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Sign Up</h4>
                      <div class="form-group">
                        <input type="full_name" id="full_name" class="form-style" name="full_name" placeholder="Full Name">
                        <i class="input-icon uil uil-user"></i>
                      </div>  
                      <div class="form-group mt-2">
                        <input type="phone_number" id="phone_number" class="form-style" name="phone_number" placeholder="Phone Number">
                        <i class="input-icon uil uil-phone"></i>
                      </div>  
                      <div class="form-group mt-2">
                        <input type="email" id="email" class="form-style" name="email" placeholder="Email">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" id="password" class="form-style" name="password"  placeholder="Password">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <button type="submit" class="btn mt-4" onclick="toggleForms()" form="signUpForm">Register</button>
                    </div>
                  </div>
                </div>
                <div class="card-back" id="loginForm">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
