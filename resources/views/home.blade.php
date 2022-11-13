@extends('layouts.main')
@section('content')
    <h1>Добро пожаловать!</h1>
    <h4>Новые заявки для города:</h4>
    <ul>
        <?php foreach($cities as $city): ?>
        <li> <?= $city->text ?> </li>
        <?php endforeach; ?>
    </ul>
@endsection
