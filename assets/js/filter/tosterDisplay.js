const tosterDisplay=(timer,displayMsg)=>{
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: timer
        });

        $('.toastrDefaultError').click(function() {
            toastr.error(displayMsg)
        });

    });
}