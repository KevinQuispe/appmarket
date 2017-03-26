@extends('layouts.master')
@section('title','Eliminar Producto')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('dashboards')}}">Escritorio</a></li>
    <li class=""><a href="{{url('product')}}">Productos</a></li>
     <li class="active">Eliminar Producto</li>
 </ol>
 <div class="row">
  <div class="col-md-6 col-md-offset-2">
  <div class="panel panel-warning">
    <div class="panel-heading"> Datos de Producto</div>
     <div class="panel-body">
       <legend class="bg-danger">Desea eliminar este Producto?</legend>
    <!-- <div class="col-md-6 col-md-offset-2"> -->
  {!!Form::open(['route'=>['product.destroy',$products->id],'method'=>'DELETE'])!!}
      <!-- <div class="form-group">
        {!!form::label('Nombre')!!}
  			{!! $products->name !!}
      </div>
      <div class="form-group">
        {!!form::label('Precio')!!}
        {!! $products->price !!}
      </div> -->

      <!-- <div class="form-group"> -->
      <table class="table table-bordered">
        <thead style="font-family:Verdana" class="btn-warning">
          <th>Id</th>
           <th>Nombre</th>
           <th>Precio</th>
        </thead>
        <tbody>

           <tr>
             <td>{{$products->id}}</td>
              <td>{{$products->name}}</td>
              <td>{{$products->price}}</td>
           </tr>

        </tbody>
      </table>
      {!!Form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger'])!!}
      <a href="{{url('product')}}"type="button" class="btn btn-info">Cancelar</a>
      {!!Form::close()!!}
    </div>
  {!!Form::close()!!}
    </div>
  </div>
  </div>
</div>
</div>
@endsection
