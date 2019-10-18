<?php

namespace App\Http\Controllers;
use App\Company;
use App\Vacancy;
use App\Service;
use App\Product;
use App\FAQ;
use App\FinancialInformation;
use App\ConferenceCall;
use App\PressRelease;
use App\PortfolioVacancy;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $company = Company::find(1);
        return view('admin.about.edit',['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutEdit(Request $request)
    {
        $validator = $this->validate($request,[
            'about' => 'required'
        ]);
        $company = Company::find(1);
        $company->about = $request->about;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/about')->with('company', $company);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function history()
    {
        $company = Company::find(1);
        return view('admin.history.edit',['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function historyEdit(Request $request)
    {
        $validator = $this->validate($request,[
            'history' => 'required'
        ]);
        $company = Company::find(1);
        $company->history = $request->history;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/history')->with('company', $company);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function impact()
    {
        $company = Company::find(1);
        return view('admin.impact.edit',['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function impactEdit(Request $request)
    {
        $validator = $this->validate($request,[
            'impact' => 'required'
        ]);
        $company = Company::find(1);
        $company->impact = $request->impact;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/impact')->with('company', $company);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function career()
    {
        $company = Company::find(1);
        return view('admin.career.edit',['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careerEdit(Request $request)
    {
        $validator = $this->validate($request,[
            'career' => 'required'
        ]);
        $company = Company::find(1);
        $company->career = $request->career;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/career')->with('company', $company);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

      
     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        $company = Company::find(1);
        return view('admin.portfolio.edit',['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        $services = Service::all();
        return view('admin.services.list',['services' => $services]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newService()
    {
        $vacancies = Vacancy::all();
        return view('admin.services.new',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addService(Request $request)
    {
        $validator = $this->validate($request,[
            'name' => 'required',
        ]);
        $service = new Service();

        $service->name = $request->name;
        $service->save;
        $services = Service::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($service->save()) {
            return redirect('admin/services')->with('services', $services);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products()
    {
        $products = Product::all();
        return view('admin.products.list',['products' => $products]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newProduct()
    {
        return view('admin.products.new');
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addProduct(Request $request)
    {
        $validator = $this->validate($request,[
            'name' => 'required',
        ]);
        $service = new Product();

        $service->name = $request->name;
        $service->save;
        $services = Service::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($vacancy->save()) {
            return redirect('admin/services')->with('services', $services);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolioEdit(Request $request)
    {
        $validator = $this->validate($request,[
            'portfolio' => 'required'
        ]);
        $company = Company::find(1);
        $company->portfolio = $request->portfolio;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/portfolio')->with('company', $company);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vacancies()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.vacancies',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bridgeVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'bridge')->get();
        return view('admin.vacancies.bridge-vacancies',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function anchoriaVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'anchoria')->get();
        return view('admin.vacancies.anchoria-vacancies',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dynastyVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'dynasty')->get();
        return view('admin.vacancies.dynasty-vacancies',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function microfinanceVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'microfinance')->get();
        return view('admin.vacancies.microfinance-vacancies',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function everdonVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'everdon')->get();
        return view('admin.vacancies.everdon-vacancies',['vacancies' => $vacancies]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vacancy()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.new-vacancy',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newVacancy(Request $request)
    {
        $validator = $this->validate($request,[
            'role' => 'required',
            'description' => 'required'
        ]);
        $vacancy = new Vacancy();

        $vacancy->role = $request->role;
        $vacancy->description = $request->description;
        $vacancy->active = true;
        $vacancy->save;
        $vacancies = Vacancy::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($vacancy->save()) {
            return redirect('admin/vacancies')->with('vacancies', $vacancies);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolioVacancy()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.new-portfolio-vacancy',['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newPortfolioVacancy(Request $request)
    {
        $validator = $this->validate($request,[
            'role' => 'required',
            'description' => 'required',
            'portfolio' => 'required',
        ]);
        $vacancy = new PortfolioVacancy();

        $vacancy->role = $request->role;
        $vacancy->description = $request->description;
        $vacancy->portfolio = $request->portfolio;
        $vacancy->active = true;
        $vacancy->save;
        $vacancies = PortfolioVacancy::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($vacancy->save()) {
            return redirect('admin/portfolio-vacancies')->with('vacancies', $vacancies);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function financialInfo()
    {
        $info = FinancialInformation::all();
        return view('admin.financial.list',['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function financialInfoNew()
    {
        $info = FinancialInformation::all();
        return view('admin.financial.new',['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postFinancialInfoNew(Request $request)
    {
        $validator = $this->validate($request,[
            'cover' => 'required',
            'document' => 'required',
            'name' => 'required',
            'year' => 'required',
        ]);
        $finInfo = new FinancialInformation();
        
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $filename = time().'.'.$cover->getClientOriginalExtension();
            // Image::make($cover)->resize(300,300)->save(public_path('/images/'.$filename));
            $cover->storeAs('images', $filename);
            $finInfo->image_path =$filename;
        }

        if ($request->hasFile('document')) {
            $filename = rand(1111111, 999999) . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->storeAs('documents', $filename);
            $finInfo->document = $filename;
        }


        $finInfo->title = $request->name;
        $finInfo->year = $request->year;
        $finInfo->save;
        $info = FinancialInformation::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->save()) {
            return redirect('admin/financial-information')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function conference()
    {
        $info = ConferenceCall::all();
        return view('admin.conference.list',['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function conferenceNew()
    {
        $info = ConferenceCall::all();
        return view('admin.conference.new',['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postConferenceNew(Request $request)
    {
        $validator = $this->validate($request,[
            'cover' => 'required',
            'document' => 'required',
            'name' => 'required',
            'year' => 'required',
        ]);
        $finInfo = new ConferenceCall();
        
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $filename = time().'.'.$cover->getClientOriginalExtension();
            $cover->storeAs('images', $filename);
            $finInfo->image_path =$filename;
        }

        if ($request->hasFile('document')) {
            $filename = rand(1111111, 999999) . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->storeAs('documents', $filename);
            $finInfo->document = $filename;
        }


        $finInfo->title = $request->name;
        $finInfo->year = $request->year;
        $finInfo->save;
        $info = ConferenceCall::all();

        if ($finInfo->save()) {
            return redirect('admin/conference')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function press()
    {
        $info = PressRelease::all();
        return view('admin.press.list',['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pressNew()
    {
        $info = PressRelease::all();
        return view('admin.press.new',['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postPressNew(Request $request)
    {
        $validator = $this->validate($request,[
            'cover' => 'required',
            'document' => 'required',
            'content' => 'required',
            'name' => 'required',
            'year' => 'required',
        ]);
        $finInfo = new PressRelease();
        
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $filename = time().'.'.$cover->getClientOriginalExtension();
            $cover->storeAs('images', $filename);
            $finInfo->image_path =$filename;
        }

        if ($request->hasFile('document')) {
            $filename = rand(1111111, 999999) . time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->storeAs('documents', $filename);
            $finInfo->document = $filename;
        }


        $finInfo->title = $request->name;
        $finInfo->content = $request->content;
        $finInfo->year = $request->year;
        $finInfo->save;
        $info = PressRelease::all();

        if ($finInfo->save()) {
            return redirect('admin/press')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        $company = Company::find(1);
        return view('admin.faq.index',['company' => $company]);
    }

     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function generalFaq()
    {
        $faq = FAQ::where('type', '=', 'general')->get();
        return view('admin.faq.general',['faq' => $faq]);
    }

     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careerFaq()
    {
        $faq = FAQ::where('type', '=', 'career')->get();
        return view('admin.faq.career',['faq' => $faq]);
    }

     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function investorFaq()
    {
        $faq = FAQ::where('type', '=', 'investor')->get();
        return view('admin.faq.investor',['faq' => $faq]);
    }

     /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqNew()
    {
        $company = Company::find(1);
        return view('admin.faq.new',['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postFaqNew(Request $request)
    {
        $validator = $this->validate($request,[
            'question' => 'required',
            'response' => 'required',
            'type' => 'required',
        ]);
        $faq = new FAQ();
        $faq->question = $request->question;
        $faq->response = $request->response;
        $faq->type = $request->type;
        $faq->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($faq->save()) {
            return redirect('admin/faq');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
}

