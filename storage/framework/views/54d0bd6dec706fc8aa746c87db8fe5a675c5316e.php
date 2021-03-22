<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    <p>#ID: <?php echo e($user->id); ?></p>
    <p>Name: <?php echo e($user->name); ?></p>
    <p>E-mail: <?php echo e($user->email); ?></p>
    <form action="<?php echo e(route('users.deleteUser', ['user' => $user->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <input type="hidden" name="user" value="<?php echo e($user->id); ?>" />
        <button type="submit" value="Remover">Remove</button>

    </form>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<style>
    div{width: 300px;background: aquamarine;padding: 10px;border-radius: 5px;margin-bottom:10px;}
    form{text-align: right;margin: 0;}
</style>
<?php /**PATH /home/anderson/ecommerce/bckp/LARAVEL PROJECT MVC USER/api/resources/views/listAllUsers.blade.php ENDPATH**/ ?>