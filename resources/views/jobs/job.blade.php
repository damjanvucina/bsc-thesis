<div class="card text-center">
    <div class="card-header">
        {{$job->jobType->name}}
    </div>
    <div class="card-block">
        <h4 class="card-title"><a href="/employer/employers/{{$job->employer->id }}"> {{$job->employer->name }}</a></h4>
        <p class="card-text">{{$job->employer->user->town_id }}</p>
        <p class="card-text">{{$job->description }}</p>
        <a href="/jobs/{{$job->id}}" class="btn btn-outline-info">Detalji</a>
    </div>
    <div class="card-footer text-muted">
        {{'Oglas stvoren: ' . $job->created_at->format('d.m.Y.')  }}
    </div>
</div>
