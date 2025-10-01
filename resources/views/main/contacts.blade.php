@extends('main')
@section('content')
    <div class="container my-5">
    <h2>Контакты разработчика</h2>
    <div class="list-group">
        <a href="mailto:denisunderonov2@gmail.com" class="list-group-item list-group-item-action">
            <i class="bi bi-envelope"></i> {{ $contacts['email'] }}
        </a>
        <a href="https://t.me/denisunderonov" class="list-group-item list-group-item-action">
            <i class="bi bi-telegram"></i> {{ $contacts['tg'] }}
        </a>
    </div>
</div>
@endsection