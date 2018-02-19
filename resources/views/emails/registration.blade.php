@component('mail::message')
# Dobrodošli, {{$user->email}}!<hr><br>

Zahvaljujemo Vam na registraciji na našu aplikaciju te se iskreno nadamo da će Vam naša aplikacija omogućiti ono što tražite.
<br><br>
Gotovo je sa traženjem posla, sad on traži Vas!
@component('mail::panel', ['url' => 'www.lansirajme.hr'])
    Registriranih honoraraca: <span class="badge">{{\App\Employee::all()->count()}}</span><hr>
    Registriranih poslodavaca: <span class="badge">{{\App\Employer::all()->count()}}</span><hr>
    Objavljenih poslova: <span class="badge">{{\App\Job::all()->count()}}</span>
@endcomponent

Srdačan pozdrav,<br>
{{ config('app.name') }}
@endcomponent
