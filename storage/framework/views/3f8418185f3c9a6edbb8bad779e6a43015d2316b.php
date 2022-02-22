
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Contracts')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-button'); ?>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 pt-lg-3 pt-xl-2">
        <div class="all-button-box">
            <a href="<?php echo e(route('contract.create',0)); ?>" class="btn btn-xs btn-white btn-icon-only width-auto">
                <i class="fa fa-plus"></i> <?php echo e(__('Create')); ?>

            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body py-0">
                    <?php if(!\Auth::guard('customer')->check()): ?>
                        <?php echo e(Form::open(['route' => ['proposal.index'], 'method' => 'GET', 'id' => 'frm_submit'])); ?>

                    <?php else: ?>
                        <?php echo e(Form::open(['route' => ['customer.proposal'], 'method' => 'GET', 'id' => 'frm_submit'])); ?>

                    <?php endif; ?>
                    <div class="row d-flex justify-content-end mt-2">
                        <?php if(!\Auth::guard('customer')->check()): ?>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="all-select-box">
                                    <div class="btn-box">
                                        <?php echo e(Form::label('customer', __('Customer'), ['class' => 'text-type'])); ?>

                                        <?php echo e(Form::select('customer', $customer, isset($_GET['customer']) ? $_GET['customer'] : '', ['class' => 'form-control select2'])); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="all-select-box">
                                <div class="btn-box">
                                    <?php echo e(Form::label('issue_date', __('Date'), ['class' => 'text-type'])); ?>

                                    <?php echo e(Form::text('issue_date', isset($_GET['issue_date']) ? $_GET['issue_date'] : null, ['class' => 'form-control datepicker-range month-btn'])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="all-select-box">
                                
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <a href="#" class="apply-btn"
                                onclick="document.getElementById('frm_submit').submit(); return false;"
                                data-toggle="tooltip" data-original-title="<?php echo e(__('apply')); ?>">
                                <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                            </a>
                            <?php if(!\Auth::guard('customer')->check()): ?>
                                <a href="<?php echo e(route('proposal.index')); ?>" class="reset-btn" data-toggle="tooltip"
                                    data-original-title="<?php echo e(__('Reset')); ?>">
                                    <span class="btn-inner--icon"><i class="fas fa-trash-restore-alt"></i></span>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(route('customer.proposal')); ?>" class="reset-btn" data-toggle="tooltip"
                                    data-original-title="<?php echo e(__('Reset')); ?>">
                                    <span class="btn-inner--icon"><i class="fas fa-trash-restore-alt"></i></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0 dataTable">
                            <thead>
                                <tr>
                                    <th> <?php echo e(__('Proposal')); ?></th>
                                    <?php if(!\Auth::guard('customer')->check()): ?>
                                        <th> <?php echo e(__('Customer')); ?></th>
                                    <?php endif; ?>
                                    <th> <?php echo e(__('Type')); ?></th>
                                    <th><?php echo e(__('Number')); ?></th>
                                    <th><?php echo e(__('Subject')); ?></th>
                                    <th> <?php echo e(__('Issue Date')); ?></th>
                                    <th> <?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('')); ?>

                                    <?php if(Gate::check('edit proposal') || Gate::check('delete proposal') || Gate::check('show proposal')): ?>
                                        <th> <?php echo e(__('Action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>

                            <tbody>
                                
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\yaman\resources\views/contract/index.blade.php ENDPATH**/ ?>