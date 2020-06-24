<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('assets/vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/chartist-bundle/chartist.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/morris-bundle/morris.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/c3charts/c3.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')); ?>">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->

    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php echo $__env->make('templates.partials._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php echo $__env->make('templates.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php echo $__env->make('templates.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
        
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <?php echo $__env->make('templates.partials._script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/templates/default.blade.php ENDPATH**/ ?>