<script>
    var counter = 1;
    var limit = 5;
    function addInput(divName) {
        if (counter == limit) {
            alert("Dosegli ste limit dodavanja " + counter + " jezika");
        }
        else {
            var newdiv = document.createElement('div');
            newdiv.innerHTML = "<div class='form-group'>" +
                "<div class='col-md-14'>" +
                "<input id='language' type='text' class='form-control' name='languages[]' placeholder='Potrebno znanje jezika'>" +
                "</div>" +
                "</div>";
            document.getElementById(divName).appendChild(newdiv);
            counter++;
        }
    }
</script>

<script>
    var counter1 = 1;
    var limit1 = 10;
    function addInput1(divName1) {
        if (counter1 == limit1) {
            alert("Dosegli ste limit dodavanja " + counter1 + " tehnologija");
        }
        else {
            var newdiv1 = document.createElement('div');
            newdiv1.innerHTML = "<div class='form-group'>" +
                "<div class='col-md-14'>" +
                "<input id='skill' type='text' class='form-control' name='skills[]' placeholder='Potrebno znanje tehnologija'>" +
                "</div>" +
                "</div>";
            document.getElementById(divName1).appendChild(newdiv1);
            counter1++;
        }
    }
</script>


@extends('layouts.master')

@section('content')
    <div class="job-content">
        <div class="container">

            <div class="row">

                <div class="col-sm-5 r-form-1-box wow fadeInLeft">
                    <div class="r-form-1-top">
                        <div class="r-form-1-top-left">
                            <h3>Uredite posao</h3>
                            <p>Trudite se biti što precizniji i
                                konkretniji kako pi privukli željeni spektar honoraraca</p>
                        </div>
                        <div class="r-form-1-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="r-form-1-bottom">

                        <form role="form" method="POST" action="/jobs/create">

                            {{csrf_field()}}

                            <div class="form-group">
                                <input value="{{$job->startdate}}"type="date" name="startdate" placeholder="  Datum početka"
                                       class="r-form-1-text form-control" id="startdate" title="Datum početka posla" required>
                            </div>

                            <div class="form-group">
                                <input value="{{$job->enddate}}"type="date" name="enddate" placeholder="  Datum završetka"
                                       class="r-form-1-text form-control" id="enddate" title="Datum završetka posla" required>
                            </div>

                            <div class="form-group">
                                <select value="{{$job->payment}}"name="payment" id="payment" placeholder=" Način plaćanja"
                                        class="r-form-1-text form-control" required>
                                    <option value="dnevno">Dnevno</option>
                                    <option value="mjesecno">Mjesečno</option>
                                    <option value="poIzvrsenomPoslu">Po izvršenom poslu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input value="{{$job->salary}}"type="number" name="salary" placeholder="  Plaća u HRK"
                                       class="r-form-1-password form-control" id="salary" required>
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<input type="number" name="requiredexperience"--}}
                            {{--placeholder="  Iskustvo u navedenom tipu posla"--}}
                            {{--class="r-form-1-text form-control" id="requiredexperience" required>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <select value="{{$job->requiredexperience}}" name="requiredexperience" id="requiredexperience"
                                        placeholder="  Iskustvo u navedenom tipu posla"
                                        class="r-form-1-text form-control" required>
                                    <option value="Iskustvo nije potrebno">Iskustvo nije potrebno</option>
                                    <option value="Nisko">Nisko</option>
                                    <option value="Srednje">Srednje</option>
                                    <option value="Visoko">Visoko</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input value="{{$job->description}}"type="text" name="description" placeholder="Kratak opis posla"
                                       class="r-form-1-text form-control" id="description" required>
                            </div>

                            <div class="form-group">

                                <div class="col-md-14">

                                    <input id="language" type="text" class="form-control" name="languages[]"
                                           placeholder="Potrebno znanje jezika" required>
                                </div>

                                <br>

                                <div id="dynamicInput">

                                </div>

                                <div class="form-group">

                                    <div class="col-md-14 col-md-offset-4">

                                        <input type="button" class="dodajGumb" value="Dodaj novi jezik"
                                               onClick="addInput('dynamicInput');">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-14">

                                    <input id="skill" type="text" class="form-control" name="skills[]"
                                           placeholder="Potrebno znanje tehnologija" required>
                                </div>

                                <br>

                                <div id="dynamicInput1">

                                </div>

                                <div class="form-group">

                                    <div class="col-md-14 col-md-offset-4">

                                        <input type="button" class="dodajGumb" value="Dodaj novu tehnologiju"
                                               onClick="addInput1('dynamicInput1');">

                                    </div>
                                </div>
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-secondary">Objavi posao</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{--<hr class="featurette-divider">--}}
    </div>
@endsection