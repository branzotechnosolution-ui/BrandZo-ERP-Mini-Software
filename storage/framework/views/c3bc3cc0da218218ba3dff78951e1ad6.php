<?php if((user()->permission('manage_sms_settings') == 'all' && in_array(\Modules\Sms\Entities\SmsSetting::MODULE_NAME, user_modules())) || in_array('admin',user_roles())): ?>
    <?php if (isset($component)) { $__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $attributes; } ?>
<?php $component = App\View\Components\SettingMenuItem::resolve(['active' => $activeMenu,'menu' => 'sms_setting','href' => route('sms-setting.index'),'text' => __('sms::app.smsSetting')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting-menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SettingMenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8)): ?>
<?php $attributes = $__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8; ?>
<?php unset($__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8)): ?>
<?php $component = $__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8; ?>
<?php unset($__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Sms/Providers/../Resources/views/sections/setting-sidebar.blade.php ENDPATH**/ ?>