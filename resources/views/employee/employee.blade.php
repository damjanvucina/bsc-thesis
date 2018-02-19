<div class="card text-center">
    <div class="card-header">
        {{\App\Jobtype::where('id', 'like', $employee->jobtype_id)->pluck('name')->first()}}
    </div>
    <div class="card-block">
        <h4 class="card-title"> {{$employee->name . ' ' . $employee->surname}}</h4>
        <h5 class="card-subtitle mb-2 text-muted"> <span class="badge badge-info">{{
                                        number_format(\DB::table('reviews')
                                        ->where('reviewee', '=', $employee->id)->avg('grade'), 2)}}</span></h5>
        <p class="card-text">{{\App\User::where('id', '=', $employee->id)->pluck('town_id')->first() }}</p>
        <p class="card-text">{{$employee->about }}</p>
        <a href="/employer/employees/{{$employee->id}}" class="btn btn-outline-info">Detalji</a>
    </div>
    <div class="card-footer text-muted">
        {{'Profil stvoren: ' . $employee->created_at->format('d.m.Y.')  }}
    </div>
</div>
