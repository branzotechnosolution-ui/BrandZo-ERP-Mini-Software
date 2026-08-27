<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GdprController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TimelogController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\LeadFileController;
use App\Http\Controllers\LeadNoteController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TaskFileController;
use App\Http\Controllers\TaskNoteController;
use App\Http\Controllers\ClientDocController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventFileController;
use App\Http\Controllers\LeadBoardController;
use App\Http\Controllers\LeaveFileController;
use App\Http\Controllers\QuickbookController;
use App\Http\Controllers\TaskBoardController;
use App\Http\Controllers\TaskLabelController;
use App\Http\Controllers\ProjectLabelController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClientNoteController;
use App\Http\Controllers\CreditNoteController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\LeadReportController;
use App\Http\Controllers\StickyNoteController;
use App\Http\Controllers\TaskReportController;
use App\Http\Controllers\TicketFileController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeDocController;
use App\Http\Controllers\EmployeeDocumentExpiryController;
use App\Http\Controllers\LeadCategoryController;
use App\Http\Controllers\LeaveReportController;
use App\Http\Controllers\LeavesQuotaController;
use App\Http\Controllers\MessageFileController;
use App\Http\Controllers\ProductFileController;
use App\Http\Controllers\ProjectFileController;
use App\Http\Controllers\ProjectNoteController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SubTaskFileController;
use App\Http\Controllers\TaskCommentController;
use App\Http\Controllers\TicketReplyController;
use App\Http\Controllers\AppreciationController;
use App\Http\Controllers\ContractFileController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\EmployeeVisaController;
use App\Http\Controllers\GdprSettingsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TaskCalendarController;
use App\Http\Controllers\TaskCategoryController;
use App\Http\Controllers\InvoiceFilesController;
use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\ContractRenewController;
use App\Http\Controllers\EventCalendarController;
use App\Http\Controllers\ExpenseReportController;
use App\Http\Controllers\FinanceReportController;
use App\Http\Controllers\KnowledgeBaseController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\ProjectRatingController;
use App\Http\Controllers\TimelogReportController;
use App\Http\Controllers\ClientCategoryController;
use App\Http\Controllers\LeadCustomFormController;
use App\Http\Controllers\UserPermissionController;
use App\Http\Controllers\DiscussionFilesController;
use App\Http\Controllers\DiscussionReplyController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProjectCalendarController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectTemplateController;
use App\Http\Controllers\TimelogCalendarController;
use App\Http\Controllers\AttendanceReportController;
use App\Http\Controllers\RecurringEventController;
use App\Http\Controllers\RecurringTaskController;
use App\Http\Controllers\ContractTemplateController;
use App\Http\Controllers\EmergencyContactController;
use App\Http\Controllers\EstimateTemplateController;
use App\Http\Controllers\ProjectMilestoneController;
use App\Http\Controllers\ProposalTemplateController;
use App\Http\Controllers\RecurringExpenseController;
use App\Http\Controllers\RecurringInvoiceController;
use App\Http\Controllers\TicketCustomFormController;
use App\Http\Controllers\ClientSubCategoryController;
use App\Http\Controllers\KnowledgeBaseFileController;
use App\Http\Controllers\ContractDiscussionController;
use App\Http\Controllers\DealNoteController;
use App\Http\Controllers\DiscussionCategoryController;
use App\Http\Controllers\ProductSubCategoryController;
use App\Http\Controllers\ProjectTemplateTaskController;
use App\Http\Controllers\ProjectTimelogBreakController;
use App\Http\Controllers\EmployeeShiftScheduleController;
use App\Http\Controllers\IncomeVsExpenseReportController;
use App\Http\Controllers\KnowledgeBaseCategoryController;
use App\Http\Controllers\ProjectTemplateMemberController;
use App\Http\Controllers\ProjectTemplateSubTaskController;
use App\Http\Controllers\EmployeeShiftChangeRequestController;
use App\Http\Controllers\EstimateRequestController;
use App\Http\Controllers\GanttLinkController;
use App\Http\Controllers\LeadContactController;
use App\Http\Controllers\NoticeFileController;
use App\Http\Controllers\InvoicePaymentDetailController;
use App\Http\Controllers\MyCalendarController;
use App\Http\Controllers\ProjectSubCategoryController;
use App\Http\Controllers\ProjectTemplateMilestoneController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\TimelogWeeklyApprovalController;
use App\Http\Controllers\WeeklyTimesheetController;


