@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Meals</div>
                <ul>
                    @foreach(Auth::user()->meals as $meal)
                    <li>
                        {{ $meal->name }} created 
                        {{ $meal->created_at->format('j F, Y') }}

                    </li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    <a href="/meals/create"><button>Add Meal</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection