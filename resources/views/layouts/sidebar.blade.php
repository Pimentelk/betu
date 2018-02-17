<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a class="navbar-brand" href="{{ route('tasklist.index') }}">BETU</a>
        </div>

        <div class="clearfix"></div>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">

                    {{-- <li class="{{ (Request::is('dashboard') || Request::is('dashboard/*')) ? 'active' : '' }}"><a href="{{ URL('/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li> --}}
                    {{-- <li class="{{ (Request::is('calendar') || Request::is('calendar/*')) ? 'active' : '' }}"><a href="{{ URL('/calendar') }}"><i class="fa fa-calendar"></i> Calendar</a></li> --}}

					<!--
                    <li class="{{ (Request::is('education') || Request::is('education/*')) ? 'active' : '' }}">
                                            <a><i class="fa fa-arrows-v"></i> Education <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" aria-expanded="true" style="">
                            <li><a href="{{ URL('/book') }}"><i class="fa fa-book"></i> Reading List</a></li>
                            <li><a href="{{ URL('/certification') }}"><i class="fa fa-certificate"></i> Certifications</a></li>
                            <li><a href="{{ URL('/course') }}"><i class="fa fa-check-circle"></i> Courses</a></li>
                            <li><a href="{{ URL('/degree') }}"><i class="fa fa-graduation-cap"></i> Degree</a></li>
                            <li><a href="{{ URL('/overview') }}"><i class="fa fa-star"></i> Overview</a></li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('finances') || Request::is('finances/*')) ? 'active' : '' }}">
                                            <a><i class="fa fa-arrows-v"></i> Finances <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" aria-expanded="true" style="">
                            <li><a href="{{ URL('/budget') }}"><i class="fa fa-pie-chart"></i> Budget Manager</a></li>
                            <li><a href="{{ URL('/credit') }}"><i class="fa fa-calculator"></i> Credit Score</a></li>
                            <li><a href="{{ URL('/projection') }}"><i class="fa fa-line-chart"></i> Projection Tools</a></li>
                            <li><a href="{{ URL('/debt') }}"><i class="fa fa-bar-chart"></i> Debt Tools</a></li>
                            <li><a href="{{ URL('/philanthropy') }}"><i class="fa fa-money"></i> Philanthropy</a></li>
                        </ul>
                    </li>
					-->

                    {{-- <li class="{{ (Request::is('fitness') || Request::is('fitness/*')) ? 'active' : '' }}"> --}}
                                            <!-- <a><i class="fa fa-arrows-v"></i> Fitness <span class="fa fa-chevron-down"></span></a> -->
                        {{-- <ul class="nav child_menu" aria-expanded="true" style=""> --}}
                            <!-- <li><a href="{{ URL('/health') }}"><i class="fa fa-heart"></i> Health Statistics</a></li> -->
                            {{-- <li><a href="{{ URL('/nutrition') }}"><i class="fa fa-plus-square"></i> Nutrition Planner</a></li> --}}
                            <!-- <li><a href="{{ URL('/competition') }}"><i class="fa fa-gamepad"></i> Competitions</a></li> -->
                            {{-- <li><a href="{{ URL('/workout') }}"><i class="fa fa-edit"></i> Workout Builder</a></li> --}}
                        {{-- </ul> --}}
                    {{-- </li> --}}

                    <li class="{{ (Request::is('tasklist') || Request::is('tasklist/*')) ? 'active' : '' }}">
                        <a href="{{ route('tasklist.index') }}"><i class="fa fa-tasks"></i> Task List</a>
                    </li>

                    <!-- <li class="{{ (Request::is('challenge') || Request::is('challenge/*')) ? 'active' : '' }}"><a href="{{ URL('/challenge') }}"><i class="fa fa-puzzle-piece"></i> Challenges</a></li> -->
                    <!-- <li class="{{ (Request::is('mastermind') || Request::is('mastermind/*')) ? 'active' : '' }}"><a href="{{ URL('/mastermind') }}"><i class="fa fa-users"></i> Masterminds</a></li> -->
                    {{-- <li class="{{ (Request::is('goal') || Request::is('goal/*')) ? 'active' : '' }}"><a href="{{ URL('/goal') }}"><i class="fa fa-thumb-tack"></i> Goals</a></li> --}}
                    <!-- <li class="{{ (Request::is('achievement') || Request::is('achievement/*')) ? 'active' : '' }}"><a href="{{ URL('/achievement') }}"><i class="fa fa-trophy"></i> Achievements</a></li> -->
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons
        <div class="sidebar-footer hidden-small">

            <a data-toggle="tooltip" data-placement="top" title="Account" href="{{ URL('/client/account') }}">
                <span class="fa fa-users" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Integrations" href="{{ URL('/client/integrations') }}">
                <span class="fa fa-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Chat Support" href="{{ URL('/client/support') }}">
                <span class="fa fa-comments" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ URL('/client/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="fa fa-sign-out" aria-hidden="true"></span>
            </a>
        </div>
        /menu footer buttons -->
    </div>
</div>
