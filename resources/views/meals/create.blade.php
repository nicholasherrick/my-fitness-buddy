@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Meal</div>

                <div class="panel-body">
                    <form action="/meals" method="post">
                        <label for="name">Name</label>
                        <input type="text" name="name">
                        
                        <button type="submit">Create</button>

                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection