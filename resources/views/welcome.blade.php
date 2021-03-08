@extends('layouts.app')

@section('content')
    <div id="root">
        <div class="slider">
            <div class="prev">
                <i @click="immagine_precedente" class="fas fa-arrow-left fa-2x"></i>
            </div>
            <div class="images">
                <img :src="immagine[posizione_immagine]" alt="">
                <div class="circles">
                    <i v-for="(img, posizione) in immagine"
                        v-bind:class="posizione == posizione_immagine ? 'active' : 'null'"
                        class="fas fa-circle"></i>
                </div>
            </div>
            <div class="next">
                <i @click="immagine_successiva" class="fas fa-arrow-right fa-2x"></i>
            </div>
        </div>

        <section>
            <h1>STATISTICHE</h1>
        </section>

        <section>
            <h1>FRASE</h1>
        </section>

        <section>
            <h1>COMPETENZE</h1>
        </section>
    </div>
@endsection
