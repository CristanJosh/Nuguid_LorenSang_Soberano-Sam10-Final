@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$todo->text}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$todo->due}}</h6>
            <p class="card-text">{{$todo->body}}</p>

            <form class="float-right" action="{{ action('TodoController@destroy', $todo->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="Delete" />
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form> 

            <a href="/todo/{{$todo->id}}/edit" class="btn btn-info float-right mr-4">Edit</a>
        </div>
    </div>
@endsection