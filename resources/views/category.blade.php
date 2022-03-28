@extends('layouts.main')

@section('title', 'Category')

@section('content')

    @php $counter = 0; @endphp
    @foreach($category as $item)
        @if($counter % 3 == 0)
            <div class="row mb-3">
                @endif
                <div class="col-md-4">
                    <div class="card mx-auto" style="width: 18rem; height: 520px">
                        <img src="{{ $item->photo }}" class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="{{ route('categoryNews', ['category' => $item->id])}}" class="btn"
                               style="position: absolute; bottom: 20px; background-color: #3AB5D0">Перейти к новостям</a>
                        </div>
                    </div>
                </div>
                @php $counter++ @endphp
                @if($counter % 3 == 0)
            </div>
        @endif
    @endforeach
@endsection
