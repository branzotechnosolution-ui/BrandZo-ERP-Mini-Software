<?php

namespace Modules\Purchase\Http\Controllers;

class PurchaseOrderReportController extends ReportsController
{
    public function index()
    {
        return $this->orderReport();
    }
}
