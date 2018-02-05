@extends('layouts.app')

@section('style')
	<style>
		.panel_toolbox {
			min-width: inherit;
		}
		.pointer {
			/*cursor: pointer;*/
		}
		table.workout_table thead {
			background: #6d326d;
    		color: #FFFFFF;
		}
	</style>
@endsection

@section('content')

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
	    	<div class="x_title">
	        	<h2>Workout <small>Manager</small></h2>
	            <ul class="nav navbar-right panel_toolbox">
	            	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                		<ul class="dropdown-menu" role="menu">
                  			<li><a href="#">New Workout</a></li>
                		</ul>
	              	</li>
	            </ul>
	        	<div class="clearfix"></div>
	        </div>

			<div class="x_content">

	            <div class="table-responsive">
	              	<table class="table table-striped workout_table bulk_action">
	                	<thead>
	                  		<tr class="headings">
			                    <th>Created</th>
			                    <th>Name</th>
			                    <th>Type</th>
			                    <th>Action</th>
	                  		</tr>
	                	</thead>

	                	<tbody>
	                		@foreach ($workouts as $workout)
	                  		<tr class="pointer">
			                    <td>{{ date("m/d/y",strtotime($workout->created_at)) }}</td>
			                    <td>{{ $workout->title }}</td>
			                    <td>{{ $workout->type->name }}</td>
			                    <td><a href="{{ url('workout/' . $workout->id) }}">Edit</a></td>
	                  		</tr>
	                  		@endforeach
	                	</tbody>
	              	</table>
	            </div>
	        </div>
	    </div>
	</div>
	
@endsection

@section('scripts')
    
@endsection