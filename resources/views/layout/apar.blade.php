

@extends('admin.admin')
 
@section('title','Apar')

@section('content')
 
    <div>
    <livewire:apar-show>
    </div>
 
@endsection
 
@section('script')
<script>
        window.addEventListener('close-modal', event => {
        $('#aparModal').modal('hide');
        $('#updateaparModal').modal('hide');
        $('#deleteaparModal').modal('hide');
        $('.modal-backdrop').remove();
        
        location.reload();
        
    });
</script>
@endsection