Route::group(['middleware' => 'auth', 'prefix' => 'account'], function () {
    Route::post('image/upload', [ImageController::class, 'store'])->name('image.store');


    Route::get('account-unverified', [DashboardController::class, 'accountUnverified'])->name('account_unverified');
    Route::get('checklist', [DashboardController::class, 'checklist'])->name('checklist');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('dashboard-advanced', [DashboardController::class, 'advancedDashboard'])->name('dashboard.advanced');
    Route::post('dashboard/widget/{dashboardType}', [DashboardController::class, 'widget'])->name('dashboard.widget');
    Route::post('dashboard/week-timelog', [DashboardController::class, 'weekTimelog'])->name('dashboard.week_timelog');
    Route::get('dashboard/lead-data/{id}', [DashboardController  ::class, 'getLeadStage'])->name('dashboard.deal-stage-data');

    Route::get('attendances/clock-in-modal', [DashboardController::class, 'clockInModal'])->name('attendances.clock_in_modal');
    Route::post('attendances/store-clock-in', [DashboardController::class, 'storeClockIn'])->name('attendances.store_clock_in');

    Route::post('attendances/quick-clock-in', [AttendanceController::class, 'quickClockIn'])->name('attendances.quick_clock_in');
    Route::post('attendances/quick-clock-out', [AttendanceController::class, 'quickClockOut'])->name('attendances.quick_clock_out');
    Route::post('attendances/start-break', [AttendanceController::class, 'startBreak'])->name('attendances.start_break');
    Route::post('attendances/end-break', [AttendanceController::class, 'endBreak'])->name('attendances.end_break');
    Route::get('attendances/today-summary', [AttendanceController::class, 'todaySummary'])->name('attendances.today_summary');

    Route::get('attendances/update-clock-in', [DashboardController::class, 'updateClockIn'])->name('attendances.update_clock_in');
    Route::get('attendances/show_clocked_hours', [DashboardController::class, 'showClockedHours'])->name('attendances.show_clocked_hours');
    Route::get('dashboard/private_calendar', [DashboardController::class, 'privateCalendar'])->name('dashboard.private_calendar');
    Route::get('/pusher/beams-auth', [DashboardController::class, 'beamAuth'])->name('dashboard.beam_auth');

    Route::get('settings/change-language', [SettingsController::class, 'changeLanguage'])->name('settings.change_language');
    Route::resource('settings', SettingsController::class)->only(['edit', 'update', 'index', 'change_language']);


    Route::post('approve/{id}', [ClientController::class, 'approve'])->name('clients.approve');
    Route::post('save-consent-purpose-data/{client}', [ClientController::class, 'saveConsentLeadData'])->name('clients.save_consent_purpose_data');
    Route::get('clients/gdpr-consent', [ClientController::class, 'consent'])->name('clients.gdpr_consent');
    Route::post('clients/save-client-consent/{lead}', [ClientController::class, 'saveClientConsent'])->name('clients.save_client_consent');
    Route::post('clients/ajax-details/{id}', [ClientController::class, 'ajaxDetails'])->name('clients.ajax_details');
    Route::get('clients/client-details/{id}', [ClientController::class, 'clientDetails'])->name('clients.client_details');
    Route::post('clients/project-list/{id}', [ClientController::class, 'projectList'])->name('clients.project_list');
    Route::post('clients/apply-quick-action', [ClientController::class, 'applyQuickAction'])->name('clients.apply_quick_action');
    Route::get('clients/import', [ClientController::class, 'importClient'])->name('clients.import');
    Route::post('clients/import', [ClientController::class, 'importStore'])->name('clients.import.store');
    Route::post('clients/import/process', [ClientController::class, 'importProcess'])->name('clients.import.process');
    Route::get('clients/finance-count/{id}', [ClientController::class, 'financeCount'])->name('clients.finance_count');
    Route::resource('clients', ClientController::class);

    Route::post('client-contacts/apply-quick-action', [ClientContactController::class, 'applyQuickAction'])->name('client-contacts.apply_quick_action');
    Route::get('get-contacts', [TicketController::class, 'getContacts'])->name('get.contacts');
    Route::resource('client-contacts', ClientContactController::class);

    Route::get('client-notes/ask-for-password/{id}', [ClientNoteController::class, 'askForPassword'])->name('client_notes.ask_for_password');
    Route::post('client-notes/check-password', [ClientNoteController::class, 'checkPassword'])->name('client_notes.check_password');
    Route::post('client-notes/apply-quick-action', [ClientNoteController::class, 'applyQuickAction'])->name('client-notes.apply_quick_action');
    Route::post('client-notes/showVerified/{id}', [ClientNoteController::class, 'showVerified'])->name('client-notes.show_verified');
    Route::resource('client-notes', ClientNoteController::class);

    Route::get('client-docs/download/{id}', [ClientDocController::class, 'download'])->name('client-docs.download');
    Route::resource('client-docs', ClientDocController::class);

    // client category & subcategory
    Route::resource('clientCategory', ClientCategoryController::class);

    Route::get('getClientSubCategories/{id}', [ClientSubCategoryController::class, 'getSubCategories'])->name('get_client_sub_categories');
    Route::resource('clientSubCategory', ClientSubCategoryController::class);

    // employee Promotion
    Route::resource('promotions', PromotionController::class);

    // employee routes
    Route::post('employees/apply-quick-action', [EmployeeController::class, 'applyQuickAction'])->name('employees.apply_quick_action');
    Route::post('employees/assignRole', [EmployeeController::class, 'assignRole'])->name('employees.assign_role');
    Route::get('employees/byDepartment/{id}', [EmployeeController::class, 'byDepartment'])->name('employees.by_department');
    Route::get('employees/invite-member', [EmployeeController::class, 'inviteMember'])->name('employees.invite_member');
    Route::get('employees/import', [EmployeeController::class, 'importMember'])->name('employees.import');
    Route::post('employees/import', [EmployeeController::class, 'importStore'])->name('employees.import.store');
    Route::post('employees/import/process', [EmployeeController::class, 'importProcess'])->name('employees.import.process');
    Route::get('import/process/{name}/{id}', [ImportController::class, 'getImportProgress'])->name('import.process.progress');

    Route::get('employees/import/exception/{name}', [ImportController::class, 'getQueueException'])->name('import.process.exception');
    Route::post('employees/send-invite', [EmployeeController::class, 'sendInvite'])->name('employees.send_invite');
    Route::post('employees/create-link', [EmployeeController::class, 'createLink'])->name('employees.create_link');
    Route::post('/get-exit-date-message', [EmployeeController::class, 'getExitDateMessage'])->name('getExitDateMessage');
    Route::resource('employees', EmployeeController::class);
    Route::resource('passport', PassportController::class);
    Route::resource('employee-visa', EmployeeVisaController::class);

    Route::resource('emergency-contacts', EmergencyContactController::class);

    Route::get('employee-docs/download/{id}', [EmployeeDocController::class, 'download'])->name('employee-docs.download');
    Route::resource('employee-docs', EmployeeDocController::class);

    Route::get('employee-document-expiries/download/{id}', [EmployeeDocumentExpiryController::class, 'download'])->name('employee-document-expiries.download');
    Route::resource('employee-document-expiries', EmployeeDocumentExpiryController::class);

    Route::get('employee-leaves/employeeLeaveTypes/{id}', [LeavesQuotaController::class, 'employeeLeaveTypes'])->name('employee-leaves.employee_leave_types');
    Route::resource('employee-leaves', LeavesQuotaController::class);

    Route::get('designations/designation-hierarchy', [DesignationController::class, 'hierarchyData'])->name('designation.hierarchy');
    Route::post('designations/changeParent', [DesignationController::class, 'changeParent'])->name('designation.changeParent');
    Route::post('designations/search-filter', [DesignationController::class, 'searchFilter'])->name('designation.srchFilter');
    Route::post('designations/apply-quick-action', [DesignationController::class, 'applyQuickAction'])->name('designations.apply_quick_action');
    Route::resource('designations', DesignationController::class);

    Route::post('departments/apply-quick-action', [DepartmentController::class, 'applyQuickAction'])->name('departments.apply_quick_action');
    Route::get('departments/department-hierarchy', [DepartmentController::class, 'hierarchyData'])->name('department.hierarchy');
    Route::post('department/changeParent', [DepartmentController::class, 'changeParent'])->name('department.changeParent');
    Route::get('department/search', [DepartmentController::class, 'searchDepartment'])->name('departments.search');
    Route::get('department/{id}', [DepartmentController::class, 'getMembers'])->name('departments.members');
    Route::resource('departments', DepartmentController::class);

    Route::post('user-permissions/customPermissions/{id}', [UserPermissionController::class, 'customPermissions'])->name('user-permissions.custom_permissions');
    Route::post('user-permissions/resetPermissions/{id}', [UserPermissionController::class, 'resetPermissions'])->name('user-permissions.reset_permissions');
    Route::resource('user-permissions', UserPermissionController::class);

    /* PROJECTS */
    Route::resource('projectCategory', ProjectCategoryController::class);
    Route::post('projects/change-status', [ProjectController::class, 'changeProjectStatus'])->name('projects.change_status');

    Route::resource('ProjectSubCategory', ProjectSubCategoryController::class);
    Route::get('get_project_sub_category/{id}', [ProjectSubCategoryController::class, 'getSubCategories'])->name('project.get_project_sub_category');


    Route::group(
        ['prefix' => 'projects'],
        function () {

            Route::get('import', [ProjectController::class, 'importProject'])->name('projects.import');
            Route::post('import', [ProjectController::class, 'importStore'])->name('projects.import.store');
            Route::post('import/process', [ProjectController::class, 'importProcess'])->name('projects.import.process');

            Route::post('assignProjectAdmin', [ProjectController::class, 'assignProjectAdmin'])->name('projects.assign_project_admin');
            Route::post('archive-restore/{id}', [ProjectController::class, 'archiveRestore'])->name('projects.archive_restore');
            Route::post('archive-delete/{id}', [ProjectController::class, 'archiveDestroy'])->name('projects.archive_delete');
            Route::get('archive', [ProjectController::class, 'archive'])->name('projects.archive');
            Route::post('apply-quick-action', [ProjectController::class, 'applyQuickAction'])->name('projects.apply_quick_action');
            Route::post('updateStatus/{id}', [ProjectController::class, 'updateStatus'])->name('projects.update_status');
            Route::post('store-pin', [ProjectController::class, 'storePin'])->name('projects.store_pin');
            Route::post('destroy-pin/{id}', [ProjectController::class, 'destroyPin'])->name('projects.destroy_pin');
            Route::post('gantt-data', [ProjectController::class, 'ganttData'])->name('projects.gantt_data');
            Route::post('invoiceList/{id}', [ProjectController::class, 'invoiceList'])->name('projects.invoice_list');
            Route::get('duplicate-project/{id}', [ProjectController::class, 'duplicateProject'])->name('projects.duplicate_project');

            Route::get('members/{id}', [ProjectController::class, 'members'])->name('projects.members');
            Route::get('pendingTasks/{id}', [ProjectController::class, 'pendingTasks'])->name('projects.pendingTasks');
            Route::get('labels/{id}', [TaskLabelController::class, 'labels'])->name('projects.labels');
            Route::resource('project-label', ProjectLabelController::class);

            Route::post('project-members/save-group', [ProjectMemberController::class, 'storeGroup'])->name('project-members.store_group');
            Route::resource('project-members', ProjectMemberController::class);

            Route::post('files/store-link', [ProjectFileController::class, 'storeLink'])->name('files.store_link');
            Route::get('files/download/{id}', [ProjectFileController::class, 'download'])->name('files.download');
            Route::get('files/thumbnail', [ProjectFileController::class, 'thumbnailShow'])->name('files.thumbnail');
            Route::post('files/multiple-upload', [ProjectFileController::class, 'storeMultiple'])->name('files.multiple_upload');
            Route::resource('files', ProjectFileController::class);

            Route::get('milestones/byProject/{id}', [ProjectMilestoneController::class, 'byProject'])->name('milestones.by_project');
            Route::post('/milestones/{id}/update-status', [ProjectMilestoneController::class, 'updateStatus'])->name('milestones.updateStatus');
            Route::resource('milestones', ProjectMilestoneController::class);


            // Discussion category routes
            Route::resource('discussion-category', DiscussionCategoryController::class);
            Route::post('discussion/setBestAnswer', [DiscussionController::class, 'setBestAnswer'])->name('discussion.set_best_answer');
            Route::resource('discussion', DiscussionController::class);
            Route::get('discussion-reply/get-replies/{id}', [DiscussionReplyController::class, 'getReplies'])->name('discussion-reply.get_replies');
            Route::resource('discussion-reply', DiscussionReplyController::class);

            // Discussion Files
            Route::get('discussion-files/download/{id}', [DiscussionFilesController::class, 'download'])->name('discussion_file.download');
            Route::resource('discussion-files', DiscussionFilesController::class);

            // Rating routes
            Route::resource('project-ratings', ProjectRatingController::class);

            Route::get('projects/burndown/{projectId?}', [ProjectController::class, 'burndown'])->name('projects.burndown');

            /* PROJECT TEMPLATE */
            Route::post('project-template/apply-quick-action', [ProjectTemplateController::class, 'applyQuickAction'])->name('project_template.apply_quick_action');
            Route::resource('project-template', ProjectTemplateController::class);
            Route::post('project-template-members/save-group', [ProjectTemplateMemberController::class, 'storeGroup'])->name('project_template_members.store_group');
            Route::resource('project-template-member', ProjectTemplateMemberController::class);
            Route::get('project-template-task/data/{templateId?}', [ProjectTemplateTaskController::class, 'data'])->name('project_template_task.data');
            Route::get('project-template-milestones/byProject/{id}', [ProjectTemplateMilestoneController::class, 'byProject'])->name('project-template-milestone.by_project');
            Route::post('/project-template-milestones/{id}/update-status', [ProjectTemplateMilestoneController::class, 'updateStatus'])->name('project-template-milestone.updateStatus');
            Route::resource('project-template-task', ProjectTemplateTaskController::class);
            Route::resource('project-template-milestone', ProjectTemplateMilestoneController::class);
            Route::resource('project-template-sub-task', ProjectTemplateSubTaskController::class);
            Route::resource('project-calendar', ProjectCalendarController::class);

        }
    );

    Route::get('project-notes/ask-for-password/{id}', [ProjectNoteController::class, 'askForPassword'])->name('project_notes.ask_for_password');
    Route::post('project-notes/check-password', [ProjectNoteController::class, 'checkPassword'])->name('project_notes.check_password');
    Route::post('project-notes/apply-quick-action', [ProjectNoteController::class, 'applyQuickAction'])->name('project_notes.apply_quick_action');
    Route::resource('project-notes', ProjectNoteController::class);
    Route::get('projects-ajax', [ProjectController::class, 'ajaxLoadProject'])->name('get.projects-ajax');
    Route::get('get-projects', [ProjectController::class, 'getProjects'])->name('get.projects');
    Route::resource('projects', ProjectController::class);

    /* PRODUCTS */
    Route::post('products/apply-quick-action', [ProductController::class, 'applyQuickAction'])->name('products.apply_quick_action');
    Route::post('products/remove-cart-item/{id}', [ProductController::class, 'removeCartItem'])->name('products.remove_cart_item');
    Route::get('products/options', [ProductController::class, 'allProductOption'])->name('products.options');


    Route::post('products/add-cart-item', [ProductController::class, 'addCartItem'])->name('products.add_cart_item');
    Route::get('products/cart', [ProductController::class, 'cart'])->name('products.cart');
    Route::get('products/empty-cart', [ProductController::class, 'emptyCart'])->name('products.empty_cart');

    /* Product Import */
    Route::group(
        ['prefix' => 'products'],
        function () {
            Route::get('import', [ProductController::class, 'importProduct'])->name('products.import');
            Route::post('import', [ProductController::class, 'importStore'])->name('products.import.store');
            Route::post('import/process', [ProductController::class, 'importProcess'])->name('products.import.process');
        }
    );

    Route::resource('products', ProductController::class);
    Route::resource('productCategory', ProductCategoryController::class);
    Route::get('getProductSubCategories/{id}', [ProductSubCategoryController::class, 'getSubCategories'])->name('get_product_sub_categories');
    Route::resource('productSubCategory', ProductSubCategoryController::class);

    /* PRODUCT FILES */
    Route::get('product-files/download/{id}', [ProductFileController::class, 'download'])->name('product-files.download');
    Route::post('product-files/delete-image/{id}', [ProductFileController::class, 'deleteImage'])->name('product-files.delete_image');
    Route::post('product-files/update-images', [ProductFileController::class, 'updateImages'])->name('product-files.update_images');
    Route::resource('product-files', ProductFileController::class);

    /* INVOICE FILES */
    Route::get('invoice-files/download/{id}', [InvoiceFilesController::class, 'download'])->name('invoice-files.download');
    Route::resource('invoice-files', InvoiceFilesController::class);


    /* Payments */
    Route::get('orders/offline-payment-modal', [OrderController::class, 'offlinePaymentModal'])->name('orders.offline_payment_modal');
    Route::get('orders/add-item', [OrderController::class, 'addItem'])->name('orders.add_item');
    Route::get('orders/stripe-modal', [OrderController::class, 'stripeModal'])->name('orders.stripe_modal');
    Route::post('orders/make-invoice/{orderId}', [OrderController::class, 'makeInvoice'])->name('orders.make_invoice');

    Route::post('orders/payment-failed/{orderId}', [OrderController::class, 'paymentFailed'])->name('orders.payment_failed');
    Route::post('orders/save-stripe-detail/', [OrderController::class, 'saveStripeDetail'])->name('orders.save_stripe_detail');
    Route::post('orders/change-status/', [OrderController::class, 'changeStatus'])->name('orders.change_status');
    /* Payments */
    Route::get('orders/download/{id}', [OrderController::class, 'download'])->name('orders.download');
    Route::post('orders/store-quantity/', [OrderController::class, 'storeQuantity'])->name('orders.store_quantity');


    /* Orders */
    Route::resource('orders', OrderController::class);


    /* NOTICE */
    Route::post('notices/apply-quick-action', [NoticeController::class, 'applyQuickAction'])->name('notices.apply_quick_action');
    Route::resource('notices', NoticeController::class);

    /* Notice files */
    Route::get('notice-files/download/{id}', [NoticeFileController::class, 'download'])->name('notice_files.download');
    Route::resource('notice-files', NoticeFileController::class);

    /* User Appreciation */
    Route::group(
        ['prefix' => 'appreciations'],
        function () {
            Route::post('awards/apply-quick-action', [AwardController::class, 'applyQuickAction'])->name('awards.apply_quick_action');
            Route::post('awards/change-status/{id?}', [AwardController::class, 'changeStatus'])->name('awards.change-status');
            Route::get('awards/quick-create', [AwardController::class, 'quickCreate'])->name('awards.quick-create');
            Route::post('awards/quick-store', [AwardController::class, 'quickStore'])->name('awards.quick-store');
            Route::resource('awards', AwardController::class);
        });
    Route::post('appreciations/apply-quick-action', [AppreciationController::class, 'applyQuickAction'])->name('appreciations.apply_quick_action');
    Route::resource('appreciations', AppreciationController::class);

    /* KnowledgeBase */
    Route::get('knowledgebase/create/{id?}', [KnowledgeBaseController::class, 'create'])->name('knowledgebase.create');
    Route::post('knowledgebase/apply-quick-action', [KnowledgeBaseController::class, 'applyQuickAction'])->name('knowledgebase.apply_quick_action');
    Route::get('knowledgebase/searchquery/{query?}', [KnowledgeBaseController::class, 'searchQuery'])->name('knowledgebase.searchQuery');
    Route::resource('knowledgebase', KnowledgeBaseController::class)->except(['create']);

    Route::get('knowledgebase-files/download/{id}', [KnowledgeBaseFileController::class, 'download'])->name('knowledgebase-files.download');
    Route::resource('knowledgebase-files', KnowledgeBaseFileController::class);

    /* KnowledgeBase category */
    Route::resource('knowledgebasecategory', KnowledgeBaseCategoryController::class);


    Route::group(['prefix' => 'events'], function () {
        Route::post('recurring-event/event-monthly-on', [RecurringEventController::class, 'monthlyOn'])->name('recurring-event.monthly_on');
        Route::post('recurring-event/apply-quick-action', [RecurringEventController::class, 'applyQuickAction'])->name('recurring-event.apply_quick_action');
        Route::resource('recurring-event', RecurringEventController::class);
        Route::post('recurring-event/updateStatus/{id}', [RecurringEventController::class, 'updateStatus'])->name('recurring-event.update_status');
        Route::get('recurring-event/event-status-note/{id}', [RecurringEventController::class, 'eventStatusNote'])->name('recurring-event.event_status_note');
    });

    /* EVENTS */
    Route::post('event-monthly-on', [EventCalendarController::class, 'monthlyOn'])->name('events.monthly_on');
    Route::get('events/table-view', [EventCalendarController::class, 'tableView'])->name('events.table_view');
    Route::post('events/apply-quick-action', [EventCalendarController::class, 'applyQuickAction'])->name('events.apply_quick_action');
    Route::resource('events', EventCalendarController::class);
    Route::post('updateStatus/{id}', [EventCalendarController::class, 'updateStatus'])->name('events.update_status');
    Route::get('events/event-status-note/{id}', [EventCalendarController::class, 'eventStatusNote'])->name('events.event_status_note');

    /* My Calendar */
    Route::get('my-calendar', [MyCalendarController::class, 'index'])->name('my-calendar.index');


    /* Event Files */
    Route::get('event-files/download/{id}', [EventFileController::class, 'download'])->name('event-files.download');
    Route::resource('event-files', EventFileController::class);

    /* TASKS */
    Route::get('tasks/client-detail', [TaskController::class, 'clientDetail'])->name('tasks.clientDetail');
    Route::post('tasks/change-status', [TaskController::class, 'changeStatus'])->name('tasks.change_status');
    Route::post('tasks/change-milestone', [TaskController::class, 'milestoneChange'])->name('tasks.change_milestone');

    Route::post('tasks/apply-quick-action', [TaskController::class, 'applyQuickAction'])->name('tasks.apply_quick_action');
    Route::post('tasks/store-pin', [TaskController::class, 'storePin'])->name('tasks.store_pin');
    Route::post('tasks/reminder', [TaskController::class, 'reminder'])->name('tasks.reminder');
    Route::post('tasks/destroy-pin/{id}', [TaskController::class, 'destroyPin'])->name('tasks.destroy_pin');
    Route::post('tasks/check-task/{taskID}', [TaskController::class, 'checkTask'])->name('tasks.check_task');
    Route::post('tasks/send-approval', [TaskController::class, 'sendApproval'])->name('tasks.send_approval');
    Route::post('tasks/gantt-task-update/{id}', [TaskController::class, 'updateTaskDuration'])->name('tasks.gantt_task_update');
    Route::get('tasks/members/{id}', [TaskController::class, 'members'])->name('tasks.members');
    Route::get('tasks/project_tasks/{id}', [TaskController::class, 'projectTasks'])->name('tasks.project_tasks');
    Route::get('tasks/check-leaves', [TaskController::class, 'checkLeaves'])->name('tasks.checkLeaves');
    Route::get('tasks/waiting-approval', [TaskController::class, 'waitingApproval'])->name('tasks.waiting-approval');
    Route::get('tasks/show-waiting-approval-change-status-modal', [TaskController::class, 'statusReason'])->name('tasks.show_status_reason_modal');
    Route::post('tasks/store-status-reason', [TaskController::class, 'storeStatusReason'])->name('tasks.store_comment_on_change_status');

    Route::group(['prefix' => 'tasks'], function () {

        Route::post('recurring-task/apply-quick-action', [RecurringTaskController::class, 'applyQuickAction'])->name('recurring-task.apply_quick_action');
        Route::resource('recurring-task', RecurringTaskController::class);

        Route::resource('task-label', TaskLabelController::class);
        Route::resource('taskCategory', TaskCategoryController::class);
        Route::post('taskComment/save-comment-like', [TaskCommentController::class, 'saveCommentLike'])->name('taskComment.save_comment_like');
        Route::resource('taskComment', TaskCommentController::class);
        Route::resource('task-note', TaskNoteController::class);

        // task files routes
        Route::get('task-files/download/{id}', [TaskFileController::class, 'download'])->name('task_files.download');
        Route::resource('task-files', TaskFileController::class);

        // Sub task routes
        Route::post('sub-task/change-status', [SubTaskController::class, 'changeStatus'])->name('sub_tasks.change_status');
        Route::resource('sub-tasks', SubTaskController::class);

        // Task files routes
        Route::get('sub-task-files/download/{id}', [SubTaskFileController::class, 'download'])->name('sub-task-files.download');
        Route::resource('sub-task-files', SubTaskFileController::class);

        // Taskboard routes
        Route::post('taskboards/collapseColumn', [TaskBoardController::class, 'collapseColumn'])->name('taskboards.collapse_column');
        Route::post('taskboards/updateIndex', [TaskBoardController::class, 'updateIndex'])->name('taskboards.update_index');
        Route::get('taskboards/loadMore', [TaskBoardController::class, 'loadMore'])->name('taskboards.load_more');
        Route::resource('taskboards', TaskBoardController::class);

        Route::resource('task-calendar', TaskCalendarController::class);
    });

    Route::resource('tasks', TaskController::class);

    // Holidays
    Route::get('holidays/mark-holiday', [HolidayController::class, 'markHoliday'])->name('holidays.mark_holiday');
    Route::post('holidays/mark-holiday-store', [HolidayController::class, 'markDayHoliday'])->name('holidays.mark_holiday_store');
    Route::get('holidays/table-view', [HolidayController::class, 'tableView'])->name('holidays.table_view');
    Route::post('holidays/apply-quick-action', [HolidayController::class, 'applyQuickAction'])->name('holidays.apply_quick_action');
    Route::resource('holidays', HolidayController::class);

    // Lead Files
    Route::get('deal-files/download/{id}', [LeadFileController::class, 'download'])->name('deal-files.download');
    Route::get('deal-files/layout', [LeadFileController::class, 'layout'])->name('deal-files.layout');
    Route::resource('deal-files', LeadFileController::class);

    // Follow up
    Route::get('deals/follow-up/{leadID}', [DealController::class, 'followUpCreate'])->name('deals.follow_up');
    Route::post('deals/follow-up-store', [DealController::class, 'followUpStore'])->name('deals.follow_up_store');
    Route::get('deals/follow-up-edit/{id?}', [DealController::class, 'editFollow'])->name('deals.follow_up_edit');
    Route::post('deals/follow-up-update', [DealController::class, 'updateFollow'])->name('deals.follow_up_update');
    Route::post('deals/follow-up-delete/{id}', [DealController::class, 'deleteFollow'])->name('deals.follow_up_delete');

    // Change status
    Route::get('stage-change/{id}', [DealController::class, 'stageChange'])->name('deals.stage_change');
    Route::post('save-stage-change', [DealController::class, 'saveStageChange'])->name('deals.save_stage_change');
    Route::post('deals/change-stage', [DealController::class, 'changeStage'])->name('deals.change_stage');
    Route::post('deals/apply-quick-action', [DealController::class, 'applyQuickAction'])->name('deals.apply_quick_action');

    Route::get('deals/gdpr-consent', [DealController::class, 'consent'])->name('deals.gdpr_consent');
    Route::post('deals/save-deal-consent/{deal}', [DealController::class, 'saveLeadConsent'])->name('deals.save_lead_consent');
    Route::post('deals/change-follow-up-status', [DealController::class, 'changeFollowUpStatus'])->name('deals.change_follow_up_status');

    // Lead Category
    Route::post('/update-lead-category', [LeadCategoryController::class, 'updateLeadCategory'])->name('category.updateDefault');
    Route::resource('leadCategory', LeadCategoryController::class);

    // Lead Note
    Route::get('lead-notes/ask-for-password/{id}', [LeadNoteController::class, 'askForPassword'])->name('lead-notes.ask_for_password');
    Route::post('lead-notes/check-password', [LeadNoteController::class, 'checkPassword'])->name('lead-notes.check_password');
    Route::post('lead-notes/apply-quick-action', [LeadNoteController::class, 'applyQuickAction'])->name('lead-notes.apply_quick_action');

    Route::resource('lead-notes', LeadNoteController::class);

    // Deal Note
    Route::post('deal-notes/apply-quick-action', [DealNoteController::class, 'applyQuickAction'])->name('deal-notes.apply_quick_action');
    Route::resource('deal-notes', DealNoteController::class);

    // deal board routes
    Route::post('leadboards/get-stage-slug', [LeadBoardController::class, 'getStageSlug'])->name('leadboards.get_stage_slug');
    Route::post('leadboards/collapseColumn', [LeadBoardController::class, 'collapseColumn'])->name('leadboards.collapse_column');
    Route::post('leadboards/updateIndex', [LeadBoardController::class, 'updateIndex'])->name('leadboards.update_index');
    Route::get('leadboards/loadMore', [LeadBoardController::class, 'loadMore'])->name('leadboards.load_more');
    Route::resource('leadboards', LeadBoardController::class);

    Route::post('lead-form/sortFields', [LeadCustomFormController::class, 'sortFields'])->name('lead-form.sortFields');
    Route::resource('lead-form', LeadCustomFormController::class);

    Route::group(['prefix' => 'deals'], function () {
        Route::get('import', [DealController::class, 'importLead'])->name('deals.import');
        Route::post('import', [DealController::class, 'importStore'])->name('deals.import.store');
        Route::post('import/process', [DealController::class, 'importProcess'])->name('deals.import.process');
    });

    Route::group(['prefix' => 'lead-contact'], function () {
        Route::get('import', [LeadContactController::class, 'importLead'])->name('lead-contact.import');
        Route::post('import', [LeadContactController::class, 'importStore'])->name('lead-contact.import.store');
        Route::post('import/process', [LeadContactController::class, 'importProcess'])->name('lead-contact.import.process');
    });

    // deals route

    Route::post('lead-contact/{id}/convert-to-deal', [LeadContactController::class, 'convertToDeal'])->name('lead-contact.convert_to_deal');
Route::resource('lead-contact', LeadContactController::class);
    Route::post('lead-contact/apply-quick-action', [LeadContactController::class, 'applyQuickAction'])->name('lead-contact.apply_quick_action');

    Route::get('deals/get-stage/{id}', [DealController::class, 'getStages'])->name('deals.get-stage');
    Route::get('deals/get-deals/{id}', [DealController::class, 'getDeals'])->name('deals.get-deals');
    Route::get('deals/get-agent/{id}', [DealController::class, 'getAgents'])->name('deals.get_agents');
    Route::get('deals/convert-to-client-modal/{dealID}', [DealController::class, 'convertToClientModal'])->name('deals.convert_to_client_modal');
Route::post('deals/convert-to-client-store', [DealController::class, 'convertToClientStore'])->name('deals.convert_to_client_store');
Route::resource('deals', DealController::class);

    // leaves files routes
    Route::get('leave-files/download/{id}', [LeaveFileController::class, 'download'])->name('leave-files.download');
    Route::resource('leave-files', LeaveFileController::class);

    /* LEAVES */
    Route::get('leaves/leaves-date', [LeaveController::class, 'getDate'])->name('leaves.date');
    Route::get('leaves/personal', [LeaveController::class, 'personalLeaves'])->name('leaves.personal');
    Route::get('leaves/calendar', [LeaveController::class, 'leaveCalendar'])->name('leaves.calendar');
    Route::post('leaves/data', [LeaveController::class, 'data'])->name('leaves.data');
    Route::post('leaves/leaveAction', [LeaveController::class, 'leaveAction'])->name('leaves.leave_action');
    Route::get('leaves/show-reject-modal', [LeaveController::class, 'rejectLeave'])->name('leaves.show_reject_modal');
    Route::get('leaves/show-approved-modal', [LeaveController::class, 'approveLeave'])->name('leaves.show_approved_modal');
    Route::post('leaves/pre-approve-leave', [LeaveController::class, 'preApprove'])->name('leaves.pre_approve_leave');
    Route::post('leaves/apply-quick-action', [LeaveController::class, 'applyQuickAction'])->name('leaves.apply_quick_action');
    Route::get('leaves/view-related-leave/{id}', [LeaveController::class, 'viewRelatedLeave'])->name('leaves.view_related_leave');
    Route::get('leaves/export-all-leave', [LeaveController::class, 'exportAllLeaves'])->name('leaves.export_all_leave');
    Route::resource('leaves', LeaveController::class);

    // Messages
    Route::get('messages/fetch-user-list', [MessageController::class, 'fetchUserListView'])->name('messages.fetch_user_list');
    Route::post('messages/fetch_messages/{id}', [MessageController::class, 'fetchUserMessages'])->name('messages.fetch_messages');
    Route::post('messages/check_messages', [MessageController::class, 'checkNewMessages'])->name('messages.check_new_message');
    Route::delete('messages/destroy-chat/{id}', [MessageController::class, 'destroyAll'])->name('messages.destroy_all');
    Route::resource('messages', MessageController::class);

    // Chat Files
    Route::get('message-file/download/{id}', [MessageFileController::class, 'download'])->name('message_file.download');
    Route::resource('message-file', MessageFileController::class);

    // Invoices
    Route::get('invoices/offline-method-description', [InvoiceController::class, 'offlineDescription'])->name('invoices.offline_method_description');
    Route::get('invoices/offline-payment-modal', [InvoiceController::class, 'offlinePaymentModal'])->name('invoices.offline_payment_modal');
    Route::get('invoices/stripe-modal', [InvoiceController::class, 'stripeModal'])->name('invoices.stripe_modal');
    Route::post('invoices/save-stripe-detail/', [InvoiceController::class, 'saveStripeDetail'])->name('invoices.save_stripe_detail');
    Route::get('invoices/delete-image', [InvoiceController::class, 'deleteInvoiceItemImage'])->name('invoices.delete_image');
    Route::post('invoices/store-offline-payment', [InvoiceController::class, 'storeOfflinePayment'])->name('invoices.store_offline_payment');
    Route::post('invoices/store_file', [InvoiceController::class, 'storeFile'])->name('invoices.store_file');
    Route::get('invoices/file-upload', [InvoiceController::class, 'fileUpload'])->name('invoices.file_upload');
    Route::post('invoices/delete-applied-credit/{id}', [InvoiceController::class, 'deleteAppliedCredit'])->name('invoices.delete_applied_credit');
    Route::get('invoices/applied-credits/{id}', [InvoiceController::class, 'appliedCredits'])->name('invoices.applied_credits');
    Route::get('invoices/payment-reminder/{invoiceID}', [InvoiceController::class, 'remindForPayment'])->name('invoices.payment_reminder');
    Route::post('invoices/send-invoice/{invoiceID}', [InvoiceController::class, 'sendInvoice'])->name('invoices.send_invoice');
    Route::post('invoices/approve-offline-invoice/{invoiceID}', [InvoiceController::class, 'approveOfflineInvoice'])->name('invoices.approve_offline_invoice');
    Route::post('invoices/apply-quick-action', [InvoiceController::class, 'applyQuickAction'])->name('invoices.apply_quick_action');
    Route::get('invoices/download/{id}', [InvoiceController::class, 'download'])->name('invoices.download');
    Route::get('invoices/add-item', [InvoiceController::class, 'addItem'])->name('invoices.add_item');
    Route::get('invoices/update-status/{invoiceID}', [InvoiceController::class, 'cancelStatus'])->name('invoices.update_status');
    Route::get('invoices/get-client-company/{projectID?}', [InvoiceController::class, 'getClientOrCompanyName'])->name('invoices.get_client_company');
    Route::post('invoices/fetchTimelogs', [InvoiceController::class, 'fetchTimelogs'])->name('invoices.fetch_timelogs');
    Route::get('invoices/check-shipping-address', [InvoiceController::class, 'checkShippingAddress'])->name('invoices.check_shipping_address');
    Route::get('invoices/product-category/{id}', [InvoiceController::class, 'productCategory'])->name('invoices.product_category');

    Route::get('invoices/toggle-shipping-address/{invoice}', [InvoiceController::class, 'toggleShippingAddress'])->name('invoices.toggle_shipping_address');
    Route::get('invoices/shipping-address-modal/{invoice}', [InvoiceController::class, 'shippingAddressModal'])->name('invoices.shipping_address_modal');
    Route::post('invoices/add-shipping-address/{clientId}', [InvoiceController::class, 'addShippingAddress'])->name('invoices.add_shipping_address');
    Route::get('invoices/get-exchange-rate/{id}', [InvoiceController::class, 'getExchangeRate'])->name('invoices.get_exchange_rate');

    Route::get('invoices/committed-modal', [InvoiceController::class, 'committedModal'])->name('invoices.committed_modal');

    Route::group(['prefix' => 'invoices'], function () {
        // Invoice recurring
        Route::post('recurring-invoice/change-status', [RecurringInvoiceController::class, 'changeStatus'])->name('recurring_invoice.change_status');
        Route::get('recurring-invoice/export/{startDate}/{endDate}/{status}/{employee}', [RecurringInvoiceController::class, 'export'])->name('recurring_invoice.export');
        Route::get('recurring-invoice/recurring-invoice/{id}', [RecurringInvoiceController::class, 'recurringInvoices'])->name('recurring_invoice.recurring_invoice');
        Route::delete('recurring-invoice/delete-repeat-invoices/{id}', [RecurringInvoiceController::class, 'deleteInvoices'])->name('recurring_invoice.delete_repeat_invoices');
        Route::resource('recurring-invoices', RecurringInvoiceController::class);
    });
    Route::resource('invoices', InvoiceController::class);

    Route::resource('invoices-payment-details', InvoicePaymentDetailController::class);

    // Estimates
    Route::get('estimates/delete-image', [EstimateController::class, 'deleteEstimateItemImage'])->name('estimates.delete_image');
    Route::get('estimates/download/{id}', [EstimateController::class, 'download'])->name('estimates.download');
    Route::post('estimates/send-estimate/{id}', [EstimateController::class, 'sendEstimate'])->name('estimates.send_estimate');
    Route::get('estimates/change-status/{id}', [EstimateController::class, 'changeStatus'])->name('estimates.change_status');
    Route::post('estimates/accept/{id}', [EstimateController::class, 'accept'])->name('estimates.accept');
    Route::post('estimates/decline/{id}', [EstimateController::class, 'decline'])->name('estimates.decline');
    Route::get('estimates/add-item', [EstimateController::class, 'addItem'])->name('estimates.add_item');
    Route::resource('estimates', EstimateController::class);


    // Proposals
    Route::get('proposals/delete-image', [ProposalController::class, 'deleteProposalItemImage'])->name('proposals.delete_image');
    Route::get('proposals/download/{id}', [ProposalController::class, 'download'])->name('proposals.download');
    Route::post('proposals/send-proposal/{id}', [ProposalController::class, 'sendProposal'])->name('proposals.send_proposal');
    Route::get('proposals/add-item', [ProposalController::class, 'addItem'])->name('proposals.add_item');
    Route::resource('proposals', ProposalController::class);

    // Proposal Template
    Route::post('proposal-template/apply-quick-action', [ProposalTemplateController::class, 'applyQuickAction'])->name('proposal_template.apply_quick_action');
    Route::get('proposal-template/add-item', [ProposalController::class, 'addItem'])->name('proposal-template.add_item');
    Route::resource('proposal-template', ProposalTemplateController::class);
    Route::get('proposal-template/download/{id}', [ProposalTemplateController::class, 'download'])->name('proposal-template.download');
    Route::get('proposals-template/delete-image', [ProposalTemplateController::class, 'deleteProposalItemImage'])->name('proposal_template.delete_image');

    // Payments
    Route::post('payments/apply-quick-action', [PaymentController::class, 'applyQuickAction'])->name('payments.apply_quick_action');
    Route::get('payments/download/{id}', [PaymentController::class, 'download'])->name('payments.download');
    Route::get('payments/account-list', [PaymentController::class, 'accountList'])->name('payments.account_list');
    Route::get('payments/offline-payments', [PaymentController::class, 'offlineMethods'])->name('offline.methods');
    Route::get('payments/add-bulk-payments', [PaymentController::class, 'addBulkPayments'])->name('payments.add_bulk_payments');
    Route::post('payments/save-bulk-payments', [PaymentController::class, 'saveBulkPayments'])->name('payments.save_bulk_payments');

    Route::resource('payments', PaymentController::class)->except(['edit', 'update']);

    // Credit notes
    Route::post('creditnotes/store_file', [CreditNoteController::class, 'storeFile'])->name('creditnotes.store_file');
    Route::get('creditnotes/file-upload', [CreditNoteController::class, 'fileUpload'])->name('creditnotes.file_upload');
    Route::post('creditnotes/delete-credited-invoice/{id}', [CreditNoteController::class, 'deleteCreditedInvoice'])->name('creditnotes.delete_credited_invoice');
    Route::get('creditnotes/credited-invoices/{id}', [CreditNoteController::class, 'creditedInvoices'])->name('creditnotes.credited_invoices');
    Route::post('creditnotes/apply-invoice-credit/{id}', [CreditNoteController::class, 'applyInvoiceCredit'])->name('creditnotes.apply_invoice_credit');
    Route::get('creditnotes/apply-to-invoice/{id}', [CreditNoteController::class, 'applyToInvoice'])->name('creditnotes.apply_to_invoice');
    Route::get('creditnotes/download/{id}', [CreditNoteController::class, 'download'])->name('creditnotes.download');

    Route::get('creditnotes/convert-invoice/{id}', [CreditNoteController::class, 'convertInvoice'])->name('creditnotes.convert-invoice');

    Route::resource('creditnotes', CreditNoteController::class);

    // Bank account
    Route::post('bankaccount/apply-quick-action', [BankAccountController::class, 'applyQuickAction'])->name('bankaccounts.apply_quick_action');
    Route::post('bankaccount/apply-transaction-quick-action', [BankAccountController::class, 'applyTransactionQuickAction'])->name('bankaccounts.apply_transaction_quick_action');
    Route::get('bankaccounts/create-transaction', [BankAccountController::class, 'createTransaction'])->name('bankaccounts.create_transaction');
    Route::post('bankaccount/store-transaction', [BankAccountController::class, 'storeTransaction'])->name('bankaccounts.store_transaction');
    Route::post('bankaccount/change-status', [BankAccountController::class, 'changeStatus'])->name('bankaccounts.change_status');

    Route::get('bankaccounts/view-transaction/{id}', [BankAccountController::class, 'viewTransaction'])->name('bankaccounts.view_transaction');
    Route::post('bankaccount/destroy-transaction', [BankAccountController::class, 'destroyTransaction'])->name('bankaccounts.destroy_transaction');
    Route::get('bankaccount/generate-statement/{id}', [BankAccountController::class, 'generateStatement'])->name('bankaccounts.generate_statement');
    Route::get('bankaccount/get-bank-statement', [BankAccountController::class, 'getBankStatement'])->name('bankaccounts.get_bank_statement');

    Route::resource('bankaccounts', BankAccountController::class);

    // Expenses
    Route::group(['prefix' => 'expenses'], function () {
        Route::post('recurring-expenses/change-status', [RecurringExpenseController::class, 'changeStatus'])->name('recurring-expenses.change_status');
        Route::resource('recurring-expenses', RecurringExpenseController::class);
        Route::get('change-status', [ExpenseController::class, 'getEmployeeProjects'])->name('expenses.get_employee_projects');
        Route::get('category', [ExpenseController::class, 'getCategoryEmployee'])->name('expenses.get_category_employees');
        Route::post('change-status', [ExpenseController::class, 'changeStatus'])->name('expenses.change_status');
        Route::post('apply-quick-action', [ExpenseController::class, 'applyQuickAction'])->name('expenses.apply_quick_action');
        Route::get('import', [ExpenseController::class, 'import'])->name('expenses.import');
        Route::post('import', [ExpenseController::class, 'importStore'])->name('expenses.import.store');
        Route::post('import/process', [ExpenseController::class, 'importProcess'])->name('expenses.import.process');
    });
    Route::resource('expenses', ExpenseController::class);
    Route::resource('expenseCategory', ExpenseCategoryController::class);

    // Timelogs
    Route::group(['prefix' => 'timelogs'], function () {
        Route::resource('timelog-calendar', TimelogCalendarController::class);
        Route::resource('timelog-break', ProjectTimelogBreakController::class);
        Route::get('by-employee', [TimelogController::class, 'byEmployee'])->name('timelogs.by_employee');
        Route::get('export', [TimelogController::class, 'export'])->name('timelogs.export');
        Route::get('export-time-logs', [TimelogController::class, 'exportTimeLogs'])->name('timelogs.export_time_logs');
        Route::get('show-active-timer', [TimelogController::class, 'showActiveTimer'])->name('timelogs.show_active_timer');
        Route::get('show-timer', [TimelogController::class, 'showTimer'])->name('timelogs.show_timer');
        Route::post('start-timer', [TimelogController::class, 'startTimer'])->name('timelogs.start_timer');
        Route::get('timer-data', [TimelogController::class, 'timerData'])->name('timelogs.timer_data');
        Route::post('stop-timer', [TimelogController::class, 'stopTimer'])->name('timelogs.stop_timer');
        Route::post('pause-timer', [TimelogController::class, 'pauseTimer'])->name('timelogs.pause_timer');
        Route::post('resume-timer', [TimelogController::class, 'resumeTimer'])->name('timelogs.resume_timer');
        Route::post('apply-quick-action', [TimelogController::class, 'applyQuickAction'])->name('timelogs.apply_quick_action');

        Route::post('employee_data', [TimelogController::class, 'employeeData'])->name('timelogs.employee_data');
        Route::post('user_time_logs', [TimelogController::class, 'userTimelogs'])->name('timelogs.user_time_logs');
        Route::post('approve_timelog', [TimelogController::class, 'approveTimelog'])->name('timelogs.approve_timelog');
        Route::post('revert-timelog-to-pending', [TimelogController::class, 'revertTimelogToPending'])->name('timelogs.revert_to_pending');
        Route::get('stopper-alert/{id}', [TimelogController::class, 'stopperAlert'])->name('timelogs.stopper_alert');
        Route::get('check-project-time-limit/{projectId}', [TimelogController::class, 'checkProjectTimeLimit'])->name('timelogs.check_project_time_limit');

        Route::post('change-status', [WeeklyTimesheetController::class, 'changeStatus'])->name('weekly-timesheets.change_status');
        Route::get('pending-approval', [WeeklyTimesheetController::class, 'pendingApproval'])->name('weekly-timesheets.pending_approval');
        Route::resource('weekly-timesheets', WeeklyTimesheetController::class);
    });
    
    Route::get('show-reject-modal', [WeeklyTimesheetController::class, 'showRejectModal'])->name('weekly-timesheets.show_reject_modal');
    Route::post('timelogs/timelogAction', [TimelogController::class, 'timelogAction'])->name('timelogs.timelog_action');
    Route::get('timelogs/show-reject-modal', [TimelogController::class, 'rejectTimelog'])->name('timelogs.show_reject_modal');
    Route::post('/calculate-time', [TimelogController::class, 'calculateTime'])->name('calculateTime');
    Route::resource('timelogs', TimelogController::class);

    // Contracts
    Route::post('contracts/apply-quick-action', [ContractController::class, 'applyQuickAction'])->name('contracts.apply_quick_action');
    Route::get('contracts/download/{id}', [ContractController::class, 'download'])->name('contracts.download');
    Route::post('contracts/sign/{id}', [ContractController::class, 'sign'])->name('contracts.sign');
    Route::post('companySign/sign/{id}', [ContractController::class, 'companySign'])->name('companySign.sign');
    Route::get('companySignStore/sign/{id}', [ContractController::class, 'companiesSign'])->name('companySignStore.sign');
    Route::post('contracts/project-detail/{id}', [ContractController::class, 'projectDetail'])->name('contracts.project_detail');
    Route::get('contracts/company-sig/{id}', [ContractController::class, 'companySig'])->name('contracts.company_sig');


    Route::group(['prefix' => 'contracts'], function () {
        Route::resource('contractDiscussions', ContractDiscussionController::class);
        Route::get('contractFiles/download/{id}', [ContractFileController::class, 'download'])->name('contractFiles.download');
        Route::resource('contractFiles', ContractFileController::class);
        Route::resource('contractTypes', ContractTypeController::class);
    });

    Route::resource('contracts', ContractController::class);
    Route::resource('contract-renew', ContractRenewController::class);

    // Contract template
    Route::post('contract-template/apply-quick-action', [ContractTemplateController::class, 'applyQuickAction'])->name('contract_template.apply_quick_action');
    Route::resource('contract-template', ContractTemplateController::class);
    Route::get('contract-template/download/{id}', [ContractTemplateController::class, 'download'])->name('contract-template.download');

    // Attendance
    Route::get('attendances/export-attendance/{year}/{month}/{id}', [AttendanceController::class, 'exportAttendanceByMember'])->name('attendances.export_attendance');
    Route::get('attendances/export-all-attendance/{year}/{month}/{id}/{department}/{designation}', [AttendanceController::class, 'exportAllAttendance'])->name('attendances.export_all_attendance');
    Route::post('attendances/employee-data', [AttendanceController::class, 'employeeData'])->name('attendances.employee_data');
    Route::get('attendances/mark/{id}/{day}/{month}/{year}', [AttendanceController::class, 'mark'])->name('attendances.mark');
    Route::get('attendances/by-member', [AttendanceController::class, 'byMember'])->name('attendances.by_member');
    Route::get('attendances/by-hour', [AttendanceController::class, 'byHour'])->name('attendances.by_hour');
    Route::post('attendances/bulk-mark', [AttendanceController::class, 'bulkMark'])->name('attendances.bulk_mark');
    Route::get('attendances/import', [AttendanceController::class, 'importAttendance'])->name('attendances.import');
    Route::post('attendances/import', [AttendanceController::class, 'importStore'])->name('attendances.import.store');
    Route::post('attendances/import/process', [AttendanceController::class, 'importProcess'])->name('attendances.import.process');
    Route::get('attendances/by-map-location', [AttendanceController::class, 'byMapLocation'])->name('attendances.by_map_location');
    
    
    Route::resource('attendances', AttendanceController::class);
    Route::get('attendance/{id}/{day}/{month}/{year}', [AttendanceController::class, 'addAttendance'])->name('attendances.add-user-attendance');
    Route::post('attendances/check-half-day', [AttendanceController::class, 'checkHalfDay'])->name('attendances.check_half_day');
    Route::get('check-qr-login/{hash}', [AttendanceController::class, 'qrClockInOut'])->name('settings.qr-login');
    Route::post('change-qr-code-status', [AttendanceController::class, 'qrCodeStatus'])->name('settings.change-qr-code-status');


    Route::get('shifts/mark/{id}/{day}/{month}/{year}', [EmployeeShiftScheduleController::class, 'mark'])->name('shifts.mark');
    Route::get('shifts/export-all/{year}/{month}/{id}/{department}/{startDate}/{viewType}', [EmployeeShiftScheduleController::class, 'exportAllShift'])->name('shifts.export_all');

    Route::get('shifts/employee-shift-calendar', [EmployeeShiftScheduleController::class, 'employeeShiftCalendar'])->name('shifts.employee_shift_calendar');
    Route::post('shifts/bulk-shift', [EmployeeShiftScheduleController::class, 'bulkShift'])->name('shifts.bulk_shift');

    Route::group(['prefix' => 'shifts'], function () {
        Route::post('shifts-change/approve_request/{id}', [EmployeeShiftChangeRequestController::class, 'approveRequest'])->name('shifts-change.approve_request');
        Route::post('shifts-change/decline_request/{id}', [EmployeeShiftChangeRequestController::class, 'declineRequest'])->name('shifts-change.decline_request');
        Route::post('shifts-change/apply-quick-action', [EmployeeShiftChangeRequestController::class, 'applyQuickAction'])->name('shifts-change.apply_quick_action');
        Route::resource('shifts-change', EmployeeShiftChangeRequestController::class);
    });

    Route::resource('shifts', EmployeeShiftScheduleController::class);

    // Tickets
    Route::post('tickets/apply-quick-action', [TicketController::class, 'applyQuickAction'])->name('tickets.apply_quick_action');
    Route::post('tickets/updateOtherData/{id}', [TicketController::class, 'updateOtherData'])->name('tickets.update_other_data');
    Route::post('tickets/change-status', [TicketController::class, 'changeStatus'])->name('tickets.change-status');
    Route::post('tickets/refreshCount', [TicketController::class, 'refreshCount'])->name('tickets.refresh_count');
    Route::get('tickets/agent-group/{id}/{exceptThis?}', [TicketController::class, 'agentGroup'])->name('tickets.agent_group');
    Route::get('tickets/edit-details/{id}', [TicketController::class, 'editDetail'])->name('tickets.edit_detail');
    Route::put('tickets/update-details/{id}', [TicketController::class, 'updateDetail'])->name('tickets.update_detail');
    Route::resource('tickets', TicketController::class);

    // Ticket Custom Embed From
    Route::post('ticket-form/sort-fields', [TicketCustomFormController::class, 'sortFields'])->name('ticket-form.sort_fields');
    Route::resource('ticket-form', TicketCustomFormController::class);

    Route::get('ticket-files/download/{id}', [TicketFileController::class, 'download'])->name('ticket-files.download');
    Route::resource('ticket-files', TicketFileController::class);

    Route::resource('ticket-replies', TicketReplyController::class);
    Route::post('ticket-replies/edit-note/{id}', [TicketReplyController::class, 'editNote'])->name('ticket-replies.edit_note');

    Route::post('task-report-chart', [TaskReportController::class, 'taskChartData'])->name('task-report.chart');
    Route::get('task-report/employee-wise-task-report', [TaskReportController::class, 'employeeWiseTaskReport'])->name('employee-wise-task-report');
    Route::get('task-report/consolidated-task-report', [TaskReportController::class, 'consolidatedTaskReport'])->name('consolidated-task-report');

    Route::resource('task-report', TaskReportController::class);

    Route::post('time-log-report-chart', [TimelogReportController::class, 'timelogChartData'])->name('time-log-report.chart');
    Route::get('time-log-consolidated-report', [TimelogReportController::class,'consolidateIndex'])->name('time-log-consolidated.report');
    Route::get('time-log-project-wise-report', [TimelogReportController::class,'projectWiseTimelog'])->name('project-wise-timelog.report');
    Route::get('project-wise-timelog/report/export', [TimelogReportController::class,'exportProjectWiseTimeLog'])->name('project-wise-timelog.export');
    Route::resource('time-log-report', TimelogReportController::class);
    Route::post('time-log-report-time', [TimelogReportController::class, 'totalTime'])->name('time-log-report.time');

    Route::resource('time-log-weekly-report', TimelogWeeklyApprovalController::class);
    Route::get('weekly-pending-time-log-report', [TimelogWeeklyApprovalController::class,'pendingTimelogReportIndex'])->name('weekly-pending-time-log-report.report');

    Route::post('finance-report-chart', [FinanceReportController::class, 'financeChartData'])->name('finance-report.chart');
    Route::resource('finance-report', FinanceReportController::class);

    Route::resource('income-expense-report', IncomeVsExpenseReportController::class);

    Route::get('leave-report/leave-quota', [LeaveReportController::class, 'leaveQuota'])->name('leave-report.leave_quota');
    Route::get('leave-report/leave-quota/export-all-leave-quota/{id}/{year}/{month}', [LeavesQuotaController::class, 'exportAllLeaveQuota'])->name('leave_quota.export_all_leave_quota');
    Route::get('leave-report/leave-quota/{id}/{year}/{month}', [LeaveReportController::class, 'employeeLeaveQuota'])->name('leave-report.employee-leave-quota');
    Route::resource('leave-report', LeaveReportController::class);

    Route::resource('attendance-report', AttendanceReportController::class);

    Route::post('expense-report-chart', [ExpenseReportController::class, 'expenseChartData'])->name('expense-report.chart');
    Route::get('expense-report/expense-category-report', [ExpenseReportController::class, 'expenseCategoryReport'])->name('expense-report.expense_category_report');

    Route::resource('expense-report', ExpenseReportController::class);
    Route::get('deal-report/lead', [LeadReportController::class, 'leadContact'])->name('lead-report.lead_contact');
    Route::get('lead-report/total', [LeadReportController::class, 'totalContact'])->name('lead-report.total_contact');

    Route::get('deal-report/chart', [LeadReportController::class, 'averageDealSizeReport'])->name('lead-report.chart');
    Route::get('deal-report/profile', [LeadReportController::class, 'profile'])->name('lead-report.profile');
    Route::get('deal-report/export/{year}/{pipeline}/{category}', [LeadReportController::class, 'exportDealReport'])->name('deal-report.export');



    Route::resource('lead-report', LeadReportController::class);
    Route::resource('sales-report', SalesReportController::class);

    Route::resource('sticky-notes', StickyNoteController::class);

    Route::post('show-notifications', [NotificationController::class, 'showNotifications'])->name('show_notifications');


    Route::get('gdpr/lead/approve-reject/{id}/{type}', [GdprSettingsController::class, 'approveRejectLead'])->name('gdpr.lead.approve_reject');
    Route::get('gdpr/customer/approve-reject/{id}/{type}', [GdprSettingsController::class, 'approveRejectClient'])->name('gdpr.customer.approve_reject');

    Route::post('gdpr-settings/apply-quick-action', [GdprSettingsController::class, 'applyQuickAction'])->name('gdpr_settings.apply_quick_action');
    Route::put('gdpr-settings.update-general', [GdprSettingsController::class, 'updateGeneral'])->name('gdpr_settings.update_general');

    Route::post('gdpr/store-consent', [GdprSettingsController::class, 'storeConsent'])->name('gdpr.store_consent');
    Route::get('gdpr/add-consent', [GdprSettingsController::class, 'AddConsent'])->name('gdpr.add_consent');
    Route::get('gdpr/edit-consent/{id}', [GdprSettingsController::class, 'editConsent'])->name('gdpr.edit_consent');

    Route::put('gdpr/update-consent/{id}', [GdprSettingsController::class, 'updateConsent'])->name('gdpr.update_consent');

    Route::delete('gdpr-settings/purpose-delete/{id}', [GdprSettingsController::class, 'purposeDelete'])->name('gdpr_settings.purpose_delete');

    Route::resource('gdpr-settings', GdprSettingsController::class);

    Route::post('gdpr/update-client-consent', [GdprController::class, 'updateClientConsent'])->name('gdpr.update_client_consent');
    Route::get('gdpr/export-data', [GdprController::class, 'downloadJson'])->name('gdpr.export_data');
    Route::post('gdpr/update-consent-block', [GdprController::class, 'updateConsentBlock'])->name('gdpr.update_consent_block');
    Route::resource('gdpr', GdprController::class);

    Route::get('all-notifications', [NotificationController::class, 'all'])->name('all-notifications');
    Route::post('mark-read', [NotificationController::class, 'markRead'])->name('mark_single_notification_read');
    Route::post('mark_notification_read', [NotificationController::class, 'markAllRead'])->name('mark_notification_read');

    Route::resource('search', SearchController::class);

    // Remove in v 5.2.5
    Route::get('hide-webhook-url', [SettingsController::class, 'hideWebhookAlert'])->name('hideWebhookAlert');

    // Estimate Template
    Route::get('estimate-template/add-item', [EstimateTemplateController::class, 'addItem'])->name('estimate-template.add_item');
    Route::resource('estimate-template', EstimateTemplateController::class);
    Route::get('estimates-template/delete-image', [EstimateTemplateController::class, 'deleteEstimateItemImage'])->name('estimate-template.delete_image');
    Route::get('estimate-template/download/{id}', [EstimateTemplateController::class, 'download'])->name('estimate-template.download');

    Route::get('quickbooks/{hash}/callback', [QuickbookController::class, 'callback'])->name('quickbooks.callback');
    Route::get('quickbooks', [QuickbookController::class, 'index'])->name('quickbooks.index');

    // Estimate Request
    Route::post('estimate-request/apply-quick-action', [EstimateRequestController::class, 'applyQuickAction'])->name('estimate-request.apply_quick_action');
    Route::post('estimate-request/change-status/', [EstimateRequestController::class, 'changeStatus'])->name('estimate-request.change_status');
    Route::get('estimate-request-confirm-rejected/{id}', [EstimateRequestController::class, 'rejectConfirmation'])->name('estimate-request.confirm_rejected');
    Route::get('estimate-request/send-estimate-request', [EstimateRequestController::class, 'sendEstimateRequest'])->name('estimate-request.send_estimate_request');
    Route::post('estimate-request/send_estimate_mail', [EstimateRequestController::class, 'sendEstimateMail'])->name('estimate-request.send_estimate_mail');
    Route::resource('estimate-request', EstimateRequestController::class);

    Route::post('gantt_link.task_update', [GanttLinkController::class, 'taskUpdateController'])->name('gantt_link.task_update');
    Route::resource('gantt_link', GanttLinkController::class);

});

