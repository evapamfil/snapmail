@extends('layouts.app')

@section('content')

    <div class="column is-half is-offset-one-quarter">

        <section class="section">
            <h2 class="">Lien du message :</h2>
            <a href="http://127.0.0.1:8000/message/{{ $key }}">Voir le message de {{ $email }}</a>
        </section>
    </div>


@endsection