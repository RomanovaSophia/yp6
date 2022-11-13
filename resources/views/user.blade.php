@extends('layouts.main')
@section('content')
    <h1>Привет, {{ Auth::user()->name }}!</h1>
    <hr>
    <h2>Ваши заявки: </h2>
    <ul>

        <?php foreach($posts as $post): ?>
        <li>
            Текст: <?=
            $post->text
            ?>
            <br>
            Дата:<?=
            $post->created_at
            ?>
        </li>
            <br>
        <?php endforeach; ?>
    </ul>
@endsection
