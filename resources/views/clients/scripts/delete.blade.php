<script type="text/javascript">
    $('.delete-client').submit(function(event) {
        event.preventDefault();
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {confirmButton: 'btn btn-success', cancelButton: 'btn btn-danger'},
            buttonsStyling: false
        });

        let clientId = parseInt($(this).attr('id'));

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: `http://localhost:8000/api/client/${clientId}`,
                    beforeSend: function() {
                        $("body").addClass("loading");
                    },
                    success: function(response) {
                        $("body").removeClass("loading");
                        if (response.status === 'success') {
                            swalWithBootstrapButtons.fire('Deleted!', response.message, 'success').then((result) => {
                                if (result.isConfirmed) window.location.reload();
                            });
                        }
                    },
                    error: function (xhr) {
                        swalWithBootstrapButtons.fire('Error', 'An error occurred while trying to delete the client: ' . xhr.responseJSON.message, 'error');
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire('Cancelled', 'Your client is safe :)', 'error');
            }
        })
    });
</script>