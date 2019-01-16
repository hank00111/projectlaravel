@extends('layouts.app')

@section('content')
<h1>CC</h1>
<div class="container" style="font-size: 17px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="background-color: #fff; padding: 10px; margin-top: 20px;">
                <div style="margin-top: 20px;"></div>

                <div class="">
                    <li class="cbtn">
                        <a href="{{ route('cc.create') }}" class="btn btn-outline-dark form-control  " style="margin-top: 20px; margin-bottom: 20px;">新增</a>

                    </li>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                    
                    <table class="table table-hover" style="text-align: center;" border="1">
                        <thead>
                            <th scope="col">排氣量編號</th>
                            <th scope="col">排氣量</th>
                            <th scope="col"></th>
                        </thead>
   

                    @foreach ($cc as $te)
                           
                            <tr>
                                <td>{{ $te->CCID }}</td>
                                <td>{{ $te->CCType }}</td>       
                                <td>
                                    <li class="cbtn" style="padding-top:12px;">
                                        <a href="{{ route('cc.edit', $te->CCID) }}" class="btn btn-outline-dark" style="margin-bottom: 1rem;" method="get">修改</a>
                                        {!! Form::open(['route' => ['cc.destroy', $te->CCID], 'method' => 'delete']) !!}
                                        {{Form::submit('刪除', ['class' => 'btn btn-outline-dark'])}}
                                        {!! Form::close() !!}
                                    </li>
                                </td>
                                 
                    @endforeach
                    </tr>
                    
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
