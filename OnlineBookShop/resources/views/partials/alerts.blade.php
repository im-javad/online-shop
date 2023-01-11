<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('simpleSuccessAlert'))
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{ session('simpleSuccessAlert')}}",
        showConfirmButton: false,
        timer: 3000
        })
    </script>
@endif

