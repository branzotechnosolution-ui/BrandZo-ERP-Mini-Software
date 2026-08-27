<?php
    $purchaseViewVendorPermission = user()->permission('view_vendor');
    $purchaseViewOrderPermission = user()->permission('view_purchase_order');
    $purchaseViewBillPermission = user()->permission('view_bill');
    $purchaseViewCreditPermission = user()->permission('view_vendor_credit');
    $purchaseViewInventoryPermission = user()->permission('view_inventory');
    $purchaseViewOrderReportPermission = user()->permission('view_order_report');
    $purchaseViewPaymentPermission = user()->permission('view_vendor_payment');
?>
<?php if(in_array(\Modules\Purchase\Entities\PurchaseManagementSetting::MODULE_NAME, user_modules()) && ($purchaseViewVendorPermission != 'none' || $purchaseViewOrderPermission != 'none' || $purchaseViewBillPermission != 'none'
|| $purchaseViewCreditPermission != 'none' || $purchaseViewInventoryPermission != 'none' || $purchaseViewOrderReportPermission != 'none' || $purchaseViewPaymentPermission != 'none')): ?>

    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'wallet','text' => __('purchase::app.menu.purchase'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.6.6 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.6.6 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.6.6 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535z"/>
            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.6.6 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0z"/>
         <?php $__env->endSlot(); ?>

        <div class="accordionItemContent pb-2">

            <!-- NAV ITEM - VENDORS -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('vendors.index'),'text' => __('purchase::app.menu.vendor'),'permission' => ($purchaseViewVendorPermission != 'none' && $purchaseViewVendorPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

            <!-- NAV ITEM - PRODUCTS -->
            <?php if(in_array('products', user_modules()) && $sidebarUserPermissions['view_product'] != 5 && $sidebarUserPermissions['view_product'] != 'none'): ?>
               <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('purchase-products.index'),'text' => __('purchase::app.menu.products')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
            <?php endif; ?>

            <!-- NAV ITEM - ORDERS -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('purchase-order.index'),'text' => __('purchase::app.menu.purchaseOrder'),'permission' => ($purchaseViewOrderPermission != 'none' && $purchaseViewOrderPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

            <!-- NAV ITEM - BILLS -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('bills.index'),'text' => __('purchase::app.menu.bills'),'permission' => ($purchaseViewBillPermission != 'none' && $purchaseViewBillPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

            <!-- NAV ITEM - PAYMENTS -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('vendor-payments.index'),'text' => __('purchase::app.purchaseOrder.vendorPayments'),'permission' => ($purchaseViewPaymentPermission != 'none' && $purchaseViewPaymentPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('vendor-credits.index'),'text' => __('purchase::app.menu.vendorCredits'),'permission' => ($purchaseViewCreditPermission != 'none' && $purchaseViewCreditPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

            <!-- NAV ITEM - INVENTORY -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('purchase-inventory.index'),'text' => __('purchase::app.menu.inventory'),'permission' => ($purchaseViewInventoryPermission != 'none' && $purchaseViewInventoryPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

            <!-- NAV ITEM - REPORTS -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('reports.index'),'text' => __('purchase::app.menu.reports'),'permission' => ($purchaseViewOrderReportPermission != 'none' && $purchaseViewOrderReportPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $attributes = $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__attributesOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989)): ?>
<?php $component = $__componentOriginal75a60586017d0cb41cbff8f75f4a3989; ?>
<?php unset($__componentOriginal75a60586017d0cb41cbff8f75f4a3989); ?>
<?php endif; ?>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal16c5b89192469ba970d54fc9b83541bc)): ?>
<?php $attributes = $__attributesOriginal16c5b89192469ba970d54fc9b83541bc; ?>
<?php unset($__attributesOriginal16c5b89192469ba970d54fc9b83541bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16c5b89192469ba970d54fc9b83541bc)): ?>
<?php $component = $__componentOriginal16c5b89192469ba970d54fc9b83541bc; ?>
<?php unset($__componentOriginal16c5b89192469ba970d54fc9b83541bc); ?>
<?php endif; ?>

<?php endif; ?>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Purchase/Providers/../Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>