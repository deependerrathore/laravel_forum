@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$thread->title}}</div>

                <div class="card-body">
                        <div class="body">{{$thread->body}}</div>
                        <hr>
                </div>
            </div>
        </div>
    </div>
    <!--replies-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>REPLIES</strong></div>

                @foreach ($thread->replies as $reply)    
                    <div class="card-body">
                            <div class="body">{{$reply->body}} ~ {{$reply->created_at->diffForHumans()}} by <a href="#">{{$reply->owner->name}}</a></div>
                            <hr>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
