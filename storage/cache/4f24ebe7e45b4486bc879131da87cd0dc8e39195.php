<?php if(session('message')): ?>
    <div class="alert alert-info"><?php echo e(flash('message')); ?></div>
<?php endif; ?>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group has-feedback <?php if($errors && $errors->has('first_name')): ?> has-error <?php endif; ?>">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Firstname" value="<?php if($old && $old['first_name']): ?><?php echo e($old['first_name']); ?><?php elseif(isset($user)): ?><?php echo e($user->first_name); ?><?php endif; ?>">
            <?php if($errors && $errors->has('first_name')): ?>
                <div class="help-block"><?php echo e($errors->first('first_name')); ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group has-feedback <?php if($errors && $errors->has('last_name')): ?> has-error <?php endif; ?>">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Lastname" value="<?php if($old && $old['last_name']): ?><?php echo e($old['last_name']); ?><?php elseif(isset($user)): ?><?php echo e($user->last_name); ?><?php endif; ?>">
            <?php if($errors && $errors->has('last_name')): ?>
                <div class="help-block"><?php echo e($errors->first('last_name')); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group has-feedback <?php if($errors && $errors->has('user_name')): ?> has-error <?php endif; ?>">
            <label for="user_name">User name</label>
            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Username" value="<?php if($old && $old['user_name']): ?><?php echo e($old['user_name']); ?><?php elseif(isset($user)): ?><?php echo e($user->user_name); ?><?php endif; ?>">
            <?php if($errors && $errors->has('user_name')): ?>
                <div class="help-block"><?php echo e($errors->first('user_name')); ?></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group has-feedback <?php if($errors && $errors->has('password')): ?> has-error <?php endif; ?>">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <?php if($errors && $errors->has('password')): ?>
                <div class="help-block"><?php echo e($errors->first('password')); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\shorten\views/admin/users/form.blade.php ENDPATH**/ ?>