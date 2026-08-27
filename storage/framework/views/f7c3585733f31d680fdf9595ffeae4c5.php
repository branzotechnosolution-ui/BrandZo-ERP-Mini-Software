<?php if(
    !in_array('client', user_roles()) &&
        in_array(\Modules\Letter\Entities\LetterSetting::MODULE_NAME, user_modules()) &&
        (user()->permission('view_letter') != 'none' || user()->permission('view_template') != 'none')): ?>
    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'file','text' => __('letter::app.menu.letter'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path
                    d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
            </svg>
         <?php $__env->endSlot(); ?>


        <div class="accordionItemContent">
            <?php if(user()->permission('view_letter') != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('letter.generate.index'),'text' => __('letter::app.menu.generate')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <?php if(user()->permission('view_template') != 'none'): ?>
                <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('letter.template.index'),'text' => __('letter::app.menu.template')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Letter/Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>