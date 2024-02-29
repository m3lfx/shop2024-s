@extends('layouts.master')
@section('content')
    <div class="container">
        {!! $customerChart->container() !!}

    </div>
    {!! $customerChart->script() !!}
@endsection