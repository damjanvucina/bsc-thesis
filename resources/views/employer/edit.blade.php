@extends('layouts.master')

@section('content')

    <div class="top-content">
        <div class="container">

            <div class="row">

                <div class="col-sm-5 r-form-1-box wow fadeInLeft">
                    <div class="r-form-1-top">
                        <div class="r-form-1-top-left">
                            <h3>Uređivanje profila poslodavca</h3>
                            <p>Uredite profil kako bi što bolje ocrtali čime se bavite i kakvim kvalitetama težite.</p>
                        </div>
                        <div class="r-form-1-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="r-form-1-bottom">
                        <form role="form" method="POST" action="/employer/register">

                            {{csrf_field()}}

                            <div class="form-group">
                                <input value="{{$employer->name}}" type="text" name="name" placeholder="Naziv tvrtke"
                                       class="r-form-1-text form-control" id="name" required>
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<select name="city" id="city" placeholder=" Grad"--}}
                            {{--class="r-form-1-text form-control" required>--}}
                            {{--<option value="" disabled selected>Odaberite grad</option>--}}
                            {{--<option value="Zagreb">Zagreb</option>--}}
                            {{--<option value="Split">Split</option>--}}
                            {{--<option value="Rijeka">Rijeka</option>--}}
                            {{--<option value="osijek">Osijek</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <input value="{{$town_id}}" type="text" name="town" placeholder="Unesite grad"
                                       class="r-form-1-text form-control" id="town" required>
                            </div>

                            <div class="form-group">
                                <select value="{{$jobtype}}" name="jobtype" id="jobtype" placeholder=" Tip posla"
                                        class="r-form-1-text form-control" required>
                                    <option value="WebAplikacije">WebAplikacije</option>
                                    <option value="MobilneAplikacije">MobilneAplikacije</option>
                                    <option value="Strojarstvo">Strojarstvo</option>
                                    <option value="Elektrotehnika">Elektrotehnika</option>
                                    <option value="Telekomunikacije">Telekomunikacije</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input value="{{$employer->numemployees}}" type="number" name="numemployees" placeholder="Broj zaposlenika"
                                       class="r-form-1-text form-control" id="numemployees" required>
                            </div>

                            <div class="form-group">
                                <input value="{{$employer->numjobs}}" type="number" name="numjobs" placeholder="Broj poslova mjesečno"
                                       class="r-form-1-text form-control" id="numjobs" required>
                            </div>

                            <div class="form-group">
                                <input value="{{$employer->about}}" type="text" name="about" placeholder="Ukratko o vama"
                                       class="r-form-1-text form-control" id="about" required>
                            </div>

                            <div class="form-group">
                                <input value="{{$email}}" type="email" name="email" placeholder="  Email"
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