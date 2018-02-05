@extends('layouts.app')

@section('style')
	<style>
		.panel_toolbox {
			min-width: inherit;
		}
		.btn-new-list {
			border: 5px dashed #6d326dc9; 
			color: #6d326dc9;
			background: RGBA(220,220,220,0.2);
			font-weight:bold;
			margin: 0 auto;
			width: 100%;
			height: 360px;
			font-size:24px;
		}
		.scrollbar {
			float: left;
			height: 360px;
			overflow-y: auto;
			margin-bottom: 25px;
			z-index: 999;
		}
		#scrollbar::-webkit-scrollbar-track {
			border: 1px solid black;
			background-color: #F5F5F5;
		}

		#scrollbar::-webkit-scrollbar {
			width: 10px;
			background-color: #F5F5F5;
		}

		#scrollbar::-webkit-scrollbar-thumb {
			background-color: #6d326d;
		}
	</style>
@endsection

@section('content')
	
	<div id="app">
		<lists-component v-bind:lists="lists"></lists-component>
	</div>

	<div class="clearfix"></div>

@endsection

@section('scripts')
    <script>
    	
    	let app = new Vue({
		    el: '#app',
		    data: {
		    	lists: []
		    }
		});

    	@if(isset($lists))
	    	@foreach($lists as $list)
	     		app.lists.push({
	     			id: '{{ $list->id }}',
	     			title: '{!! addslashes($list->title) !!}',
					status: '{{ $list->status }}',
					tasks: JSON.parse('{!! $list->tasks !!}')
	     		});
	    	@endforeach
		@endif

    </script>
@endsection