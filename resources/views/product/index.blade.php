@extends('layouts.master')
@section('title','Lista de Productos')
@section('content')
  <!-- Main component for a primary marketing message or call to action -->
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
      <h3>Lista de Productos</h3>
        <div class="panel panel-warning">
          <div class="panel-heading">
             Lista de productos
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id="nuevo" name="nuevo" class="btn btn-info navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">
             <table class="table table-bordered">
               <thead style="font-family:Verdana">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Marca</th>
                  <th class="text-center">Acción</th>
               </thead>
               <tbody>
                 @foreach($products as $product)
                  <tr>
                     <td>{{$product->id}}</td>
                     <td>{{$product->product}}</td>
                     <td>{{$product->price}}</td>
                     <td>{{$product->mark}}</td>
                     <td class="text-center">
                        <a href="{{route('product.create')}}" class="btn btn-primary btn-xs"><li class="fa fa-plus fa-1x"></li> Nuevo</a>
                       <a href="{{route('product.edit',$product->id)}}" class="btn btn-success btn-xs"><li class="fa fa-eye fa"></li> Editar</a>
                       <a href="{{route('product.show',$product->id)}}" class="btn btn-danger btn-xs"><li class="fa fa-trash fa"></li> Eliminar</a>

                      </td>
                  </tr>
                  @endforeach
               </tbody>
             </table>
             <div class="text-center">
                {!! $products->links()!!}
             </div>
          </div>
        </div>
     </div>
   </div>
   <script type="text/javascript">
   $(document).ready(function() {
     $("#nuevo").click(function(event)
      {
          document.location.href="{{route('product.create')}}";
     });
   });
   </script>
@endsection
