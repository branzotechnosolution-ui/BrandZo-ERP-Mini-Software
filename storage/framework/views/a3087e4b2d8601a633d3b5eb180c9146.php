<?php
    $viewPermission = user()->permission('view_zoom_meetings')
?>
<?php if(in_array(\Modules\Zoom\Entities\ZoomSetting::MODULE_NAME, user_modules()) && in_array($viewPermission, ['all', 'added', 'owned', 'both'])): ?>
    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'camera-video','link' => route('zoom-meetings.index'),'text' => __('zoom::app.menu.zoomMeeting'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path fill-rule="evenodd"
                  d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
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



<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Zoom/Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>