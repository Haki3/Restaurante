<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Platos</h1>
            <a href="<?php echo e(route('platos.create')); ?>" class="btn btn-primary mb-3">Crear plato</a>
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $platos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($plato->id); ?></td>
                            <td><?php echo e($plato->nombre); ?></td>
                            <td><?php echo e($plato->descripcion); ?></td>
                            <td><?php echo e($plato->precio); ?></td>
                            <td>
                                <a href="<?php echo e(route('platos.edit', $plato->id)); ?>" class="btn btn-primary">Editar</a>
                                <form action="<?php echo e(route('platos.destroy', $plato->id)); ?>" method="POST" style="display: inline;">
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

    .btn-danger {
      background-color: #dc3545;
    }

    .btn:hover {
      opacity: 0.8;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/963827.cloudwaysapps.com/sfvcduqwuq/public_html/resources/views/platos/index.blade.php ENDPATH**/ ?>