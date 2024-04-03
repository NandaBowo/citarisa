
@extends('admin.admin')
 
@section('title','User')

@section('content')
 
    <div>
    <livewire:user-show>
    </div>
 
@endsection
 
@section('script')
<script>
        window.addEventListener('close-modal', event => {
        $('#sadminModal').modal('hide');
        $('#updatesadminModal').modal('hide');
        $('#deletesadminModal').modal('hide');
        $('.modal-backdrop').remove();
        
        location.reload();
        
    });
</script>
@endsection