// Test broadcasting
Route::get('/test-broadcast', function() {
    try {
        event(new \Modules\Chat\Events\MessageSent(\Modules\Chat\Entities\ChatMessage::first()));
        return response()->json(['success' => true, 'message' => 'Event broadcasted successfully']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
})->name('test-broadcast');

// Debug broadcasting configuration 
Route::get('/debug-broadcast', function() {
    return response()->json([
        'broadcast_driver' => config('broadcasting.default'),
        'pusher_key' => config('broadcasting.connections.pusher.key'),
        'pusher_cluster' => config('broadcasting.connections.pusher.options.host'),
        'app_env' => config('app.env'),
        'queue_connection' => config('queue.default')
    ]);
})->name('debug-broadcast');

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('crm-dashboard', [App\Http\Controllers\BrandZoCrmDashboardController::class, 'index'])->name('crm-dashboard');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-store', [App\Http\Controllers\BrandZoAiAgentStoreController::class, 'index'])->name('ai-store');
    Route::get('customers/customer-360', [App\Http\Controllers\BrandZoCustomer360Controller::class, 'index'])->name('customer-360');
    Route::get('dashboard/ceo', [App\Http\Controllers\BrandZoCeoDashboardController::class, 'index'])->name('dashboard.ceo');
    Route::get('partners', [App\Http\Controllers\BrandZoPartnerPortalController::class, 'index'])->name('partners');
});

