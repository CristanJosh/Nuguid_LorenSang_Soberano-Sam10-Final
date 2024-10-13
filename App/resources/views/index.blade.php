@extends('layouts/app')

@section('content')

@if(count($todo) > 0)
<div class="row">
@foreach($todo as $tod)
    <div class="col-md-3 mt-2">
        <div class="card bg-light">
            <div class="card-body">
                    <h5 class="card-title">{{$tod->text}}</h5>
                    <p class="card-text">{{$tod->due}}</p>
            </div>
            <div class="card-footer">
                <a href="todo/{{$tod->id}}" class="text-info">View</a>
            </div>
          </div>
    </div>
@endforeach
</div>
@endif

@endsection