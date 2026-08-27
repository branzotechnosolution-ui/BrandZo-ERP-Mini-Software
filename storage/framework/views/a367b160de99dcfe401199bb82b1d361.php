<?php if(!in_array('client', user_roles()) && user()->permission('view_payroll') != 'none' && in_array(\Modules\Payroll\Entities\PayrollSetting::MODULE_NAME, user_modules())): ?>
    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'wallet','text' => __('payroll::app.menu.payroll'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path
                d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
         <?php $__env->endSlot(); ?>

        <div class="accordionItemContent pb-2">
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('payroll.index'),'text' => __('payroll::app.menu.payroll')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('employee-salary.index'),'text' => __('payroll::app.menu.employeeSalary'),'permission' => user()->permission('manage_employee_salary') == 'all'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('payroll-expenses.index'),'text' => __('payroll::app.payrollExpenses')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('overtime-requests.index'),'text' => __('payroll::modules.payroll.overtimeRequest')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <?php if(in_array('admin', user_roles())): ?>
                <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('payroll-reports.index'),'text' => __('app.menu.reports')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/Payroll/Providers/../Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>