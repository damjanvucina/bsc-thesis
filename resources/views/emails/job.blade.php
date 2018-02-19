<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/rad.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
Poštovani {{$receiver->email . ', '}}
<br><br>
Korisnik {{$sender->email}} se javio na vaš oglas za posao, te ga zanima potencijalna suradnja i zapošljavanje.<br>
Molimo vas da se ukoliko ste zainteresirani javite njemu na mail. <br><br>
U nastavku poruke slijedi korisnikov profil te oglas na koji se dotični prijavio.

<div class="card text-center">

    <?php
    $sender = \DB::table('employees')->where('id', '=', $sender->id)->first();
    ?>
    <div class="card-header">
        {{\App\Jobtype::where('id', '=', $sender->jobtype_id)->pluck('name')->first()}}
    </div>

    <div class="card-block">
        <h4 class="card-title">{{$sender->name . ' ' . $sender->surname }}</h4>
        <p class="card-text">{{$sender->about }}</p>

        <hr>

        <div class="row">
            <div class="col-md-4">Starost:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">
                {{$sender->age}}
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">Grad:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">
                {{\App\User::where('id', '=', $sender->id)->pluck('town_id')->first() }}
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">Obrazovanje:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">
                {{$sender->school}}
            </div>
        </div>

        <hr>


        <div class="row">
            <div class="col-md-4">Telefon:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">
                {{$sender->phone}}
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">Ocjena:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">{{
                                        number_format(\DB::table('reviews')
                                        ->where('reviewee', '=', $sender->id)->avg('grade'), 2)}}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">Broj glasova:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">{{\DB::table('reviews')
                                        ->where('reviewee', '=', $sender->id)->count()}}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-4">Kontakt:</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"><p
                        class="card-text">
                    {{\App\User::where('id', '=', $sender->id)->pluck('email')->first()}}
                </p>
            </div>
        </div>


    </div>

    <div class="card-footer text-muted">
        {{ 'Profil stvoren: ' .\Carbon\Carbon::parse($sender->created_at)->format('d.m.Y.')  }}
    </div>
</div>

<br>
<hr>
<br>

<div class="card text-center">
    <div class="card-header">
        {{$job->jobtype->name}}
    </div>
    <div class="card-block">
        <a href="/employer/employers/{{$job->employer->id }}"><h4 class="card-title">{{$job->employer->name }}</h4></a>
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

    </div>
    <div class="card-footer text-muted">
        {{'Oglas stvoren: ' . \Carbon\Carbon::parse($job->created_at)->format('d.m.Y.')  }}
    </div>
</div>

<br><hr>
Srdačan pozdrav,<br>
{{ config('app.name') }}
</body>
</html>

