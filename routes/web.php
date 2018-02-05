<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', function() {
    Auth::logout();
    return View::make('auth.login');
});
   

Route::resource('dashboard','DashboardController');
Route::resource('calendar','CalendarController');

/* Education */
Route::resource('book','ReadingListController');
Route::resource('certification','CertificationController');
Route::resource('course','CourseController');
Route::resource('degree','DegreeController');
Route::resource('overview','OverviewController');

/* Finances */
Route::resource('budget','BudgetManagerController');
Route::resource('credit','CreditScoreController');
Route::resource('projection','ProjectionController');
Route::resource('debt','DebtToolController');
Route::resource('philanthropy','PhilanthropyController');

/* Fitness */
Route::resource('health','HealthController');
Route::resource('nutrition','NutritionController');
Route::resource('competition','CompetitionController');

Route::resource('workout','WorkoutController');
Route::resource('builder','BuilderController');

/* Tasks */
Route::resource('tasklist','TaskListController');
Route::resource('task','TaskController');

/* Challenge */
Route::resource('challenge','ChallengeController');

/* Mastermind */
Route::resource('mastermind','MastermindController');

/* Goal */
Route::resource('goal','GoalController');

/* Achievement */
Route::resource('achievement','AchievementController');

/* Settings */
Route::resource('profile','ProfileController');
Route::resource('notifications','NotificationController');
Route::resource('settings','SettingController');
