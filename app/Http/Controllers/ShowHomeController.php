<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewRender;
use Illuminate\Http\Request;

class ShowHomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        return ViewRender::make('welcome');
    }
}
