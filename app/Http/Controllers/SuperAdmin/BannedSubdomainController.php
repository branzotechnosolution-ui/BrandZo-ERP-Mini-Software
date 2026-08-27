<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Helper\Reply;

class BannedSubdomainController extends Controller
{
    public function bannedDomain()
    {
        return view('dashboard');
    }

    public function bannedDomainSubmit()
    {
        return Reply::success('Updated');
    }

    public function deleteBannedDomain()
    {
        return Reply::success('Deleted');
    }
}
