@if($user->portofolio->template == 1)
    @include('elen-master.index')
@elseif ($user->portofolio->template == 2)
    @include('DevFolio.template.app')
@endif
