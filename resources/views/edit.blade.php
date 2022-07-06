@extends('layout')

@section('content')
<br>
	<div class="row">

		<div class="col-lg-12 margin-tb">

			<div class="pull-left">

				<h2>Edit Product</h2>
			</div>

			<div class="pull-right">


			</div>
		</div>
	</div>


@if($errors->any())

	<div class="alert alert-danger">


		<ul>

			@foreach($errors->all() as $error)

				<li>{{$error}}</li>

			@endforeach

		</ul>
	</div>
@endif
<br>
<br>
<div class="row">

<form action="{{route('employee.update',$employee->id)}}" method="POST" >

	@csrf

	<div class="col-sm-4">

		<div class="left">

			<strong>Name</strong>

			<input type="text" name="name" class="form-control" value="{{$employee->name}}"  placeholder="Name" required>
		</div>
	</div><br>

    <div class="col-sm-4">

		<div class="left">

			<strong>Image</strong>

			<input type="file" name="image" class="form-control" value="{{$employee->image}}"  placeholder="Choose a File" required>
		</div><br>

	<div class="col-sm-4">

		<div class="left">

			<strong>Price</strong>

			<input type="text" name="price" class="form-control" value="{{$employee->price}}"  placeholder="Price" required>
		</div>
	</div><br>


    <div class="col-sm-4">

		<div class="left">

			<strong>Status</strong>

			<input type="text" name="status" class="form-control" value="{{$employee->status}}"  placeholder="Status" required>
		</div>
	</div><br>




    <div class="col-sm-4">

		<div class="left">
            <button type="submit" class="btn btn-primary">Submit</button>

		</div>
	</div>



</form>
</div>

@endsection
