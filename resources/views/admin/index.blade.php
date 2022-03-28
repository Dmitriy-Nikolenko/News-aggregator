@extends('layouts.main')

@section('title', 'Admin')

@section('content')
    <div class="mx-auto" style="margin-top: 300px; margin-bottom: 300px; text-align: center">
        <a href="{{ route('orders.index') }}" class="btn btn-lg" style="background-color: #3AB5D0">Заказы</a>
        <a href="{{ route('feedback.index') }}" class="btn btn-lg" style="background-color: #3AB5D0">Комментарии</a>
        <a href="{{ route('news.index') }}" class="btn btn-lg" style="background-color: #3AB5D0">Новости</a>
        <a href="{{ route('category.index') }}" class="btn btn-lg" style="background-color: #3AB5D0">Категории</a>
        <a href="{{ route('source.index') }}" class="btn btn-lg" style="background-color: #3AB5D0">Источники</a>
    </div>
@endsection
