@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Meals</div>

                <div class="panel-body">
                    <a href="/meals/create"><button>Add Meal</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection