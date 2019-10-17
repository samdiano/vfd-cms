<?php

namespace App\Http\Controllers;
use App\Company;
use App\Vacancy;


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

    /**
     * Show the company's career page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function career()
    {
        $company = Company::find(1);
        $vacancies = Vacancy::all();
        return view('careers',['company' => $company, 'vacancies' => $vacancies]);
    }
    
}
