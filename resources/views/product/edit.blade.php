@extends('layouts.master')
@section('title','Editar Producto')
@section('content')

<ol class="breadcrumb">
   <li><a href="{{url('dashboards')}}">Escritorio</a></li>
    <li><a href="{{url('product')}}">Productos</a></li>
     <li>Editando Producto</li>
 </ol>
<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <!-- <div class="page-header">
     <h4>Agregar Nuevo producto</h4>
    </div> -->
  <div class="panel panel-warning">
    <div class="panel-heading">Editar Producto</div>
  <div class="panel-body">
    <div class="col-md-6 col-md-offset-2">
    {!!Form::model($products,['route'=>['product.update',$products->id],'method'=>'PUT'])!!}
      <div class="form-group">
        {!!form::label('Nombre')!!}
  			{!!form::text('name',null, ['id'=>'name','class'=>'form-control', 'placeholder'=>'Ingrese nombre','required'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Precio')!!}
        {!!Form::text('price',null,['id'=>'price','class'=>'form-control', 'placeholder'=>'Ingrese precio','required'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Marca')!!}
        {!!Form::select('marks_id',$marks,null,['id'=>'marks_id','class'=>'form-control','required'])!!}
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning">Guardar</button>
        <a   href="{{url('product')}}"type="button" class="btn btn-info">Cancelar</a>
      </div>
    {!!Form::close()!!}
    </div>

  </div>
  </div>
     </div>
</div>
@endsection
