<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Lista de serviços</h1>
        <hr>
        <?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4">
                <div class="card-header">
                    <?php echo e($servico->titulo); ?>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-thumbnail" src="<?php echo e(asset($servico->url)); ?>" alt="Imagem"
                                 style="max-width: 200px;">
                        </div>
                        <div class="col-sm-6">
                            <span><?php echo e($servico->descricao); ?></span>
                            <br>
                            <?php if($servico->user_id!= auth()->id()): ?>
                                <a class="btn btn-primary ml-2" href="<?php echo e(route('iniciar.novo.chat', $servico->id)); ?>">Iniciar
                                    Novo Chat</a>
                            <?php else: ?>
                                <a class="btn btn-secondary" href="<?php echo e(route('ver.mensagens.servico', $servico->id)); ?>">Ver
                                    Mensagens</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-12">
            <?php echo $servicos->links('pagination::tailwind'); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cleiton\Desktop\chat_Laravel\LARAVEL_INTERVIEW\resources\views/home.blade.php ENDPATH**/ ?>