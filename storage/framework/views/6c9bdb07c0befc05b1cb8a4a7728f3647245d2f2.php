<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Serviços Chats</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Data</th>
                <th>Com quem</th>
                <th>Serviço</th>
                <th>Opções</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(date('d/m/Y H:i:s', strtotime($chat->created_at))); ?></td>
                    <td><?php echo e($chat->user_id_chat == auth()->id() ? $chat->servico->user->name : $chat->user->name); ?></td>
                    <td><?php echo e($chat->servico->titulo); ?></td>
                    <td>
                        <a href="<?php echo e(route('responder.mensagens', $chat->id)); ?>">abrir chat</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

        <?php echo e($chats->links('pagination::tailwind')); ?> <!-- Links de paginação -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cleiton\Desktop\chat_Laravel\LARAVEL_INTERVIEW\resources\views/chat/servico_chats.blade.php ENDPATH**/ ?>