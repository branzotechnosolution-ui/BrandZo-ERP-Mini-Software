<?php if(in_array('invoices', user_modules()) && $sidebarUserPermissions['view_invoices'] != 5 && $sidebarUserPermissions['view_invoices'] != 'none'): ?>
    <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['text' => __('einvoice::app.menu.einvoice'),'link' => route('einvoice.index'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/EInvoice/Providers/../Resources/views/sections/finance/sidebar.blade.php ENDPATH**/ ?>