@extends('layouts.master')
@section('content')

    <div class="top-content">
        <div class="container">

            <div class="row">

                <div class="col-sm-5 r-form-1-box wow fadeInLeft">
                    <div class="r-form-1-top">
                        <div class="r-form-1-top-left">
                            <h3>Registracija poslodavca</h3>
                            <p>Stvorite profil i zaboravite na neiskusne radnike, propale projekte i neispoštovane
                                rokove.</p>
                        </div>
                        <div class="r-form-1-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="r-form-1-bottom">
                        <form role="form" method="POST" action="/employer/register">

                            {{csrf_field()}}

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Naziv tvrtke"
                                       class="r-form-1-text form-control" id="name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="town" placeholder="Unesite grad"
                                       class="r-form-1-text form-control" id="town" required>
                            </div>

                            <div class="form-group">
                                <select name="jobtype" id="jobtype" placeholder=" Tip posla"
                                        class="r-form-1-text form-control" required>
                                    <option value="" disabled selected>Odaberite tip posla</option>
                                    <option value="WebAplikacije">Web Aplikacije</option>
                                    <option value="MobilneAplikacije">Mobilne Aplikacije</option>
                                    <option value="Strojarstvo">Strojarstvo</option>
                                    <option value="Elektrotehnika">Elektrotehnika</option>
                                    <option value="Telekomunikacije">Telekomunikacije</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="number" name="numemployees" placeholder="Broj zaposlenika"
                                       class="r-form-1-text form-control" id="numemployees" required>
                            </div>

                            <div class="form-group">
                                <input type="number" name="numjobs" placeholder="Broj poslova mjesečno"
                                       class="r-form-1-text form-control" id="numjobs" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="about" placeholder="Ukratko o vama"
                                       class="r-form-1-text form-control" id="about" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="  Email"
                                       class="r-form-1-text form-control" id="email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="  Šifra"
                                       class="r-form-1-password form-control" id="password" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password_confirmation" placeholder="  Potvrdi šifru"
                                       class="r-form-1-password form-control" id="password_confirmation" required>
                            </div>

                            <button type="register" class="btn btn-secondary">Registriraj me</button>

                            <p class="terms">
                                Registracijom se obvezujem na prihvaćanje i poštivanje
                                <a href="#" class="launch-modal" data-modal-id="modal-terms">Uvjeta korištenja</a>.
                            </p>

                            <hr>

                            @include('layouts.errors')

                        </form>
                    </div>
                </div>
            </div>

        </div>
        {{--<hr class="featurette-divider">--}}
    </div>

@endsection