@if(auth()->user()->usertype=='employer')
<a class="text-white" href="/employer/employers/{{auth()->id()}}">{{auth()->user()->email}}</a>{{ ', poslodavac' }}
@endif

@if(auth()->user()->usertype=='employee')
    <a class="text-white" href="/employee/employees/{{auth()->id()}}">{{auth()->user()->email}}</a>{{ ', honorarac' }}</a>
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