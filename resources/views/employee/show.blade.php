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
                    @include('layouts.links')

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
                     src="/pictures/37.jpg"
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="homepageHeadings">Tražiš dobrog poslodavca</h1>
                        <p class="homepageDescriptions">Mi ti tu možemo pomoći</p>
                        <p><a class="btn btn-lg btn-info" href="/employee/employers" role="button">Traži poslodavce</a></p>
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
                        <p><a class="btn btn-lg btn-outline-secondary" href="/employee/employees" role="button">Traži honorarce</a></p>
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
                        {{\App\Jobtype::where('id', '=', $employee->jobtype_id)->pluck('name')->first()}}
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">{{$employee->name . ' ' . $employee->surname }}</h4>
                        <p class="card-text">{{$employee->about }}</p>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Starost:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                {{$employee->age}}
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Grad:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                {{\App\User::where('id', '=', $employee->id)->pluck('town_id')->first() }}
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Obrazovanje:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                {{$employee->school}}
                            </div>
                        </div>

                        <hr>


                        <div class="row">
                            <div class="col-md-4">Telefon:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                {{$employee->phone}}
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Ocjena:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{
                                        number_format(\DB::table('reviews')
                                        ->where('reviewee', '=', $employee->id)->avg('grade'), 2)}}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Broj glasova:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">{{\DB::table('reviews')
                                        ->where('reviewee', '=', $employee->id)->count()}}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">Kontakt:</div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><p
                                        class="card-text">
                                    {{\App\User::where('id', '=', $employee->id)->pluck('email')->first()}}
                                </p>
                            </div>
                        </div>

                        <hr>

                        @if(auth()->id()== $employee->id)
                            <a href="/employee/employees/edit/{{$employee->id}}" class="btn btn-outline-info">Uredi profil</a>
                            &nbsp;&nbsp;&nbsp
                            <a href="/employee/employees/delete/{{$employee->id}}" class="btn btn-outline-info">Obriši profil</a>
                        @endif


                    </div>
                    <div class="card-footer text-muted">
                        {{ 'Profil stvoren: ' . $employee->created_at->format('d.m.Y.')  }}
                    </div>
                </div>

                <br>
                <hr>
                <br>

                <div class="form-group">
                    <input type="hidden" name="reviewee" id="reviewee" value="{{$employee->id}}">
                </div>

                <?php
                $evaluated = \DB::table('reviews')->where('reviewer', '=', auth()->id())
                    ->where('reviewee', '=', $employee->id)->count();
                ?>
                @if(auth()->user()->usertype=='employer' && $evaluated == 0)
                    <form method="post" action="/employer/employees/{employee}/reviews">

                        {{csrf_field()}}

                        <div class="form-group">
                        <textarea name="description" id="description" placeholder="Vaša recenzija:" class="form-control"
                                  required></textarea>
                        </div>

                        <div class="form-group">
                            <select name="grade" id="grade" placeholder=" Vaša ocjena:"
                                    class="r-form-1-text form-control" required>
                                <option value="" disabled selected>Odaberite ocjenu:</option>
                                <option value="5">Odličan</option>
                                <option value="4">Vrlo dobar</option>
                                <option value="3">Dobar</option>
                                <option value="2">Dovoljan</option>
                                <option value="1">Nedovoljan</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Recenziraj</button>
                        </div>


                        <div class="form-group">
                            <input type="hidden" name="reviewee" id="reviewee" value="{{$employee->id}}">
                        </div>

                    </form>

                    <br>
                    <hr>
                    <br>

                @endif

                <?php
                $reviews = \DB::table('reviews')->where('reviewee', '=', $employee->id)->latest()->get();
                ?>
                @foreach($reviews as $review )

                    <br>

                    <?php
                    $user = \App\User::where('id', '=', $review->reviewer)->first();
                    $name = \App\Employer::where('id', '=', $review->reviewer)->first()->name;
                    $grade = number_format(\DB::table('reviews')
                        ->where('reviewee', '=', $user->id)->avg('grade'), 2);
                    ?>

                    <div class="card text-center">
                        <div class="card-header">

                            {{ Carbon\Carbon::parse($review->created_at)->format('d.m.Y.')}}
                        </div>
                        <div class="card-block">

                            <h5 class="card-subtitle mb-2 text-muted"><span
                                        class="badge badge-default">{{$name}}</span> </h5>

                            <h5 class="card-subtitle mb-2 text-muted"> <span class="badge badge-info">{{$grade}}</span></h5>

                            <p class="card-text">{{$review->description}}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <p class="card-text">{{ 'Ocjena: ' . $review->grade}}</p>
                        </div>
                    </div>


                @endforeach


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
