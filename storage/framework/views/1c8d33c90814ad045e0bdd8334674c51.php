<?php if(count(getUniversalBundleAvailableForInstallModules()) > 0): ?>
<div class="col-lg-12 col-md-12 ntfcn-tab-content-left w-100 px-0 pb-4">
    <h4 class="f-21 font-weight-normal">
        <?php echo app('translator')->get('universalbundle::app.installBundleModules'); ?>
    </h4>

</div>
<div class="col-md-12 mb-3 px-0">
    <ul class="list-group" id="files-list">
        <?php $__currentLoopData = getUniversalBundleAvailableForInstallModules(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-9 py-1">
                    <b><?php echo e($module); ?></b>
                </div>


                <div class="col-lg-3 text-lg-right py-1">
                    <button type="button"
                            class="btn btn-primary p-1 f-13 btn-sm mr-2 installUniversalBundleModule"
                            data-module="<?php echo e($module); ?>"><?php echo app('translator')->get('modules.update.install'); ?> <i
                            class="fa fa-download"></i>
                    </button>
                </div>
            </div>
        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<script>
$('body').on('click', '.installUniversalBundleModule', function() {
        var module = $(this).data('module');


        var alertMessage = `<?php echo app('translator')->get('universalbundle::app.installModuleConfirm', ['module' => ':module']); ?>`;
        alertMessage = alertMessage.replace(':module', module);

        Swal.fire({
            title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
            text: alertMessage,
            icon: 'warning',
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: "<?php echo app('translator')->get('app.yes'); ?>",
            cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
            customClass: {
                confirmButton: 'btn btn-primary mr-3',
                cancelButton: 'btn btn-secondary'
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {

                var url = "<?php echo e(route('install-universal-bundle-module')); ?>";

                var token = "<?php echo e(csrf_token()); ?>";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    data: {
                        '_token': token,
                        'module': module,
                    },
                    blockUI: true,
                    success: function(response) {
                        if (response.status == 'success') {
                            $.easyAjax({
                                type: 'POST',
                                url: "<?php echo e(route('add-universal-module-purchase-code')); ?>",
                                data: {
                                    '_token': token,
                                    'module': module,
                                },
                                blockUI: true,
                                success: function(response) {
                                    if (response.status == 'success') {
                                        setTimeout(() => {
                                            $.unblockUI();
                                            window.location.reload();
                                        }, 2000);
                                    }
                                }
                            });
                        }
                    }
                });
            }
        });
    });

</script>
<?php endif; ?>
<?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/Modules/UniversalBundle/Providers/../Resources/views/install-modules.blade.php ENDPATH**/ ?>