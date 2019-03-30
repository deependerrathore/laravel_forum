@extends('layouts.app')

@section('content')
<el-row>
    <el-col :span="24">
        <div>
            @foreach ($threads as $thread)    
                <el-card class="box-card m-b-10">
                    <div slot="header" class="clearfix">
                        <span><a href="{{$thread->path()}}">{{$thread->title}}</a></span>
                    </div>
                    <div class="text item">
                        {{$thread->body}}
                    </div>
                </el-card>
                
            @endforeach
        </div>
    </el-col>
</el-row>

@endsection

<script>
    window.addEventListener('load',function(){
        new Vue({
            el: '#app',
        });
    })
</script>

