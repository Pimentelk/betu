@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <!-- start of calendar -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Calendar Events <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a></li>
                                <li><a href="#">Settings 2</a></li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id='calendar'></div>
                </div>
            </div>
            <!-- end of calendar -->
            
            <!-- start of health stats -->
            <div class="panel panel-body">
                <div class="x_title">
                    <h4>Health Stats</h4>
                </div>
                <p>Easy pie chart is a jQuery plugin that uses the canvas element to render highly customizable, very easy to implement, simple pie charts for single values.</p>
                <div class="row">
                    <div class="col-xs-4">
                        <span class="chart" data-percent="86">
                            <span class="percent"></span>
                        </span>
                    </div>
                    <div class="col-xs-4">
                        <span class="chart" data-percent="73">
                            <span class="percent"></span>
                        </span>
                    </div>
                    <div class="col-xs-4">
                        <span class="chart" data-percent="60">
                            <span class="percent"></span>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end of health stats -->
            
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
            
            <!-- Start to do list -->            
            <div class="x_panel">
                <div class="x_title">
                    <h2>To Do List <small>Open Items</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a></li>
                                <li><a href="#">Settings 2</a></li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="">
                        <ul class="to_do">
                            <li><p><input type="checkbox" class="flat"> Schedule meeting with new client </p></li>
                            <li><p><input type="checkbox" class="flat"> Create email address for new intern</p></li>
                            <li><p><input type="checkbox" class="flat"> Have IT fix the network printer</p></li>
                            <li><p><input type="checkbox" class="flat"> Copy backups to offsite location</p></li>
                            <li><p><input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p></li>
                            <li><p><input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p></li>
                            <li><p><input type="checkbox" class="flat"> Create email address for new intern</p></li>
                            <li><p><input type="checkbox" class="flat"> Have IT fix the network printer</p></li>
                            <li><p><input type="checkbox" class="flat"> Copy backups to offsite location</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- End to do list -->
            
            <!-- Start of workout list -->            
            <div class="x_panel">
                <div class="x_title">
                    <h2>Workouts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <ul class="list-unstyled top_profiles scroll-view">
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-blue profile_thumb">
                            <i class="fa fa-user blue"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>            
            <!-- End workout list -->
            
            <!-- Start of achievements list -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Reading List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <ul class="list-unstyled top_profiles scroll-view">
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-blue profile_thumb">
                            <i class="fa fa-user blue"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End achievements list -->
            
        </div>
        <div class="col-md-3">
            
            <!-- Start goals list -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Goals <small>Pending</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a></li>
                                <li><a href="#">Settings 2</a></li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="dashboard-widget-content">

                        <ul class="list-unstyled timeline widget">
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title"><a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a></h2>
                                        <div class="byline">
                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title"><a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a></h2>
                                        <div class="byline">
                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>                                </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title"><a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a></h2>
                                        <div class="byline">
                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block">
                                    <div class="block_content">
                                        <h2 class="title"><a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a></h2>
                                        <div class="byline">
                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                        </div>
                                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of goal list -->
            
            <!-- Start of nutrition list -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Nutrition</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <ul class="list-unstyled top_profiles scroll-view">
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-blue profile_thumb">
                            <i class="fa fa-user blue"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End nutrition list -->
            
            <!-- Start of reading list -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Reading List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <ul class="list-unstyled top_profiles scroll-view">
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-blue profile_thumb">
                            <i class="fa fa-user blue"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                            <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#">Ms. Mary Jane</a>
                            <p><strong>$2300. </strong> Agent Avarage Sales </p>
                            <p> <small>12 Sales Today</small>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End reading list -->
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
    <!-- easy-pie-chart -->
    <script src="{{ asset('/bower_components/gentelella/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
@endsection