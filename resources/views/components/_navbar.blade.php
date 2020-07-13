<div class="nav-height"></div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"> <h2>Buondente!</h2> </a>
            <button class="navbar-toggler" type="button"    data-toggle="collapse"       data-target="#navbarNav"  aria-controls="navbarNav" aria-expanded="false"    aria-label="Toggle    navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('index')}}">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('work')}}">Cosa Facciamo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
                </li>
            </div>
        </div>
    </nav>