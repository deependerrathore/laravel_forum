@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forum Threads</div>

                <div class="card-body">
                    @foreach ($threads as $thread)
                        <h4><a href="{{$thread->path()}}">{{$thread->title}}</a></h4>
                        <div class="body">{{$thread->body}}</div>
                        <hr>
                        <el-button>Default</el-button>
                        <el-button type="primary">Primary</el-button>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    window.addEventListener('load',function(){
        new Vue({
            el: '#app',
        });
    })
</script>