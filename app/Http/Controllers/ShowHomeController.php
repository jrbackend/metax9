<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ShowHomeController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        return redirect('https://bet368.casino/#/HO/');
    }
}
