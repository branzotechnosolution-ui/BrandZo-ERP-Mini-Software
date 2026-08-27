# BrandZo ERP — Master Software Module Inventory

This inventory provides an end-to-end technical map of all major modules and sub-modules in the BrandZo ERP platform.

---

## 1. Dashboard Module
- **Sub-modules**: Admin Dashboard, Client Portal Dashboard, Employee Self-Service Dashboard, HR Analytics, Project Dashboard, Finance Dashboard.
- **Main Purpose**: Provides role-specific real-time operational overview, key metrics, charts, quick actions, and widget panels.
- **Frontend Technology**: Laravel Blade, jQuery, Bootstrap 4, Chart.js, Frappe Charts.
- **Backend Technology**: PHP 8.1, Laravel 10.x.
- **Controllers**: `AdminDashboardController`, `ClientDashboardController`, `EmployeeDashboardController`, `HRDashboardController`, `ProjectDashboardController`, `FinanceDashboardController`.
- **Models**: `DashboardWidget`, `User`, `Project`, `Invoice`, `Payment`, `Lead`.
- **Views**: `resources/views/dashboard/` (`admin.blade.php`, `client.blade.php`, `employee.blade.php`).
- **Routes**: `routes/web.php` (`/account/dashboard`).
- **Implementation Status**: **100% Fully Functional**

---

## 2. Leads Module
- **Sub-modules**: Lead Management, Lead Kanban Board, Lead Sources, Lead Categories, Lead Statuses, Lead Contacts.
- **Main Purpose**: Ingests, tracks, scores, and converts prospect leads into active CRM Deals and Client Accounts.
- **Frontend Technology**: Blade, jQuery, Bootstrap 4, DataTables, Quill Editor.
- **Controllers**: `LeadController`, `LeadBoardController`, `LeadCategoryController`, `LeadSourceController`, `LeadStatusController`, `LeadContactController`.
- **Models**: `Lead`, `LeadCategory`, `LeadSource`, `LeadStatus`, `LeadAgent`, `LeadFollowUp`.
- **DataTables**: `LeadsDataTable`, `LeadContactsDataTable`.
- **Database Tables**: `leads`, `lead_categories`, `lead_sources`, `lead_status`, `lead_agents`, `lead_follow_up`.
- **Views**: `resources/views/leads/`, `resources/views/lead-contact/`.
- **Routes**: `/account/leads`, `/account/leadboard`, `/account/lead-contact`.
- **Implementation Status**: **100% Fully Functional**

---

## 3. Deals Module
- **Sub-modules**: Deals Pipeline, Deal Kanban Board, Deal Stages, Deal Proposals, Deal Follow-ups, Deal Notes, Deal Conversion.
- **Main Purpose**: Manages sales opportunities through custom pipeline stages and handles one-click conversion to Client accounts.
- **Controllers**: `DealController`, `DealStageController`, `DealFileController`, `DealNoteController`, `DealFollowUpController`.
- **Models**: `Deal`, `PipelineStage`, `DealFile`, `DealNote`, `DealFollowUp`, `Lead`.
- **DataTables**: `DealsDataTable`.
- **Database Tables**: `deals`, `pipeline_stages`, `deal_files`, `deal_notes`, `deal_follow_ups`.
- **Views**: `resources/views/deals/`.
- **Routes**: `/account/deals`, `/account/deals/change-stage`.
- **Implementation Status**: **100% Fully Functional**

---

## 4. Clients Module
- **Sub-modules**: Client Profile, Projects Tab, Invoices Tab, Estimates Tab, Credit Notes Tab, Payments Tab, Contacts Tab, Documents Vault, Notes Timeline, Tickets Tab, Orders Tab.
- **Main Purpose**: Central 360-degree client management suite with isolated sub-tabs, contact details, billing history, document storage, and communication timelines.
- **Frontend Technology**: Blade, Vanilla CSS (`client-module-table`), jQuery, Bootstrap 4, Yajra DataTables.
- **Controllers**: `ClientController`, `ClientCategoryController`, `ClientSubCategoryController`, `ClientContactController`, `ClientDocController`, `ClientNoteController`.
- **Models**: `User`, `ClientDetails`, `ClientCategory`, `ClientSubCategory`, `ClientContact`, `ClientDocument`, `ClientNote`.
- **DataTables**: `ProjectsDataTable`, `InvoicesDataTable`, `EstimatesDataTable`, `CreditNotesDataTable`, `PaymentsDataTable`, `ClientContactsDataTable`, `ClientNotesDataTable`, `TicketDataTable`, `OrdersDataTable`.
- **Database Tables**: `users`, `client_details`, `client_categories`, `client_sub_categories`, `client_contacts`, `client_docs`, `client_notes`.
- **Views**: `resources/views/clients/show.blade.php`, `resources/views/clients/ajax/*.blade.php`.
- **Routes**: `/account/clients`, `/account/clients/{id}?tab={subtab}`.
- **Implementation Status**: **100% Fully Functional (Production Validated & Polished)**

---

