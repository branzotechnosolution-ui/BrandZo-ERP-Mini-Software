<?php if($plugins->where('envato_id', config(strtolower($module) . '.envato_item_id'))->first()): ?>
    <?php if($plugins->where('envato_id', config(strtolower($module) . '.envato_item_id'))->pluck('version')->first() > \Illuminate\Support\Facades\File::get($module->getPath() . '/version.txt')): ?>

        <span class="badge badge-danger" data-toggle="tooltip"
              data-original-title="<?php echo app('translator')->get('app.moduleUpdateMessage', [
                            'name' => $module->getName(),
                            'version' => $plugins->where('envato_id', config(strtolower($module) . '.envato_item_id'))->pluck('version')->first(),
        ]); ?>">

            <?php echo e(\Illuminate\Support\Facades\File::get($module->getPath() . '/version.txt')); ?>

        </span>
    <?php else: ?>
        <span class="badge badge-success">
            <?php echo e(\Illuminate\Support\Facades\File::get($module->getPath() . '/version.txt')); ?>

        </span>
    <?php endif; ?>
<?php else: ?>
    <span class="badge badge-success"><?php echo e(\Illuminate\Support\Facades\File::get($module->getPath() . '/version.txt')); ?></span>
<?php endif; ?>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/resources/views/custom-modules/sections/version.blade.php ENDPATH**/ ?>