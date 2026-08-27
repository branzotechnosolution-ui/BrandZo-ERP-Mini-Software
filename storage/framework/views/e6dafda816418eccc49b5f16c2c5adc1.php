<?php
    // Custom permissions for hosting and domain management
    $hostingViewPermission = user()->permission('view_hosting');
    $hostingAddPermission = user()->permission('add_hosting');
    $hostingEditPermission = user()->permission('edit_hosting');
    $hostingDeletePermission = user()->permission('delete_hosting');

    $domainViewPermission = user()->permission('view_domain');
    $domainAddPermission = user()->permission('add_domain');
    $domainEditPermission = user()->permission('edit_domain');
    $domainDeletePermission = user()->permission('delete_domain');

    $statisticsPermission = user()->permission('view_server_statistics');
    $activitiesPermission = user()->permission('view_server_activities');

    $providerViewPermission = user()->permission('view_provider');
    $providerAddPermission = user()->permission('add_provider');
    $providerEditPermission = user()->permission('edit_provider');
    $providerDeletePermission = user()->permission('delete_provider');
?>

<?php if(!in_array('client', user_roles()) && in_array(\Modules\ServerManager\Entities\ServerSetting::MODULE_NAME, user_modules()) && ($hostingViewPermission != 'none' || $hostingAddPermission != 'none' || $hostingEditPermission != 'none' || $hostingDeletePermission != 'none' || $domainViewPermission != 'none' || $domainAddPermission != 'none' || $domainEditPermission != 'none' || $domainDeletePermission != 'none' || $providerViewPermission != 'none' || $providerAddPermission != 'none' || $providerEditPermission != 'none' || $providerDeletePermission != 'none')): ?>

    <?php if (isset($component)) { $__componentOriginal16c5b89192469ba970d54fc9b83541bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16c5b89192469ba970d54fc9b83541bc = $attributes; } ?>
<?php $component = App\View\Components\MenuItem::resolve(['icon' => 'server','text' => __('servermanager::app.menu.serverManager'),'addon' => App::environment('demo')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('iconPath', null, []); ?> 
            <path d="M1.333 2.828a3 3 0 0 1 3-3h11.334a3 3 0 0 1 3 3v10.344a3 3 0 0 1-3 3H4.333a3 3 0 0 1-3-3V2.828z"/>
            <path d="M1.333 2.828a3 3 0 0 1 3-3h11.334a3 3 0 0 1 3 3v10.344a3 3 0 0 1-3 3H4.333a3 3 0 0 1-3-3V2.828z"/>
            <path d="M4.667 6.5h6.666v1H4.667z"/>
            <path d="M4.667 8.5h6.666v1H4.667z"/>
            <path d="M4.667 10.5h4.666v1H4.667z"/>
         <?php $__env->endSlot(); ?>

        <div class="accordionItemContent">

            <!-- NAV ITEM - DASHBOARD -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('server-manager.index'),'text' => __('servermanager::app.menu.dashboard'),'permission' => ($hostingViewPermission != 'none' && $hostingViewPermission != '' || $domainViewPermission != 'none' && $domainViewPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

            <!-- NAV ITEM - HOSTING -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('hosting.index'),'text' => __('servermanager::app.menu.hosting'),'permission' => ($hostingViewPermission != 'none' && $hostingViewPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

            <!-- NAV ITEM - DOMAINS -->
            <?php if (isset($component)) { $__componentOriginal75a60586017d0cb41cbff8f75f4a3989 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a60586017d0cb41cbff8f75f4a3989 = $attributes; } ?>
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('domain.index'),'text' => __('servermanager::app.menu.domains'),'permission' => ($domainViewPermission != 'none' && $domainViewPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\SubMenuItem::resolve(['link' => route('provider.index'),'text' => __('servermanager::app.menu.providerList'),'permission' => ($providerViewPermission != 'none' && $providerViewPermission != '')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

<script>
// Fix ServerManager menu active state
$(document).ready(function() {
    var currentUrl = window.location.pathname;

    // Remove any existing active classes from ServerManager menu items
    $('#sideMenuScroll li a[href*="server-manager"]').removeClass('active');
    $('#sideMenuScroll li a[href*="server-manager"]').closest('li').removeClass('openIt').addClass('closeIt');

    // Add active class to the correct menu item based on current URL
    if (currentUrl.includes('/server-manager/hosting')) {
        $('#sideMenuScroll li a[href*="server-manager/hosting"]').addClass('active');
        $('#sideMenuScroll li a[href*="server-manager/hosting"]').closest('li').removeClass('closeIt').addClass('openIt');
        $('#sideMenuScroll li a[href*="server-manager"]').closest('li').removeClass('closeIt').addClass('openIt');
    } else if (currentUrl.includes('/server-manager/domain')) {
        $('#sideMenuScroll li a[href*="server-manager/domain"]').addClass('active');
        $('#sideMenuScroll li a[href*="server-manager/domain"]').closest('li').removeClass('closeIt').addClass('openIt');
        $('#sideMenuScroll li a[href*="server-manager"]').closest('li').removeClass('closeIt').addClass('openIt');
    } else if (currentUrl.includes('/server-manager/provider')) {
        $('#sideMenuScroll li a[href*="server-manager/provider"]').addClass('active');
        $('#sideMenuScroll li a[href*="server-manager/provider"]').closest('li').removeClass('closeIt').addClass('openIt');
        $('#sideMenuScroll li a[href*="server-manager"]').closest('li').removeClass('closeIt').addClass('openIt');
    } else if (currentUrl.includes('/server-manager') && !currentUrl.includes('/server-manager/')) {
        // Dashboard - exact match for server-manager without additional path
        $('#sideMenuScroll li a[href*="server-manager"]').filter(function() {
            return this.href.endsWith('/server-manager') || this.href.endsWith('/server-manager/');
        }).addClass('active');
        $('#sideMenuScroll li a[href*="server-manager"]').closest('li').removeClass('closeIt').addClass('openIt');
    }
});
</script>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/ServerManager/Providers/../Resources/views/sections/sidebar.blade.php ENDPATH**/ ?>