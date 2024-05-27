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
    <h1>Kamus Penyakit</h1>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary" href="/kamuspenyakit/create">Add</a>
  </div>
    <table class="table table-hover table table-sm mt-4 table table-striped table-hover ">
        <tr>
            <th>ID</th>
            <th>Nama Penyakit</th>
            <th>Deskripsi Penyakit</th>
            <th>Gejala Penyakit</th>
            <th>Action</th>
        </tr>
        @foreach ($kamuspenyakit as $kp )
            <tr>
                <td>{{$kp->id}}</td>
                <td>{{$kp->namapenyakit}}</td>
                <td>{{$kp->deskripsipenyakit}}</td>
                <td>{{$kp->gejalapenyakit}}</td>
                <td>
                  <a class="btn btn-warning" href="/kamuspenyakit/{{$kp->id}}/edit">Edit</a>
                  <form action="/kamuspenyakit/{{$kp->id}}" method="POST" >
                    @csrf
                    @method ('delete')
                    <input class="btn btn-danger me-md-2 mt-2"type="submit" value="Hapus">
                  </form>
                </td>
            </tr>
        @endforeach
      
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
