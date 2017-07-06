@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add new task</h2>

        <form action="/task" method="post">
            <div class="form-group">
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            {{ csrf_field()}}
        </form>
    </div>
@endsection