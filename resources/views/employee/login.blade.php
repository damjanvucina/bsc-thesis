@extends('layouts.master')

@section('content')

    <div class="top-content">
        <div class="container">

            <div class="row">

                <div class="col-sm-5 r-form-1-box wow fadeInLeft">
                    <div class="r-form-1-top">
                        <div class="r-form-1-top-left">
                            <h3>Prijava honorarca</h3>
                        </div>
                        <div class="r-form-1-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="r-form-1-bottom">
                        <form role="form" method="POST" action="/employee/login">

                            {{csrf_field()}}

                            <div class="form-group">
                                <input type="email" name="email" placeholder="  Email"
                                       class="r-form-1-text form-control" id="email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="  Šifra"
                                       class="r-form-1-password form-control" id="password" required>
                            </div>

                            <button type="submit" class="btn btn-secondary">Prijavi me</button>

                            <br><br>



                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Zaboravili ste šifru?
                            </a>

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