 @php
    $yt = option("yt");

    $fb = option("fb"); ;
@endphp

<div class="icon">
    <a class="icon__iwrapper" target="_blanc" href="{!! $fb !!}" ><i class="fab fa-facebook-f icon__fb"></i></a>
    <a class="icon__iwrapper" target="_blanc" href="{!! $yt !!}" > <i class="fab fa-youtube icon__yt"></i></a>
</div>
