<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4>Error !</h4>

                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if (\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4>Success !</h4>

                    {{ \Illuminate\Support\Facades\Session::get('success') }}
                </div>
            @endif
        </div>
    </div>
</div>