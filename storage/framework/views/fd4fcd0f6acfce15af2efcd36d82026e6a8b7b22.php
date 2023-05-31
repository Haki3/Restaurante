

<?php $__env->startSection('content'); ?>
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Editar Pedido</h1>
      <form action="<?php echo e(route('pedidos.update', $pedido->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
          <label for="mesa">Mesa</label>
          <input type="number" name="mesa" id="mesa" class="form-control" pattern="[0-9]+" required>
        </div>
        <div class="mb-3">
          <label for="user_id" class="form-label">User ID</label>
          <input type="text" class="form-control" id="user_id" name="user_id" value="<?php echo e($pedido->user_id); ?>" >
        </div>
        <div class="mb-3">
          <label for="total" class="form-label">Total</label>
          <input type="number" class="form-control" id="total" name="total" value="<?php echo e($pedido->total); ?>">
        </div>
        <div class="mb-3">
          <label for="estado" class="form-label">Estado </label>
          <br>
          <label for="sample1" class="form-label">0 = Pendiente </label>
          <label for="sample2" class="form-label">1 = En preparacion </label>
          <label for="sample3" class="form-label">2 = Recoger </label>
          <label for="sample4" class="form-label">3 = Cobrar </label>
          <label for="sample4" class="form-label">4 = Pagado</label>

          <input type="text" class="form-control" id="estado" name="estado" value="<?php echo e($pedido->estado); ?>">
        </div>
        <div class="mb-3">
          <label for="bebidas" class="form-label">Bebidas</label>
          <textarea class="form-control" id="bebidas" name="bebidas"><?php echo e($pedido->bebidas); ?></textarea>
        </div>
        <div class="mb-3">
          <label for="platos" class="form-label">Platos</label>
          <textarea class="form-control" id="platos" name="platos"><?php echo e($pedido->platos); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="<?php echo e(route('pedidos.index')); ?>" class="btn btn-secondary">Cancelar</a>
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

    .form-label {
      font-weight: 700;
      margin-bottom: 5px;
    }

    .form-control {
      border-radius: 5px;
      padding: 10px;
    }

    .btn {
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      color: #fff;
      font-weight: 700;
      cursor: pointer;
    }

    .btn-primary {
      background-color: #007bff;
    }

    .btn-secondary {
      background-color: #6c757d;
    }

    .btn:hover {
      opacity: 0.8;
    }
  </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/pedidos/edit.blade.php ENDPATH**/ ?>