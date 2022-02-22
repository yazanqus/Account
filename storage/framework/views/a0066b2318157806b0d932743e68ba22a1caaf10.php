
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Proposal Create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php echo e(Form::open(array('url' => 'proposal','class'=>'w-100'))); ?>

        <div class="col-12">
            <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" id="customer-box">
                                <div class="input-group">
                                    <?php echo e(Form::label('customer_id', __('Customer'),['class'=>'form-control-label'])); ?>

                                    <?php echo e(Form::select('customer_id', $customers,$customerId, array('class' => 'form-control select2','id'=>'customer','data-url'=>route('proposal.customer'),'required'=>'required'))); ?>

                                </div>
                            </div>
                            <div id="customer_detail" class="d-none">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo e(Form::label('issue_date', __('Issue Date'),['class'=>'form-control-label'])); ?>

                                        <div class="form-icon-user">
                                            <span><i class="fas fa-calendar"></i></span>
                                            <?php echo e(Form::text('issue_date', '', array('class' => 'form-control datepicker','required'=>'required'))); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h5 class="h4 d-inline-block font-weight-400 mb-4"><?php echo e(__('Contract Sections')); ?></h5>
            <div class="card repeater">
                <div class="item-section py-4">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-12 d-flex align-items-center justify-content-between justify-content-md-end">
                            <div class="all-button-box">
                                <a href="#" id="add_more_fields" data-repeater-create="" class="btn btn-xs btn-white btn-icon-only width-auto" data-toggle="modal" data-target="#add-bank">
                                    <i class="fas fa-plus"></i> <?php echo e(__('Add item')); ?>

                                </a>
                                <div class="all-button-box">
                                    <a href="#" id="remove_fields" data-repeater-create="" class="btn btn-xs btn-white btn-icon-only width-auto" data-toggle="modal" data-target="#add-bank">
                                        <i class="fas fa-plus"></i> <?php echo e(__('Delete item')); ?>

                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div>
                        <div id="survey_options">
                          <input type="text" name="survey_options[]" class="survey_options" size="50" placeholder="Name"><br><br>
                          <textarea name="survey_options[]" class="survey_options" placeholder="Content" name='content'></textarea>
                        </div>
                        
                      </div>
                </div>       
                    
                </div>
            </div>
        </div>
        <div class="col-12 text-right">
            <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn-create btn-xs badge-blue radius-10px">
            <input type="button" value="<?php echo e(__('Cancel')); ?>" onclick="location.href = '<?php echo e(route("invoice.index")); ?>';" class="btn-create btn-xs bg-gray radius-10px">
        </div>
        <?php echo e(Form::close()); ?>

    </div>
    <?php $__env->startPush('script-page'); ?>
    <script>
		var survey_options = document.getElementById('survey_options');
		var add_more_fields = document.getElementById('add_more_fields');
		var remove_fields = document.getElementById('remove_fields');

		add_more_fields.onclick = function(){
		  var newField = document.createElement('input');
		  var newField2 = document.createElement('TEXTAREA');
		  newField.setAttribute('type','text');
		  newField.setAttribute('name','survey_options[]');
		  newField.setAttribute('class','survey_options');
		  newField.setAttribute('siz',50);
		  newField.setAttribute('placeholder','Another Item');
		  newField2.setAttribute('name','content');
		  newField2.setAttribute('placeholder','Content_of_item_Contract');
		  survey_options.appendChild(newField);
		  survey_options.appendChild(newField2);
		}

		remove_fields.onclick = function(){
		  var input_tags = survey_options.getElementsByTagName('input');
		  var input_tags2 = survey_options.getElementsByTagName('TEXTAREA');
		  if(input_tags.length > 2) {
			survey_options.removeChild(input_tags[(input_tags.length) - 1]);
		  }
		  if(input_tags2.length > 0) {
		  survey_options.removeChild(input_tags2[(input_tags2.length) - 1]);
		  }
		}
	</script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\yaman\resources\views/contract/create.blade.php ENDPATH**/ ?>