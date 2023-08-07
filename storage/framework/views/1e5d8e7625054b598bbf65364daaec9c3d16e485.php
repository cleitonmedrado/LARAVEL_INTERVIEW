<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($servico->titulo); ?></h1>
        <div class="mensagens-container">
            <?php $__currentLoopData = $mensagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="mensagem <?php echo e($mensagem->id_origem == auth()->id() ? 'mensagem-resposta' : 'mensagem-recebida'); ?>">
                    <div class="conteudo">
                        <div class="info">
                            <span
                                class="nome"><?php echo e($mensagem->id_origem == auth()->id() ? 'Você' : $mensagem->usuarioOrigem->name); ?></span>
                            <span class="hora"> &nbsp; <?php echo e($mensagem->created_at->format('d/m/Y H:i')); ?></span>
                        </div>
                        <div class="balao-mensagem">
                            <?php if($mensagem->tipo_anexo === 'audio'): ?>
                                <audio controls>
                                    <source src="<?php echo e(asset($mensagem->url)); ?>" type="audio/mpeg">
                                    Seu navegador não suporta o elemento de áudio.
                                </audio>
                            <?php elseif($mensagem->tipo_anexo === 'imagem'): ?>
                                <img src="<?php echo e(asset($mensagem->url)); ?>" alt="Imagem"
                                     class="mensagem-imagem">
                            <?php elseif($mensagem->tipo_anexo === 'arquivo'): ?>
                                <a href="<?php echo e(asset($mensagem->url)); ?>" target="_blank">Baixar Arquivo</a>
                            <?php endif; ?>
                            <?php echo e($mensagem->mensagem); ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="formulario-mensagem">
            <form action="<?php echo e(route('enviar.mensagem')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="chat_id" value="<?php echo e($chat->id ?? null); ?>">
                <input type="hidden" name="servico_id" value="<?php echo e($servico->id ?? null); ?>">
                <div class="input-group">
                    <textarea name="mensagem" class="form-control" placeholder="Digite sua mensagem..."
                              rows="3"></textarea>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
                <div class="custom-file mt-2">
                    <input type="file" class="custom-file-input" id="anexo" name="anexo">
                    <label class="custom-file-label" for="anexo">Escolher arquivo</label>
                </div>
            </form>
        </div>
    </div>
    <script>
        rolarAoFinal();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cleiton\Desktop\chat_Laravel\LARAVEL_INTERVIEW\resources\views/chat/mensagens.blade.php ENDPATH**/ ?>