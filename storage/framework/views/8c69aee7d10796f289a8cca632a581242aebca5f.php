<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Pedidos</h1>
      <div class="mb-3">
        <a href="<?php echo e(route('pedidos.create')); ?>" class="btn btn-success">Crear</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Total</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Estado</th>
            <th>Mesa</th>
            <th>Bebidas</th>
            <th>Platos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($pedido->id); ?></td>
              <td><?php echo e($pedido->user_id); ?></td>
              <td><?php echo e($pedido->total); ?></td>
              <td><?php echo e($pedido->created_at); ?></td>
              <td><?php echo e($pedido->updated_at); ?></td>
              <td>
                <?php if($pedido->estado == 0): ?>
                  <span class="badge  text-black">Pendiente</span>
                <?php elseif($pedido->estado == 1): ?>
                  <span class="badge  text-black">En preparación</span>
                <?php elseif($pedido->estado == 2): ?>
                  <span class="badge  text-black">Recoger</span>
                <?php elseif($pedido->estado == 3): ?>
                  <span class="badge  text-black">Cobrar</span>
                <?php elseif($pedido->estado == 4): ?>
                  <span class="badge  text-black">Pagado</span>
                <?php endif; ?>
              </td>
              <td><?php echo e($pedido->mesa); ?></td>

              <td>
                <?php if($pedido->bebidas): ?>
                  <?php
                    $bebidas = explode(' - ', $pedido->bebidas);
                  ?>
                  <?php $__currentLoopData = $bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($bebida); ?>

                    <br>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </td>
              <td>
                <?php if($pedido->platos): ?>
                  <?php
                    $platos = explode(' - ', $pedido->platos);
                  ?>
                  <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($plato); ?>

                    <br>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </td>
              <td>
                
                <a href="<?php echo e(route('pedidos.edit', $pedido->id)); ?>" class="btn btn-primary">Editar</a>
                <form action="<?php echo e(route('pedidos.destroy', $pedido->id)); ?>" method="POST" style="display: inline;">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/pedidos/index.blade.php ENDPATH**/ ?>