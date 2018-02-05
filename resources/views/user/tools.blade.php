@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Body Mass Index Calculator <small>US Units</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                                
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Height</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input class="form-control" type="text" placeholder="feet" data-bind="value:feet">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input class="form-control" type="text" placeholder="inches" data-bind="value:inches">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Weight</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" placeholder="lbs" data-bind="value:weight">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bmi">Your BMI:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" data-bind="value: BMI" disabled>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>BMI Table <small>for Adults</small></h2>                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>BMI Range - ko/m&sup2;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bmi as $category => $range)
                            <tr>
                                <td>{{ $category }}</td>
                                <td>{{ $range }}</td>
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
    <script>
        
        function FitnessToolViewModel()
        {
            let self = this;
                self.weight = ko.observable();
                self.feet   = ko.observable();
                self.inches = ko.observable();
                
                self.height = ko.computed(function() {
                    return parseInt(self.feet()) * 12 + parseInt(self.inches());
                },self);
                
                self.BMI = ko.computed(function(){
                    
                    let mass = parseInt(self.weight());
                    let height = Math.pow(parseInt(self.height()),2);
                    let BMI = parseFloat(703 * ( mass / height )).toFixed(1);
                    
                    return (!isNaN(BMI)) ? BMI : 0;
                    
                },self);
        }
        ko.applyBindings(new FitnessToolViewModel());
    </script>
@endsection