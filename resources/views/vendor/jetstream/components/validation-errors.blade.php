@if ($errors->any())
    <div {{ $attributes }}>

        <div class="alert alert-warning">
           {{ __('Whoops! Something went wrong.') }}
        </div>
        <div class="font-medium text-red-600"></div>

        <ul class="list-group">
            @foreach ($errors->all() as $error)

                <li class="list-group-item">
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ $error }}</strong>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif
