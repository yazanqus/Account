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
                <?php if(\Auth::user()->type=='super admin'): ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage user')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('users.index')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit') ? ' active' : ''); ?>">
                                <i class="fas fa-columns"></i><?php echo e(__('User')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if( Gate::check('manage user') || Gate::check('manage role')): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e((Request::segment(1) == 'users' || Request::segment(1) == 'roles' || Request::segment(1) == 'permissions' )?' active':'collapsed'); ?>" href="#navbar-staff" data-toggle="collapse" role="button" aria-expanded="<?php echo e((Request::segment(1) == 'users' || Request::segment(1) == 'roles' || Request::segment(1) == 'permissions' )?'true':'false'); ?>" aria-controls="navbar-staff">
                                <i class="fas fa-users"></i><?php echo e(__('Staff')); ?>

                                <i class="fas fa-sort-up"></i>
                            </a>
                            <div class="collapse <?php echo e((Request::segment(1) == 'users' || Request::segment(1) == 'roles' || Request::segment(1) == 'permissions')?'show':''); ?>" id="navbar-staff">
                                <ul class="nav flex-column submenu-ul">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage user')): ?>
                                        <li class="nav-item <?php echo e((Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit') ? ' active' : ''); ?>">
                                            <a href="<?php echo e(route('users.index')); ?>" class="nav-link"><?php echo e(__('User')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage role')): ?>
                                        <li class="nav-item <?php echo e((Request::route()->getName() == 'roles.index' || Request::route()->getName() == 'roles.create' || Request::route()->getName() == 'roles.edit') ? ' active' : ''); ?>">
                                            <a href="<?php echo e(route('roles.index')); ?>" class="nav-link"><?php echo e(__('Role')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(Gate::check('manage product & service')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('productservice.index')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'productservice')?'active':''); ?>">
                            <i class="fas fa-shopping-cart"></i><?php echo e(__('Product & Service')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage customer')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('customer.index')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'customer')?'active':''); ?>">
                            <i class="fas fa-user-ninja"></i><?php echo e(__('Customer')); ?>

                        </a>
                    </li>
                <?php endif; ?> 
                 <?php if(Gate::check('manage vender')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('vender.index')); ?>" class="nav-link <?php echo e((Request::segment(1) == 'vender')?'active':''); ?>">
                            <i class="fas fa-sticky-note"></i><?php echo e(__('Vendor')); ?>

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
                
                <?php if(Gate::check('manage invoice')): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage invoice')): ?>
                    <li class="nav-item <?php echo e((Request::route()->getName() == 'invoice.index' || Request::route()->getName() == 'invoice.create' || Request::route()->getName() == 'invoice.edit' || Request::route()->getName() == 'invoice.show') ? ' active' : ''); ?>">
                        <a href="<?php echo e(route('invoice.index')); ?>" class="nav-link"><?php echo e(__('Invoice')); ?>

                            <i class="fas fa-money-bill-alt"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php endif; ?>
                <li class="nav-item <?php echo e((Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.create' || Request::route()->getName() == 'contract.edit' || Request::route()->getName() == 'contract.show') ? ' active' : ''); ?>">
                    <a href="<?php echo e(route('contract.index')); ?>" class="nav-link"><?php echo e(__('Contract')); ?>

                        <i class="fas fa-file-contract"></i>
                    </a>
                </li>

                

                

                

                
                
                
                
                

                 

                <?php if(Gate::check('manage constant tax') || Gate::check('manage constant category') ||Gate::check('manage constant unit') ||Gate::check('manage constant payment method') ||Gate::check('manage constant custom field') || Gate::check('manage constant chart of account')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e((Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type')?' active':'collapsed'); ?>" href="#navbar-constant" data-toggle="collapse" role="button" aria-expanded="<?php echo e((Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) ==
                        'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type')?'true':'false'); ?>" aria-controls="navbar-constant">
                            <i class="fas fa-cog"></i><?php echo e(__('Constant')); ?>

                            <i class="fas fa-sort-up"></i>
                        </a>
                        <div class="collapse <?php echo e((Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type')?'show':''); ?>" id="navbar-constant">
                            <ul class="nav flex-column submenu-ul">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage constant tax')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'taxes.index' ) ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('taxes.index')); ?>" class="nav-link"><?php echo e(__('Taxes')); ?></a>
                                    </li>
                                <?php endif; ?>
                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage constant unit')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'product-unit.index' ) ? ' active' : ''); ?>">
                                        <a href="<?php echo e(route('product-unit.index')); ?>" class="nav-link"><?php echo e(__('Unit')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage constant custom field')): ?>
                                    <li class="nav-item <?php echo e((Request::route()->getName() == 'custom-field.index' ) ? 'active' : ''); ?>">
                                        <a href="<?php echo e(route('custom-field.index')); ?>" class="nav-link"><?php echo e(__('Custom Field')); ?></a>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if(Auth::user()->type == 'super admin'): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('custom_landing_page.index')); ?>" class="nav-link">
                            <i class="fas fa-clipboard"></i><?php echo e(__('Landing page')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage system settings')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('systems.index')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'systems.index') ? ' active' : ''); ?>">
                            <i class="fas fa-sliders-h"></i><?php echo e(__('System Setting')); ?>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if(Gate::check('manage company settings')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('company.setting')); ?>" class="nav-link <?php echo e((Request::route()->getName() == 'systems.index') ? ' active' : ''); ?>">
                            <i class="fas fa-sliders-h"></i><?php echo e(__('Company Setting')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\yaman\resources\views/partials/admin/menu.blade.php ENDPATH**/ ?>