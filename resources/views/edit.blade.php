@extends('layouts.app')

@section('content')
<div class="container">
	<form method="post" action="../update/{{$students->id}}">
		@csrf
		<div class="form-group">
			<label for="formGroupExampleInput">Name</label>
			<input type="text" class="form-control" value="{{$students->name}}" name="name" id="formGroupExampleInput" placeholder="Enter Name">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2"> Roll No</label>
			<input type="" class="form-control" value="{{$students->rollno}}" name="rollno" id="formGroupExampleInput2" placeholder="Enter Roll No">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Class</label>
			<input type="text" value="{{$students->class}}" class="form-control" name="class" id="formGroupExampleInput2" placeholder="Enter Class">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Phone</label>
			<input type="phone" value="{{$students->phone}}" class="form-control" name="phone" id="formGroupExampleInput2" placeholder="Phone">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Image</label>
			<input type="file" class="form-control" name="img" id="formGroupExampleInput2" placeholder="{{$students->name}}">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-primary" id="formGroupExampleInput2">
		</div>
	</form>
</div>
@endsection
