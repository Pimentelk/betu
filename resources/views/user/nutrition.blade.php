@extends('layouts.app')

@section('style')
	<style>
		table thead tr th, table tbody tr td {
			text-align: center;
		}
		.panel_toolbox {
			min-width: inherit;
		}
	</style>
@endsection

@section('content')
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
	    	<div class="x_title">
	        	<h2>Food Diary <small>Manager</small></h2>
	            <ul class="nav navbar-right panel_toolbox">
	            	<li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                		<ul class="dropdown-menu" role="menu">
                  			<li><a href="#">New Entry</a></li>
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
			                    <th class="">Meal</th>
			                    <th class="">Food / Drink</th>
			                    <th class=""># of <br>Servings</th>
			                    <th class="">Serving <br>Size</th>
			                    <th class="">Protein <br>(g)</th>
			                    <th class="">Carbs <br>(g)</th>
			                    <th class="">Sugar <br>(g)</th>
			                    <th class="">Fat <br>(g)</th>
			                    <th class="">Calories</th>
	                  		</tr>
	                	</thead>

	                	<tbody>	      
	                		@foreach ($journal as $entry)          		
	                  		<tr class="pointer">
	                  			<td>{{ array_search($entry->meal_type,Config::get('constants.MEALTYPES')) }}</td>
	                  			<td>{{ $entry->name }}</td>
	                  			<td>{{ $entry->servings }}</td>
	                  			<td>{{ $entry->size }}</td>
	                  			<td>{{ $entry->protein }}</td>
	                  			<td>{{ $entry->carbs }}</td>
	                  			<td>{{ $entry->sugar }}</td>
	                  			<td>{{ $entry->fat }}</td>
	                  			<td>{{ $entry->calories }}</td>
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