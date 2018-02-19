<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>lansirajme.hr</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/rad.css" rel="stylesheet">
</head>
<body>


<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="navbar-brand">O nama</h4>
                <hr>
                <p class="text-muted">Nakon poduljeg i detaljnog razmišljanja o problemima današnjice, u
                    vrijeme kad je nezaposlenost iznimno aktualna tema, ova aplikacija je stvorena kako
                    bi omogućila svojim korisnicima unovčavanje vlastitih talenata kroz razne honorarne
                    poslove.<br>Nadalje, namijenjena je isključivo IT-jevcima te joj takav inicijalni filter,
                    iako možda na prvi pogled nepotreban obzirom da limitira tržište, istovremeno kao
                    specijalizacija omogućuje osobitu prednost nad konkurentnim aplikacijama.


                </p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="navbar-brand">Kontakt</h4>
                <hr>
                <ul class="list-unstyled">
                    @if(auth()->user()->usertype=='employer')
                        {{auth()->user()->email . ', poslodavac' }}
                    @endif

                    @if(auth()->user()->usertype=='employee')
                        {{auth()->user()->email . ', honorarac' }}
                    @endif
                    <hr>
                    @if(auth()->user()->usertype=='employer')
                        <li><a href="/jobs/create" class="text-white">Objavi posao</a></li>
                        <li><a href="/employer/index" class="text-white">Traži poslove</a></li>
                        <li><a href="/employer/employees" class="text-white">Traži honorarce</a></li>
                        <li><a href="/employer/employers" class="text-white">Traži poslodavce</a></li>
                        <li><a href="/employer/logout" class="text-white">Odjavi se</a></li>
                    @endif

                    @if(auth()->user()->usertype=='employee')
                        <li><a href="/employee/index" class="text-white">Traži poslove</a></li>
                        <li><a href="/employee/employees" class="text-white">Traži honorarce</a></li>
                        <li><a href="/employee/employers" class="text-white">Traži poslodavce</a></li>
                        <li><a href="/employee/logout" class="text-white">Odjavi se</a></li>
                    @endif

                    <hr>
                    <li><a href="#" class="text-white">Facebook</a></li>
                    <li><a href="#" class="text-white">Twitter</a></li>
                    <li><a href="#" class="text-white">Email</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-inverse bg-inverse">
    <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">lansirajme.hr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>

<div class="blueContainer">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="first-slide"
                     src="/pictures/13.png"
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="homepageHeadings">Nitko vam se ne javlja na oglas?</h1>
                        <p class="homepageDescriptions">Uredite objavu kako bi privukla što veći broj posjetitelja</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="#" role="button">Uredi posao</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                     src="/pictures/36b.jpg"
                     alt="Second slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="homepageHeadings">Ne uspijevate pronaći kvalitetne radnike?</h1>
                        <p class="homepageDescriptions">Mi smo tu da vam pomognemo!</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="#" role="button">Traži honorarce</a></p>
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

    <div class="container">

        <div class="row">
            <div class="col-sm-8 blog-main">

                <div class="card text-center">
                    <div class="card-header">
                        {{$job->jobtype->name}}
                    </div>
                    <div class="card-block">
                        <a href="/employer/employers/{{$job->employer->id }}"><h4
                                    class="card-title">{{$job->employer->name }}</h4></a>
                        <p class="card-text">{{$job->description }}</p>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Grad:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                    <?php
                                    $city = \DB::table('users')
                                        ->where('id', '=', $job->employer_id)
                                        ->pluck('town_id')->first();
                                    echo $city;
                                    ?></p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Posao objavljen:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{\Carbon\Carbon::parse($job->created_at)->format('d.m.Y.')}}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Planirani početak rada:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{\Carbon\Carbon::parse($job->startdate)->format('d.m.Y.')}}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Planirani kraj rada:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{\Carbon\Carbon::parse($job->enddate)->format('d.m.Y.') }}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Tip plaćanja:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{$job->payment}}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Plaća:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{$job->salary}}{{ ' kn' }}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Potrebno iskustvo:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{$job->requiredexperience}}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Potrebno znanje jezika:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                    <?php
                                    $idlanguages = \DB::table('job_language')->where('job_id', '=', $job->id)->pluck('language_id')->toarray();
                                    foreach ($idlanguages as $idlanguage):
                                        echo \DB::table('languages')->where('id', '=', $idlanguage)->pluck('name')->first() . "<br>";

                                    endforeach
                                    ?>

                                </p>
                            </div>
                        </div>

                        <hr>


                        <div class="row">
                            <div class="col-md-4">Potrebno znanje tehnologija:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                    <?php
                                    $idskills = \DB::table('job_skill')
                                        ->where('job_id', '=', $job->id)
                                        ->pluck('skill_id')->toarray();
                                    foreach ($idskills as $idskill):
                                        echo \DB::table('skills')
                                                ->where('id', '=', $idskill)
                                                ->pluck('name')->first() . "<br>";

                                    endforeach
                                    ?>

                                </p>
                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Kontakt:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                    <?php
                                    $mail = \DB::table('users')->
                                    where('id', '=', $job->employer_id
                                    )->pluck('email')->first();

                                    echo $mail;

                                    ?>

                                </p>
                            </div>
                        </div>


                        <hr>


                        @if(auth()->user()->usertype=='employer' && auth()->id()== $job->employer_id)
                            <a href="/jobs/edit/{{$job->id}}" class="btn btn-outline-info">Uredi posao</a>
                            &nbsp;&nbsp;&nbsp
                            <a href="/jobs/delete/{{$job->id}}" class="btn btn-outline-info">Obriši posao</a>
                        @endif
                        @if(auth()->user()->usertype=='employee')
                            <form role="form" method="POST" action="/employee/mail">
                                {{csrf_field()}}


                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">Pošalji mail</button>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="receiver" id="receiver" value="{{\DB::table('users')->
                                    where('id', '=', $job->employer_id
                                    )->pluck('email')->first()}}">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="job" id="job" value="{{$job->id}}">
                                </div>

                            </form>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        {{'Oglas stvoren: ' . $job->created_at->format('d.m.Y.')  }}
                    </div>
                </div>
                <br><br><br>
            </div><!-- /.blog-main -->

            @include('jobs.sidebar')

        </div><!-- /.row -->
    </div>
</div>

<footer>
    <div class="container marketing">
        <br>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy;2017.-3017. Damjan Vučina &middot; <a href="#"> Privacy </a> &middot; <a href="#"> Terms </a>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="public/js/rad.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
