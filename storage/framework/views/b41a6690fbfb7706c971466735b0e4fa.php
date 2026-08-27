<?php if(in_array('admin', user_roles()) && in_array(\Modules\Asset\Entities\AssetSetting::MODULE_NAME, user_modules()) && (user()->permission('add_assets_type') == 'all' || user()->permission('add_assets_type') == 'added')): ?>
    <?php if (isset($component)) { $__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $attributes; } ?>
<?php $component = App\View\Components\SettingMenuItem::resolve(['active' => $activeMenu,'menu' => 'asset_settings','href' => route('asset-setting.index'),'text' => __('asset::app.menu.assetSettings')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Asset/Providers/../Resources/views/sections/setting-sidebar.blade.php ENDPATH**/ ?>