Route::get('marketing/book-demo', [App\Http\Controllers\BrandZoDemoBookingController::class, 'index'])->name('marketing.book-demo.public');
Route::post('marketing/book-demo', [App\Http\Controllers\BrandZoDemoBookingController::class, 'store'])->name('marketing.book-demo.store');

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('marketing/book-demo', [App\Http\Controllers\BrandZoDemoBookingController::class, 'index'])->name('marketing.book-demo');
    Route::get('dashboard/health-monitor', [App\Http\Controllers\BrandZoHealthMonitorController::class, 'index'])->name('dashboard.health-monitor');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('marketing/campaigns', [App\Http\Controllers\BrandZoMarketingAutomationController::class, 'index'])->name('marketing.campaigns');
    Route::get('crm/sales-dashboard', [App\Http\Controllers\BrandZoSalesCrmController::class, 'index'])->name('crm.sales-dashboard');
    Route::get('marketing/referral', [App\Http\Controllers\BrandZoReferralController::class, 'index'])->name('marketing.referral');
    Route::get('education/academy', [App\Http\Controllers\BrandZoEducationPlatformController::class, 'index'])->name('education.academy');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('marketplace-v2', [App\Http\Controllers\BrandZoMarketplace2Controller::class, 'index'])->name('marketplace-v2');
    Route::get('developer/ecosystem', [App\Http\Controllers\BrandZoDeveloperEcosystemController::class, 'index'])->name('developer.ecosystem');
    Route::get('certification', [App\Http\Controllers\BrandZoCertificationController::class, 'index'])->name('certification');
    Route::get('community/forum', [App\Http\Controllers\BrandZoCommunityController::class, 'index'])->name('community.forum');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('industry/packages', [App\Http\Controllers\BrandZoIndustryFrameworkController::class, 'packages'])->name('industry.packages');
    Route::get('industry/templates', [App\Http\Controllers\BrandZoIndustryFrameworkController::class, 'templates'])->name('industry.templates');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai/voice-assistant', [App\Http\Controllers\BrandZoVoiceAssistantController::class, 'index'])->name('ai.voice-assistant');
    Route::get('security/dashboard', [App\Http\Controllers\BrandZoSecurityDashboardController::class, 'index'])->name('security.dashboard');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('admin/global-console', [App\Http\Controllers\BrandZoGlobalAdminConsoleController::class, 'index'])->name('admin.global-console');
    Route::get('support/premium', [App\Http\Controllers\BrandZoPremiumSupportController::class, 'index'])->name('support.premium');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('intelligence/digital-twin', [App\Http\Controllers\BrandZoDigitalTwinController::class, 'index'])->name('intelligence.digital-twin');
    Route::get('network/business-network', [App\Http\Controllers\BrandZoGlobalBusinessNetworkController::class, 'index'])->name('network.business-network');
    Route::get('collaboration/workspace', [App\Http\Controllers\BrandZoTeamCollaborationController::class, 'index'])->name('collaboration.workspace');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-workforce/roster', [App\Http\Controllers\BrandZoAiDigitalEmployeeController::class, 'roster'])->name('ai-workforce.roster');
    Route::get('ai-workforce/governance', [App\Http\Controllers\BrandZoAiDigitalEmployeeController::class, 'governance'])->name('ai-workforce.governance');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-marketplace', [App\Http\Controllers\BrandZoAiMarketplaceController::class, 'index'])->name('ai-marketplace');
    Route::get('ai-training', [App\Http\Controllers\BrandZoAiTrainingController::class, 'index'])->name('ai-training');
    Route::get('ai-governance', [App\Http\Controllers\BrandZoAiGovernanceController::class, 'index'])->name('ai-governance');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-command-center', [App\Http\Controllers\BrandZoAiCommandCenterController::class, 'index'])->name('ai-command-center');
    Route::get('dashboard/global-ai', [App\Http\Controllers\BrandZoGlobalAiDashboardController::class, 'index'])->name('dashboard.global-ai');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('tenant-management', [App\Http\Controllers\BrandZoTenantManagementController::class, 'index'])->name('tenant-management');
    Route::get('developer/marketplace', [App\Http\Controllers\BrandZoDeveloperMarketplaceController::class, 'index'])->name('developer.marketplace');
    Route::get('enterprise/global-console', [App\Http\Controllers\BrandZoGlobalEnterpriseController::class, 'index'])->name('enterprise.global-console');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('business-marketplace', [App\Http\Controllers\BrandZoBusinessMarketplaceController::class, 'index'])->name('business-marketplace');
    Route::get('customer-intelligence', [App\Http\Controllers\BrandZoCustomerIntelligenceController::class, 'index'])->name('customer-intelligence');
    Route::get('dashboard/ai-economy', [App\Http\Controllers\BrandZoAiEconomyDashboardController::class, 'index'])->name('dashboard.ai-economy');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-employee-management', [App\Http\Controllers\BrandZoAiEmployeeManagementController::class, 'index'])->name('ai-employee-management');
    Route::get('dashboard/autonomous-enterprise', [App\Http\Controllers\BrandZoAutonomousDashboardController::class, 'index'])->name('dashboard.autonomous-enterprise');
    Route::get('simulation/enterprise', [App\Http\Controllers\BrandZoEnterpriseSimulationController::class, 'index'])->name('simulation.enterprise');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('agi/advisor', [App\Http\Controllers\BrandZoAgiAdvisorController::class, 'index'])->name('agi.advisor');
    Route::get('innovation/lab', [App\Http\Controllers\BrandZoInnovationLabController::class, 'index'])->name('innovation.lab');
    Route::get('dashboard/agi-command-center', [App\Http\Controllers\BrandZoAgiCommandCenterController::class, 'index'])->name('dashboard.agi-command-center');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('network/enterprise-marketplace', [App\Http\Controllers\BrandZoEnterpriseNetworkMarketplaceController::class, 'index'])->name('network.enterprise-marketplace');
    Route::get('ai-board', [App\Http\Controllers\BrandZoAiBoardController::class, 'index'])->name('ai-board');
    Route::get('partnership-hub', [App\Http\Controllers\BrandZoPartnershipHubController::class, 'index'])->name('partnership-hub');
    Route::get('dashboard/global-autonomous', [App\Http\Controllers\BrandZoGlobalAutonomousController::class, 'index'])->name('dashboard.global-autonomous');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('planetary-marketplace', [App\Http\Controllers\BrandZoPlanetaryMarketplaceController::class, 'index'])->name('planetary-marketplace');
    Route::get('planetary/digital-twin', [App\Http\Controllers\BrandZoPlanetaryTwinController::class, 'index'])->name('planetary.digital-twin');
    Route::get('dashboard/planetary-command', [App\Http\Controllers\BrandZoPlanetaryCommandController::class, 'index'])->name('dashboard.planetary-command');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/civilization', [App\Http\Controllers\BrandZoCivilizationDashboardController::class, 'index'])->name('dashboard.civilization');
    Route::get('strategy/war-room', [App\Http\Controllers\BrandZoStrategicWarRoomController::class, 'index'])->name('strategy.war-room');
    Route::get('ai/ceo-twin', [App\Http\Controllers\BrandZoAiCeoTwinController::class, 'index'])->name('ai.ceo-twin');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('agi/ceo-command', [App\Http\Controllers\BrandZoAgiCeoCommandController::class, 'index'])->name('agi.ceo-command');
    Route::get('dashboard/singularity', [App\Http\Controllers\BrandZoSingularityDashboardController::class, 'index'])->name('dashboard.singularity');
    Route::get('agi/innovation', [App\Http\Controllers\BrandZoAgiInnovationController::class, 'index'])->name('agi.innovation');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('network/business-exchange', [App\Http\Controllers\BrandZoAutonomousBusinessExchangeController::class, 'index'])->name('network.business-exchange');
    Route::get('dashboard/universal-command', [App\Http\Controllers\BrandZoUniversalCommandCenterController::class, 'index'])->name('dashboard.universal-command');
    Route::get('innovation/universal-hub', [App\Http\Controllers\BrandZoUniversalInnovationController::class, 'index'])->name('innovation.universal-hub');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/civilization-command', [App\Http\Controllers\BrandZoCivilizationCommandCenterController::class, 'index'])->name('dashboard.civilization-command');
    Route::get('ceo/ultimate-console', [App\Http\Controllers\BrandZoUltimateCeoController::class, 'index'])->name('ceo.ultimate-console');
    Route::get('innovation/singularity-hub', [App\Http\Controllers\BrandZoSingularityInnovationController::class, 'index'])->name('innovation.singularity-hub');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('billing', [App\Http\Controllers\BrandZoBillingController::class, 'index'])->name('billing.index');
    Route::get('security-dashboard', [App\Http\Controllers\BrandZoSecurityDashboardController::class, 'index'])->name('security.dashboard');
    Route::get('monitoring/production', [App\Http\Controllers\BrandZoProductionMonitoringController::class, 'index'])->name('monitoring.production');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->prefix('mobile-api/v1')->group(function () {
    Route::post('login', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'login']);
    Route::get('dashboard', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'dashboard']);
    Route::get('crm/leads', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'crmLeads']);
    Route::get('hrms/employees', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'hrmsEmployees']);
    Route::get('finance/invoices', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'financeInvoices']);
    Route::post('ai/assistant', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'aiAssistant']);
    Route::post('push/notifications', [App\Http\Controllers\Api\BrandZoMobileApiController::class, 'pushNotifications']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('growth/dashboard', [App\Http\Controllers\BrandZoGrowthDashboardController::class, 'index'])->name('growth.dashboard');
    Route::get('sales/enterprise', [App\Http\Controllers\BrandZoEnterpriseSalesController::class, 'index'])->name('sales.enterprise');
    Route::get('client/portal', [App\Http\Controllers\BrandZoClientPortalController::class, 'index'])->name('client.portal');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('partner/portal', [App\Http\Controllers\BrandZoPartnerPortalController::class, 'index'])->name('partner.portal');
    Route::get('marketplace/store', [App\Http\Controllers\BrandZoAppMarketplaceController::class, 'index'])->name('marketplace.store');
    Route::get('community/academy', [App\Http\Controllers\BrandZoCommunityAcademyController::class, 'index'])->name('community.academy');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/global-intelligence', [App\Http\Controllers\BrandZoGlobalIntelligenceController::class, 'index'])->name('dashboard.global-intelligence');
    Route::get('marketplace/analysts', [App\Http\Controllers\BrandZoBusinessAnalystMarketplaceController::class, 'index'])->name('marketplace.analysts');
    Route::get('ceo/network-hub', [App\Http\Controllers\BrandZoAiCeoNetworkController::class, 'index'])->name('ceo.network-hub');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/intelligence-cloud', [App\Http\Controllers\BrandZoIntelligenceCloudDashboardController::class, 'index'])->name('dashboard.intelligence-cloud');
    Route::get('advisor/network', [App\Http\Controllers\BrandZoBusinessAdvisorController::class, 'index'])->name('advisor.network');
    Route::get('marketplace/knowledge', [App\Http\Controllers\BrandZoKnowledgeMarketplaceController::class, 'index'])->name('marketplace.knowledge');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/ai-economy-cloud', [App\Http\Controllers\BrandZoAiEconomyDashboardController::class, 'index'])->name('dashboard.ai-economy-cloud');
    Route::get('marketplace/workforce', [App\Http\Controllers\BrandZoAiWorkforceEconomyController::class, 'index'])->name('marketplace.workforce');
    Route::get('finance/cloud', [App\Http\Controllers\BrandZoAiFinanceCloudController::class, 'index'])->name('finance.cloud');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/autonomous-economy', [App\Http\Controllers\BrandZoAutonomousEconomyController::class, 'index'])->name('dashboard.autonomous-economy');
    Route::get('acquisition/network', [App\Http\Controllers\BrandZoAutonomousAcquisitionController::class, 'index'])->name('acquisition.network');
    Route::get('expansion/strategy', [App\Http\Controllers\BrandZoExpansionStrategyController::class, 'index'])->name('expansion.strategy');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/global-revenue', [App\Http\Controllers\BrandZoGlobalRevenueController::class, 'index'])->name('dashboard.global-revenue');
    Route::get('marketplace/sales', [App\Http\Controllers\BrandZoGlobalSalesMarketplaceController::class, 'index'])->name('marketplace.sales');
    Route::get('marketplace/commerce', [App\Http\Controllers\BrandZoAiCommerceExchangeController::class, 'index'])->name('marketplace.commerce');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/ceo-intelligence', [App\Http\Controllers\BrandZoCeoIntelligenceController::class, 'index'])->name('dashboard.ceo-intelligence');
    Route::get('strategy/competitive-center', [App\Http\Controllers\BrandZoCompetitiveStrategyController::class, 'index'])->name('strategy.competitive-center');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/civilization-intelligence', [App\Http\Controllers\BrandZoCivilizationIntelligenceController::class, 'index'])->name('dashboard.civilization-intelligence');
    Route::get('strategy/global-war-room', [App\Http\Controllers\BrandZoGlobalWarRoomController::class, 'index'])->name('strategy.global-war-room');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/global-civilization-growth', [App\Http\Controllers\BrandZoGlobalCivilizationGrowthController::class, 'index'])->name('dashboard.global-civilization-growth');
    Route::get('builder/studio', [App\Http\Controllers\BrandZoEnterpriseBuilderController::class, 'index'])->name('builder.studio');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/global-network', [App\Http\Controllers\BrandZoGlobalNetworkController::class, 'index'])->name('dashboard.global-network');
    Route::get('ma/intelligence', [App\Http\Controllers\BrandZoMergerAcquisitionController::class, 'index'])->name('ma.intelligence');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/economic-network', [App\Http\Controllers\BrandZoEconomicNetworkController::class, 'index'])->name('dashboard.economic-network');
    Route::get('marketplace/universal', [App\Http\Controllers\BrandZoUniversalMarketplaceController::class, 'index'])->name('marketplace.universal');
    Route::get('marketplace/investments', [App\Http\Controllers\BrandZoInvestmentMarketplaceController::class, 'index'])->name('marketplace.investments');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/financial-civilization', [App\Http\Controllers\BrandZoFinancialCivilizationController::class, 'index'])->name('dashboard.financial-civilization');
    Route::get('cfo/global-command', [App\Http\Controllers\BrandZoGlobalCfoController::class, 'index'])->name('cfo.global-command');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/cloud-civilization', [App\Http\Controllers\BrandZoCloudCivilizationController::class, 'index'])->name('dashboard.cloud-civilization');
    Route::get('cloud/command-center', [App\Http\Controllers\BrandZoCloudCommandController::class, 'index'])->name('cloud.command-center');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('digital-twin/dashboard', [App\Http\Controllers\BrandZoDigitalTwinController::class, 'index'])->name('digital-twin.dashboard');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-workforce/dashboard', [App\Http\Controllers\BrandZoAiWorkforceController::class, 'index'])->name('ai-workforce.dashboard');
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('knowledge/brain', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'index'])->name('knowledge.brain');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/knowledge/search', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'apiSearch']);
    Route::post('api/knowledge/learn', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'apiLearn']);
    Route::get('api/knowledge/recommendations', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'apiRecommendations']);
    
    Route::get('mobile-api/v1/knowledge/search', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'apiSearch']);
    Route::post('mobile-api/v1/knowledge/learn', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'apiLearn']);
    Route::get('mobile-api/v1/knowledge/recommendations', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'apiRecommendations']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('executive/command-center', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'index'])->name('executive.command-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/executive/recommendations', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'apiRecommendations']);
    Route::post('api/executive/simulate', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'apiSimulate']);
    Route::get('api/executive/reports', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'apiReports']);
    
    Route::get('mobile-api/v1/executive/recommendations', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'apiRecommendations']);
    Route::post('mobile-api/v1/executive/simulate', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'apiSimulate']);
    Route::get('mobile-api/v1/executive/reports', [App\Http\Controllers\BrandZoExecutiveCommandController::class, 'apiReports']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/singularity-os', [App\Http\Controllers\BrandZoSingularityController::class, 'index'])->name('dashboard.singularity-os');
    Route::get('ceo/autonomous-console', [App\Http\Controllers\BrandZoAutonomousCeoController::class, 'index'])->name('ceo.autonomous-console');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/singularity/status', [App\Http\Controllers\BrandZoSingularityController::class, 'apiStatus']);
    Route::get('api/singularity/recommendations', [App\Http\Controllers\BrandZoSingularityController::class, 'apiRecommendations']);
    Route::post('api/singularity/execute', [App\Http\Controllers\BrandZoSingularityController::class, 'apiExecute']);
    
    Route::get('mobile-api/v1/singularity/status', [App\Http\Controllers\BrandZoSingularityController::class, 'apiStatus']);
    Route::get('mobile-api/v1/singularity/recommendations', [App\Http\Controllers\BrandZoSingularityController::class, 'apiRecommendations']);
    Route::post('mobile-api/v1/singularity/execute', [App\Http\Controllers\BrandZoSingularityController::class, 'apiExecute']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-agents/marketplace', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'index'])->name('ai-agents.marketplace');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::post('api/v1/agents/create', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiCreate']);
    Route::post('api/v1/agents/run', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiRun']);
    Route::get('api/v1/agents/status', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiStatus']);
    Route::get('api/v1/agents/memory', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiMemory']);
    
    Route::post('mobile-api/v1/agents/create', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiCreate']);
    Route::post('mobile-api/v1/agents/run', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiRun']);
    Route::get('mobile-api/v1/agents/status', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiStatus']);
    Route::get('mobile-api/v1/agents/memory', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'apiMemory']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('appstore/dashboard', [App\Http\Controllers\BrandZoAiAppStoreController::class, 'index'])->name('appstore.dashboard');
    Route::get('executive/suite', [App\Http\Controllers\BrandZoAutonomousExecutiveController::class, 'index'])->name('executive.suite');
    Route::get('network/dashboard', [App\Http\Controllers\BrandZoNetworkOsController::class, 'index'])->name('network.dashboard');
    Route::get('factory/launch', [App\Http\Controllers\BrandZoBusinessFactoryController::class, 'index'])->name('factory.launch');
    Route::get('simulation/universe', [App\Http\Controllers\BrandZoSimulationUniverseController::class, 'index'])->name('simulation.universe');
    Route::get('governance/dashboard', [App\Http\Controllers\BrandZoGovernanceComplianceController::class, 'index'])->name('governance.dashboard');
    Route::get('dashboard/super-intelligence', [App\Http\Controllers\BrandZoSuperIntelligenceController::class, 'index'])->name('dashboard.super-intelligence');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/super-intelligence/status', [App\Http\Controllers\BrandZoSuperIntelligenceController::class, 'apiStatus']);
    Route::get('mobile-api/v1/super-intelligence/status', [App\Http\Controllers\BrandZoSuperIntelligenceController::class, 'apiStatus']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('marketplace/enterprise', [App\Http\Controllers\BrandZoEnterpriseMarketplaceController::class, 'index'])->name('marketplace.enterprise');
    Route::get('ai/gateway', [App\Http\Controllers\BrandZoAiGatewayController::class, 'index'])->name('ai.gateway');
    Route::get('datalake/dashboard', [App\Http\Controllers\BrandZoDataLakeController::class, 'index'])->name('datalake.dashboard');
    Route::get('security/zerotrust', [App\Http\Controllers\BrandZoZeroTrustSecurityController::class, 'index'])->name('security.zerotrust');
    Route::get('workflows/marketplace', [App\Http\Controllers\BrandZoWorkflowMarketplaceController::class, 'index'])->name('workflows.marketplace');
    Route::get('collaboration/v3', [App\Http\Controllers\BrandZoHumanAiV3Controller::class, 'index'])->name('collaboration.v3');
    Route::get('dashboard/enterprise-cloud', [App\Http\Controllers\BrandZoEnterpriseCloudController::class, 'index'])->name('dashboard.enterprise-cloud');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/ai-gateway/models', [App\Http\Controllers\BrandZoAiGatewayController::class, 'apiModels']);
    Route::get('mobile-api/v1/ai-gateway/models', [App\Http\Controllers\BrandZoAiGatewayController::class, 'apiModels']);
    Route::get('api/v1/enterprise-cloud/status', [App\Http\Controllers\BrandZoEnterpriseCloudController::class, 'apiStatus']);
    Route::get('mobile-api/v1/enterprise-cloud/status', [App\Http\Controllers\BrandZoEnterpriseCloudController::class, 'apiStatus']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('admin/control-plane', [App\Http\Controllers\BrandZoEnterpriseControlPlaneController::class, 'index'])->name('admin.control-plane');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/customer/profile', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProfile']);
    Route::get('api/v1/customer/workspace', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkspace']);
    Route::get('api/v1/customer/billing', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiBilling']);
    Route::get('api/v1/customer/usage', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUsage']);
    
    Route::get('mobile-api/v1/customer/profile', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProfile']);
    Route::get('mobile-api/v1/customer/workspace', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkspace']);
    Route::get('mobile-api/v1/customer/billing', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiBilling']);
    Route::get('mobile-api/v1/customer/usage', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUsage']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('revenue/dashboard', [App\Http\Controllers\BrandZoRevenueAnalyticsController::class, 'index'])->name('revenue.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/revenue/metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMetrics']);
    Route::get('api/v1/customer/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHealth']);
    Route::get('api/v1/growth/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOpportunities']);
    Route::post('api/v1/customer/upgrade', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUpgrade']);
    
    Route::get('mobile-api/v1/revenue/metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMetrics']);
    Route::get('mobile-api/v1/customer/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHealth']);
    Route::get('mobile-api/v1/growth/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOpportunities']);
    Route::post('mobile-api/v1/customer/upgrade', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUpgrade']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('partners/network', [App\Http\Controllers\BrandZoPartnerNetworkController::class, 'index'])->name('partners.network');
    Route::get('mobile/superapp', [App\Http\Controllers\BrandZoMobileSuperAppController::class, 'index'])->name('mobile.superapp');
    Route::get('cloud/dashboard', [App\Http\Controllers\BrandZoBusinessCloudController::class, 'index'])->name('cloud.dashboard');
    Route::get('security/soc', [App\Http\Controllers\BrandZoSecurityV2Controller::class, 'index'])->name('security.soc');
    Route::get('ai/consultant', [App\Http\Controllers\BrandZoAiConsultantController::class, 'index'])->name('ai.consultant');
    Route::get('agents/economy', [App\Http\Controllers\BrandZoAgentEconomyController::class, 'index'])->name('agents.economy');
    Route::get('network/marketplace', [App\Http\Controllers\BrandZoEnterpriseNetworkMarketplaceController::class, 'index'])->name('network.marketplace');
    Route::get('factory/v2', [App\Http\Controllers\BrandZoBusinessFactoryV2Controller::class, 'index'])->name('factory.v2');
    Route::get('analytics/os', [App\Http\Controllers\BrandZoEnterpriseAnalyticsController::class, 'index'])->name('analytics.os');
    Route::get('dashboard/global-os', [App\Http\Controllers\BrandZoGlobalOsController::class, 'index'])->name('dashboard.global-os');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('mobile/customer/profile', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCustomerProfile']);
    Route::get('mobile/employee/attendance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileEmployeeAttendance']);
    Route::get('mobile/executive/metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileExecutiveMetrics']);
    Route::get('api/v1/global-os/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalOsStatus']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('production/scale', [App\Http\Controllers\BrandZoProductionScaleController::class, 'index'])->name('production.scale');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/production/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionHealth']);
    Route::post('api/v1/ai/dispatch', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiDispatch']);
    Route::post('api/v1/billing/webhook', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiBillingWebhook']);
    
    Route::get('mobile-api/v1/production/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionHealth']);
    Route::post('mobile-api/v1/ai/dispatch', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiDispatch']);
    Route::post('mobile-api/v1/billing/webhook', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiBillingWebhook']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('growth/command-center', [App\Http\Controllers\BrandZoGrowthCommandCenterController::class, 'index'])->name('growth.command-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/growth/funnel', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGrowthFunnel']);
    Route::post('api/v1/growth/leads/capture', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLeadsCapture']);
    Route::get('api/v1/growth/retention', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGrowthRetention']);
    
    Route::get('mobile-api/v1/growth/funnel', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGrowthFunnel']);
    Route::post('mobile-api/v1/growth/leads/capture', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLeadsCapture']);
    Route::get('mobile-api/v1/growth/retention', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGrowthRetention']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('growth/expansion-center', [App\Http\Controllers\BrandZoExpansionCommandCenterController::class, 'index'])->name('growth.expansion-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/expansion/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionCatalog']);
    Route::post('api/v1/expansion/purchase', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionPurchase']);
    Route::get('api/v1/expansion/upsell', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionUpsell']);
    
    Route::get('mobile-api/v1/expansion/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionCatalog']);
    Route::post('mobile-api/v1/expansion/purchase', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionPurchase']);
    Route::get('mobile-api/v1/expansion/upsell', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionUpsell']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('operations/command-center', [App\Http\Controllers\BrandZoOperationsCommandController::class, 'index'])->name('operations.command-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/operations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOperationsStatus']);
    Route::get('api/v1/operations/recommendations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOperationsRecommendations']);
    Route::post('api/v1/operations/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOperationsExecute']);
    
    Route::get('mobile-api/v1/operations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOperationsStatus']);
    Route::get('mobile-api/v1/operations/recommendations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOperationsRecommendations']);
    Route::post('mobile-api/v1/operations/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiOperationsExecute']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('analytics/intelligence-center', [App\Http\Controllers\BrandZoAnalyticsCommandController::class, 'index'])->name('analytics.intelligence-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/analytics/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsDashboard']);
    Route::get('api/v1/analytics/forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsForecast']);
    Route::get('api/v1/analytics/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsInsights']);
    Route::post('api/v1/analytics/query', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsQuery']);
    
    Route::get('mobile-api/v1/analytics/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsDashboard']);
    Route::get('mobile-api/v1/analytics/forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsForecast']);
});

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('api/platform', [App\Http\Controllers\BrandZoApiPlatformController::class, 'index'])->name('api.platform');
    Route::get('developer/portal', [App\Http\Controllers\BrandZoDeveloperController::class, 'index'])->name('developer.portal');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/platform/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformStatus']);
    Route::post('api/v1/developer/apps', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperAppsCreate']);
    Route::get('api/v1/developer/apps', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperAppsList']);
    Route::post('api/v1/api-keys/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiApiKeysGenerate']);
    Route::get('api/v1/api/usage', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiApiUsage']);
    Route::post('api/v1/webhooks/test', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWebhooksTest']);
    
    Route::get('mobile-api/v1/platform/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformStatus']);
    Route::get('mobile-api/v1/api/usage', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiApiUsage']);
});

// Phase 84 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('agents/marketplace', [App\Http\Controllers\BrandZoAgentMarketplaceController::class, 'index'])->name('agents.marketplace');
    Route::get('agents/builder', [App\Http\Controllers\BrandZoAgentBuilderController::class, 'index'])->name('agents.builder');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/agents/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsCatalog']);
    Route::post('api/v1/agents/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsCreate']);
    Route::get('api/v1/agents/{id}/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsAnalytics']);
    Route::post('api/v1/agents/{id}/deploy', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsDeploy']);
    Route::get('api/v1/agents/revenue', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsRevenue']);
    
    Route::get('mobile-api/v1/agents/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsCatalog']);
    Route::get('mobile-api/v1/agents/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentsCatalog']);
});

// Phase 85 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('integrations/dashboard', [App\Http\Controllers\BrandZoIntegrationController::class, 'index'])->name('integrations.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/integrations/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsCatalog']);
    Route::post('api/v1/integrations/connect', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsConnect']);
    Route::get('api/v1/integrations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsStatus']);
    Route::post('api/v1/integrations/sync', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsSync']);
    
    Route::get('mobile-api/v1/integrations/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsCatalog']);
    Route::get('mobile-api/v1/integrations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsStatus']);
});

// Phase 86 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('automation/command-center', [App\Http\Controllers\BrandZoAutomationCommandController::class, 'index'])->name('automation.command-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/workflows/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsCatalog']);
    Route::post('api/v1/workflows/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsCreate']);
    Route::post('api/v1/workflows/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsExecute']);
    Route::get('api/v1/workflows/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsAnalytics134']);
    
    Route::get('mobile-api/v1/workflows/catalog', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsCatalog']);
    Route::get('mobile-api/v1/workflows/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsAnalytics134']);
});

