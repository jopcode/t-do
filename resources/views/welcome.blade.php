@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::check())
        <h2>Tasks List</h2>
        <a href="/task" class="btn btn-primary">Add new task</a>
        <table class="table">
            <thead>
            <tr>
                <th colspan="2">Tasks</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user->tasks as $taks)
                <tr>
                    <td>{{$taks->description}}</td>
                    <td>
                        <form action="/tasks/{{$taks->id}}">
                            <button type="submit" name="edit" class="btn btn-primary">edit</button>
                            <button type="submit" name="delete" formmethod="post" class="btn btn-danger">Delete</button>
                            {{csrf_field()}}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h3>Oh :'(. You need to log in. <a href="/login">Click here to login :D</a></h3>
    @endif
</div>
@endsection