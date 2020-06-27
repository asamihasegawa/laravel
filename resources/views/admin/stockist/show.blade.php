@extends('admin.common')
@section('title', '詳細記事')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    @section('maincopy', '詳細記事')

    @if($item !== '')
        <div class="headcopy">name</div><hr>
        <div class="text">{{ $item->name }}</div>

        <div class="headcopy">tel</div><hr>
        <div class="text">{{ $item->tel }}</div>
        
        <div class="headcopy">address</div><hr>
        <div class="text">{{ $item->address }}</div>
    @endif

    <a href="/admin/stockist"><img src="{{ asset('img/edit.svg') }}" class="add" alt="topへ"></a>
@endsection
