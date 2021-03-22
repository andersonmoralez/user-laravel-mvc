<form action="<?php echo e(route('users.storeUser')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="title-form">
        <h1>Register</h1>
    </div>
    <div>
        Name: <input type="text" name="name" />
    </div>
    <div>
        E-mail: <input type="text" name="email" />
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
    .title-form{padding: 0 111px;font-family: arial;color: aliceblue;}
</style>
<?php /**PATH /home/anderson/ecommerce/bckp/user-laravel-mvc/resources/views/addUser.blade.php ENDPATH**/ ?>