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
                <h4 class="navbar-brand">Izbornik</h4>

                <ul class="list-unstyled">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <hr>
                        @if(auth()->user()->usertype=='employer')
                            {{auth()->user()->email . ', poslodavac' }}
                        @endif

                        @if(auth()->user()->usertype=='employee')
                            {{auth()->user()->email . ', honorarac' }}
                        @endif
                    @endif
                    <hr>
                    <li><a href="/employee/login" class="text-white">Prijava honorarca</a></li>
                    <li><a href="/employer/login" class="text-white">Prijava poslodavca</a></li>
                    <hr>
                    <li><a href="/employee/register" class="text-white">Registracija honorarca</a></li>
                    <li><a href="/employer/register" class="text-white">Registracija poslodavca</a></li>
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