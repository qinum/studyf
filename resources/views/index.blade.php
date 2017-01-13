@extends('layouts.default')

@section('title', 'index2')

@section('content')
<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>StudyFinance</h1>
        <h3>zu unserer Web-Applikation</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <p>Heutzutage beziehen Studierende aus verschiedenen Quellen ihr Geld, um sich ihr Studium finanzieren
                zu können.Da gehört mal die Oma die regelmäßig einen Betrag spendet, die Eltern die evtl. einen
                monatlichen Beitrag zahlen, Bafög, Studienkredit, Nebenjob usw. Da kommt es schon mal vor, dass man
                schnell den Überblick verliert und es in einem Monat drunter und drüber geht.</p>

            <p>Für dieses Problem haben wir hier die Lösung. Auf StudyFinance kannst du verschiedene
                Einnahmen bzw. Ausgaben erfassen und deine ganzen Finanzen im Überblick behalten. Auch geplante Buchungen,
                wie z.B. ein Geburtstag in zwei Wochen, kannst du dir vormerken um genug Geld beiseite zu haben damit ja auch nichts
                schiefläuft und alles reibungslos abläuft :) :) </p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img id="logoIndex" src="{{asset('img/Logo2.png')}}"/>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Registrierung</h2>
            <p>Um unseren Dienst nutzen zu können, muss du dich auf unserer Webseite einloggen. Bitte klicke dafür
                einfach den Login Button, falls du noch nicht registriert bist, muss du dich mit deinem Namen, Alter und
                deiner Email auf unserer Webseite registrieren.</p>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
@endsection