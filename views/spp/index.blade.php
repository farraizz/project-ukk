<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  @section('content')
  <br>
  <div class="container">
  <a class="button button-primary" href="{{url('spp/create')}}">Tambah</a>
  <br>
    <table class="table table-bordered">
      <tr>
          <th>ID</th>
          <th>Tahun</th>
          <th>Nominal Pembayaran</th>
          <th colspan="2">Action</th>
      </tr>
      @foreach($datas as $key=>$value)
      <tr>
          <td>{{ $value->id_spp}}</td>
          <td>{{ $value->tahun}}</td>
          <td>{{ $value->nominal}}</td>
          <td><a class="btn btn-primary" href="{{url('spp/'.$value->id.'/edit')}}">Edit</a></td>
          <td>
            <form action="{{url('spp/'.$value->id)}}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
      </tr>
      @endforeach
    </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>