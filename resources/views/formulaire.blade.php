@extends('layouts.app')

@section('content')


<div class="column is-half is-offset-one-quarter">

    <section class="section">
        <h3 class="title is-3">Snapmail</h3>


        <form action="/create" method="post">
            {{csrf_field()}}

            <div class="field">

                <div class="control">
                    <input class="input @if ($errors->has('name')) is-danger @endif" type="email"
                           placeholder="Votre email" name="email" value="{{old('email')}}" >
                </div>

                <div class="control" style="margin-top: 20px;">
                    <textarea class="textarea @if ($errors->has('message')) is-danger @endif" name="message" placeholder="Votre message"></textarea>
                </div>
            </div>


            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Envoyer</button>
                </div>
            </div>

        </form>

    </section>

</div>

@endsection
