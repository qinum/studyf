<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href='{{ url('/index') }}'>StudyFinance</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href='{{ url('/index') }}'>Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Finanzen <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href='{{ url('/einnahmen') }}'>Einnahmen</a></li>
                        <li><a href='{{ url('/ausgaben') }}'>Ausgaben</a></li>
                    </ul>
                </li>
                <li><a href='{{ url('/statistik') }}'>Statistik</a></li>
                <li><a href='{{ url('/impressum') }}'>Impressum</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>