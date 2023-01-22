<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('simpleSuccessAlert'))
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{ session('simpleSuccessAlert')}}",
        showConfirmButton: false,
        timer: 4200
        })
    </script>
@endif
@if(session('simpleWarningAlert'))
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: "{{ session('simpleWarningAlert')}}",
        showConfirmButton: false,
        timer: 4200
    })
    </script>
@endif
@if(session('simpleErrorAlert'))
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: "{{ session('simpleErrorAlert') }}",
        showConfirmButton: false,
        timer: 4200
    })
    </script>
@endif
@if(session('errorAlert'))
    <script>
        Swal.fire({
            title: "{{ session('errorAlert') }}.",
            text: "Please try again in a few minutes",
            icon: "error",
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@if(session('successAlert'))
    <script>
        Swal.fire({
            title: "{{ session('successAlert') }}.",
            text: "You can see the status of the order in your panel.Also, complete order details have been emailed to you",
            icon: "success",
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@if(session('warningAlert'))
    <script>
        Swal.fire({
            title: "{{ session('warningAlert') }}.",
            text: "Please make the payment correctly",
            icon: "warning",
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        })
    </script>
@endif
