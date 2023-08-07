<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar serviço</h1>
        <hr>
        <form action="<?php echo e(route("salvar.servico")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <input type="hidden" class="form-control" name="id"
                       value="<?php echo e($servico->id ?? ''); ?>"/>
                <?php if(!$servico): ?>
                    <div class="col-sm-3">
                        <span>ID</span>
                        <input type="text" class="form-control"
                               value="<?php echo e($servico->id ?? ''); ?>" disabled/>
                    </div>
                <?php endif; ?>
                <div class="<?php echo e($servico->id ? 'col-sm-9' : 'col-sm-12'); ?>">
                    <span>Titulo</span>
                    <input type="text" class="form-control" name="titulo"
                           value="<?php echo e($servico->titulo ?? ''); ?>"/>
                </div>
            </div>
            <div class="row mb-3">
                <span>Descrição do serviço</span>
                <div class="col-sm-12">
                    <textarea rows="10" style="min-width: 100%"
                              name="descricao"><?php echo e($servico->descricao ?? ''); ?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="atual_imagem">Imagem Atual:</label>
                    <br>
                    <?php if($servico->url): ?>
                        <img class="img-thumbnail" src="<?php echo e(asset($servico->url) ?? ''); ?>" alt="Imagem Atual"
                             style="max-width: 200px;">
                    <?php else: ?>
                        <p>Nenhuma imagem atual.</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="nova_imagem">Selecione uma nova imagem:</label>
                <input type="file" name="nova_imagem" id="nova_imagem" class="form-control-file">
            </div>
            <br><br>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="<?php echo e(route('servicos')); ?>" class="btn btn-danger">Voltar</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cleiton\Desktop\chat_Laravel\LARAVEL_INTERVIEW\resources\views/servicos/create.blade.php ENDPATH**/ ?>