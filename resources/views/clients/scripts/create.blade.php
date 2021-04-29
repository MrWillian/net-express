<script type="text/javascript">
    $body = $("body");

    $(document).on({
        ajaxStart: function() { $body.addClass("loading"); },
        ajaxStop: function() { $body.removeClass("loading"); }    
    });

    $('#client-create-form').submit(function(event) {
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        event.preventDefault();

        formData = new FormData($('#client-create-form')[0]);       
        formData.append('gender', $('#genderSelect option:selected').val());
        formData.append('client_type', $('#personSelect option:selected').val());

        $.ajax({
            type: 'POST',
            url: "{{ route('client.store') }}",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        title: 'Success!',
                        html: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then((result) => {
                        if (result) {
                            window.location.href = "{{route('web.client.index')}}";
                        }
                    });
                }
            },
            error: function (xhr) {
                console.log('errors', (xhr.responseJSON));
                $.each(xhr.responseJSON.errors, function(field_name, error) {
                    $(document).find('[name='+field_name+']').parent().addClass('has-danger');
                    $(document).find('[name='+field_name+']').addClass('is-invalid');
                    $(document).find('[name='+field_name+']').after(
                        '<span id="'+field_name+'-error" class="error text-danger" style="display: block;">' +error+ '</span>'
                    );
                });
            }
        });
    });
</script>