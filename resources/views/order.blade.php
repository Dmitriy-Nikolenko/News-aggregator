@extends('layouts.main')

@section('title', 'Order')

@section('content')

    <h1>Заказ</h1>
    @if(!empty($status) && $status)
        <div class="alert alert-success" role="alert">
            Форма заказа успешно отправлена.
        </div>
    @endif

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="user_orders">Имя заказчика</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Введите ваше имя" required>
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Введите ваш телефон" required>
                </div>
                <div class="form-group">
                    <label for="email">Email адрес</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Введите email адрес" required>
                </div>
                <div class="form-group">
                    <label for="info">Информация которую хотите получить</label>
                    <textarea class="form-control" id="info" name="info" rows="7" required></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <button type="submit" name="ok" class="btn btn-block" style="background-color: #3AB5D0">Отправить</button>
                        <a href="/" class="btn btn-danger btn-block">Отмена</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