// Phase 87 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('security/intelligence-center', [App\Http\Controllers\BrandZoSecurityIntelligenceController::class, 'index'])->name('security.intelligence-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/security/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityStatus']);
    Route::get('api/v1/security/threats', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityThreats']);
    Route::post('api/v1/security/respond', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityRespond']);
    Route::get('api/v1/security/compliance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityCompliance']);
    
    Route::get('mobile-api/v1/security/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityStatus']);
});

// Phase 88 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('workforce/command-center', [App\Http\Controllers\BrandZoAiWorkforceController::class, 'index'])->name('workforce.command-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/workforce/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkforceStatus']);
    Route::post('api/v1/workforce/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkforceCreate']);
    Route::get('api/v1/workforce/performance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkforcePerformance']);
    Route::post('api/v1/workforce/train', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkforceTrain']);
    
    Route::get('mobile-api/v1/workforce/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkforceStatus']);
});

// Phase 89 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('intelligence/global-network', [App\Http\Controllers\BrandZoGlobalIntelligenceController::class, 'index'])->name('intelligence.global-network');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/network/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiNetworkStatus']);
    Route::get('api/v1/network/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiNetworkOpportunities']);
    Route::get('api/v1/network/partners', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiNetworkPartners']);
    Route::get('api/v1/network/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiNetworkInsights']);
    
    Route::get('mobile-api/v1/network/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiNetworkStatus']);
});

