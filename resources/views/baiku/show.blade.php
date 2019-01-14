@extends('layouts.app')

@section('contents')

    <h2>已開出之統一發票號碼的詳細資料：</h2>
    <hr>
    <table class="table table-hover" style="text-align: center;">
            <thead>
                <th scope="col">排氣量編號</th>
                <th scope="col">排氣量</th>
                <th scope="col"></th>
            </thead>


        @foreach ($cc as $te)
               
                <tr>
                    <td>{{ $te->CCID }}</td>
                  
                     
        @endforeach
        </tr>
        
        </table>
@endsection