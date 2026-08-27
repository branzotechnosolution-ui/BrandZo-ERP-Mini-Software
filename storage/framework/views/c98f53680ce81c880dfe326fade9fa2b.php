<?php if(!in_array('client', user_roles()) && (user()->permission('manage_salary_payment_method') == 'all' || user()->permission('manage_salary_component') == 'all' || user()->permission('manage_salary_group') == 'all' || user()->permission('manage_salary_tds') == 'all')): ?>
    <?php if(in_array(\Modules\Payroll\Entities\PayrollSetting::MODULE_NAME, user_modules())): ?>
        <?php if (isset($component)) { $__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $attributes; } ?>
<?php $component = App\View\Components\SettingMenuItem::resolve(['active' => $activeMenu,'menu' => 'payroll_settings','href' => route('payroll.payroll_settings'),'text' => __('payroll::app.menu.payrollSettings')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <?php if (isset($component)) { $__componentOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bb8e03ef4950bdae17adf49744a4cf8 = $attributes; } ?>
<?php $component = App\View\Components\SettingMenuItem::resolve(['active' => $activeMenu,'menu' => 'overtime_settings','href' => route('payroll.overtime_settings'),'text' => __('payroll::app.menu.overtimeSettings')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Payroll/Providers/../Resources/views/sections/setting-sidebar.blade.php ENDPATH**/ ?>