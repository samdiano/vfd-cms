<?php

namespace App\Http\Controllers;

use App\Company;
use App\Vacancy;
use App\Service;
use App\Product;
use App\Profile;
use App\Blog;
use App\CareerFaq;
use App\Gallery;
use App\FAQ;
use App\Value;
use App\Subscriber;
use App\FinancialInformation;
use App\ConferenceCall;
use App\InvestorFaq;
use App\PressRelease;
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
        $directors = Profile::where('section', '=', 'directors')->get();
        $portfolio = Profile::where('section', '=', 'portfolio')->get();
        $management = Profile::where('section', '=', 'management')->get();
        $values = Value::all();

        return view('about', ['company' => $company, 'directors' => $directors, 'portfolio' => $portfolio, 'management' => $management, 'values' => $values]);
    }

    public function getDownload(Request $request)
    {

        $validator = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $company = Company::find(1);
        $subscriber = Subscriber::firstOrNew(['email' => $request->email]);
        $path = public_path() . '/' . $company->profile;
        $file = pathinfo($path, PATHINFO_EXTENSION);
        $headers = array('Content-Type: application/pdf');
        $subscriber->name = $request->name;
        $subscriber->email = $request->email;
        $subscriber->save();
        return response()->download($path, 'vfd-profile' . '.' . $file);
    }
    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile($id)
    {
        $profile = Profile::find($id);
        return view('profile', ['profile' => $profile]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog($id)
    {
        $blog = Blog::find($id);
        return view('blog', ['blog' => $blog]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Product::all();
        return view('welcome', ['company' => $company]);
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
        $careerFaq = CareerFaq::where('type', '=', 'career')->get();
        return view('careers', ['company' => $company, 'vacancies' => $vacancies, 'bridge_vacancies' => $bridge_vacancies, 'everdon_vacancies' => $everdon_vacancies, 'microfinance_vacancies' => $microfinance_vacancies, 'dynasty_vacancies' => $dynasty_vacancies, 'anchoria_vacancies' => $anchoria_vacancies, 'careerFaq' => $careerFaq]);
    }

    /**
     * Show the company's career page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function investors()
    {
        $generalFaq = Faq::where('type', '=', 'general')->get();
        $investorFaq = InvestorFaq::all();
        $finInfo = FinancialInformation::all();
        $finArr = [];
        foreach ($finInfo as $fin) {
            array_push($finArr, $fin->year);
        }
        $finYear = array_unique($finArr);

        $conInfo = ConferenceCall::all();
        $conArr = [];
        foreach ($conInfo as $con) {
            array_push($conArr, $con->year);
        }
        $conYear = array_unique($conArr);

        $pressInfo = PressRelease::all();
        $pressArr = [];
        foreach ($pressInfo as $press) {
            array_push($pressArr, $press->year);
        }
        $pressYear = array_unique($pressArr);
        return view('investors', ['generalFaq' => $generalFaq, 'investorFaq' => $investorFaq, 'finYear' => $finYear, 'finInfo' => $finInfo, 'conYear' => $conYear, 'conInfo' => $conInfo, 'pressYear' => $pressYear, 'pressInfo' => $pressInfo,]);
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
        $product = Product::all();
        $sub = Product::all();
        return view('portfolio', ['services' => $services, 'product' => $product, 'sub' => $sub, 'company' => $company]);
    }

    /**
     * Show the company's career page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function media()
    {
        $company = Company::find(1);
        $blog = Blog::all();
        $gallery = Gallery::all();
        $galArr = [];
        foreach ($gallery as $gal) {
            $year = date('Y', strtotime($gal->year));
            array_push($galArr, $year);
        }
        $galYear = array_unique($galArr);
        return view('media', ['blog' => $blog, 'galYear' => $galYear, 'gallery' => $gallery, 'company' => $company]);
    }
}
