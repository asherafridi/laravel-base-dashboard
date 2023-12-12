<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Billing;
use App\Models\Committee;
use App\Models\Properties;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Vendor;
use App\Models\WorkOrder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "Dashboard";
        $widget['widget_1'] = 0;
        $widget['widget_2'] = 0;
        $widget['widget_3'] = 0;
        $widget['widget_4'] = 0;
        $widget['total_work_orders'] = 0;
        $widget['work_orders'] = 0;
        $widget['bills'] = 0;
        $widget['total_bills'] = 0;
        $widget['total_bill_amount'] = 0;
        $widget['announcements'] = 0;
        // return $widget;
        return view('admin.dashboard', compact('title', 'widget'));
    }
}
