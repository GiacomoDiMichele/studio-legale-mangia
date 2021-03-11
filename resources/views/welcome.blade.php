@extends('layouts.app')

@section('content')
    <div id="root">
        <div class="slider">
            <div class="prev">
                <i @click="immagine_precedente" class="fas fa-chevron-left"></i>
            </div>
            <div class="text-header">
                <h1>Studio legale Mangia</h1>
            </div>
            <div class="images">
                <img :src="immagine[posizione_immagine]" alt="foto-team-legale-mangia">
            </div>
            <div class="next">
                <i @click="immagine_successiva" class="fas fa-chevron-right"></i>
            </div>
        </div>

        <section class="jumbotron">
            <div class="principal-text-approfondimenti">
                <h1>UNO STUDIO LEGALE, A PESCARA, PRONTO AD AIUTARTI E DIFENDERE I TUOI DIRITTI</h1>
                <p>Ci piace esserti vicino: per questo abbiamo preparato una serie di utili approfondimenti</p>
            </div>
            <div class="container">
                <div class="section-approfondimenti">
                    <div class="singolo-approfondimento">
                        <i class="fas fa-question"></i>
                        <h5>Cosa devo fare?</h5>
                        <p>Può capitare a tutti di avere un problema legale: siamo qui per aiutarti</p>
                    </div>
                    <div class="singolo-approfondimento">
                        <i class="fas fa-balance-scale"></i>
                        <h5>Quando devo andare in causa?</h5>
                        <p>La giustizia spesso è lenta? Scopri quando è indispensabile andare dal giudice</p>
                    </div>
                    <div class="singolo-approfondimento">
                        <i class="fas fa-envelope"></i>
                        <h5>Lettera</h5>
                        <p>Una missiva ben scritta è un’arma potente: il nostro studio può aiutarti</p>
                    </div>
                    <div class="singolo-approfondimento">
                        <i class="fas fa-handshake"></i>
                        <h5>La mediazione commerciale e civile</h5>
                        <p>Uno strumento moderno ed efficace che ti consentirà di evitare il tribunale</p>
                    </div>
                    <div class="singolo-approfondimento">
                        <i class="fas fa-gavel"></i>
                        <h5>Parere legale</h5>
                        <p>Se hai un dubbio giuridico, chiamaci: un avvocato ti aiuterà a risolverlo</p>
                    </div>
                    <div class="singolo-approfondimento">
                        <i class="fas fa-laptop"></i>
                        <h5>COOKIE POLICY</h5>
                        <p>Se hai un sito web, hai l’obbligo di averne una. Ecco come possiamo aiutarti</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="statistiche">
            <div class="container">
                <div class="dati-teamlegale">
                    <div class="singolo-dato">
                        <h1>15</h1>
                        <p>I nostri Praticanti, Avvocati, Segretari</p>
                    </div>
                    <div class="singolo-dato">
                        <h1>70%</h1>
                        <p>Il dato delle udienze vinte dal nostro team legale</p>
                    </div>
                    <div class="singolo-dato">
                        <h1>15</h1>
                        <p>I nostri Praticanti, Avvocati, Segretari</p>
                    </div>
                    <div class="singolo-dato">
                        <h1>15</h1>
                        <p>I nostri Praticanti, Avvocati, Segretari</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="separator-img">
            <h1>I tuoi diritti, la nostra esperienza</h1>
            <a href="{{route('contacts')}}"> Contattaci </a>
        </section>
    </div>
@endsection
