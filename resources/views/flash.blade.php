@if (session('success'))
    <div id="message" class="alert alert-success">
        <span>{!! session('success') !!}</span>
    </div>
@endif
@if (session('error'))
    <div id="message" class="alert alert-danger">
        <span>{!! session('error') !!}</span>
    </div>
@endif
@if (session('warning'))
    <div id="message" class="alert alert-warning">
        <span>{!! session('warning') !!}</span>
    </div>
@endif
@if (session('info'))
    <div id="message" class="alert alert-info">
        <span>{!! session('info') !!}</span>
    </div>
@endif
