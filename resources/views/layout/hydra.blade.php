
@extends('admin.admin')
 
@section('title','Data Hydra')

@section('content')
 
    <div>
    <livewire:hydra-show>
    </div>
 
@endsection
 
@section('script')
<script>
        window.addEventListener('close-modal', event => {
        $('#detectorModal').modal('hide');
        $('#updatehydraModal').modal('hide');
        $('#deletehydraModal').modal('hide');
        $('.modal-backdrop').remove();
        
        location.reload();
        
    });
</script>
@endsection