@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $meal->name }} Details</div>
                <ul>
                   
                </ul>
                <div class="panel-body">
                    <form>
                        <label for="food">Add Food to {{ $meal->name }}</label>
                        <input type="text" name="food">
                        <button>Add Food</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection