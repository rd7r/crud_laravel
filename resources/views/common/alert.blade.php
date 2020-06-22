@if(session('status'))
    <div class="alert alert-success">
        <p class="text-center">{{ session('status') }} <i class="fa fa-check"></i></p>
    </div>
@endif