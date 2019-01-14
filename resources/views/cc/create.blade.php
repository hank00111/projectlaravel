@extends('layouts.app')

@section('content')
<div style="padding:10px; font-size:17px; font-family: 微軟正黑體;">
    <h1 style="padding-top: 20px;">{{ __('新增 排氣量') }}</h1>
{!! Form::open(['url'=>'cc']) !!}

   <div class="form-group">
       {!! Form::label('CCID','排氣量編號:') !!}
       {!! Form::selectRange('CCID', 1, 10,1,['class'=>'form-control']) !!}   
   </div>
   <div class="form-group">
    {!! Form::label('CCType','排氣量種類:') !!}
    {!! Form::select
    ('CCType', 
    array('51-125cc','126-249cc' ,'251-400cc','401-750cc','751-1000cc','1001cc-'      
        ),['class'=>'form-control']) !!}
    
</div>
<div class="form-group">
   {!! Form::submit('傳送',['class'=>'btn btn-outline-dark form-control']) !!}
</div>
{!! Form::close() !!}
<a href="{{ route('cc.index') }}" class="btn btn-outline-dark form-control" style="margin-bottom: 1rem;">回上一頁</a>
</div>



@endsection
