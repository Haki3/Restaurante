

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Tickets</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Bebidas</th>
                    <th scope="col">Platos</th>
                    <th scope="col">Total</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($ticket->id); ?></th>
                        <td><?php echo e($ticket->created_at); ?></td>
                        <td><?php echo e($ticket->mesa); ?></td>
                        <td><?php echo e($ticket->bebidas); ?></td>
                        <td><?php echo e($ticket->platos); ?></td>
                        <td><?php echo e($ticket->total); ?></td>
                        <td>
                        <a href="<?php echo e(route('tickets.pdf', $ticket->id)); ?>" class="btn btn-primary">Descargar PDF</a>

                            </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/tickets/index.blade.php ENDPATH**/ ?>