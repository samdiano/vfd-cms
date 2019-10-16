<?php

namespace App\Http\Controllers;
use App\Company;


use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $company = Company::find(1);
        return view('about',['company' => $company]);
    }
}
