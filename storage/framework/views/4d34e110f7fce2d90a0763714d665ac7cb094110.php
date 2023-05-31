<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
        <?php if(auth()->user()->user_type === 'Chef'): ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <a href="<?php echo e(route('bebidas.index')); ?>" class="card-link">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h2 class="card-title h5 m-0">Bebidas</h2>
                        </div>
                    </div>
                </a>
            <?php endif; ?>    
            </div>
            <?php if(auth()->user()->user_type === 'Chef'): ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <a href="<?php echo e(route('platos.index')); ?>" class="card-link">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h2 class="card-title h5 m-0">Platos</h2>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                     <a href="<?php echo e(route('pedidos.index')); ?>" class="card-link">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h2 class="card-title h5 m-0">Pedidos</h2>
                             </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                    <a href="<?php echo e(route('tickets.index')); ?>" class="card-link">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h2 class="card-title h5 m-0">Tickets</h2>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div>

    <form action="<?php echo e(route('logout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit">Cerrar sesión</button>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .card-link {
            text-decoration: none;
            color: inherit;
        }

        .card-link:hover .card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.2s ease-in-out;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/welcome.blade.php ENDPATH**/ ?>