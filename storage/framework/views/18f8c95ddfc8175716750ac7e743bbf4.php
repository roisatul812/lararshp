<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7ff; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 350px; text-align: center; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #002080; color: white; border: none; padding: 10px; border-radius: 5px; width: 100%; cursor: pointer; }
        button:hover { background: #00135c; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login RSHP</h2>
        <form method="POST" action="<?php echo e(route('login.process')); ?>">
            <?php echo csrf_field(); ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Masuk</button>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color:red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\lararshp\resources\views/site/login.blade.php ENDPATH**/ ?>