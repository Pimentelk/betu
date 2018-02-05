<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $page_title or "BetU" }}</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Custom styling plus plugins -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .site_title i {
                border: 0;
            }
            .loader_overlay {
                position:fixed;
                background:rgba(255,255,255,0.8);
                width:100%;
                height:100vh;
                z-index:999;
                display: none;
            }
            .loader_overlay .fa-spinner {
                margin:25% 50%;
            }
            .full_col {
                padding: 10px 20px 0;
                margin-left: 0;
                min-height: 100vh;
            }
            body .container.body .full_col {
                background: #F7F7F7;
            }
            .fc-event {
                background: #5da9e9;
                border-color: #5da9e9;
            }
        </style>

        @yield('style')

    </head>
    <body class="nav-md">
        <div class="loader_overlay">
            <i class="fa fa-4x fa-spinner fa-spin"></i>
        </div>

        <div class="container body">
            <div class="main_container">

                @include('layouts.sidebar')

                @include('layouts.header')

                <!-- page content -->
                <div class="right_col" role="main" id="app">
                    @yield('content')
                </div>
                <!-- /page content -->

                @include('layouts.footer')

            </div>
        </div>

        <form id="logout-form" action="{{ url('/client/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <!-- app.js -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

        <!-- Custom styling plus plugins -->
        <!-- <script type="text/javascript" src="{{ asset('/bower_components/gentelella/build/js/custom.min.js') }}"></script> -->

        @yield('scripts')

        <script>
			
			(function($,sr){
				// debouncing function from John Hann
				// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
				var debounce = function (func, threshold, execAsap) {
				  var timeout;

					return function debounced () {
						var obj = this, args = arguments;
						function delayed () {
							if (!execAsap)
								func.apply(obj, args);
							timeout = null;
						}

						if (timeout)
							clearTimeout(timeout);
						else if (execAsap)
							func.apply(obj, args);

						timeout = setTimeout(delayed, threshold || 100);
					};
				};

				// smartresize
				jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

			})(jQuery,'smartresize');

			var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
				$BODY = $('body'),
				$MENU_TOGGLE = $('#menu_toggle'),
				$SIDEBAR_MENU = $('#sidebar-menu'),
				$SIDEBAR_FOOTER = $('.sidebar-footer'),
				$LEFT_COL = $('.left_col'),
				$RIGHT_COL = $('.right_col'),
				$NAV_MENU = $('.nav_menu'),
				$FOOTER = $('footer');

			// Sidebar
			function init_sidebar() {
				// TODO: This is some kind of easy fix, maybe we can improve this
				var setContentHeight = function () {
					// reset height
					$RIGHT_COL.css('min-height', $(window).height());

					var bodyHeight = $BODY.outerHeight(),
						footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
						leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
						contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

					// normalize content
					contentHeight -= $NAV_MENU.height() + footerHeight;

					$RIGHT_COL.css('min-height', contentHeight);
				};

				$SIDEBAR_MENU.find('a').on('click', function(ev) {
					
					console.log('clicked - sidebar_menu');
					
					var $li = $(this).parent();

					if ($li.is('.active')) {
						$li.removeClass('active active-sm');
						$('ul:first', $li).slideUp(function() {
							setContentHeight();
						});
					} else {
						// prevent closing menu if we are on child menu
						if (!$li.parent().is('.child_menu')) {
							$SIDEBAR_MENU.find('li').removeClass('active active-sm');
							$SIDEBAR_MENU.find('li ul').slideUp();
						}else
						{
							if ( $BODY.is( ".nav-sm" ) )
							{
								$SIDEBAR_MENU.find( "li" ).removeClass( "active active-sm" );
								$SIDEBAR_MENU.find( "li ul" ).slideUp();
							}
						}
						$li.addClass('active');

						$('ul:first', $li).slideDown(function() {
							setContentHeight();
						});
					}
				});

				// toggle small or large menu
				$MENU_TOGGLE.on('click', function() {
						
					console.log('clicked - menu toggle');

					if ($BODY.hasClass('nav-md')) {
						$SIDEBAR_MENU.find('li.active ul').hide();
						$SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
					} else {
						$SIDEBAR_MENU.find('li.active-sm ul').show();
						$SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
					}

					$BODY.toggleClass('nav-md nav-sm');

					setContentHeight();
				});

				// check active menu
				$SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

				$SIDEBAR_MENU.find('a').filter(function () {
					return this.href == CURRENT_URL;
				}).parent('li').addClass('current-page').parents('ul').slideDown(function() {
					setContentHeight();
				}).parent().addClass('active');

				// recompute content when resizing
				$(window).smartresize(function(){
					setContentHeight();
				});

				setContentHeight();

				// fixed sidebar
				if ($.fn.mCustomScrollbar) {
					$('.menu_fixed').mCustomScrollbar({
						autoHideScrollbar: true,
						theme: 'minimal',
						mouseWheel:{ preventDefault: true }
					});
				}
			};
			// /Sidebar

			init_sidebar();

            function loader(show) {
                if (show) {
                    $('.loader_overlay').show();
                } else {
                    $('.loader_overlay').hide();
                }
            }
        </script>
    </body>
</html>