// Phase 90 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('dashboard/enterprise-os', [App\Http\Controllers\BrandZoEnterpriseOsController::class, 'index'])->name('dashboard.enterprise-os');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/enterprise-os/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseOsStatus']);
    Route::get('api/v1/enterprise-os/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseOsInsights']);
    Route::get('api/v1/enterprise-os/decisions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseOsDecisions']);
    Route::post('api/v1/enterprise-os/approve', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseOsApprove']);
    
    Route::get('mobile-api/v1/enterprise-os/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseOsStatus']);
});

// Phase 91 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('customer/growth-center', [App\Http\Controllers\BrandZoCustomerGrowthController::class, 'index'])->name('customer.growth-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/customer/growth/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerGrowthStatus']);
    Route::get('api/v1/customer/sales/pipeline', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSalesPipeline']);
    Route::get('api/v1/customer/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerHealth']);
    Route::post('api/v1/customer/upgrade', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerUpgrade']);
    
    Route::get('mobile-api/v1/customer/growth/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerGrowthStatus']);
});

// Phase 92 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('marketplace/ecosystem', [App\Http\Controllers\BrandZoMarketplaceEcosystemController::class, 'index'])->name('marketplace.ecosystem');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/marketplace/apps', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketplaceApps']);
    Route::post('api/v1/marketplace/publish', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketplacePublish']);
    Route::get('api/v1/partners/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersStatus']);
    Route::get('api/v1/community/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCommunityInsights']);
    Route::post('api/v1/developer/submit', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperSubmit']);
    
    Route::get('mobile-api/v1/marketplace/apps', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketplaceApps']);
    Route::get('mobile-api/v1/marketplace/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketplaceApps']);
});

// Phase 93 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('economy/ai-business', [App\Http\Controllers\BrandZoAiEconomyController::class, 'index'])->name('economy.ai-business');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/economy/revenue', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEconomyRevenue']);
    Route::get('api/v1/economy/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEconomyOpportunities']);
    Route::post('api/v1/economy/deals/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEconomyDealsCreate']);
    Route::get('api/v1/economy/finance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEconomyFinance']);
    
    Route::get('mobile-api/v1/economy/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEconomyRevenue']);
});

// Phase 94 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('digital-twin/universe', [App\Http\Controllers\BrandZoDigitalTwinController::class, 'index'])->name('digital-twin.universe');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/digital-twin/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDigitalTwinStatus']);
    Route::get('api/v1/digital-twin/simulations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDigitalTwinSimulations']);
    Route::post('api/v1/digital-twin/simulate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDigitalTwinSimulate']);
    Route::get('api/v1/digital-twin/decisions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDigitalTwinDecisions']);
    
    Route::get('mobile-api/v1/digital-twin/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDigitalTwinStatus']);
});

// Phase 95 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('finance/intelligence-center', [App\Http\Controllers\BrandZoFinanceIntelligenceController::class, 'index'])->name('finance.intelligence-center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/finance/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiFinanceStatus']);
    Route::get('api/v1/finance/forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiFinanceForecast']);
    Route::get('api/v1/finance/risk', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiFinanceRisk']);
    Route::post('api/v1/finance/simulate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiFinanceSimulate']);
    
    Route::get('mobile-api/v1/finance/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiFinanceStatus']);
});

// Phase 96 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('company/autonomous-builder', [App\Http\Controllers\BrandZoCompanyBuilderController::class, 'index'])->name('company.autonomous-builder');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/company/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCompanyStatus']);
    Route::post('api/v1/company/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCompanyCreate']);
    Route::get('api/v1/company/growth-plan', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCompanyGrowthPlan']);
    Route::post('api/v1/company/simulate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCompanySimulate']);
    
    Route::get('mobile-api/v1/company/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCompanyStatus']);
});

// Phase 97 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('knowledge/brain', [App\Http\Controllers\BrandZoKnowledgeBrainController::class, 'index'])->name('knowledge.brain');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/knowledge/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeStatus']);
    Route::post('api/v1/knowledge/train', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeTrain']);
    Route::get('api/v1/knowledge/search', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeSearch']);
    Route::get('api/v1/knowledge/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeInsights']);
    Route::post('api/v1/knowledge/upload', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeUpload']);
    
    Route::get('mobile-api/v1/knowledge/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeStatus']);
});

// Phase 98 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('collaboration/universe', [App\Http\Controllers\BrandZoCollaborationController::class, 'index'])->name('collaboration.universe');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/collaboration/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationStatus']);
    Route::post('api/v1/collaboration/workspace/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationWorkspaceCreate']);
    Route::get('api/v1/collaboration/projects', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationProjects']);
    Route::post('api/v1/collaboration/task/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationTaskCreate']);
    Route::get('api/v1/collaboration/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationInsights']);
    
    Route::get('mobile-api/v1/collaboration/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationStatus']);
});

// Phase 99 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('intelligence/universal', [App\Http\Controllers\BrandZoUniversalIntelligenceController::class, 'index'])->name('intelligence.universal');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntelligenceStatus']);
    Route::get('api/v1/intelligence/decisions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntelligenceDecisions']);
    Route::post('api/v1/intelligence/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntelligenceExecute']);
    Route::get('api/v1/intelligence/recommendations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntelligenceRecommendations']);
    
    Route::get('mobile-api/v1/intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntelligenceStatus']);
});

// Phase 100 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('singularity/command-center', [App\Http\Controllers\BrandZoSingularityController::class, 'index'])->name('singularity.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/singularity/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSingularityStatus']);
    Route::get('api/v1/singularity/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSingularityHealth']);
    Route::get('api/v1/singularity/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSingularityInsights']);
    Route::post('api/v1/singularity/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSingularityExecute']);
    
    Route::get('mobile-api/v1/singularity/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSingularityStatus']);
});

// Phase 101 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('production/commercialization', [App\Http\Controllers\BrandZoProductionCommercializationController::class, 'index'])->name('production.commercialization');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/production/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionStatus']);
    Route::get('api/v1/production/infrastructure', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionInfrastructure']);
    Route::post('api/v1/production/onboard-tenant', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionOnboardTenant']);
    Route::post('api/v1/production/ai-dispatch', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionAiDispatch']);
    Route::post('api/v1/production/billing/checkout', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionBillingCheckout']);
    
    Route::get('mobile-api/v1/production/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionStatus']);
});

// Phase 102 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('market-launch/command-center', [App\Http\Controllers\BrandZoMarketLaunchController::class, 'index'])->name('launch.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/launch/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLaunchStatus']);
    Route::get('api/v1/launch/leads', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLaunchLeads']);
    Route::post('api/v1/launch/campaign/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLaunchCampaignCreate']);
    Route::get('api/v1/launch/customers', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLaunchCustomers']);
    Route::get('api/v1/launch/revenue', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLaunchRevenue']);
    
    Route::get('mobile-api/v1/launch/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLaunchStatus']);
});

// Phase 103 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('global-expansion/command-center', [App\Http\Controllers\BrandZoGlobalExpansionController::class, 'index'])->name('expansion.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/expansion/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionStatus']);
    Route::get('api/v1/expansion/regions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionRegions']);
    Route::post('api/v1/expansion/deploy-region', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionDeployRegion']);
    Route::get('api/v1/expansion/investor-metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionInvestorMetrics']);
    Route::get('api/v1/expansion/accounts', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionAccounts']);
    
    Route::get('mobile-api/v1/expansion/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiExpansionStatus']);
});

// Phase 104 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('platform/ecosystem-center', [App\Http\Controllers\BrandZoPlatformEcosystemController::class, 'index'])->name('platform.ecosystem_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/platform/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformEcosystemStatus']);
    Route::get('api/v1/platform/marketplace-apps', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformMarketplaceApps']);
    Route::post('api/v1/platform/publish-app', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformPublishApp']);
    Route::get('api/v1/platform/developers', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformDevelopers']);
    Route::get('api/v1/platform/revenue', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformRevenue']);
    
    Route::get('mobile-api/v1/platform/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPlatformEcosystemStatus']);
});

// Phase 105 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-platform/command-center', [App\Http\Controllers\BrandZoEnterpriseAiPlatformController::class, 'index'])->name('ai_platform.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/ai-platform/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiStatus']);
    Route::get('api/v1/ai-platform/models', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiModels']);
    Route::post('api/v1/ai-platform/create-agent', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiCreateAgent']);
    Route::get('api/v1/ai-platform/memory-clusters', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiMemoryClusters']);
    Route::get('api/v1/ai-platform/compute-resources', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiComputeResources']);
    
    Route::get('mobile-api/v1/ai-platform/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiStatus']);
});

// Phase 106 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ai-workforce/command-center', [App\Http\Controllers\BrandZoAutonomousAiWorkforceController::class, 'index'])->name('ai_workforce.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/ai-workforce/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiWorkforceStatus']);
    Route::get('api/v1/ai-workforce/employees', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiWorkforceEmployees']);
    Route::post('api/v1/ai-workforce/hire-employee', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiWorkforceHireEmployee']);
    Route::get('api/v1/ai-workforce/academy-courses', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiWorkforceAcademyCourses']);
    Route::get('api/v1/ai-workforce/productivity-metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiWorkforceProductivityMetrics']);
    
    Route::get('mobile-api/v1/ai-workforce/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiWorkforceStatus']);
});

// Phase 107 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('autonomous-operations/command-center', [App\Http\Controllers\BrandZoAutonomousOperationsController::class, 'index'])->name('autonomous_operations.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/autonomous-operations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousOperationsStatus']);
    Route::get('api/v1/autonomous-operations/processes', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousOperationsProcesses']);
    Route::post('api/v1/autonomous-operations/execute-task', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousOperationsExecuteTask']);
    Route::get('api/v1/autonomous-operations/automated-decisions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousOperationsAutomatedDecisions']);
    Route::get('api/v1/autonomous-operations/predictions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousOperationsPredictions']);
    
    Route::get('mobile-api/v1/autonomous-operations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousOperationsStatus']);
});

// Phase 108 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('autonomous-growth/command-center', [App\Http\Controllers\BrandZoAutonomousGrowthController::class, 'index'])->name('autonomous_growth.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/autonomous-growth/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousGrowthStatus']);
    Route::get('api/v1/autonomous-growth/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousGrowthOpportunities']);
    Route::post('api/v1/autonomous-growth/create-strategy', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousGrowthCreateStrategy']);
    Route::get('api/v1/autonomous-growth/customer-expansions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousGrowthCustomerExpansions']);
    Route::get('api/v1/autonomous-growth/revenue-optimizations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousGrowthRevenueOptimizations']);
    
    Route::get('mobile-api/v1/autonomous-growth/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutonomousGrowthStatus']);
});

// Phase 109 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ceo-intelligence/command-center', [App\Http\Controllers\BrandZoAiCeoIntelligenceController::class, 'index'])->name('ceo_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/ceo-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiCeoIntelligenceStatus']);
    Route::get('api/v1/ceo-intelligence/daily-briefing', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiCeoIntelligenceDailyBriefing']);
    Route::post('api/v1/ceo-intelligence/execute-strategy', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiCeoIntelligenceExecuteStrategy']);
    Route::get('api/v1/ceo-intelligence/board-metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiCeoIntelligenceBoardMetrics']);
    Route::get('api/v1/ceo-intelligence/strategy-plans', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiCeoIntelligenceStrategyPlans']);
    
    Route::get('mobile-api/v1/ceo-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAiCeoIntelligenceStatus']);
});

// Phase 110 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('investor-intelligence/command-center', [App\Http\Controllers\BrandZoInvestorIntelligenceController::class, 'index'])->name('investor_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/investor/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiInvestorStatus']);
    Route::get('api/v1/investor/funding-opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiInvestorFundingOpportunities']);
    Route::get('api/v1/investor/valuation', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiInvestorValuation']);
    Route::post('api/v1/investor/create-strategy', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiInvestorCreateStrategy']);
    Route::get('api/v1/investor/relations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiInvestorRelations']);
    
    Route::get('mobile-api/v1/investor/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiInvestorStatus']);
});

// Phase 111 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('customer-success/command-center', [App\Http\Controllers\BrandZoCustomerSuccessController::class, 'index'])->name('customer_success.command_center');
});

Route::get('customer/experience-center', [App\Http\Controllers\BrandZoCustomerExperienceController::class, 'index'])->name('customer.experience_center');

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/customer-success/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessStatus']);
    Route::get('api/v1/customer-success/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessHealth']);
    Route::post('api/v1/customer-success/predict-churn', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessPredictChurn']);
    Route::get('api/v1/customer-success/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessOpportunities']);
    Route::post('api/v1/support/ai-response', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupportAiResponse']);
    
    Route::get('mobile-api/v1/customer/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCustomerStatus']);
});

// Phase 112 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('partner-ecosystem/command-center', [App\Http\Controllers\BrandZoPartnerEcosystemController::class, 'index'])->name('partner_ecosystem.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/partners/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersStatus']);
    Route::get('api/v1/partners/network', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersNetwork']);
    Route::post('api/v1/partners/register', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersRegister']);
    Route::get('api/v1/partners/revenue', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersRevenue']);
    Route::post('api/v1/partners/deal/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersDealCreate']);
    
    Route::get('mobile-api/v1/partners/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobilePartnersStatus']);
});

// Phase 113 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('market-intelligence/command-center', [App\Http\Controllers\BrandZoMarketIntelligenceController::class, 'index'])->name('market_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/market-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketIntelligenceStatus']);
    Route::get('api/v1/market-intelligence/trends', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketIntelligenceTrends']);
    Route::post('api/v1/market-intelligence/competitors/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketIntelligenceCompetitorsAnalyze']);
    Route::get('api/v1/market-intelligence/benchmarks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketIntelligenceBenchmarks']);
    Route::post('api/v1/market-intelligence/war-room/simulate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketIntelligenceWarRoomSimulate']);
    
    Route::get('mobile-api/v1/market-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileMarketIntelligenceStatus']);
});

// Phase 114 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('product-innovation/command-center', [App\Http\Controllers\BrandZoProductInnovationController::class, 'index'])->name('product_innovation.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/product-innovation/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductInnovationStatus']);
    Route::get('api/v1/product-innovation/roadmap', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductInnovationRoadmap']);
    Route::post('api/v1/product-innovation/features/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductInnovationFeaturesGenerate']);
    Route::get('api/v1/product-innovation/patents', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductInnovationPatents']);
    Route::post('api/v1/product-innovation/rnd/simulate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductInnovationRndSimulate']);
    
    Route::get('mobile-api/v1/product-innovation/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileProductInnovationStatus']);
});

