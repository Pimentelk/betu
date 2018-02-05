@extends('layouts.app')

@section('style')
   <style>
     .panel_toolbox {
        min-width: inherit;
      }
      .fc tbody .fc-row .fc-content-skeleton table {
        height: 15em;
      }
	  .fc-scroller.fc-day-grid-container {
		  overflow-x: hidden !important;
		  overflow-y: hidden !important;
		  height: inherit !important;
	  }
   </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <!-- start of calendar -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Calendar Events <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a></li>
                                <li><a href="#">Settings 2</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id='calendar'></div>
                </div>
            </div>
            <!-- end of calendar -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>
@endsection

@section('scripts')
	<script>
		/* CALENDAR */
        
		init_calendar();

		function init_calendar() {

			if (typeof($.fn.fullCalendar) === 'undefined') {
				return;
			}
			console.log('init_calendar');

			var date = new Date(),
				d = date.getDate(),
				m = date.getMonth(),
				y = date.getFullYear(),
				started,
				categoryClass;

			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listMonth'
				},
				selectable: true,
				selectHelper: true,
				select: function(start, end, allDay) {
					$('#fc_create').click();

					started = start;
					ended = end;

					$(".antosubmit").on("click", function() {
						var title = $("#title").val();
						if (end) {
							ended = end;
						}

						categoryClass = $("#event_type").val();

						if (title) {
							calendar.fullCalendar('renderEvent', {
									title: title,
									start: started,
									end: end,
									allDay: allDay
								},
								true // make the event "stick"
							);
						}

						$('#title').val('');

						calendar.fullCalendar('unselect');

						$('.antoclose').click();

						return false;
					});
				},
				eventClick: function(calEvent, jsEvent, view) {
					$('#fc_edit').click();
					$('#title2').val(calEvent.title);

					categoryClass = $("#event_type").val();

					$(".antosubmit2").on("click", function() {
						calEvent.title = $("#title2").val();

						calendar.fullCalendar('updateEvent', calEvent);
						$('.antoclose2').click();
					});

					calendar.fullCalendar('unselect');
				},
				editable: true,
				events: [				
					@foreach($events as $event)
					{
						title: '{{ $event->title }}',
						start: new Date('{{ $event->start_date }}'),
						
						@if (!is_null($event->end_date))
						end: new Date('{{ $event->end_date }}'),
						@endif
					},
					@endforeach				
				]
			});
		};
	</script>
@endsection
