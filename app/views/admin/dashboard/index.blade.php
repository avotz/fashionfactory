@extends('admin.layouts.layout')

@section('content')
	<div class="row dashboard">
        <div class="col-md-4">
          <h2>Últimas Categorias </h2>
         <div class="list-group">
		   @foreach ($categories as $category)
		       <a href="{{ URL::route('admin.categories.edit', $category->id) }}" class="list-group-item">{{ $category->name }} <span class="badge">{{ $category->products_count }}</a>
		   @endforeach
		 
		</div>
          <p><a class="btn btn-primary" href="/admin/categories" role="button">Ver todas &raquo; <span class="badge">{{ $tc-1 }}</span></a></p>
        </div>
        <div class="col-md-4">
          <h2>Últimos Productos</h2>
          <div class="list-group">
		   @foreach ($products as $product)
			   {{  link_to_route('admin.products.edit', $product->name, $product->id,['class'=> 'list-group-item']) }}	   
		   @endforeach
		 
		 </div>
          <p><a class="btn btn-primary" href="/admin/products" role="button">Ver todos &raquo; <span class="badge">{{ $tp }}</a></p>
       </div>
        <div class="col-md-4">
          <h2>Últimos Usuarios</h2>
          <div class="list-group">
		   @foreach ($users as $user)
			   {{  link_to_route('admin.users.edit', $user->username, $user->id,['class'=> 'list-group-item']) }}	   
		   @endforeach
		 
		 </div>
          <p><a class="btn btn-primary" href="/admin/users" role="button">Ver todos &raquo; <span class="badge">{{ $tu }}</a></p>
        </div>
   </div>
@stop