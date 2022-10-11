@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<img class="w-100" id="img_temp" src="{{ $students['images']}}">

		</div>
		<div class="col-md-4">
			<h4><span>Name: </span>{{$students->name}}</h4>
			<h4><span>Roll No: </span>{{$students->rollno}}</h4>
			<h4><span>Class: </span>{{$students->class}}</h4>
			<h4><span>Phone: </span>{{$students->phone}}</h4>
		</div>
	</div>
</div>
@endsection
