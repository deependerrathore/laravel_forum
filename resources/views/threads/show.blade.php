@extends('layouts.app')

@section('content')
<el-row>
    <el-col :span="24">
        <div>
            <el-card class="box-card m-b-10">
                <div slot="header" class="clearfix">
                    <span>{{$thread->title}}</span>
                </div>
                <div class="text item">
                    {{$thread->body}}
                </div>
            </el-card>
        </div>
    </el-col>
</el-row>
    
<el-row>
    <el-col :span="24">
            <div class="block">
                    <el-timeline>
                            @foreach ($thread->replies as $reply)    

                      <el-timeline-item timestamp="{{$reply->created_at}}" placement="top">
                        <el-card>
                          <h4>{{$reply->body}}</h4>
                          <p>{{$reply->created_at->diffForHumans()}} by {{$reply->owner->name}}</p>
                        </el-card>
                      </el-timeline-item>
                      @endforeach

                    </el-timeline>
                  </div>
                  
    </el-col>
</el-row>
      
@endsection
