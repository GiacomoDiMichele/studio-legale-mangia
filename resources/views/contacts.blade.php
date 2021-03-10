@extends('layouts.app')
@section('content')
    <section class="contacts">
        @if(session('flash'))
            <p>{{ session('flash') }}</p>
        @endif
        <div class="container-contacts">
            <div class="text-principal-contacts">
                <h1>Contattaci tramite mail per maggiori informazioni</h1>
            </div>
            <form class="cf" action="/contacts" method="post">
            @csrf
              <div class="half-left-cf">
                <input type="text" id="input-name" placeholder="Inserisci il tuo nome" name="name">
                <input type="email" id="input-email" placeholder="Inserisci la tua mail di contatto" name="email">
                <input type="text" id="input-subject" placeholder="Inserisci l'oggetto della mail" name="subject">
              </div>
              <div class="half-right-cf">
                <textarea name="message" type="text" id="input-message" placeholder="Inserisci la tua richiesta"></textarea>
              </div>
              <input type="submit" value="Invia" id="input-submit">
            </form>
        </div>
    </section>
@endsection
