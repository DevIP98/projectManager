 <!-- Se extiende la plantilla base -->

<?php $__env->startSection('content'); ?> <!-- Se define la sección content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Proyect</title>
</head>
<body>
    <div>
        
        <form action="<?php echo e(route('update_project', $project->id ?? '')); ?>" method="POST">
            <?php echo csrf_field(); ?> <!-- Agrega el token CSRF para protección contra ataques CSRF -->
            <div>
                <label for="name">Nombre del proyecto</label>
                <input type="text" name="name" id="name" value="<?php echo e($project->name); ?>">
            </div>
            <div>
                <label for="city">Ciudad</label>
                <select name="city" id="city">
                    <?php if($cities): ?> <!-- Verifica si la variable $cities está definida y no es nula -->
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($city->city_id); ?>" <?php echo e($city->city_id == $project->city_id ? 'selected' : ''); ?>>
                                <?php echo e($city->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
            <div>
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>    
</body>
</html>

<?php $__env->stopSection(); ?> <!-- Se cierra la sección content -->
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_laravel\project-manager\resources\views/update_project.blade.php ENDPATH**/ ?>