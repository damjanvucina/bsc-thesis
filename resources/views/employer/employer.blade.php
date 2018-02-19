<div class="card text-center">
    <div class="card-header">
        {{\App\Jobtype::where('id', 'like', $employer->jobtype_id)->pluck('name')->first()}}
    </div>
    <div class="card-block">
        <h4 class="card-title"> {{$employer->name }}</h4>
        <h5 class="card-subtitle mb-2 text-muted"> <span class="badge badge-info">{{
                                        number_format(\DB::table('reviews')
                                        ->where('reviewee', '=', $employer->id)->avg('grade'), 2)}}</span></h5>
        <p class="card-text">{{\App\User::where('id', '=', $employer->id)->pluck('town_id')->first() }}</p>
        <p class="card-text">{{$employer->about }}</p>
        <a href="/{{auth()->user()->usertype}}/employers/{{$employer->id}}" class="btn btn-outline-info">Detalji</a>
    </div>
    <div class="card-footer text-muted">
        {{'Profil stvoren: ' . $employer->created_at->format('d.m.Y.')  }}
    </div>
</div>
