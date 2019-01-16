@extends('layouts.app')

@section('content')

<div class="container" style="font-size: 17px;">
    <div class="row justify-content-center" style="background-color: rgb(230, 230, 230);">
        <div class="col-md-8">
            <div class="" style="background-color: #FCFAF2; padding: 10px; margin-top: 20px;">
                <div style="margin-top: 20px;"></div>

                <div class="">
                    <li class="cbtn">
                        <a href="{{ route('datatables.index') }}" class="btn btn-outline-dark form-control  " style="margin-top: 5px;">DataTable 版</a>
                        <a href="{{ route('baiku.create') }}" class="btn btn-outline-dark form-control  " style="margin-top: 20px; margin-bottom: 20px;">新增</a>
                    </li>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                    
                    <table class="table table-hover" style="text-align: center;">
                        <thead>
                            <th scope="col">編號</th>
                            <th scope="col">廠牌</th>
                            <th scope="col">年份</th>
                            <th scope="col">車型</th>
                            <th scope="col">馬力</th>
                            <th scope="col">排氣量</th>
                            <th scope="col"></th>
                        </thead>
   

                    @foreach ($test as $te)
                           
                            <tr>
                                <td>{{ $te->id }}</td>
                                <td>{{ $te->raberuType }}</td>       
                                <td>{{ $te->year }}</td>
                                <td>{{ $te->model }}</td>
                                <td>{{ $te->HP }}</td>
                                <td>{{ $te->CC }}</td>
                                <td>
                                    <li class="cbtn" style="padding-top:12px;">
                                        <a href="{{ route('baiku.edit', $te->id) }}" class="btn btn-outline-dark" style="margin-bottom: 1rem;" method="get">修改</a>
                                        {!! Form::open(['route' => ['baiku.destroy', $te->id], 'method' => 'delete']) !!}
                                        {{Form::submit('刪除', ['class' => 'btn btn-outline-dark'])}}
                                        {!! Form::close() !!}
                                    </li>
                                </td>
                                 
                    @endforeach
                    </tr>
                    
                    </table>
                    <div class="Page navigation example pagination justify-content-center">
                        {{ $test->links() }}
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
