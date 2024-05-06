<div class="card h-100 shadow rounded-4">
    @if($project->getCoverPath())
        <img class="img-fluid p-2 w-100" src="{{ $project->getCoverUrl() }}" alt="{{ $project->title }}"/>
    @else
        <img class="img-fluid p-2 w-100" src="{{ asset('assets/img/project.png') }}" alt="Projet"/>
    @endif
    <div class="card-body">
        <h4 class="card-title h-50">{{ $project->title }}</h4>
        <p class="card-text mb-4 h-50">{{ $project->description }}</p>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                <a class="btn btn-primary" href="{{ route('projects.show', ['period' => $period, 'category' => $project->category, 'project' => $project]) }}" target="_blank">Voir</a>
            </div>
            <small class="text-body-secondary">{{ $project->category->name }}</small>
        </div>
    </div>
</div>
