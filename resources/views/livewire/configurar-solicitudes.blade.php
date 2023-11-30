<div>
    @if ($select==1)
        @include("configuracionStep1")
    @elseif($select==2)
        @include("configuracionStep2")
    @endif
    @include('asignar-revisores-modal')
</div>
