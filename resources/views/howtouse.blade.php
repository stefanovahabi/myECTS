@extends('layouts.default')
@section('css')
    <title>HowToUse</title>
    <link rel="stylesheet" href="css/style_Startseite.css" type="text/css">
@endsection
@section('content')
    <div class="row" id="howtousereihe">
        <h1>How To Use</h1>

        <div class="tabbable" > <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">First Steps</a></li>
                <li><a href="#tab3" data-toggle="tab">Wie geht das?</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <p>Deine Ersten Schritte in myECTS sind grandios. Erstelle dir einen Account, verwalte deine Termin und organisiere deinen Vorlesungsplan!</p>
                </div>
                <div class="tab-pane" id="tab3">
                    <p>MyECTS ist hpts. über die Startseite konfigurierbar. Eingeloggt erscheinen dir vier Symbole, ein Orner mit einem Zahnrad, die sog. Einstellungen,
                    in welchen du deine Hochschule bzw. deinen Studiengang auswählst und im Anschluss Fächer belegen kannst. Wenn du mit einem Fach abschließt, kannst du es bei den
                    Einstellung mit einer Note abmelden. Des Weiteren kannst du einmalig den Kalender für dich aktivieren. Die Stoppuhr dient dafür, dass du beim Lernen die Zeit messen und im Anschluss in dein ECTS-Konto buchen kannst.
                    Das Statistik-Symbol ist dein Zugang zu den Statistiken zu deinen Fächern, des Weiteren ist hier der Button zum ECTS-Konto hinterlegt. Der Veranstaltungsplan ist dein per Drag N Drop konfigurierter Stundenplan</p>
                </div>


            </div>
        </div>



    </div>
@endsection
