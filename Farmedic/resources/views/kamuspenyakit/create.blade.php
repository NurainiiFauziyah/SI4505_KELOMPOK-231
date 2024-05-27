<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Kamus Penyakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>Add kamus penyakit</h1>
            <form action="/kamuspenyakit/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Penyakit</label>
                    <input type="text" name="namapenyakit" class="form-control"placeholder="Nama Penyakit">
                    <div id="emailHelp" class="form-text">Silahkan inputkan nama penyakit</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi Penyakit</label>
                    <input type="text" name="deskripsipenyakit" class="form-control"placeholder="Deskripsi Penyakit">
                    <div id="emailHelp" class="form-text">Silahkan inputkan deskripsi penyakit</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gejala Penyakit</label>
                    <input type="text" name="gejalapenyakit" class="form-control" placeholder="Gejala Penyakit">
                    <div id="emailHelp" class="form-text">Silahkan inputkan gejala penyakit</div>
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Gambar Penyakit</label>
                     <input type="file" class="form-control form-control-lg" placeholder="Name" name="gambarpenyakit">
                 </div>
                <div class="d-grid gap-2">
                    <input class="btn btn-primary "type="submit" name="submit" value="Tambahkan">
                </div>
            
            </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

