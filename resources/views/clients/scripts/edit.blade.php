<script type="text/javascript">
    $body = $("body");

    $(document).on({
        ajaxStart: function() { $body.addClass("loading"); },
        ajaxStop: function() { $body.removeClass("loading"); }    
    });

    $('#client-edit-form').submit(function(event) {
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        event.preventDefault();
        
        let clientId = parseInt($('#client-id').val());
        let formData = {
            name: $('#input-name').val(),
            email: $('#input-email').val(),
            phone_number: $('#input-phone').val(),
            rg: $('#input-rg').val(),
            gender: $('#genderSelect').val() == "1" ? "M" : "F",
            client_type: $('#personSelect').val(),
            documentValue: $('#input-document-value').val(),
            cep: $('#input-cep').val(),
            country: $('#input-country').val(),
            state: $('#input-state').val(),
            city: $('#input-city').val(),
            district: $('#input-district').val(),
            place: $('#input-place').val(),
            number: $('#input-number').val(),
        };

        $.ajax({
            type: 'PUT',
            url: `http://localhost:8000/api/client/${clientId}`,
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        title: 'Success!',
                        html: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK',
                        showClass: { popup: 'animate__animated animate__fadeInDown' },
                        hideClass: { popup: 'animate__animated animate__fadeOutUp' }
                    }).then((result) => {
                        if (result) {
                            window.location.href = "{{route('web.client.index')}}";
                        }
                    });
                }
            },
            error: function (xhr) {
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