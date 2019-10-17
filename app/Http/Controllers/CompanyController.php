<?php

namespace App\Http\Controllers;
use App\Company;
use App\Vacancy;
use App\Service;
use App\PortfolioVacancy;


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
        $bridge_vacancies = PortfolioVacancy::where('portfolio', '=', 'bridge')->get();
        $everdon_vacancies = PortfolioVacancy::where('portfolio', '=', 'everdon')->get();
        $microfinance_vacancies = PortfolioVacancy::where('portfolio', '=', 'microfinance')->get();
        $dynasty_vacancies = PortfolioVacancy::where('portfolio', '=', 'dynasty')->get();
        $anchoria_vacancies = PortfolioVacancy::where('portfolio', '=', 'anchoria')->get();
        return view('careers',['company' => $company, 'vacancies' => $vacancies, 'bridge_vacancies' => $bridge_vacancies, 'everdon_vacancies' => $everdon_vacancies, 'microfinance_vacancies' => $microfinance_vacancies, 'dynasty_vacancies' => $dynasty_vacancies, 'anchoria_vacancies' => $anchoria_vacancies, ]);
    }
    
    /**
     * Show the company's career page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        $company = Company::find(1);
        $services = Service::all();
        return view('portfolio',['services' => $services,'company' => $company ]);
    }
    
}
