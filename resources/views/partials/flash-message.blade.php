@if(session()->has('success'))
    <div class="alert alert-success">
        {!! session()->get('success') !!}
    </div>

@elseif(session()->has('warning'))
    <div class="alert alert-warning">
        {!! session()->get('warning') !!}
    </div>

@elseif($errors->any())
    <div class="alert alert-danger">
        {!! $errors->first() !!}
    </div>
@endif
