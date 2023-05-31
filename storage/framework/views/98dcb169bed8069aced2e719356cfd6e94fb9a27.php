

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Editar Plato</h1>

            <form action="<?php echo e(route('platos.update', $plato->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo e($plato->nombre); ?>">
                </div>

                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" id="precio" class="form-control" value="<?php echo e($plato->precio); ?>">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" class="form-control"><?php echo e($plato->descripcion); ?></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="<?php echo e(route('platos.index')); ?>" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/platos/edit.blade.php ENDPATH**/ ?>