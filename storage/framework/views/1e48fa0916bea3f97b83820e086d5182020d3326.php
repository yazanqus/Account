<div class="card bg-none card-box">
    <?php echo e(Form::open(array('url' => 'productservice'))); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('name', __('Name'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-address-card"></i></span>
                    <?php echo e(Form::text('name', '', array('class' => 'form-control','required'=>'required'))); ?>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('sku', __('SKU'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-key"></i></span>
                    <?php echo e(Form::text('sku', '', array('class' => 'form-control','required'=>'required'))); ?>

                </div>
            </div>
        </div>
        <div class="form-group col-md-12">
            <?php echo e(Form::label('description', __('Description'),['class'=>'form-control-label'])); ?>

            <?php echo Form::text('description', null, ['id' => 'description','class'=>'form-control']); ?>

        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('sale_price', __('Sale Price'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-money-bill-alt"></i></span>
                    <?php echo e(Form::number('sale_price', '', array('class' => 'form-control','required'=>'required','step'=>'0.01'))); ?>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('purchase_price', __('Purchase Price'),['class'=>'form-control-label'])); ?>

                <div class="form-icon-user">
                    <span><i class="fas fa-money-bill-alt"></i></span>
                    <?php echo e(Form::number('purchase_price', '', array('class' => 'form-control','required'=>'required','step'=>'0.01'))); ?>

                </div>
            </div>
        </div>

        <div class="form-group col-md-6">
            <?php echo e(Form::label('tax_id', __('Tax'),['class'=>'form-control-label'])); ?>

            <?php echo e(Form::select('tax_id[]', $tax,null, array('class' => 'form-control select2','multiple'))); ?>

        </div>
        
        <div class="form-group col-md-6">
            <?php echo e(Form::label('unit_id', __('Unit'),['class'=>'form-control-label'])); ?>

            <?php echo e(Form::select('unit_id', $unit,null, array('class' => 'form-control select2','required'=>'required'))); ?>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="btn-box">
                    <label class="d-block form-control-label"><?php echo e(__('Type')); ?></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio5" name="type" value="product" checked="checked" onclick="hide_show(this)">
                                <label class="custom-control-label form-control-label" for="customRadio5"><?php echo e(__('Product')); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio6" name="type" value="service" onclick="hide_show(this)">
                                <label class="custom-control-label form-control-label" for="customRadio6"><?php echo e(__('Service')); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!$customFields->isEmpty()): ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="tab-pane fade show" id="tab-2" role="tabpanel">
                    <?php echo $__env->make('customFields.formBuilder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn-create badge-blue">
            <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn-create bg-gray" data-dismiss="modal">
        </div>
    </div>
    <?php echo e(Form::close()); ?>

</div>
<?php /**PATH C:\laragon\www\yaman\resources\views/productservice/create.blade.php ENDPATH**/ ?>