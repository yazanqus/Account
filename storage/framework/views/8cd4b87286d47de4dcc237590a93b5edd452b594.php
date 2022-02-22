
<?php
    $profile=asset(Storage::url('uploads/avatar/'));
?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Profile Account')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
            <div class="card profile-card">
                <div class="icon-user avatar rounded-circle">
                    <img alt="" src="<?php echo e((!empty($userDetail->avatar))? $profile.'/'.$userDetail->avatar : $profile.'/avatar.png'); ?>" class="">
                </div>
                <h4 class="h4 mb-0 mt-2"> <?php echo e($userDetail->name); ?></h4>
                <div class="sal-right-card">
                    <span class="badge badge-pill badge-blue"><?php echo e($userDetail->type); ?></span>
                </div>
                <h6 class="office-time mb-0 mt-4"><?php echo e($userDetail->email); ?></h6>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
            <section class="col-lg-12 pricing-plan card">
                <div class="our-system password-card p-3">
                    <div class="row">
                        <!-- <div class="col-lg-12"> -->

                        <ul class="nav nav-tabs my-4">
                            <li>
                                <a data-toggle="tab" href="#personal-info" class="active"><?php echo e(__('Personal Info')); ?></a>
                            </li>
                            <li class="annual-billing">
                                <a data-toggle="tab" href="#billing-info" class=""><?php echo e(__('Billing Info')); ?></span> </a>
                            </li>
                            <li class="annual-billing">
                                <a data-toggle="tab" href="#shipping-info" class=""><?php echo e(__('Shipping Info')); ?></span> </a>
                            </li>
                            <li class="annual-billing">
                                <a data-toggle="tab" href="#change-password" class=""><?php echo e(__('Change Password')); ?></span> </a>
                            </li>
                        </ul>
                        <!-- </div> -->
                        <div class="tab-content">
                            <div id="personal-info" class="tab-pane in active">
                                <?php echo e(Form::model($userDetail,array('route' => array('customer.update.profile'), 'method' => 'post', 'enctype' => "multipart/form-data"))); ?>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::label('name',__('Name'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('name',null,array('class'=>'form-control font-style','placeholder'=>__('Enter User Name')))); ?>

                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-name" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo e(Form::label('email',__('Email'),array('class'=>'form-control-label'))); ?>

                                        <?php echo e(Form::text('email',null,array('class'=>'form-control','placeholder'=>__('Enter User Email')))); ?>

                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-email" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo e(Form::label('contact',__('Contact'),array('class'=>'form-control-label'))); ?>

                                        <?php echo e(Form::text('contact',null,array('class'=>'form-control','placeholder'=>__('Enter User Contact')))); ?>

                                        <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-contact" role="alert">
                                                            <strong class="text-danger"><?php echo e($message); ?></strong>
                                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <?php if(!$customFields->isEmpty()): ?>
                                        <div class="col-md-6">
                                            <div class="tab-pane fade show" id="tab-2" role="tabpanel">
                                                <?php echo $__env->make('customFields.formBuilder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="choose-file">
                                                <label for="avatar">
                                                    <div><?php echo e(__('Choose file here')); ?></div>
                                                    <input type="file" class="form-control" id="avatar" name="profile" data-filename="profiles">
                                                </label>
                                                <p class="profiles"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 text-right">
                                        <input type="submit" value="<?php echo e(__('Save Changes')); ?>" class="btn-create badge-blue">
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                            <div id="billing-info" class="tab-pane">
                                <?php echo e(Form::model($userDetail,array('route' => array('customer.update.billing.info'), 'method' => 'post'))); ?>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_name',__('Billing Name'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('billing_name',null,array('class'=>'form-control','placeholder'=>__('Enter Billing Name')))); ?>

                                            <?php $__errorArgs = ['billing_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_name" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_phone',__('Billing Phone'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('billing_phone',null,array('class'=>'form-control','placeholder'=>__('Enter Billing Phone')))); ?>

                                            <?php $__errorArgs = ['billing_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_phone" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_zip',__('Billing Zip'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('billing_zip',null,array('class'=>'form-control','placeholder'=>__('Enter Billing Zip')))); ?>

                                            <?php $__errorArgs = ['billing_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_zip" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_country',__('Billing Country'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('billing_country',null,array('class'=>'form-control','placeholder'=>__('Enter Billing Country')))); ?>

                                            <?php $__errorArgs = ['billing_country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_country" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_state',__('Billing State'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('billing_state',null,array('class'=>'form-control','placeholder'=>__('Enter Billing State')))); ?>

                                            <?php $__errorArgs = ['billing_state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_state" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_city',__('Billing City'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('billing_city',null,array('class'=>'form-control','placeholder'=>__('Enter Billing City')))); ?>

                                            <?php $__errorArgs = ['billing_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_city" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php echo e(Form::label('billing_address',__('Billing Address'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::textarea('billing_address',null,array('class'=>'form-control','rows'=>3,'placeholder'=>__('Enter Billing Address')))); ?>

                                            <?php $__errorArgs = ['billing_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_address" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 text-right">
                                        <input type="submit" value="<?php echo e(__('Save Changes')); ?>" class="btn-create badge-blue">
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                            <div id="shipping-info" class="tab-pane">
                                <?php echo e(Form::model($userDetail,array('route' => array('customer.update.shipping.info'), 'method' => 'post'))); ?>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_name',__('Shipping Name'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('shipping_name',null,array('class'=>'form-control','placeholder'=>__('Enter Shipping Name')))); ?>

                                            <?php $__errorArgs = ['shipping_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-shipping_name" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_phone',__('Shipping Phone'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('shipping_phone',null,array('class'=>'form-control','placeholder'=>__('Enter Shipping Phone')))); ?>

                                            <?php $__errorArgs = ['shipping_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-shipping_phone" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_zip',__('Shipping Zip'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('shipping_zip',null,array('class'=>'form-control','placeholder'=>__('Enter Shipping Zip')))); ?>

                                            <?php $__errorArgs = ['shipping_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-shipping_zip" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_country',__('Shipping Country'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('shipping_country',null,array('class'=>'form-control','placeholder'=>__('Enter Shipping Country')))); ?>

                                            <?php $__errorArgs = ['shipping_country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-shipping_country" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_state',__('Shipping State'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('shipping_state',null,array('class'=>'form-control','placeholder'=>__('Enter Shipping State')))); ?>

                                            <?php $__errorArgs = ['shipping_state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-shipping_state" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_city',__('Shipping City'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::text('shipping_city',null,array('class'=>'form-control','placeholder'=>__('Enter Shipping City')))); ?>

                                            <?php $__errorArgs = ['shipping_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-shipping_city" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php echo e(Form::label('shipping_address',__('Shipping Address'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::textarea('shipping_address',null,array('class'=>'form-control','rows'=>3,'placeholder'=>__('Enter Shipping Address')))); ?>

                                            <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-billing_address" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 text-right">
                                        <input type="submit" value="<?php echo e(__('Save Changes')); ?>" class="btn-create badge-blue">
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                            <div id="change-password" class="tab-pane">
                                <?php echo e(Form::model($userDetail,array('route' => array('customer.update.password',$userDetail->id), 'method' => 'post'))); ?>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <?php echo e(Form::label('current_password',__('Current Password'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::password('current_password',array('class'=>'form-control','placeholder'=>__('Enter Current Password')))); ?>

                                            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-current_password" role="alert">
                                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <?php echo e(Form::label('new_password',__('New Password'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::password('new_password',array('class'=>'form-control','placeholder'=>__('Enter New Password')))); ?>

                                            <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-new_password" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <?php echo e(Form::label('confirm_password',__('Re-type New Password'),array('class'=>'form-control-label'))); ?>

                                            <?php echo e(Form::password('confirm_password',array('class'=>'form-control','placeholder'=>__('Enter Re-type New Password')))); ?>

                                            <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-confirm_password" role="alert">
                                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <input type="submit" value="<?php echo e(__('Save Changes')); ?>" class="btn-create badge-blue">
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Account\resources\views/customer/profile.blade.php ENDPATH**/ ?>