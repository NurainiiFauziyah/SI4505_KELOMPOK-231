<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    @include ('kamuspenyakit.nav')
      @include ('panduan.header')
     <section class=" p-3 m-0 border-0 bd-example m-0 border-0"> 
      
      <div class="card mb-3" style="max-width: 750px;">
        <div class="row g-0">
          <div class="col-md-4 ">
            <img class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" src="https://4.bp.blogspot.com/-nxGVn-aBZ5g/Wl195mRatMI/AAAAAAAABmA/yeeaH6CfjHM3jec7z5PN9zoFUxUl5hDPACLcBGAs/s1600/sapi%2Bcacingan.PNG" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></sty>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" value="{{route ('namapenyakit')}}">Cacingan</h5>
              <p class="card-text">Cacingan pada sapi merujuk pada kondisi di mana sapi terinfeksi oleh cacing-cacing parasit dalam tubuhnya. Cacingan dapat disebabkan oleh berbagai jenis cacing internal seperti cacing usus, cacing hati, dan cacing paru-paru.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/deskripsipenyakit" class="btn btn-link">Selengkapnya</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 " style="max-width: 750px;">
        <div class="row g-0 ">
          <div class="col-md-4">
            <img class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250" src="https://www.borneonews.co.id/images/upload/2022/05/13/1652450772-img-20220513-155041.jpg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></>
          </div>
          <div class="col-md-8 col-6">
            <div class="card-body">
              <h5 class="card-title">Penyakit Mulut dan Kuku</h5>
              <p class="card-text">Penyakit ini dapat disebabkan oleh berbagai faktor termasuk infeksi bakteri, virus, atau jamur. Gejalanya dapat mencakup pembengkakan, peradangan, atau luka pada mulut dan kuku sapi.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/deskripsipenyakit" class="btn btn-link">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    </div>  
    </section> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>