@if (session('status'))
    <div class="form-group">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    </div>
@endif

@if (session('error'))
    <div class="form-group">
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    </div>
@endif