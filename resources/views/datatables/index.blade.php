@extends('layouts.master')

@section('content')

<div class="container" style="font-size: 17px;">
    <div class="row justify-content-center" style="background-color: rgb(230, 230, 230);">
        <div class="col-md-8">
            <div style="background-color: #fff; padding: 10px; margin-top: 20px;">
                <div style="margin-top: 20px;">
                    <div class="">
                        <li class="cbtn">
                                <a href="{{ route('baiku.index') }}" class="btn btn-outline-dark form-control  " style="margin-top: 20px;">回baiku</a>
                            <a href="{{ route('baiku.create') }}" class="btn btn-outline-dark form-control  " style="margin-top: 20px; margin-bottom: 20px;">新增</a>
            
                        </li>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        
                        @endif
                        <table class="table" id="users-table">
                            <thead>
                                <tr>
                                    <th>編號</th>
                                    <th>廠牌</th>
                                    <th>年份</th>
                                    <th>車型</th>
                                    <th>馬力</th>
                                    <th>排氣量</th>
                                   
                                </tr>
                            </thead>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')

<script>
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://localhost/projectlaravel/public/datatables/getdata',
        columns: [
            {data: 'id'},
            {data: 'raberuType'},
            {data: 'year'},
            {data: 'model'},
            {data: 'HP'},
            {data: 'CC'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });   

</script>
@endpush