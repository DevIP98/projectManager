 <!-- Se extiende la plantilla base -->

<?php $__env->startSection('content'); ?> <!-- Se define la sección content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
</head>
<body>
    <h1>PROYECTOS ESCRITOS STEP_LARAVEL</h1>
    <div class="row">
        <div class="col">
    <table class="table table-striped table-bordered mx-auto my-auto" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Título</th>
                <th>Ciudad</th>
                <th>Creado en</th>
                <th>Actualizado en</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($project->name); ?></td>
                    <td><?php echo e($project->city->name); ?></td>
                    <td><?php echo e($project->created_at); ?></td>
                    <td><?php echo e($project->updated_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?> <!-- Se cierra la sección content -->

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_laravel\project-manager\resources\views/projects.blade.php ENDPATH**/ ?>