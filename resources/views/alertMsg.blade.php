@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <i class="icon fas fa-check"></i> <b>{{Session::get('success')}}</b>
</div>
@endif
@if(Session::has('info'))
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Info !/h5>
        {{Session::get('info')}}
</div>
@endif
@if(Session::has('warning'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> Warning!</h5>
    {{Session::get('warning')}}
</div>
@endif
@if(Session::has('fail'))

<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    Fail!, {{Session::get('fail')}}
</div>

@endif