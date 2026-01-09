

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-3">📚 Libros</h2>

    <a href="<?php echo e(route('libros.create')); ?>" class="btn btn-primary mb-3">
        + Nuevo Libro
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>ISBN</th>
                <th>Páginas</th>
                <th>Editorial</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($libro->titulo); ?></td>
                    <td><?php echo e($libro->isbn); ?></td>
                    <td><?php echo e($libro->paginas); ?></td>
                    <td><?php echo e($libro->editorial->nombre ?? 'Sin editorial'); ?></td>
                    <td>
                        <a href="<?php echo e(route('libros.edit', $libro)); ?>" class="btn btn-sm btn-warning">
                            Editar
                        </a>
                        <form action="<?php echo e(route('libros.destroy', $libro)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center">
                        No hay libros registrados
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema_editorial\resources\views/libros/index.blade.php ENDPATH**/ ?>