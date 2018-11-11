@extends('layout')

@section('title')
Update / Delete car
@endsection

@section('mainContent')
	<h2>Update/Delete Car</h2>
	<form class="form-horizontal" method="post" action="/car/public/cars/{{$car->id}}">
		@csrf
		@method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" value="{{$car->name}}" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Color</label>  
			  <div class="col-md-4">
			  <input id="color" name="color" type="text" placeholder="Enter color" class="form-control input-md" value="{{$car->color}}" required="required">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Company</label>  
			  <div class="col-md-4">
			  <input id="company" name="company" type="text" placeholder="Enter company name" class="form-control input-md" value="{{$car->company}}" required="required">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Update</button>
			  </div>
			</div>

			</fieldset>
		</form>

		<form class="form-horizontal" method="post" action="/car/public/cars/{{$car->id}}">
			@csrf
			@method('delete')
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Delete</button>
			  </div>
			</div>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div>
			<a href="/car/public/cars">Show Cars</a>
		</div>

@endsection