// Phase 115 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('automation-marketplace/command-center', [App\Http\Controllers\BrandZoAutomationMarketplaceController::class, 'index'])->name('automation_marketplace.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/automation-marketplace/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutomationMarketplaceStatus']);
    Route::get('api/v1/automation-marketplace/templates', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutomationMarketplaceTemplates']);
    Route::post('api/v1/automation-marketplace/workflows/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutomationMarketplaceWorkflowsExecute']);
    Route::get('api/v1/automation-marketplace/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutomationMarketplaceAnalytics']);
    Route::post('api/v1/automation-marketplace/publish', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAutomationMarketplacePublish']);
    
    Route::get('mobile-api/v1/automation-marketplace/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileAutomationMarketplaceStatus']);
});

// Phase 116 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('data-intelligence/command-center', [App\Http\Controllers\BrandZoDataIntelligenceController::class, 'index'])->name('data_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/data-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataIntelligenceStatus']);
    Route::get('api/v1/data-intelligence/data-lake', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataIntelligenceDataLake']);
    Route::get('api/v1/data-intelligence/knowledge-graph', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataIntelligenceKnowledgeGraph']);
    Route::post('api/v1/data-intelligence/predict', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataIntelligencePredict']);
    Route::post('api/v1/data-intelligence/reports/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataIntelligenceReportsGenerate']);
    
    Route::get('mobile-api/v1/data-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileDataIntelligenceStatus']);
});

// Phase 117 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('cfo-intelligence/command-center', [App\Http\Controllers\BrandZoCfoIntelligenceController::class, 'index'])->name('cfo_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/cfo-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCfoIntelligenceStatus']);
    Route::get('api/v1/cfo-intelligence/briefing', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCfoIntelligenceBriefing']);
    Route::post('api/v1/cfo-intelligence/accounting/reconcile', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCfoIntelligenceAccountingReconcile']);
    Route::get('api/v1/cfo-intelligence/profitability', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCfoIntelligenceProfitability']);
    Route::post('api/v1/cfo-intelligence/reports/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCfoIntelligenceReportsGenerate']);
    
    Route::get('mobile-api/v1/cfo-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCfoIntelligenceStatus']);
});

// Phase 118 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('legal-compliance/command-center', [App\Http\Controllers\BrandZoLegalComplianceController::class, 'index'])->name('legal_compliance.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/legal-compliance/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLegalComplianceStatus']);
    Route::get('api/v1/legal-compliance/contracts', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLegalComplianceContracts']);
    Route::post('api/v1/legal-compliance/contracts/review', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLegalComplianceContractsReview']);
    Route::get('api/v1/legal-compliance/compliance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLegalComplianceCompliance']);
    Route::post('api/v1/legal-compliance/audit/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLegalComplianceAuditGenerate']);
    
    Route::get('mobile-api/v1/legal-compliance/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileLegalComplianceStatus']);
});

// Phase 119 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('hr-intelligence/command-center', [App\Http\Controllers\BrandZoHrIntelligenceController::class, 'index'])->name('hr_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/hr-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrIntelligenceStatus']);
    Route::get('api/v1/hr-intelligence/workforce', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrIntelligenceWorkforce']);
    Route::post('api/v1/hr-intelligence/recruitment/screen', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrIntelligenceRecruitmentScreen']);
    Route::get('api/v1/hr-intelligence/experience', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrIntelligenceExperience']);
    Route::post('api/v1/hr-intelligence/predict', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrIntelligencePredict']);
    
    Route::get('mobile-api/v1/hr-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileHrIntelligenceStatus']);
});

// Phase 120 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('security-intelligence/command-center', [App\Http\Controllers\BrandZoSecurityIntelligenceController::class, 'index'])->name('security_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/security-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityIntelligenceStatus']);
    Route::get('api/v1/security-intelligence/threats', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityIntelligenceThreats']);
    Route::post('api/v1/security-intelligence/incidents/respond', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityIntelligenceIncidentsRespond']);
    Route::get('api/v1/security-intelligence/identity', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityIntelligenceIdentity']);
    Route::post('api/v1/security-intelligence/dataprotection/scan', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityIntelligenceDataprotectionScan']);
    
    Route::get('mobile-api/v1/security-intelligence/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileSecurityIntelligenceStatus']);
});

// Phase 121 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('devops-intelligence/command-center', [App\Http\Controllers\BrandZoDevOpsIntelligenceController::class, 'index'])->name('devops_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/devops/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDevOpsStatus']);
    Route::get('api/v1/devops/infrastructure', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDevOpsInfrastructure']);
    Route::get('api/v1/devops/deployments', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDevOpsDeployments']);
    Route::post('api/v1/devops/deploy', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDevOpsDeploy']);
    Route::get('api/v1/devops/reliability', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDevOpsReliability']);
    
    Route::get('mobile-api/v1/devops/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileDevOpsStatus']);
});

// Phase 122 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('supply-chain-intelligence/command-center', [App\Http\Controllers\BrandZoSupplyChainController::class, 'index'])->name('supply_chain.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/supply-chain/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupplyChainStatus']);
    Route::get('api/v1/supply-chain/suppliers', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupplyChainSuppliers']);
    Route::get('api/v1/supply-chain/inventory', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupplyChainInventory']);
    Route::post('api/v1/supply-chain/purchase/recommend', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupplyChainPurchaseRecommend']);
    Route::get('api/v1/supply-chain/forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupplyChainForecast']);
    
    Route::get('mobile-api/v1/supply-chain/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileSupplyChainStatus']);
});

// Phase 123 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('manufacturing-intelligence/command-center', [App\Http\Controllers\BrandZoManufacturingIntelligenceController::class, 'index'])->name('manufacturing_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/manufacturing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiManufacturingStatus']);
    Route::get('api/v1/manufacturing/production', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiManufacturingProduction']);
    Route::get('api/v1/manufacturing/quality', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiManufacturingQuality']);
    Route::post('api/v1/manufacturing/optimize', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiManufacturingOptimize']);
    Route::get('api/v1/manufacturing/predictions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiManufacturingPredictions']);
    
    Route::get('mobile-api/v1/manufacturing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileManufacturingStatus']);
});

// Phase 124 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('logistics-intelligence/command-center', [App\Http\Controllers\BrandZoLogisticsIntelligenceController::class, 'index'])->name('logistics_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/logistics/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLogisticsStatus']);
    Route::get('api/v1/logistics/fleet', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLogisticsFleet']);
    Route::get('api/v1/logistics/routes', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLogisticsRoutes']);
    Route::post('api/v1/logistics/optimize', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLogisticsOptimize']);
    Route::get('api/v1/logistics/delivery-predictions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLogisticsDeliveryPredictions']);
    
    Route::get('mobile-api/v1/logistics/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileLogisticsStatus']);
});

// Phase 125 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('commerce-marketplace/command-center', [App\Http\Controllers\BrandZoCommerceMarketplaceController::class, 'index'])->name('commerce_marketplace.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/commerce/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCommerceStatus']);
    Route::get('api/v1/commerce/products', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCommerceProducts']);
    Route::get('api/v1/commerce/sellers', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCommerceSellers']);
    Route::post('api/v1/commerce/recommendations/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCommerceRecommendationsGenerate']);
    Route::get('api/v1/commerce/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCommerceAnalytics']);
    
    Route::get('mobile-api/v1/commerce/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCommerceStatus']);
});

// Phase 126 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('payment-intelligence/command-center', [App\Http\Controllers\BrandZoPaymentIntelligenceController::class, 'index'])->name('payment_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/payment/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPaymentStatus']);
    Route::get('api/v1/payment/transactions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPaymentTransactions']);
    Route::get('api/v1/payment/fraud-analysis', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPaymentFraudAnalysis']);
    Route::post('api/v1/payment/risk/check', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPaymentRiskCheck']);
    Route::get('api/v1/payment/wallets', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPaymentWallets']);
    
    Route::get('mobile-api/v1/payment/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobilePaymentStatus']);
});

// Phase 127 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('treasury-intelligence/command-center', [App\Http\Controllers\BrandZoTreasuryIntelligenceController::class, 'index'])->name('treasury_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/treasury/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTreasuryStatus']);
    Route::get('api/v1/treasury/cash-flow', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTreasuryCashFlow']);
    Route::get('api/v1/treasury/banks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTreasuryBanks']);
    Route::post('api/v1/treasury/reconcile', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTreasuryReconcile']);
    Route::get('api/v1/treasury/budget-analysis', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTreasuryBudgetAnalysis']);
    
    Route::get('mobile-api/v1/treasury/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileTreasuryStatus']);
});

// Phase 128 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('revenue-intelligence/command-center', [App\Http\Controllers\BrandZoRevenueIntelligenceController::class, 'index'])->name('revenue_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/revenue/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRevenueStatus']);
    Route::get('api/v1/revenue/pipeline', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRevenuePipeline']);
    Route::get('api/v1/revenue/customers', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRevenueCustomers']);
    Route::post('api/v1/revenue/lead-score', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRevenueLeadScore']);
    Route::post('api/v1/revenue/forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRevenueForecastPost']);
    
    Route::get('mobile-api/v1/revenue/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileRevenueStatus']);
});

// Phase 129 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('marketing-intelligence/command-center', [App\Http\Controllers\BrandZoMarketingIntelligenceController::class, 'index'])->name('marketing_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/marketing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingStatus']);
    Route::get('api/v1/marketing/campaigns', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingCampaigns']);
    Route::get('api/v1/marketing/channels', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingChannels']);
    Route::post('api/v1/marketing/campaign/optimize', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingCampaignOptimize']);
    Route::post('api/v1/marketing/content/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingContentGenerate']);
    
    Route::get('mobile-api/v1/marketing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileMarketingStatus']);
});

// Phase 130 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('customer-experience/command-center', [App\Http\Controllers\BrandZoCustomerExperienceController::class, 'index'])->name('customer_experience.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/customer-experience/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerExperienceStatus']);
    Route::get('api/v1/customer-experience/tickets', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerExperienceTickets']);
    Route::post('api/v1/customer-experience/chat', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerExperienceChatPost']);
    Route::post('api/v1/customer-experience/ticket/resolve', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerExperienceTicketResolvePost']);
    Route::get('api/v1/customer-experience/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerExperienceHealth']);
    
    Route::get('mobile-api/v1/customer-experience/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCustomerExperienceStatus']);
});

// Phase 131 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('knowledge-intelligence/command-center', [App\Http\Controllers\BrandZoKnowledgeIntelligenceController::class, 'index'])->name('knowledge_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/knowledge/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeStatus']);
    Route::get('api/v1/knowledge/documents', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeDocuments']);
    Route::post('api/v1/knowledge/search', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeSearchPost']);
    Route::post('api/v1/knowledge/summarize', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeSummarizePost']);
    Route::get('api/v1/knowledge/learning', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiKnowledgeLearning']);
    
    Route::get('mobile-api/v1/knowledge/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileKnowledgeStatus']);
});

// Phase 132 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('collaboration-intelligence/command-center', [App\Http\Controllers\BrandZoCollaborationIntelligenceController::class, 'index'])->name('collaboration_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/collaboration/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationStatus']);
    Route::get('api/v1/collaboration/messages', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationMessages']);
    Route::post('api/v1/collaboration/summarize', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationSummarizePost']);
    Route::post('api/v1/collaboration/meeting/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationMeetingAnalyzePost']);
    Route::get('api/v1/collaboration/productivity', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCollaborationProductivity']);
    
    Route::get('mobile-api/v1/collaboration/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCollaborationStatus']);
});

// Phase 133 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('project-intelligence/command-center', [App\Http\Controllers\BrandZoProjectIntelligenceController::class, 'index'])->name('project_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/projects/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProjectsStatus']);
    Route::get('api/v1/projects/tasks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProjectsTasks']);
    Route::post('api/v1/projects/task/assign', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProjectsTaskAssignPost']);
    Route::post('api/v1/projects/risk/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProjectsRiskAnalyzePost']);
    Route::get('api/v1/projects/resources', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProjectsResources']);
    
    Route::get('mobile-api/v1/projects/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileProjectsStatus']);
});

// Phase 134 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('workflow-intelligence/command-center', [App\Http\Controllers\BrandZoWorkflowIntelligenceController::class, 'index'])->name('workflow_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/workflows/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsStatus134']);
    Route::get('api/v1/workflows/list', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsList134']);
    Route::post('api/v1/workflows/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsCreatePost134']);
    Route::post('api/v1/workflows/execute', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsExecutePost134']);
    Route::get('api/v1/workflows/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiWorkflowsAnalytics134']);
    
    Route::get('mobile-api/v1/workflows/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileWorkflowsStatus134']);
});

// Phase 135 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('analytics-intelligence/command-center', [App\Http\Controllers\BrandZoAnalyticsIntelligenceController::class, 'index'])->name('analytics_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/analytics/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsStatus135']);
    Route::get('api/v1/analytics/kpis', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsKpis135']);
    Route::post('api/v1/analytics/predict', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsPredictPost135']);
    Route::post('api/v1/analytics/report/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsReportGeneratePost135']);
    Route::get('api/v1/analytics/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAnalyticsDashboard135']);
    
    Route::get('mobile-api/v1/analytics/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileAnalyticsStatus135']);
});

// Phase 136 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('data-intelligence/command-center', [App\Http\Controllers\BrandZoDataIntelligenceController::class, 'index'])->name('data_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/data/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataStatus136']);
    Route::get('api/v1/data/lake', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataLake136']);
    Route::get('api/v1/data/pipelines', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataPipelines136']);
    Route::post('api/v1/data/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataAnalyzePost136']);
    Route::get('api/v1/data/governance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDataGovernance136']);
    
    Route::get('mobile-api/v1/data/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileDataStatus136']);
});

// Phase 137 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('ceo-intelligence/command-center', [App\Http\Controllers\BrandZoCeoIntelligenceController::class, 'index'])->name('ceo_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/ceo/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCeoStatus137']);
    Route::get('api/v1/ceo/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCeoInsights137']);
    Route::post('api/v1/ceo/simulate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCeoSimulatePost137']);
    Route::get('api/v1/ceo/strategy', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCeoStrategy137']);
    Route::get('api/v1/ceo/recommendations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCeoRecommendations137']);
    
    Route::get('mobile-api/v1/ceo/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCeoStatus137']);
});

// Phase 138 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('global-expansion-intelligence/command-center', [App\Http\Controllers\BrandZoGlobalExpansionController::class, 'index'])->name('global_expansion_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/global/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalStatus138']);
    Route::get('api/v1/global/markets', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalMarkets138']);
    Route::get('api/v1/global/competitors', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalCompetitors138']);
    Route::post('api/v1/global/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalAnalyzePost138']);
    Route::get('api/v1/global/opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalOpportunities138']);
    
    Route::get('mobile-api/v1/global/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileGlobalStatus138']);
});

// Phase 139 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('governance-intelligence/command-center', [App\Http\Controllers\BrandZoGovernanceController::class, 'index'])->name('governance_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/governance/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGovernanceStatus139']);
    Route::get('api/v1/governance/risks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGovernanceRisks139']);
    Route::get('api/v1/governance/audit', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGovernanceAudit139']);
    Route::post('api/v1/governance/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGovernanceAnalyzePost139']);
    Route::get('api/v1/governance/compliance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGovernanceCompliance139']);
    
    Route::get('mobile-api/v1/governance/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileGovernanceStatus139']);
});

// Phase 140 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('enterprise-ai/command-center', [App\Http\Controllers\BrandZoEnterpriseAiController::class, 'index'])->name('enterprise_ai.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/enterprise-ai/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiStatus140']);
    Route::get('api/v1/enterprise-ai/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiHealth140']);
    Route::get('api/v1/enterprise-ai/modules', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiModules140']);
    Route::post('api/v1/enterprise-ai/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiAnalyzePost140']);
    Route::get('api/v1/enterprise-ai/recommendations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiEnterpriseAiRecommendations140']);
    
    Route::get('mobile-api/v1/enterprise-ai/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileEnterpriseAiStatus140']);
});

// Phase 141 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('saas-intelligence/command-center', [App\Http\Controllers\BrandZoSaasAdminController::class, 'index'])->name('saas_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/production/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionStatus141']);
    Route::get('api/v1/security/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityStatus141']);
    Route::get('api/v1/saas/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSaasStatus141']);
    Route::post('api/v1/security/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityAnalyzePost141']);
    
    Route::get('mobile-api/v1/production/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileProductionStatus141']);
});

// Phase 142 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('customer/dashboard', [App\Http\Controllers\BrandZoCustomerPortalController::class, 'index'])->name('customer.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/billing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiBillingStatus142']);
    Route::get('api/v1/subscription/plans', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSubscriptionPlans142']);
    Route::post('api/v1/subscription/upgrade', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSubscriptionUpgradePost142']);
    Route::get('api/v1/customer/usage', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerUsage142']);
    
    Route::get('mobile-api/v1/customer/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCustomerStatus142']);
});

// Phase 143 Routes
Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('sales-intelligence/command-center', [App\Http\Controllers\BrandZoSalesIntelligenceController::class, 'index'])->name('sales_intelligence.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/sales/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesStatus143']);
    Route::get('api/v1/sales/leads', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesLeads143']);
    Route::post('api/v1/sales/lead/score', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesLeadScorePost143']);
    Route::post('api/v1/sales/demo/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesDemoCreatePost143']);
    Route::get('api/v1/sales/conversion', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesConversion143']);
    
    Route::get('mobile-api/v1/sales/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileSalesStatus143']);
});

// Phase 144 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('partner/dashboard', [App\Http\Controllers\BrandZoPartnerPortalController::class, 'index'])->name('partner.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/partners/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersStatus144']);
    Route::post('api/v1/partners/register', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersRegisterPost144']);
    Route::get('api/v1/partners/referrals', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersReferrals144']);
    Route::get('api/v1/partners/commissions', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersCommissions144']);
    Route::post('api/v1/partners/payout/request', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPartnersPayoutRequestPost144']);
    
    Route::get('mobile-api/v1/partners/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobilePartnersStatus144']);
});

// Phase 145 Routes
Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('mobile-api/v1/app/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileAppStatus145']);
    Route::post('mobile-api/v1/device/register', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileDeviceRegisterPost145']);
    Route::get('mobile-api/v1/user/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileUserDashboard145']);
    Route::get('mobile-api/v1/employee/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileEmployeeDashboard145']);
    Route::get('mobile-api/v1/customer/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobileCustomerDashboard145']);
    Route::get('mobile-api/v1/partner/dashboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'mobilePartnerDashboard145']);
});

