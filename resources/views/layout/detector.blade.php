
@extends('admin.admin')
 
@section('title','Detector')

@section('content')
 
    <div>
    <livewire:detector-show>
    </div>
 
@endsection
 
@section('script')
<script>
        window.addEventListener('close-modal', event => {
        $('#detectorModal').modal('hide');
        $('#updatedetectorModal').modal('hide');
        $('#deletedetectorModal').modal('hide');
        $('.modal-backdrop').remove();
        
        location.reload();
        
    });
</script>
@endsection