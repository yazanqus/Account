<?php
    $logo=asset(Storage::url('uploads/logo/'));
    $company_logo=Utility::getValByName('company_logo');
    $company_small_logo=Utility::getValByName('company_small_logo');
?>

<div class="sidenav custom-sidenav" id="sidenav-main">
    <!-- Sidenav header -->
    <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
            <img src="<?php echo e($logo.'/'.(isset($company_logo) && !empty($company_logo)?$company_logo:'logo.png')); ?>" class="navbar-brand-img"/>
        </a>
        <div class="ml-auto">
            <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollbar-inner">
        <div class="div-mega">
            <ul class="navbar-nav navbar-nav-docs">
                <li class="nav-item">
                    <?php if(\Auth::guard('customer')->check()): ?>
                        <a href="<?php echo e(route('customer.dashboard')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'customer.dashboard') ? ' active' : ''); ?>">
                            <i class="fas fa-fire"></i><?php echo e(__('Dashboard')); ?>

                        </a>
                    <?php elseif(\Auth::guard('vender')->check()): ?>
                        <a href="<?php echo e(route('vender.dashboard')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'vender.dashboard') ? ' active' : ''); ?>">
                            <i class="fas fa-fire"></i><?php echo e(__('Dashboard')); ?>

                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'dashboard') ? ' active' : ''); ?>">
                            <i class="fas fa-fire"></i><?php echo e(__('Dashboard')); ?>

                        </a>
                    <?php endif; ?>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage customer proposal')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('customer.proposal')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'customer.proposal' || Request::route()->getName() == 'customer.proposal.show') ? ' active' : ''); ?>">
                            <i class="fas fa-file"></i><?php echo e(__('Proposal')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage customer invoice')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('customer.invoice')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'customer.invoice' || Request::route()->getName() == 'customer.invoice.show') ? ' active' : ''); ?> ">
                            <i class="fas fa-file"></i><?php echo e(__('Invoice')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage customer payment')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('customer.payment')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'customer.payment') ? ' active' : ''); ?> ">
                            <i class="fas fa-money-bill-alt"></i><?php echo e(__('Payment')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage customer transaction')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('customer.transaction')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'customer.transaction') ? ' active' : ''); ?>">
                            <i class="fas fa-history"></i><?php echo e(__('Transaction')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage vender bill')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('vender.bill')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'vender.bill' || Request::route()->getName() == 'vender.bill.show') ? ' active' : ''); ?> ">
                            <i class="fas fa-file"></i><?php echo e(__('Bill')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage vender payment')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('vender.payment')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'vender.payment') ? ' active' : ''); ?> ">
                            <i class="fas fa-money-bill-alt"></i><?php echo e(__('Payment')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage vender transaction')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('vender.transaction')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'vender.transaction') ? ' active' : ''); ?>">
                            <i class="fas fa-history"></i><?php echo e(__('Transaction')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                
                
                
                
                <?php if(Gate::check('manage proposal')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('proposal.index')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'proposal')?'active':''); ?>">
                            <i class="fas fa-receipt"></i><?php echo e(__('Proposal')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage bank account')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'bank-account.index' || Request::route()->getName() == 'bank-account.create' || Request::route()->getName() == 'bank-account.edit') ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('bank-account.index')); ?>" class="nav-link"><?php echo e(__('Account')); ?></a>
                                    </li>
                                <?php endif; ?>
                                

                <?php if( Gate::check('manage invoice') ||  Gate::check('manage revenue') ||  Gate::check('manage credit note')): ?>
                    
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage invoice')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'invoice.index' || Request::route()->getName() == 'invoice.create' || Request::route()->getName() == 'invoice.edit' || Request::route()->getName() == 'invoice.show') ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('invoice.index')); ?>" class="nav-link"><?php echo e(__('Invoice')); ?></a>
                                    </li>
                                <?php endif; ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'invoice.index' || Request::route()->getName() == 'invoice.create' || Request::route()->getName() == 'invoice.edit' || Request::route()->getName() == 'invoice.show') ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('invoice.index')); ?>" class="nav-link"><?php echo e(__('Contract')); ?></a>
                                    </li>
                                
                <?php endif; ?>

                <?php if( Gate::check('manage bill')  ||  Gate::check('manage payment') ||  Gate::check('manage debit note')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((Request::segment(1) == 'bill' || Request::segment(1) == 'payment' || Request::segment(1) == 'debit-note'  )?' active':'collapsed'); ?>" href="#navbar-expense" data-toggle="collapse" role="button" aria-expanded="<?php echo e((Request::segment(1) == 'bill' || Request::segment(1) == 'payment' || Request::segment(1) == 'debit-note'  )?'true':'false'); ?>" aria-controls="navbar-expense">
                            <i class="fas fa-money-bill-wave-alt"></i><?php echo e(__('Expense')); ?>

                            <i class="fas fa-sort-up"></i>
                        </a>
                        <div class="collapse <?php echo e((Request::segment(1) == 'bill' || Request::segment(1) == 'payment' || Request::segment(1) == 'debit-note'  )?'show':''); ?>" id="navbar-expense">
                            <ul class="nav flex-column submenu-ul">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage bill')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'bill.index' || Request::route()->getName() == 'bill.create' || Request::route()->getName() == 'bill.edit' || Request::route()->getName() == 'bill.show') ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('bill.index')); ?>" class="nav-link"><?php echo e(__('Bill')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage payment')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'payment.index' || Request::route()->getName() == 'payment.create' || Request::route()->getName() == 'payment.edit') ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('payment.index')); ?>" class="nav-link"><?php echo e(__('Payment')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage debit note')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'debit.note' ) ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('debit.note')); ?>" class="nav-link"><?php echo e(__('Debit Note')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                <?php endif; ?>

                

                
                
                
                
                

                

                
                
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\yaman\resources\views/partials/admin/menu.blade.php ENDPATH**/ ?>