<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h2 class="logo text-center text-main"><a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-main">Shorten</a></h2>
                        <h5 class="card-title text-center">Sign In</h5>

                        <?php if(session('message')): ?>
                            <div class="alert alert-danger"><?php echo e(flash('message')); ?></div>
                        <?php endif; ?>
                        <form class="form-signin" action="<?php echo e(url('login')); ?>" method="post">
                            <div class="form-group">
                                <label for="user_name">User name</label>
                                <input type="text" id="user_name" name="user_name" class="form-control <?php if($errors && $errors->has('user_name')): ?> is-invalid <?php endif; ?>" placeholder="Username" required autofocus value="<?php echo e($old?$old['user_name']:''); ?>">
                                <?php if($errors && $errors->has('user_name')): ?>
                                    <div class="invalid-feedback"><?php echo e($errors->first('user_name')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control <?php if($errors && $errors->has('password')): ?> is-invalid <?php endif; ?>" placeholder="Password" required>
                                <?php if($errors && $errors->has('password')): ?>
                                    <div class="invalid-feedback"><?php echo e($errors->first('password')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-lg btn-form  btn-block text-uppercase" type="submit">Sign in</button>

                        </form>
                        <div class="member text-center mt-5">
                            <a class=" text-dark" href="<?php echo e(url('register')); ?>">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shorten\views/web/auth/login.blade.php ENDPATH**/ ?>