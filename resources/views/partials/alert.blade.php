<div class="row">
    <div class="col-sm-12">
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>
</div>