@if(session('success'))
    <div class="msg alert alert-success alert-block">
        <strong>{{ session('success') }}</strong>
    </div>
@endif