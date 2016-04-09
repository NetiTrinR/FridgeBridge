@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Fridge Bridge</div>

                <div class="panel-body">
                        <img alt="Welcome Llama" src="/img/WelcomeLlama.png">
                        <p align="top">
                            Welcome to Fridge Bridge.<br>
                            The app that tracks your fridge!<br><br>
                            Fridge Bridge keeps an inventory of items in your refridgerator<br> and gives you recipe suggestions based on the items you have.<br><br>
                            You can <b>add</b> items into your inventory, view your <b>list</b> at any time, and search <b>recipes</b> using keywords.<br>
                        </p>
                </div>
            </div>
        </div>
    </div>
@endsection
