<div>
    @if ($select==1)
        @include("solicitudesList")
    @elseif($select==2)
        @include("verSolicitud")
    @endif
    @include('acepta-modal')
    @include('rechazar-modal')
</div>
