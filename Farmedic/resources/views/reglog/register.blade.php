<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
<div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h2 class="mb-4 pb-3">Sign Up</h2>
            <p>Already have an account? <a href="login">Log in</a></p>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">                                    
                      <form id="signUpForm" action="/register" method="post">
                        @csrf
                        <div class="form-group">
                          <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="Full Name">
                          <i class="input-icon uil uil-user"></i>
                          @error('full_name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>  
                        <div class="form-group mt-2">
                          <input type="text" id="phone_number"  class="form-control @error('phone_number') is-invalid @enderror"  name="phone_number" placeholder="Phone Number">
                          <i class="input-icon uil uil-phone"></i>
                          @error('phone_number')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>  
                        <div class="form-group mt-2">
                          <input type="email"  class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                          <i class="input-icon uil uil-at"></i>
                          @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group mt-2">
                          <input type="password"  class="form-control @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Password">
                          <i class="input-icon uil uil-lock-alt"></i>
                          @error('password')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="mt-4">
                          <button type="submit" class="btn">Register</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="center-wrap p-0">
            <div class="section text-center">
              <div class="or-divider">
                <div class="or-text">OR</div>
                <div class="border-line"></div>
                <div class="border-line" style="left: 418px;"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="tooltip-container" style="left: -30px; top: 20px;">
            <div class="tooltip">
            <div class="profile">
                <div class="user">
                <img class="img" src="gambar/facebook.png" alt="Google Logo" width="300px">
                <div class="details">
                    <div class="name">SignUp</div>
                    <div class="username">Facebook</div>
                </div>
                </div>
            </div>
            </div>
            <div class="text">
            <a class="icon" href="">
                <div class="layer">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="SVG">
                <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <image href="gambar/facebook.png" width = "500px"/>
                </svg>
                </span>
                </div>
                <div class="text">Facebook</div>
            </a>
            </div>
        </div>

        <div class="tooltip-container2" style="left: 30px; top: 20px;">
            <div class="tooltip2">
            <div class="profile">
                <div class="user">
                <img class="img" src="gambar/google.png" alt="Google Logo" width="300px">
                <div class="details">
                    <div class="name">SignUp</div>
                    <div class="username">Google</div>
                </div>
                </div>
            </div>
            </div>
            <div class="text">
            <a class="icon" href="">
                <div class="layer">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="SVG">
                <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <image href="gambar/google.png" width = "500px"/>
                </svg>
                </span>
                </div>
                <div class="text">Google</div>
            </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
