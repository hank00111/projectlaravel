@extends('layouts.app')

@section('content')
<h1>{{ __('Create baiku') }}</h1>
{{ bs()->input('text', 'username', '吳弘凱')->placeholder('請填入姓名') }}
@endsection
