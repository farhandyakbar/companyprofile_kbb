<?php if(session('info')): ?>
<script>
    Swal.fire(
        'Data Terhapus',
        'Poof! Data telah terhapus!',
        'success'
    );
</script>
<?php endif; ?>

<?php if(session('notif')): ?>
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Data berhasil diubah',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php endif; ?>

<?php if(session('berhasil')): ?>
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '<?php echo e(session("berhasil")); ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/templates/partials/_sweetalert.blade.php ENDPATH**/ ?>