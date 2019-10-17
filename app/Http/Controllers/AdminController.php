<?php

namespace App\Http\Controllers;
use App\Company;
use App\Vacancy;
use App\Service;
use App\Product;
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
}
