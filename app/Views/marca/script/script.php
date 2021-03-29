<script>
    $(document).ready(function(){
        $('.btn-activar').click(function(e) {
            e.preventDefault();
            let url = $(this).data('href');
            swal({
                    title: "¿Estás seguro?",
                    text: "Activar este registro!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, activar!",
                    cancelButtonText: "No, cancelar!"
                },
                function(isConfirm) {
                    if (isConfirm) {
                        window.location.href = url;
                    }
                });
        });
        $('.btn-desactivar').click(function(e) {
            e.preventDefault();
            let url = $(this).data('href');
            swal({
                    title: "¿Estás seguro?",
                    text: "Desactivar este registro!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, desactivar!",
                    cancelButtonText: "No, cancelar!"
                },
                function(isConfirm) {
                    if (isConfirm) {
                        window.location.href = url;
                    }
                });
        });
    });
</script>