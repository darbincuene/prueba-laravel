<x-app-layout>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Darbin </title>
  </head>
  <body>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('listado comunas♥') }}
      </h2>
      
  </x-slot>
    <div>
      <br>
      <div class="mx-auto w-50 mb-4">
        <a href="{{route('comuna.create')}}" class="btn btn-primary ">Crear Comuna</a> 

      </div>

      <div class="mx-auto w-50 d-flex justify-content-center " >
        <form action="{{route('comuna.index')}}" method="GET" class="d-flex">
        <input type="search" name="search" class="form-control me-2 " style="width: 350px;" placeholder="Buscar" value="{{ request('search') }}">
        <button type="submit" class="btn btn-outline-primary">Buscar</button>
      </form>
      </div>

<br>


  <table  class="table table-success table-striped table-bordered mx-auto w-50" style="border-width:5px; width:65%; border-color:rgb(9, 174, 240);" >
  <thead class="table-dark">
    <tr>
      <th>code </th>
      <th>comunnne</th>
      <th>Municipio</th>
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
</x-app-layout>
