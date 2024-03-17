@if(session('success'))
    <div class="mt-3 container shadow-lg alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('danger'))
    <div class="mt-3 container shadow-lg alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
