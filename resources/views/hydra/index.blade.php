@extends('layout.hydra')
 
@section('content')
 
    <div>
        <livewire:hydra-show>
    </div>
 
@endsection
 
@section('script')
<script>

    window.addEventListener('close-modal', event => {
 
        $('#hydraModal').modal('hide');
        $('#updateHydraModal').modal('hide');
        $('#deleteHydraModal').modal('hide');
    })
</script>
@endsection