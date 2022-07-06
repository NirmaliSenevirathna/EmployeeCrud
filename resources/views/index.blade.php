@extends('layout')



@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

	            <h2>Products</h2>
            </div>
        </div>

    </div>
    <br>
    <br>
    <div class="row" align="left">
		<div class="pull-right">
            <a class="btn btn-success" href="{{route('employee.create')}}"> Add Product</a>

		</div>


	</div>



@if ($message = Session::get('success'))

	<div class="alert alert-success">

		<p>{{$message}}</p>
	</div>

@endif




<br>
<br>
<table class="table table-striped">

	<tr>

		<th>No</th>
		<th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Status</th>
		<th>Option</th>
	</tr>

	@foreach($employees as $employee)

	<tr>

		<td>{{$employee->id}}</td>

		<td>{{$employee->name}}</td>

        <td><img src="/images/{{$employee->image}}" width="70px">

        <td>{{$employee->price}}</td>

		<td>{{$employee->status}}</td>
        <td>


            <form method="POST" action="{{route('employee.destroy',$employee->id)}}">


                <a class="btn btn-success" href="{{route('employee.edit',$employee->id)}}">Show</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-primary" href="{{route('employee.edit',$employee->id)}}">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                {{csrf_field()}}


                {{method_field('DELETE')}}

                     <input type="submit" class="btn btn-danger" delete-user value="Delete">
            </form>


        </td>










	</tr>

	@endforeach

</table>

@endsection
