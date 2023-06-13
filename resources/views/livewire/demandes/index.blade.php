<div>
    @if ( $isBtnAddClicked)
        @include('livewire.demandes.create')
      @else
      @include('livewire.demandes.liste')
    @endif

</div>
<script>
    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast:true,
                title: event.detail.message || "Opération effectuée avec succès!",
                showConfirmButton: false,
                timer: 5000
                }
            )
    })
</script>
