

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Crear Plato</h1>

            <form action="<?php echo e(route('platos.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" min="0" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="nombre">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/platos/create.blade.php ENDPATH**/ ?>