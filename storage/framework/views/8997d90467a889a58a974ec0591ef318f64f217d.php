<form action="<?php echo e(route('users.editUser', ['user' => $user->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="title-form">
        <h1>Edit User</h1>
    </div>
    <div>
        Name: <input type="text" name="name" value="<?php echo e($user->name); ?>" />
    </div>
    <div>
        E-mail: <input type="text" name="email" value="<?php echo e($user->email); ?>" />
    </div>
    <div>
        Password: <input type="password" name="password" />
    </div>
    <div class="button">
        <button type="submit">Send</button>
    </div>
</form>

<style>
    form{width: 350px;height: 242px;background: blueviolet;text-align: right;padding: 10px;border-radius: 10px;}
    div{margin-bottom:10px;}
    .title-form{padding: 0 91px;font-family: arial;color: aliceblue;}
</style>
<?php /**PATH /home/anderson/ecommerce/bckp/user-laravel-mvc/resources/views/editUser.blade.php ENDPATH**/ ?>