@extends('layouts.app')

@section('content')
<form action="{{ action('TodoController@update', $todo->id)}}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" value="{{$todo->text}}" name="title" class="form-control" placeholder="Enter a Title">  
        </div>
        <div class="form-group">
            <input type="date" value="{{$todo->due}}" name="date" class="form-control">
        </div>
        <div class="form-group">
            <textarea rows="5" name="desc" type="text" class="form-control" placeholder="Add a Description">{{$todo->body}}</textarea>
        </div>
        <input type="hidden" name="_method" value="put" />
        <button type="submit" class="btn btn-primary">Submit</button>
</form>   
@endsection