## 5. Projects Module
- **Sub-modules**: Project Management, Project Kanban Board, Project Milestones, Project Files, Project Notes, Project Ratings, Project Templates, Time Logs, Gantt Chart.
- **Main Purpose**: End-to-end project lifecycle tracking, task breakdown, team allocation, budget tracking, and client collaboration.
- **Controllers**: `ProjectController`, `ProjectCategoryController`, `ProjectMemberController`, `ProjectMilestoneController`, `ProjectFileController`, `ProjectNoteController`, `ProjectRatingController`, `ProjectTemplateController`.
- **Models**: `Project`, `ProjectCategory`, `ProjectMember`, `ProjectMilestone`, `ProjectFile`, `ProjectNote`, `ProjectRating`, `ProjectTemplate`.
- **DataTables**: `ProjectsDataTable`, `ProjectTemplatesDataTable`.
- **Database Tables**: `projects`, `project_category`, `project_members`, `project_milestones`, `project_files`, `project_notes`, `project_ratings`, `project_templates`.
- **Views**: `resources/views/projects/`.
- **Routes**: `/account/projects`, `/account/projects/{id}`.
- **Implementation Status**: **100% Fully Functional**

---

## 6. Invoices, Estimates & Finance Module
- **Sub-modules**: Invoice Generator, Recurring Invoices, Estimate Generator, Credit Notes, Payment Processing, Expense Management, Bank Accounts.
- **Main Purpose**: Handles client invoicing, quotation proposals, credit notes, payment gateway processing (Stripe, Razorpay, PayPal), recurring expenses, and bank account reconciliations.
- **Controllers**: `InvoiceController`, `InvoiceRecurringController`, `EstimateController`, `CreditNoteController`, `PaymentController`, `ExpenseController`, `ExpensesRecurringController`, `BankAccountController`.
- **Models**: `Invoice`, `InvoiceItems`, `Estimate`, `EstimateItem`, `CreditNotes`, `Payment`, `Expense`, `BankAccount`.
- **DataTables**: `InvoicesDataTable`, `EstimatesDataTable`, `CreditNotesDataTable`, `PaymentsDataTable`, `ExpensesDataTable`.
- **Database Tables**: `invoices`, `invoice_items`, `estimates`, `estimate_items`, `credit_notes`, `payments`, `expenses`, `bank_accounts`.
- **Views**: `resources/views/invoices/`, `resources/views/estimates/`, `resources/views/credit-notes/`, `resources/views/payments/`.
- **Routes**: `/account/invoices`, `/account/estimates`, `/account/creditnotes`, `/account/payments`.
- **Implementation Status**: **100% Fully Functional**

---

## 7. HRMS & Workforce Module
- **Sub-modules**: Employee Directory, Designation & Department Management, Attendance Tracking, Shift Selection, Leave Requests & Leave Types, Awards & Appreciation, Payroll (Addon), Recruitment (Addon).
- **Main Purpose**: Complete human resource management including employee onboarding, biometric attendance, leave workflow, salary processing, and performance appraisals.
- **Controllers**: `EmployeeController`, `DesignationController`, `DepartmentController`, `AttendanceController`, `LeaveController`, `LeaveTypeController`, `AppreciationController`, `AwardController`.
- **Models**: `User`, `EmployeeDetails`, `Designation`, `Team` (Department), `Attendance`, `Leave`, `LeaveType`, `Appreciation`, `Award`.
- **DataTables**: `EmployeesDataTable`, `AttendanceReportDataTable`, `LeaveDataTable`.
- **Database Tables**: `users`, `employee_details`, `designations`, `teams`, `attendances`, `leaves`, `leave_types`, `appreciations`, `awards`.
- **Views**: `resources/views/employees/`, `resources/views/attendance/`, `resources/views/leaves/`.
- **Routes**: `/account/employees`, `/account/attendances`, `/account/leaves`.
- **Implementation Status**: **100% Fully Functional**

---

## 8. Helpdesk & Tickets Module
- **Sub-modules**: Support Ticket Listing, Ticket Channels, Ticket Groups, Ticket Agents, Ticket Custom Forms, Ticket Replies.
- **Main Purpose**: Multi-channel customer support ticketing system with SLA tracking, agent assignment, and automated responses.
- **Controllers**: `TicketController`, `TicketAgentController`, `TicketChannelController`, `TicketGroupController`, `TicketReplyController`, `TicketTypeController`, `TicketCustomFormController`.
- **Models**: `Ticket`, `TicketAgentGroups`, `TicketChannel`, `TicketGroup`, `TicketReply`, `TicketType`, `TicketCustomForm`.
- **DataTables**: `TicketDataTable`.
- **Database Tables**: `tickets`, `ticket_agent_groups`, `ticket_channels`, `ticket_groups`, `ticket_replies`, `ticket_types`, `ticket_custom_forms`.
- **Views**: `resources/views/tickets/`.
- **Routes**: `/account/tickets`.
- **Implementation Status**: **100% Fully Functional**

---

## 9. Modular Addon Suite (21 Addon Modules)
1. **Recruit Module** (`Modules/Recruit`): Applicant Tracking System, Job Openings, Offer Letters.
2. **Payroll Module** (`Modules/Payroll`): Salary Components, Payslips, Direct Deposit.
3. **Purchase Module** (`Modules/Purchase`): Purchase Orders, Vendors, Inventory Management.
4. **Asset Module** (`Modules/Asset`): Equipment & Asset Allocation Engine.
5. **Zoom Module** (`Modules/Zoom`): Online Video Meeting Generator.
6. **EInvoice Module** (`Modules/EInvoice`): Electronic Invoicing & Tax Filing.
7. **Biolinks & QRCode** (`Modules/Biolinks`, `Modules/QRCode`): Digital Business Cards.
8. **Subdomain & Webhooks** (`Modules/Subdomain`, `Modules/Webhooks`): Multi-Tenancy & External Integrations.
