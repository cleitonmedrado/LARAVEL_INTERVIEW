<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>Meus serviços</h1>
        <div>
            <a href="<?php echo e(route('novo.servico')); ?>">
                Novo serviço
            </a>
        </div>
        <hr>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <table class="table table-responsive table-striped">
            <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th class="text-center">Opções</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($servico->id); ?></td>
                    <td><?php echo e($servico->titulo); ?></td>
                    <td class="text-center">
                        <a href="<?php echo e(route('editar.servico', $servico->id)); ?>"
                                               class="btn btn-outline-success">Editar</a>
                        <a class="btn btn-outline-secondary" href="<?php echo e(route('ver.mensagens.servico', $servico->id)); ?>">Ver
                            Mensagens</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="col-lg-12">
            <?php echo $servicos->links('pagination::tailwind'); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cleiton\Desktop\chat_Laravel\LARAVEL_INTERVIEW\resources\views/servicos/list.blade.php ENDPATH**/ ?>