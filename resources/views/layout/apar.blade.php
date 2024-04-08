

@extends('admin.admin')
 
@section('title','Data Apar')

@section('content')
 

    <livewire:apar-show>
  
 
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

