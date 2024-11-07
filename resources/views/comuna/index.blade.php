<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Darbin </title>
  </head>
  <body>
    <div>
        <h1>Listado de comunas</h1>
         <a href="{{route('comuna.create')}}" class="btn btn-primary">Crear Comuna</a> 


        <table class="table">
  <thead>
    <tr>
      <th scope="col">code </th>
      <th scope="col">comunnne</th>
      <th scope="col">Municipio</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($comunas as $comuna)
    <tr>
      <th scope="row">{{$comuna->comu_codi }}</th>
      <th >{{$comuna->comu_nomb}}</th>
      <td>{{$comuna->muni_nomb}}</td>

      <td>
        <a href="{{route('comuna.edit',['comuna'=>$comuna->comu_codi])}}"
          class="btn btn-info">Edit</a></li>
      </td>


      <td>
       <form action="{{route('comuna.destroy',['comuna' =>$comuna->comu_codi])}}"
        method="POST" style="display: inline-block"
        >
        @method('delete')
        @csrf
        <input class="btn btn-danger" type="submit" value="Delete ">

       </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>


    </div>
  </body>
</html>