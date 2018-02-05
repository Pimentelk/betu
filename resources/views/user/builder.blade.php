@extends('layouts.app')

@section('style')
	<style>
		.btn-width {
			width: 100%;
		}
		table.workout_table thead {
			background: #6d326d;
    		color: #FFFFFF;
		}
		table thead tr th {
			text-align: center;
		}
		.valign {
			vertical-align: middle !important;
		}
		.workout.form-control {
			margin-bottom: 10px;
		}
		.pointer {
			cursor: pointer;
		}
	</style>
@endsection

@section('content')
	
	<div class="col-md-3 col-sm-3 col-xs-12">
		<div class="x_panel">
	    	<div class="x_title">
	        	
	        	<div class="pointer" v-show="title.edit == false" @dblclick=" reset(); title.edit = true ">
	        		<h2>
	        			@{{ title.text }} <i class="fa fa-edit"></i>
	        		</h2>
	        	</div>
	        	<input class="form-control" 
					   v-show="title.edit == true" 
	        		   v-model="title.text" 
	        		   v-on:blur="title.edit = false; update()" 
	        		   @keyup.enter="title.edit = false;">

	        	<div class="clearfix"></div>
	        </div>

			<div class="x_content">

				<div class="pointer" v-show="type.edit == false" @dblclick=" reset(); type.edit = true ">					
					<span for="workout-type">@{{ type.text }}</span>
					<i class="fa fa-edit"></i>					
				</div>
				<input 	id="workout-type"
						class="form-control" 
						v-show="type.edit == true" 
						v-model="type.text" 
						v-on:blur="type.edit = false; update()" 
						@keyup.enter="type.edit = false;">

				<div class="pointer" v-show="notes.edit == false" @dblclick=" reset(); notes.edit = true ">					
					<span for="workout-notes">@{{ notes.text }}</span>
					<i class="fa fa-edit"></i>
				</div>
				<textarea 	id="workout-notes"
							class="form-control" 
							rows="10"
							v-show="notes.edit == true" 
							v-model="notes.text" 
							v-on:blur="notes.edit = false; update()" 							
							@keyup.enter="notes.edit = false;"></textarea>

			</div>
		</div>
	</div>

	<div class="col-md-9 col-sm-9 col-xs-12">
		<div class="x_panel">
	    	<div class="x_title">
	        	<h2>Workout Builder</h2>
	        	<div class="clearfix"></div>
	        </div>

			<div id="app" class="x_content">
				<builder-component v-bind:exercises="exercises"></builder-component>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

@endsection

@section('scripts')

	<script>

    	let builder = new Vue({
		    
		    el: '#app',

		    data: {

		    	exercises: [],
				
				title: {
					text: '',
					edit: false,
				},
				
				type: {
					text: '',
					edit: false,
				},
				
				notes: {
					text: '',
					edit: false,
				}

		    },

		    methods: {

		    	update: function() {

		    		console.log('update..');

	                let self = this;
					let route = '/workout/' + '{{ $workout->id }}';

	                axios.put(route,{
	                    workout: {
	                    	id: '{{ $workout->id }}',
	                    	title: self.title.text,
	                    	type: self.type.text,
	                    	notes: self.notes.text,
	                    }
	                }).then(function(response){
	                    
	                    if (response.status == 202) {
							console.log('updated..');
	                    }

	                }).catch(function(error) {
	                    console.log(error);
	                });
		    	},

		    	reset: function() {
		    		this.title.edit = false;
		    		this.type.edit = false;
		    		this.notes.edit = false;
		    	}

		    }

		});

    	@if(isset($workout) && isset($workout->exercises))
	    	@foreach ($workout->exercises as $exercise)
	     		builder.exercises.push({
	     					id: '{{ $exercise->id }}',
	     			workout_id: '{{ $exercise->workout_id }}',
	     				  name: '{!! addslashes($exercise->name) !!}',
	     				  sets: '{{ $exercise->sets }}',
	     				  reps: '{{ $exercise->reps }}',
	     				weight: '{{ $exercise->weight }}',
	     			  duration: '{{ $exercise->duration }}',
	     		});
	    	@endforeach
		@endif

		builder.title.text = '{!! addslashes($workout->title) !!}';
		builder.type.text = '{!! addslashes($workout->type->name) !!}';
		builder.notes.text = '{!! addslashes($workout->notes) !!}';

	</script>

@endsection