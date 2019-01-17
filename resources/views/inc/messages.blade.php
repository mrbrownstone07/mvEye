
@if (count($errors) > 0)
@foreach($errors->all() as $er)
    <div class="alert alert-secondary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{$er}}
    </div>
@endforeach
@endif

@if (isset($ers))
    @if (count($ers) > 0)
    @foreach($ers as $er)
        <div class="alert alert-secondary alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {!! $er !!}
        </div>
    @endforeach
    @endif  
@endif


@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {!! session('success') !!}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {!! session('error') !!}
</div>    
@endif