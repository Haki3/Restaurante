

<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Crear Pedido</h1>

      <form action="<?php echo e(route('pedidos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
          
        </div>
        <div class="mb-3">
          <label for="mesa">Mesa</label>
          <input type="number" name="mesa" id="mesa" class="form-control" pattern="[0-9]+" required>
        </div>
        
        <div class="mb-3">
          <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
        </div>

        <div class="mb-3">
          <h3>Bebidas</h3>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ración</th>
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($bebida->id); ?></td>
    <td><?php echo e($bebida->nombre); ?></td>
    <td>
      <input type="number" name="raciones[bebidas][<?php echo e($bebida->id); ?>]" class="form-control" min="0" required>
      <?php if(isset($pedido) && isset($pedido->raciones) && isset($pedido->raciones['bebidas'][$bebida->id])): ?>
        - <?php echo e($pedido->raciones['bebidas'][$bebida->id]); ?>

      <?php endif; ?>
    </td>
  </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
        </div>

        <div class="mb-3">
          <h3>Platos</h3>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ración</th>
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($plato->id); ?></td>
    <td><?php echo e($plato->nombre); ?></td>
    <td>
      <input type="number" name="raciones[platos][<?php echo e($plato->id); ?>]" class="form-control" min="0" required>
      <?php if(isset($pedido) && isset($pedido->raciones) && isset($pedido->raciones['platos'][$plato->id])): ?>
        - <?php echo e($pedido->raciones['platos'][$plato->id]); ?>

      <?php endif; ?>
    </td>
  </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
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

    .table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 0;
    }

    .table th {
      background-color: #f5f5f5;
      font-weight: 700;
      text-align: left;
      padding: 10px;
    }

    .table td {
      border: 1px solid #ddd;
      padding: 10px;
    }

    .form-control {
      border-radius: 5px;
      padding: 10px;
    }
  </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/pedidos/create.blade.php ENDPATH**/ ?>