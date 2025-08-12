
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags untuk memastikan tampilan responsif dan karakter yang benar -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS untuk styling cepat dan responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  @include('layouts.navbar') {{-- Menyisipkan file navbar agar navigasi konsisten di setiap halaman --}}
    <div class="container mt-3" > 
        <!-- isi konten -->
         @yield('konten') {{-- Tempat untuk menampilkan konten dari setiap halaman yang extend layout ini --}}
    </div>

    @include('layouts.footer') {{-- Menyisipkan file footer agar footer konsisten di setiap halaman --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>