

<?php $__env->startSection('title',"Register"); ?>

<?php $__env->startSection('content'); ?>
        <form method="post" action="<?php echo e(url('register')); ?>">
			<?php echo csrf_field(); ?>

        <div class="login-block">
            <div class="block block-transparent">
                <div class="head">
                    <div class="user">
                                                                             
                            <img src="img/icon.png" class="img-circle img-thumbnail"/>
                            <div class="user-change-button">
                                <span class="icon-off"></span>
                         
                        </div>                            
                    </div>
                </div>
                <div class="content controls npt">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="First name"/>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" class="form-control" name="lname" placeholder="Last name"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="Email address"/>
                            </div>
                        </div>
                
                    </div>
					<div class="form-row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone number"/>
                            </div>
                        </div>
                
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-key"></span>
                                </div>
                                <input type="password" class="form-control" name="pass" placeholder="Password"/>
                            </div>
                        </div>
						<div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-key"></span>
                                </div>
                                <input type="password" class="form-control" name="pass_confirmation" placeholder="Confirm password"/>
                            </div>
                        </div>
                    </div>                        
                    <div class="form-row">
                        <div class="col-md-6">
                            <a href="<?php echo e(url('login')); ?>" class="btn btn-default btn-block btn-clean">I have an account</a>                                
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-default btn-block btn-clean">Submit</button>
                        </div>
                    </div>
                    <div class="form-row">                            
                        <div class="col-md-12">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>
	 </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('login_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\trksh-admin\resources\views/register.blade.php ENDPATH**/ ?>