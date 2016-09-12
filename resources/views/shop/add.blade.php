@extends('master')

@section('title', 'Add New Product')
@section('description', 'We will be adding new product')

@section('styles')
	<style type="text/css">

		textarea {
			resize:none;
		}
	</style>

@endsection

@section('content')




<h1>Add New Product</h1>

<form id="add-product" method="post" entype="multipart/form-data" action="/submit-product">
	{!! csrf_field() !!}



	<div class="form-group">
		<label>Product Title</label>
		<input type="text" class="form-control" name="product_title" placeholder="Product Title" value="{{ old ('product_title') }}">
	</div>

	<div class="form-group">
		<label>Product Description</label>
		<textarea class="form-control" name="product_description" placeholder="Product Description" rows="5"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Add Product</button>
	</div>

</form>

@if(count($errors))

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	
@endif


@endsection

@section('scripts')

@endsection