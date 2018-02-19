@extends('layouts.master')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="first-slide"
                     src="/pictures/21.jpg"
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="homepageHeadings">Prijava</h1>
                        <p class="homepageDescriptions">Već imaš profil? Onda znaš sve!</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="/employee/login" role="button">Prijava honorarca</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-lg btn-outline-secondary" href="/employer/login" role="button">Prijava poslodavca</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                     src="/pictures/5.jpg"
                     alt="Second slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="homepageHeadings">Registracija honorarca</h1>
                        <p class="homepageDescriptions">Želiš li unovčiti svoje slobodno vrijeme i znanje? Na pravom si
                            mjestu!</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="/employee/register" role="button">Registriraj se</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide"
                     src="/pictures/2.jpg"
                     alt="Third slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="homepageHeadings">Registracija poslodavca</h1>
                        <p class="homepageDescriptions">Neuspješno tražite kvalitetne radnike? Mi smo tu da Vam
                            pomognemo.</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="/employer/register" role="button">Registriraj se</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="/pictures/11.png"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Senior Swift developer</h2>
                <p>Poliglot mobile-developmenta. Elokventan u gotovo svim modernim
                    jezicima i spreman na nove
                    izazove. </p>
                <p><a class="btn btn-secondary" href="#" role="button" onclick="alert('Za pristup aplikaciji potrebno se prijaviti u sustav')">Vidi moj profil</a></p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="/pictures/6.jpg"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Junior Java developer</h2>
                <p>Zdravo, kolege i budući poslodavci. Imam višegodišnje
                    iskustvo u radu u Javi i vješt sam u C#-u.
                    Hitno tražim posao!</p>
                <p><a class="btn btn-secondary" href="#" role="button" onclick="alert('Za pristup aplikaciji potrebno se prijaviti u sustav')">Vidi moj profil</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="/pictures/8.png"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>CodeExpert, Inc</h2>
                <p>Pozdrav! Direktor sam ugledne Zagrebačke firme,
                    te upravo poslujemo s nekolicinom stranih
                    klijenata na unosnim projektima.</p>
                <p><a class="btn btn-secondary" href="#" role="button" onclick="alert('Za pristup aplikaciji potrebno se prijaviti u sustav')">Vidi naš profil</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Gotovo je sa traženjem posla.<span
                            class="text-muted"> Sad on traži tebe!</span></h2>
                <p class="lead">Jednom kad nastane spoj između tebe i poslodavca, na mail ti
                    dolazi ponuda za posao. Dakle, nešto kao dating aplikacija samo što zarađuješ
                    novce umjesto da ih trošiš. Sjajno, zar ne?</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto rounded" src="/pictures/19.jpg"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 push-md-5">
                <h2 class="featurette-heading">Radi gdje god želiš, kad god želiš.<span
                            class="text-muted"> Ne vjeruješ?</span></h2>
                <p class="lead">Na skijanju, plaži ili u autobusu. Ujutro, popodne ili uvečer.</p>
            </div>
            <div class="col-md-5 pull-md-7">
                <img class="featurette-image img-fluid mx-auto rounded" src="/pictures/14.png"
                     alt="Generic placeholder image">
            </div>
        </div>


        <hr class="featurette-divider">


        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><span class="text-muted">Šah-mat.</span></h2>
                <p class="lead">Naravno, za svaki odrađeni posao bit ćeš plaćen u skladu s ugovorom.
                    Osim toga, ovisno o kvaliteti odrađenog posla odnosno o poslodavčevoj recenziji, raste ti
                    rejting, a zajedno s njim i šanse za novo zaposlenje. Genijalno!</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto rounded" src="/pictures/10.png"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
@endsection