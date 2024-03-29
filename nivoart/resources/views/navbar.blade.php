<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Top10 Game</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/gamesoverview">Spieleübersicht <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="/spielerstellen">Spiel erstellen</a>

      <div class="searchDiv">
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('games.index') }}" method="GET" role="search">

                    <div class="input-group">
                      
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search Games" id="term">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-outline-dark" type="submit" title="Search Games">
                                <span class="fas fa-search">Suche</span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
  </div>
</nav>
</div>