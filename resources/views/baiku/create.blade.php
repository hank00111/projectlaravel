@extends('layouts.app')

@section('content')
<div style="padding:10px; font-size:17px; font-family: 微軟正黑體;">
    <h1 style="padding-top: 20px;">{{ __('新增') }}</h1>
    <a href="{{ route('baiku.index') }}" class="btn btn-outline-dark form-control" style="margin-bottom: 1rem;">回上一頁</a>
{!! Form::open(['url'=>'baiku']) !!}
    <div class="form-group">
        {!! Form::label('id','編號') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
   <div class="form-group">
       {!! Form::label('year','年份:') !!}
       {!! Form::selectRange('year', 2019, 2000,2018,['class'=>'form-control']) !!}   
   </div>
   <div class="form-group">
        {!! Form::label('raberu_ID','廠牌ID:') !!}
        {!! Form::select
        ('raberu_ID', 
        array(
            '台灣'  =>array('1'  => '光陽'  ,'2'  => '三陽'   ,'3' => '台灣山葉','4' => '宏佳騰','6' => 'PGO摩特動力'),
            '日本'  =>array('7'  => 'HONDA' ,'8'  => 'YAMAHA' ,'9'=> 'SUZUKI','10'=> 'KAWASAKI'),
            '義大利'=>array('11' => 'DUCATI','12' => 'APRILIA','12' => 'APRILIA','13' => 'MV AGUSTA','14' => 'HUSQVARNA'),
            '美國'  =>array('16' => 'HARLEY-DAVIDSON', '17' =>'INDIAN MOTORCYCLE'),
            '德國'  =>array('18' => 'BMW')
             ),1,['class'=>'form-control']) !!}
        
    </div>
   <div class="form-group">
       {!! Form::label('model','車型') !!}
       {!! Form::text('model',null,['class'=>'form-control']) !!}
   </div>
   @if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <strong class="alert-link">{{ $error }}!</strong>
        @endforeach
    </div>
    @endif
   <div class="form-group">
        {!! Form::label('HP','馬力') !!}
        {!! Form::text('HP',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
       {!! Form::label('CC','CC數') !!}
       {!! Form::text('CC',null,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::submit('傳送',['class'=>'btn btn-success form-control']) !!}
   </div>
{!! Form::close() !!}
</div>



@endsection
