@extends('layouts.app')

@section('content')
<form action="{{ action('TodoController@store') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" name="title" class="form-control" placeholder="Enter a Title">  
        </div>
        <div class="form-group">
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <textarea rows="5" name="desc" type="text" class="form-control" placeholder="Add a Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
</form>   
@endsection
