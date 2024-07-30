@if(session('success'))
    <div class="container shadow alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('danger'))
    <div class="container shadow alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
