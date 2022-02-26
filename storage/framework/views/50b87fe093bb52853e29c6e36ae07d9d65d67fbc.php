<div class="card bg-none card-box">
    <?php echo e(Form::open(array('url'=>'customer','method'=>'post'))); ?>

    <h5 class="sub-title"><?php echo e(__('Basic Info')); ?></h5>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('name',__('Name'),array('class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-address-card"></i></span>
                    <?php echo e(Form::text('name',null,array('class'=>'form-control','required'=>'required'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('contact',__('Contact'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <?php echo e(Form::text('contact',null,array('class'=>'form-control','required'=>'required'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('email',__('Email'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-envelope"></i></span>
                    <?php echo e(Form::text('email',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('password',__('Password'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-key"></i></span>
                    <?php echo e(Form::password('password',array('class'=>'form-control','required'=>'required','minlength'=>"6"))); ?>

                </div>
            </div>
        </div>
        <?php if(!$customFields->isEmpty()): ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="tab-pane fade show" id="tab-2" role="tabpanel">
                    <?php echo $__env->make('customFields.formBuilder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <h5 class="sub-title"><?php echo e(__('Billing Address')); ?></h5>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('billing_name',__('Name'),array('class'=>'','class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-address-card"></i></span>
                    <?php echo e(Form::text('billing_name',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('billing_country',__('Country'),array('class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-flag"></i></span>
                    <?php echo e(Form::text('billing_country',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('billing_state',__('State'),array('class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-chess-pawn"></i></span>
                    <?php echo e(Form::text('billing_state',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('billing_city',__('City'),array('class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-city"></i></span>
                    <?php echo e(Form::text('billing_city',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('billing_phone',__('Phone'),array('class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <?php echo e(Form::text('billing_phone',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="form-group">
                <?php echo e(Form::label('billing_zip',__('Zip Code'),array('class'=>'form-control-label'))); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-crosshairs"></i></span>
                    <?php echo e(Form::text('billing_zip',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?php echo e(Form::label('billing_address',__('Address'),array('class'=>'form-control-label'))); ?>

                <div class="input-group">
                    <?php echo e(Form::text('billing_address',null,array('class'=>'form-control'))); ?>

                </div>
            </div>
        </div>
    </div>

    <?php if(Utility::getValByName('shipping_display')=='on'): ?>
        <div class="col-md-12 text-right">
            <input type="button" id="billing_data" value="<?php echo e(__('Shipping Same As Billing')); ?>" class="btn-create badge-blue">
        </div>
        <h4 class="sub-title"><?php echo e(__('Shipping Address')); ?></h4>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_name',__('Name'),array('class'=>'form-control-label'))); ?>

                    <div class="form-icon-user">
                        <span><i class="fas fa-address-card"></i></span>
                        <?php echo e(Form::text('shipping_name',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_country',__('Country'),array('class'=>'form-control-label'))); ?>

                    <div class="form-icon-user">
                        <span><i class="fas fa-flag"></i></span>
                        <?php echo e(Form::text('shipping_country',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_state',__('State'),array('class'=>'form-control-label'))); ?>

                    <div class="form-icon-user">
                        <span><i class="fas fa-chess-pawn"></i></span>
                        <?php echo e(Form::text('shipping_state',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_city',__('City'),array('class'=>'form-control-label'))); ?>

                    <div class="form-icon-user">
                        <span><i class="fas fa-city"></i></span>
                        <?php echo e(Form::text('shipping_city',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_phone',__('Phone'),array('class'=>'form-control-label'))); ?>

                    <div class="form-icon-user">
                        <span><i class="fas fa-mobile-alt"></i></span>
                        <?php echo e(Form::text('shipping_phone',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_zip',__('Zip Code'),array('class'=>'form-control-label'))); ?>

                    <div class="form-icon-user">
                        <span><i class="fas fa-crosshairs"></i></span>
                        <?php echo e(Form::text('shipping_zip',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('shipping_address',__('Address'),array('class'=>'form-control-label'))); ?>

                    <label class="form-control-label" for="example2cols1Input"></label>
                    <div class="input-group">
                        <?php echo e(Form::text('shipping_address',null,array('class'=>'form-control'))); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-md-12 px-0">
        <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn-create badge-blue">
        <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn-create bg-gray" data-dismiss="modal">
    </div>

    <?php echo e(Form::close()); ?>

</div>
<?php /**PATH C:\laragon\www\yaman\resources\views/customer/create.blade.php ENDPATH**/ ?>