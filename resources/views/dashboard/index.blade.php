@extends('layouts.master')
@section('content')
    <div class="container">
        {!! $customerChart->container() !!}

    </div>
    
    <div class="container">
        {!! $salesChart->container() !!}

    </div>
    {!! $customerChart->script() !!}
    {!! $salesChart->script() !!}
@endsection