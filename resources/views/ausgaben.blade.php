@extends('layouts.default')

@section('title', 'ausgaben')

@section('content')
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Ausgaben</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Ausgaben hinzufügen</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Betrag</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="in Euro" class="form-control input-md">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Kategorie</label>
                            <div class="col-md-4">
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">Freizeit</option>
                                    <option value="2">Miete</option>
                                    <option value="3">Verpflegung</option>
                                    <option value="4">Sonstiges</option>
                                </select>
                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="radios">Multiple Radios</label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label for="radios-0">
                                        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                        2 Wochen
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radios-1">
                                        <input type="radio" name="radios" id="radios-1" value="2">
                                        1 Monat
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textarea">Kommentar</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="textarea" name="textarea">Hier schreiben</textarea>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="button1id"></label>
                            <div class="col-md-8">
                                <button id="button1id" name="button1id" class="btn btn-success">Speichern</button>
                                <button id="button2id" name="button2id" class="btn btn-danger">Abbrechen</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>Die letzten 5 Ausgaben</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Özgür</td>
                        <td>Erden</td>
                        <td>@oe</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Ünal</td>
                        <td>Ertürk</td>
                        <td>@uee</td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Hilfe</h2>
                <p>Hier steht eine Hilfe</p>
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