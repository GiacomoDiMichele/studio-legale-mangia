@extends('layouts.app')
@section('content')
    <section class="contacts">
        @if(session('flash'))
            <p>{{ session('flash') }}</p>
        @endif
        <form class="cf" action="/contacts" method="post">
        @csrf
          <div class="half left cf">
            <input type="text" id="input-name" placeholder="Name" name="name">
            <input type="email" id="input-email" placeholder="Email address" name="email">
            <input type="text" id="input-subject" placeholder="Subject" name="subject">
          </div>
          <div class="half right cf">
            <textarea name="message" type="text" id="input-message" placeholder="message"></textarea>
          </div>
          <input type="submit" value="Submit" id="input-submit">
        </form>
    </section>
@endsection
