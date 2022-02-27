@extends('layouts.main')

@section('title', 'Comment')

@section('content')

    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
      <div class="row">
          <div class="col-md-8">
               <div class="form-group">
                   <label for="user">Имя пользователя</label>
                   <input type="text" class="form-control" id="user" name="user" placeholder="Введите имя пользователя" required>
               </div>
              <div class="form-group">
                  <label for="comment">Комментарий или отзыв о работе проекта</label>
                  <textarea class="form-control" id="comment" name="comment" rows="7" required></textarea>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card bg-light mb-3" style="max-width: 100%;">
                   <div class="card-body">
                       <button type="submit" name="ok" class="btn btn-dark btn-block">Сохранить</button>
                       <a href="/" class="btn btn-danger btn-block">Отмена</a>
                   </div>
              </div>
          </div>
      </div>
    </form>

@endsection
