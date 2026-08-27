<?php if(in_array('internship', user_modules()) || in_array('Internship', user_modules())): ?>
    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'mortarboard','text' => __('Internship'),'link' => route('interns.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="M8.211 2.247a.5.5 0 0 1 .578 0l6 4a.5.5 0 0 1 0 .826l-6 4a.5.5 0 0 1-.578 0l-6-4a.5.5 0 0 1 0-.826l6-4zM2.4 6.5 8 10.233 13.6 6.5 8 2.767 2.4 6.5z"/>
            <path d="M3.5 8.5v3.293l4.146 2.764a.5.5 0 0 0 .708 0l4.146-2.764V8.5h1v3.5a1 1 0 0 1-.447.832l-4.5 3a1 1 0 0 1-1.106 0l-4.5-3A1 1 0 0 1 3 12V8.5h.5z"/>
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
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Internship/Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>