<?php if(in_array(\Modules\Biolinks\Entities\BiolinksGlobalSetting::MODULE_NAME, user_modules()) && user()->permission('view_biolinks') != 'none'): ?>
    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'wallet','text' => __('biolinks::app.biolinks'),'link' => route('biolinks.index'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
         <?php $__env->endSlot(); ?>
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
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Biolinks/Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>