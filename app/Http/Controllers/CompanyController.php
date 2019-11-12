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
use App\Management;
use App\PortfolioHead;
use App\PressRelease;
use App\PortfolioVacancy;
use App\Video;
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
        $directors = Profile::where('section', '=', 'directors')->orderByRaw('LENGTH(rank)', 'ASC')->get();
        $portfolio = PortfolioHead::orderBy('rank','asc')->orderByRaw('LENGTH(rank)', 'ASC')->get();
        $management = Management::orderBy('rank','asc')->orderByRaw('LENGTH(rank)', 'ASC')->get();
        $values = Value::all();

        return view('about', ['company' => $company, 'directors' => $directors, 'portfolio' => $portfolio, 'management' => $management, 'values' => $values]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        $company = Company::find(1);
        return view('contact_us', ['company' => $company]);
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
    public function profile($id, $type)
    {
        if($type == 'profile'){

        $profile = Profile::find($id);
    }
        if($type == 'management'){
            
        $profile = Management::find($id);
    }
        if($type == 'portfolio'){
            
        $profile = PortfolioHead::find($id);
    }
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
        $more_blogs = Blog::all();
        $blogs = Blog::all()->random(1);

        if (count($more_blogs) > 1) {
            # code...
            $blogs = Blog::all()->random(2);
        }
        return view('blog', ['blog' => $blog, 'blogs' => $blogs]);
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
        $careerFaq = CareerFaq::all();
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
        $careerFaq = CareerFaq::all();

        $finInfo = FinancialInformation::all();
        $finArr = [];
        foreach ($finInfo as $fin) {
            $year = date('Y', strtotime($fin->year));
            array_push($finArr, $year);
        }
        $finYear = array_unique($finArr);

        $conInfo = ConferenceCall::all();
        $conArr = [];
        foreach ($conInfo as $con) {
            $year = date('Y', strtotime($con->year));
            array_push($conArr, $year);
        }
        $conYear = array_unique($conArr);

        $pressInfo = PressRelease::all();
        $pressArr = [];
        foreach ($pressInfo as $press) {
            $year = date('Y', strtotime($press->year));
            array_push($pressArr, $year);
        }
        $pressYear = array_unique($pressArr);
        return view('investors', ['generalFaq' => $generalFaq, 'investorFaq' => $investorFaq, 'careerFaq' => $careerFaq, 'finYear' => $finYear, 'finInfo' => $finInfo, 'conYear' => $conYear, 'conInfo' => $conInfo, 'pressYear' => $pressYear, 'pressInfo' => $pressInfo,]);
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
    public function gallery($id)
    {
        $gallery = Gallery::find($id);
        $more_blogs = Blog::all();
        $blogs = Blog::all()->random(1);

        if (count($more_blogs) > 1) {
            # code...
            $blogs = Blog::all()->random(2);
        }
        return view('gallery', ['gallery' => $gallery, 'blogs' => $blogs]);
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
        $video = Video::all();
        $galArr = [];
        $vidArr = [];
        foreach ($gallery as $gal) {
            $year = date('Y', strtotime($gal->year));
            array_push($galArr, $year);
        }
        foreach ($video as $vid) {
            $year = date('Y', strtotime($vid->year));
            array_push($vidArr, $year);
        }
        $galYear = array_unique($galArr);
        $vidYear = array_unique($vidArr);
        return view('media', ['blog' => $blog, 'galYear' => $galYear, 'gallery' => $gallery, 'vidYear' => $vidYear, 'video' => $video, 'company' => $company]);
    }
}
