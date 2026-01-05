

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Autores</h2>
        <a href="<?php echo e(route('autores.create')); ?>" class="btn btn-primary">
            + Nuevo Autor
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre real</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($autor->id); ?></td>
                    <td><?php echo e($autor->nombre_real); ?></td>
                    <td><?php echo e($autor->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('autores.edit', $autor->id)); ?>" class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="<?php echo e(route('autores.destroy', $autor->id)); ?>"
                              method="POST"
                              style="display:inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Eliminar autor?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">
                        No hay autores registrados
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_editorial\resources\views/autores/index.blade.php ENDPATH**/ ?>