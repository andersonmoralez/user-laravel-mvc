<h1>Listing User</h1>
<p>Name user: <?php echo e($user->name); ?></p>
<p>Email user: <?php echo e($user->email); ?></p>
<p><?php echo e(date('d/m/y h:i', strtotime($user->created_at))); ?></p>
<?php /**PATH /home/anderson/ecommerce/bckp/LARAVEL PROJECT MVC USER/api/resources/views/listUser2.blade.php ENDPATH**/ ?>