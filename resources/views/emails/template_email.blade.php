@extends('layouts.app')

@section('content')

    <div class="column is-half is-offset-one-quarter">

        <section class="section">
            <h1>Voici le message de {{ $email }} : </h1>
            <p>Message : {!! $content !!}</p>
        </section>

    </div>

@endsection