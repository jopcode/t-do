@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit the task</h1>
        <form method="post" action="/tasks/{{$task->id}}">

            <div class="form-group">
                <textarea name="description"class="form-control">{{$task->description}}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" name="update" class="btn btn-primary">Save</button>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@endsection