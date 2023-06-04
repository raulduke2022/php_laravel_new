@extends('layouts.base')
@section('title', 'Удаление объявления :: Мои объявления')
@section('main')
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input name="title" id="txtTitle" class="form-control" value="{{ $bb->title }}">
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea name="content_" id="txtContent" class="form-control">{{ $bb->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <input name="price" id="txtPrice" class="form-control" value="{{ $bb->price }}">
        </div>
        <input type="submit" class="btn btn-danger" value="Удалить">
@endsection
