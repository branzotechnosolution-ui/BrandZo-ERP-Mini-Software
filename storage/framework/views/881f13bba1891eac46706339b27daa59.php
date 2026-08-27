<?php if(session('languagepack_module_activated') == 'activated'): ?>
<?php
    $moduleLink = '<a href="'.route('superadmin.superadmin-settings.index').'?tab=language'.'" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">'.__('modules.settings.languageSettings').'</a>';
?>
<div class="p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <div class="flex items-center">
        <span class="font-medium">Note:</span>
        <span class="ml-2"><?php echo app('translator')->get('languagepack::messages.moduleActivatedNote', ['link' => $moduleLink]); ?></span>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/LanguagePack/Providers/../Resources/views/module-activated-alert.blade.php ENDPATH**/ ?>