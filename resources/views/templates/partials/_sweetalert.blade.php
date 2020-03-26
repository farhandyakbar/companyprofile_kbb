@if(session('info'))
<script>
    Swal.fire(
        'Data Terhapus',
        'Poof! Data telah terhapus!',
        'success'
    );
</script>
@endif

@if (session('notif'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Data berhasil diubah',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

@if (session('berhasil'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '{{ session("berhasil") }}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

