@extends('layouts.layout')

@section('content')

<div class="content flex-center flex-grow wrapper">
    <h1>Quick recap</h1>

    <ol>
        <li>
            <div class="step">
                <h3>Create a project:</h3>
                <p class="command">composer create-project --prefer-dist laravel/laravel project</p>
            </div>
        </li>
        <li>
            <div class="step">
                <h3>Serve the project:</h3>
                <p class="command">php artisan serve</p>
            </div>
        </li>
        <li>
            <div class="step">
                <h3>Create controllers:</h3>
                <p class="command">php artisan make:controller NomeController</p>
            </div>
        </li>
        <li>
            <div class="step">
                <h3>Add the view() function in the controller:</h3>
                <p class="path">app->Http->Controllers</p>
            </div>
        </li>
        <li>
            <div class="step">
                <h3>Set the route of the controller to the view:</h3>
                <p class="path">routes->web.php</p>
            </div>
        </li>
        <li>
            <div class="step">
                <h3>Create the views:</h3>
                <p class="path">resources->views</p>
            </div>
        </li>
    </ol>
    

    <h1>HAVE FUN!</h1>



</div>
    
@endsection