// Phase 146 Routes
Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('/solutions', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'solutions');
    Route::get('/industries', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'industries');
    Route::get('/pricing', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'pricing');
    Route::get('/features', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'features');
    Route::get('/customers', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'customers');
    Route::get('/partners', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'partners');
    Route::get('/developers', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'developers');
    Route::get('/documentation', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'documentation');
    Route::get('/blog', [App\Http\Controllers\BrandZoPublicWebsiteController::class, 'page'])->defaults('pageName', 'blog');

    Route::get('api/v1/public/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiPublicStatus146']);
    Route::get('api/v1/documentation/search', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDocumentationSearch146']);
    Route::get('api/v1/seo/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSeoStatus146']);
    Route::post('api/v1/content/generate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiContentGeneratePost146']);
});

// Phase 147 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/integration-intelligence/command-center', [App\Http\Controllers\BrandZoIntegrationController::class, 'index'])->name('integration.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/integrations/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsStatus147']);
    Route::get('api/v1/integrations/list', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsList147']);
    Route::post('api/v1/integrations/connect', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiIntegrationsConnectPost147']);
    Route::get('api/v1/api-gateway/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGatewayStatus147']);
    Route::get('api/v1/developers/apps', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDevelopersApps147']);
});

// Phase 148 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/support-intelligence/command-center', [App\Http\Controllers\BrandZoSupportMarketplaceController::class, 'index'])->name('support.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/support/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupportStatus148']);
    Route::get('api/v1/support/tickets', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupportTickets148']);
    Route::post('api/v1/support/chat', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupportChatPost148']);
    Route::post('api/v1/support/ticket/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupportTicketCreatePost148']);
    Route::get('api/v1/support/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSupportAnalytics148']);
});

// Phase 149 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/training-intelligence/command-center', [App\Http\Controllers\BrandZoTrainingAcademyController::class, 'index'])->name('training.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/training/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTrainingStatus149']);
    Route::get('api/v1/training/courses', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTrainingCourses149']);
    Route::post('api/v1/training/enroll', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiTrainingEnrollPost149']);
    Route::get('api/v1/certifications/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCertificationsStatus149']);
    Route::post('api/v1/learning/assessment', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLearningAssessmentPost149']);
});

// Phase 150 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/global-launch/command-center', [App\Http\Controllers\BrandZoGlobalLaunchController::class, 'index'])->name('global_launch.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/global-launch/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalLaunchStatus150']);
    Route::get('api/v1/global-launch/markets', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalLaunchMarkets150']);
    Route::get('api/v1/global-launch/revenue', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalLaunchRevenue150']);
    Route::post('api/v1/global-launch/analyze', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalLaunchAnalyzePost150']);
    Route::get('api/v1/global-launch/brand-score', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiGlobalLaunchBrandScore150']);
});

// Phase 151 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/production-deployment/monitoring-dashboard', [App\Http\Controllers\BrandZoProductionDeploymentController::class, 'index'])->name('production.monitoring_dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/production/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionStatus151']);
    Route::get('api/v1/production/health', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionHealth151']);
    Route::post('api/v1/production/onboard-customer', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionOnboardCustomerPost151']);
    Route::post('api/v1/production/start-trial', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionStartTrialPost151']);
    Route::get('api/v1/production/qa-audit', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionQaAudit151']);
});

// Phase 152 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/customer-acquisition/dashboard', [App\Http\Controllers\BrandZoCustomerAcquisitionController::class, 'index'])->name('customer_acquisition.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/acquisition/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAcquisitionStatus152']);
    Route::get('api/v1/acquisition/prospects', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAcquisitionProspects152']);
    Route::post('api/v1/acquisition/lead-capture', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAcquisitionLeadCapturePost152']);
    Route::post('api/v1/acquisition/demo-convert', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAcquisitionDemoConvertPost152']);
    Route::get('api/v1/acquisition/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAcquisitionAnalytics152']);
});

// Phase 153 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/marketing-automation/campaign-roi-dashboard', [App\Http\Controllers\BrandZoMarketingAutomationController::class, 'index'])->name('marketing_automation.campaign_roi_dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/marketing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingStatus153']);
    Route::get('api/v1/marketing/campaigns', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingCampaigns153']);
    Route::post('api/v1/marketing/launch-campaign', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingLaunchCampaignPost153']);
    Route::get('api/v1/marketing/attribution', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingAttribution153']);
    Route::get('api/v1/marketing/revenue-forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMarketingRevenueForecast153']);
});

// Phase 154 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/sales-copilot/command-center', [App\Http\Controllers\BrandZoSalesCopilotController::class, 'index'])->name('sales_copilot.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/sales-copilot/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesCopilotStatus154']);
    Route::get('api/v1/sales-copilot/deals', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesCopilotDeals154']);
    Route::post('api/v1/sales-copilot/generate-proposal', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesCopilotGenerateProposalPost154']);
    Route::post('api/v1/sales-copilot/analyze-call', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesCopilotAnalyzeCallPost154']);
    Route::get('api/v1/sales-copilot/performance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSalesCopilotPerformance154']);
});

// Phase 155 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/customer-success/command-center', [App\Http\Controllers\BrandZoCustomerSuccessController::class, 'index'])->name('customer_success.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/customer-success/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessStatus155']);
    Route::get('api/v1/customer-success/health-scores', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessHealthScores155']);
    Route::post('api/v1/customer-success/predict-churn', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessPredictChurnPost155']);
    Route::get('api/v1/customer-success/renewals', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessRenewals155']);
    Route::get('api/v1/customer-success/expansion-opportunities', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCustomerSuccessExpansionOpportunities155']);
});

// Phase 156 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/cloud-infrastructure/command-center', [App\Http\Controllers\BrandZoCloudInfrastructureController::class, 'index'])->name('cloud_infrastructure.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/cloud-infrastructure/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCloudStatus156']);
    Route::get('api/v1/cloud-infrastructure/nodes', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCloudNodes156']);
    Route::post('api/v1/cloud-infrastructure/auto-scale', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCloudAutoScalePost156']);
    Route::post('api/v1/cloud-infrastructure/failover-test', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCloudFailoverTestPost156']);
    Route::get('api/v1/cloud-infrastructure/cost-optimization', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCloudCostOptimization156']);
});

// Phase 157 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/mobile-release/command-center', [App\Http\Controllers\BrandZoMobileReleaseController::class, 'index'])->name('mobile_release.command_center');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/mobile-release/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMobileReleaseStatus157']);
    Route::get('api/v1/mobile-release/builds', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMobileReleaseBuilds157']);
    Route::post('api/v1/mobile-release/trigger-build', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMobileReleaseTriggerBuildPost157']);
    Route::post('api/v1/mobile-release/send-push', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMobileReleaseSendPushPost157']);
    Route::get('api/v1/mobile-release/crash-analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiMobileReleaseCrashAnalytics157']);
});

// Phase 158 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/developer-ecosystem/analytics-dashboard', [App\Http\Controllers\BrandZoDeveloperEcosystemController::class, 'index'])->name('developer_ecosystem.analytics_dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/developer-ecosystem/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperStatus158']);
    Route::get('api/v1/developer-ecosystem/sdks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperSdks158']);
    Route::post('api/v1/developer-ecosystem/generate-sdk', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperGenerateSdkPost158']);
    Route::post('api/v1/developer-ecosystem/submit-app', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperSubmitAppPost158']);
    Route::get('api/v1/developer-ecosystem/developer-analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiDeveloperAnalytics158']);
});

// Phase 159 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/ai-agent-marketplace/analytics-dashboard', [App\Http\Controllers\BrandZoAiAgentMarketplaceController::class, 'index'])->name('ai_agent_marketplace.analytics_dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/agent-marketplace/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentStatus159']);
    Route::get('api/v1/agent-marketplace/agents', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentCatalog159']);
    Route::post('api/v1/agent-marketplace/build-agent', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentBuildPost159']);
    Route::post('api/v1/agent-marketplace/deploy-agent', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentDeployPost159']);
    Route::get('api/v1/agent-marketplace/workforce-analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiAgentWorkforceAnalytics159']);
});

// Phase 160 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/ceo-command-center/dashboard', [App\Http\Controllers\BrandZoCeoCommandCenterController::class, 'index'])->name('ceo_command_center.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/ultimate-fusion/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUltimateStatus160']);
    Route::get('api/v1/ultimate-fusion/brain-metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUltimateBrainMetrics160']);
    Route::post('api/v1/ultimate-fusion/trigger-ai-decision', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUltimateTriggerAiDecisionPost160']);
    Route::post('api/v1/ultimate-fusion/run-certification', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUltimateRunCertificationPost160']);
    Route::get('api/v1/ultimate-fusion/ceo-intelligence', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUltimateCeoIntelligence160']);
});

// Phase 161 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/local-testing/dashboard', [App\Http\Controllers\BrandZoLocalTestingController::class, 'index'])->name('local_testing.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/local-testing/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLocalTestingStatus161']);
    Route::get('api/v1/local-testing/phase-audit', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLocalTestingPhaseAudit161']);
    Route::post('api/v1/local-testing/run-full-suite', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiLocalTestingRunFullSuitePost161']);
});

// Phase 162 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/uat-dashboard/index', [App\Http\Controllers\BrandZoUatDashboardController::class, 'index'])->name('uat_dashboard.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/uat/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUatStatus162']);
    Route::get('api/v1/uat/test-cases', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUatTestCases162']);
    Route::post('api/v1/uat/execute-workflow-test', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUatExecuteWorkflowTestPost162']);
    Route::get('api/v1/uat/workflow-reports', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiUatWorkflowReports162']);
});

// Phase 163 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/security-audit/dashboard', [App\Http\Controllers\BrandZoSecurityAuditController::class, 'index'])->name('security_audit.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/security-audit/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityStatus163']);
    Route::get('api/v1/security-audit/compliance-checks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityComplianceChecks163']);
    Route::post('api/v1/security-audit/run-vulnerability-scan', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityRunVulnerabilityScanPost163']);
    Route::get('api/v1/security-audit/readiness-checklist', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiSecurityReadinessChecklist163']);
});

// Phase 164 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/real-environment/dashboard', [App\Http\Controllers\BrandZoRealEnvironmentValidationController::class, 'index'])->name('real_environment.dashboard');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/real-environment/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRealEnvironmentStatus164']);
    Route::get('api/v1/real-environment/module-checks', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRealEnvironmentModuleChecks164']);
    Route::post('api/v1/real-environment/verify-system', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiRealEnvironmentVerifySystemPost164']);
});

// Phase 165 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/production-deployment/checklist', [App\Http\Controllers\BrandZoProductionDeploymentController::class, 'index'])->name('production_deployment.checklist');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/production-deployment/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionDeploymentStatus165']);
    Route::get('api/v1/production-deployment/checklist-audit', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionDeploymentChecklistAudit165']);
    Route::post('api/v1/production-deployment/verify-readiness', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiProductionDeploymentVerifyReadinessPost165']);
});

// Phase 166 Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-evolution/index', [App\Http\Controllers\BrandZoCrmEvolutionController::class, 'index'])->name('crm_evolution.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-evolution/leads', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionLeads166']);
    Route::post('api/v1/crm-evolution/leads/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionLeadsCreatePost166']);
    Route::post('api/v1/crm-evolution/leads/convert-to-deal', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionLeadsConvertToDealPost166']);
    Route::get('api/v1/crm-evolution/deals', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionDeals166']);
    Route::post('api/v1/crm-evolution/deals/convert-to-client', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionDealsConvertToClientPost166']);
    Route::get('api/v1/crm-evolution/clients', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionClients166']);
    Route::get('api/v1/crm-evolution/audit-timeline', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmEvolutionAuditTimeline166']);
});

// Module 1 Advanced Follow-up System Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-followups/index', [App\Http\Controllers\BrandZoCrmAdvancedFollowupController::class, 'index'])->name('crm_followups.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-followups/list', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmFollowupsList166']);
    Route::post('api/v1/crm-followups/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmFollowupsCreatePost166']);
    Route::post('api/v1/crm-followups/update', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmFollowupsUpdatePost166']);
    Route::post('api/v1/crm-followups/delete', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmFollowupsDeletePost166']);
    Route::get('api/v1/crm-followups/calendar', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmFollowupsCalendar166']);
    Route::get('api/v1/crm-followups/pending-widget', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmFollowupsPendingWidget166']);
});

// Module 2 Bulk Lead Import Engine Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-lead-import/index', [App\Http\Controllers\BrandZoCrmLeadImportController::class, 'index'])->name('crm_lead_import.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-lead-import/history', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmLeadImportHistory166']);
    Route::post('api/v1/crm-lead-import/upload-csv', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmLeadImportUploadCsvPost166']);
    Route::post('api/v1/crm-lead-import/process-import', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmLeadImportProcessImportPost166']);
    Route::get('api/v1/crm-lead-import/mapping-template', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmLeadImportMappingTemplate166']);
});

// Module 3 Interactive CRM Kanban Pipeline Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-kanban/index', [App\Http\Controllers\BrandZoCrmKanbanPipelineController::class, 'index'])->name('crm_kanban.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-kanban/lead-board', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmKanbanLeadBoard166']);
    Route::get('api/v1/crm-kanban/deal-board', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmKanbanDealBoard166']);
    Route::post('api/v1/crm-kanban/update-stage', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmKanbanUpdateStagePost166']);
    Route::get('api/v1/crm-kanban/pipeline-analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmKanbanPipelineAnalytics166']);
});

// Module 4 Executive Sales Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-sales-dashboard/index', [App\Http\Controllers\BrandZoCrmSalesDashboardController::class, 'index'])->name('crm_sales_dashboard.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-sales-dashboard/overview', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSalesDashboardOverview166']);
    Route::get('api/v1/crm-sales-dashboard/funnel', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSalesDashboardFunnel166']);
    Route::get('api/v1/crm-sales-dashboard/forecast', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSalesDashboardForecast166']);
    Route::get('api/v1/crm-sales-dashboard/leaderboard', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSalesDashboardLeaderboard166']);
    Route::get('api/v1/crm-sales-dashboard/sources', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSalesDashboardSources166']);
});

// Module 5 Client 360 Profile System Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-client-360/index', [App\Http\Controllers\BrandZoCrmClient360ProfileController::class, 'index'])->name('crm_client_360.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-client-360/profile', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmClient360Profile166']);
    Route::get('api/v1/crm-client-360/timeline', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmClient360Timeline166']);
    Route::get('api/v1/crm-client-360/documents', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmClient360Documents166']);
    Route::get('api/v1/crm-client-360/finance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmClient360Finance166']);
    Route::get('api/v1/crm-client-360/communications', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmClient360Communications166']);
});

// Automation Layer Module 1 Automated Lead Routing Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-routing/index', [App\Http\Controllers\BrandZoCrmLeadRoutingController::class, 'index'])->name('crm_routing.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-routing/rules', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmRoutingRules166']);
    Route::post('api/v1/crm-routing/auto-assign', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmRoutingAutoAssignPost166']);
    Route::get('api/v1/crm-routing/history', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmRoutingHistory166']);
    Route::post('api/v1/crm-routing/rules/toggle', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmRoutingRulesTogglePost166']);
});

// Automation Layer Module 2 AI Lead Scoring Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-ai-scoring/index', [App\Http\Controllers\BrandZoCrmAiLeadScoringController::class, 'index'])->name('crm_ai_scoring.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-ai-scoring/score', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmAiScoringScore166']);
    Route::get('api/v1/crm-ai-scoring/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmAiScoringAnalytics166']);
    Route::post('api/v1/crm-ai-scoring/calculate', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmAiScoringCalculatePost166']);
    Route::get('api/v1/crm-ai-scoring/recommendations', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmAiScoringRecommendations166']);
});

// Automation Layer Module 3 Workflow Automation Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-workflows/index', [App\Http\Controllers\BrandZoCrmWorkflowAutomationController::class, 'index'])->name('crm_workflows.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-workflows/rules', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmWorkflowsRules166']);
    Route::post('api/v1/crm-workflows/rules/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmWorkflowsRulesCreatePost166']);
    Route::get('api/v1/crm-workflows/history', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmWorkflowsHistory166']);
    Route::post('api/v1/crm-workflows/execute-trigger', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmWorkflowsExecuteTriggerPost166']);
});

// Automation Layer Module 4 SLA Escalation Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-sla/index', [App\Http\Controllers\BrandZoCrmSlaEscalationController::class, 'index'])->name('crm_sla.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-sla/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSlaStatus166']);
    Route::get('api/v1/crm-sla/history', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSlaHistory166']);
    Route::get('api/v1/crm-sla/performance', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSlaPerformance166']);
    Route::post('api/v1/crm-sla/trigger-check', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmSlaTriggerCheckPost166']);
});

// Automation Layer Module 5 AI Sales Assistant Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/crm-ai-assistant/index', [App\Http\Controllers\BrandZoCrmAiSalesAssistantController::class, 'index'])->name('crm_ai_assistant.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/crm-ai-assistant/insights', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmAiAssistantInsights166']);
    Route::post('api/v1/crm-ai-assistant/generate-reply', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmAiAssistantGenerateReplyPost166']);
    Route::get('api/v1/crm-drip-campaigns/status', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmDripCampaignsStatus166']);
    Route::get('api/v1/crm-drip-campaigns/analytics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiCrmDripCampaignsAnalytics166']);
});

// Phase 167 HRMS Module 1 Employee Management Routes
Route::middleware(['auth'])->group(function () {
    Route::get('account/hrms-employee/index', [App\Http\Controllers\BrandZoHrmsEmployeeController::class, 'index'])->name('hrms_employee.index');
});

Route::withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->group(function () {
    Route::get('api/v1/hrms-employee/list', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrmsEmployeeList167']);
    Route::post('api/v1/hrms-employee/create', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrmsEmployeeCreatePost167']);
    Route::get('api/v1/hrms-employee/departments', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrmsEmployeeDepartments167']);
    Route::get('api/v1/hrms-employee/metrics', [App\Http\Controllers\BrandZoRevenueApiController::class, 'apiHrmsEmployeeMetrics167']);
});

// Local Authentication & Signin Route Fix
Route::get('signin', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'create'])->name('signin');
Route::post('signin', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'store']);