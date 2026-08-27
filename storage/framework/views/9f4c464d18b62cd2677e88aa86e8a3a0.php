<?php if(in_array('documents', $activeWidgets) && in_array('employees', user_modules())): ?>
    <?php if(isset($upcomingDocumentExpiries)): ?>
        <div class="col-md-6 mb-3">
            <div class="bg-white p-20 rounded b-shadow-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="f-15 f-w-500 mb-0 text-darkest-grey">
                        <i class="fa fa-file-alt text-primary mr-2"></i><?php echo app('translator')->get('modules.dashboard.documents'); ?>
                    </h5>
                    <span class="badge badge-primary f-10"><?php echo e($upcomingDocumentExpiries->count()); ?> <?php echo app('translator')->get('app.documents'); ?></span>
                </div>

                <div class="document-list" style="max-height: 250px; overflow-y: auto;">
                    <?php $__empty_1 = true; $__currentLoopData = $upcomingDocumentExpiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $expiryDate = \Carbon\Carbon::parse($document->expiry_date);
                            $daysUntilExpiry = now()->diffInDays($expiryDate, false);
                            $isExpired = $expiryDate->isPast();
                            $isExpiringSoon = $daysUntilExpiry <= 30 && !$isExpired;
                            $isExpiringVerySoon = $daysUntilExpiry <= 7 && !$isExpired;
                        ?>
                        <div class="document-item p-3 mb-2 rounded border-left-4 <?php echo e($isExpired ? 'border-danger bg-light-danger' : ($isExpiringVerySoon ? 'border-warning bg-light-warning' : ($isExpiringSoon ? 'border-warning bg-light-warning' : 'border-success bg-light-success'))); ?>">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <?php if($isExpired): ?>
                                        <i class="fa fa-exclamation-triangle text-danger f-16"></i>
                                    <?php elseif($isExpiringVerySoon): ?>
                                        <i class="fa fa-exclamation-circle text-warning f-16"></i>
                                    <?php elseif($isExpiringSoon): ?>
                                        <i class="fa fa-clock text-warning f-16"></i>
                                    <?php else: ?>
                                        <i class="fa fa-calendar-check text-success f-16"></i>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="mb-0 f-13 font-weight-bold text-darkest-grey">
                                            <a href="<?php echo e(route('employees.show', $document->user_id)); ?>?tab=documents" class="text-darkest-grey"><?php echo e($document->document_name); ?></a>
                                        </h6>
                                        <?php if($document->document_number): ?>
                                            <small class="text-muted f-10">#<?php echo e($document->document_number); ?></small>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <small class="f-11 <?php echo e($isExpired ? 'text-danger' : ($isExpiringVerySoon ? 'text-warning' : ($isExpiringSoon ? 'text-warning' : 'text-success'))); ?>">
                                                <?php if($isExpired): ?>
                                                    <i class="fa fa-times-circle mr-1"></i><?php echo app('translator')->get('app.expired'); ?> <?php echo e($expiryDate->diffForHumans()); ?>

                                                <?php elseif($isExpiringVerySoon): ?>
                                                    <i class="fa fa-exclamation-triangle mr-1"></i><?php echo app('translator')->get('app.expires'); ?> <?php echo e($expiryDate->diffForHumans()); ?>

                                                <?php elseif($isExpiringSoon): ?>
                                                    <i class="fa fa-clock mr-1"></i><?php echo app('translator')->get('app.expires'); ?> <?php echo e($expiryDate->diffForHumans()); ?>

                                                <?php else: ?>
                                                    <i class="fa fa-calendar mr-1"></i><?php echo app('translator')->get('app.expires'); ?> <?php echo e($expiryDate->diffForHumans()); ?>

                                                <?php endif; ?>
                                            </small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted f-10 mr-2"><?php echo e($expiryDate->format('M d, Y')); ?></small>
                                            <?php if($isExpired): ?>
                                                <span class="badge badge-danger f-9"><?php echo app('translator')->get('app.expired'); ?></span>
                                            <?php elseif($isExpiringVerySoon): ?>
                                                <span class="badge badge-warning f-9"><?php echo app('translator')->get('app.urgent'); ?></span>
                                            <?php elseif($isExpiringSoon): ?>
                                                <span class="badge badge-warning f-9"><?php echo app('translator')->get('app.soon'); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-success f-9"><?php echo app('translator')->get('app.valid'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="text-center py-4">
                            <i class="fa fa-file-alt text-lightest f-24 mb-2"></i>
                            <p class="mb-0 f-12 text-lightest"><?php echo app('translator')->get('messages.noDocumentExpiries'); ?></p>
                        </div>
                    <?php endif; ?>
                    
                    
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?><?php /**PATH /Users/macbook/Downloads/BrandZo_ERP_Mini_Software 3/resources/views/dashboard/employee/widgets/documents.blade.php ENDPATH**/ ?>