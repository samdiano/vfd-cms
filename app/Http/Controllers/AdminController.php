<?php

namespace App\Http\Controllers;

use App\Company;
use App\Vacancy;
use App\Value;
use App\Service;
use App\Subscriber;
use App\Product;
use App\Profile;
use App\FAQ;
use App\Blog;
use App\Gallery;
use App\FinancialInformation;
use App\ConferenceCall;
use App\PressRelease;
use App\PortfolioVacancy;
use App\CareerFaq;
use App\InvestorFaq;
use App\Director;
use App\Management;
use App\PortfolioHead;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $company = Company::find(1);
        return view('admin.about.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'about' => 'required',
            'about_quote' => 'required',
            'about_text' => 'required',
        ]);
        $company = Company::find(1);
        $company->about = $request->about;
        $company->about_quote = $request->about_quote;
        $company->about_quote_side = $request->about_quote_side;
        $company->about_text = $request->about_text;
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
    public function profile()
    {
        $company = Company::find(1);
        return view('admin.profile.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profileEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'profile' => 'required',
        ]);

        $company = Company::find(1);


        if ($request->hasFile('profile')) {
            $filename = $request->profile->store('documents', 'public');
            $company->profile = $filename;
        }

        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/profile')->with('company', $company);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function quote()
    {
        $company = Company::find(1);
        return view('admin.quote.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function quoteEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'quote' => 'required',
        ]);
        $company = Company::find(1);
        $company->quote = $request->quote;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/quote')->with('company', $company);
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
        return view('admin.history.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function historyEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'history' => 'required',
            'history_quote' => 'required',
            'history_text' => 'required',
        ]);
        $company = Company::find(1);
        $company->history = $request->history;
        $company->history_quote = $request->history_quote;
        $company->history_quote_side = $request->history_quote_side;
        $company->history_text = $request->history_text;
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
        return view('admin.impact.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function impactEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'impact' => 'required',
            'impact_quote' => 'required',
            'impact_text' => 'required',
        ]);
        $company = Company::find(1);
        $company->impact = $request->impact;
        $company->impact_quote = $request->impact_quote;
        $company->impact_quote_side = $request->impact_quote_side;
        $company->impact_text = $request->impact_text;
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
        return view('admin.career.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careerEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'career' => 'required'
        ]);
        $company = Company::find(1);
        $company->career = $request->career;
        $company->career_quote = $request->career_quote;
        $company->career_text = $request->career_text;
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
    public function careerVideo()
    {
        $company = Company::find(1);
        return view('admin.career.video', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careerVideoEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'link' => 'required'
        ]);
        $company = Company::find(1);
        $company->youtube_link = $request->link;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect()->back()->with('company', $company);
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
        return view('admin.portfolio.edit', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        $services = Service::all();
        return view('admin.services.list', ['services' => $services]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newService()
    {
        $vacancies = Vacancy::all();
        return view('admin.services.new', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addService(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
        ]);
        $service = new Service();

        $service->name = $request->name;
        $service->link = $request->link;
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
    public function postServiceDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = Service::find($id);

        // $finInfo->delete();
        $services = Service::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect()->back()->with('services', $services);
        } else {
            return redirect()->back()->withErrors('');
        }
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function values()
    {
        $services = Value::all();
        return view('admin.values.list', ['services' => $services]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newValue()
    {
        $vacancies = Vacancy::all();
        return view('admin.values.new', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addValue(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        $service = new Value();

        $service->value = $request->name;
        $service->description = $request->description;
        $service->save;
        $services = Value::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($service->save()) {
            return redirect('admin/values')->with('services', $services);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postValueDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = Value::find($id);

        // $finInfo->delete();
        $services = Value::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect()->back()->with('services', $services);
        } else {
            return redirect()->back()->withErrors('');
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
        return view('admin.products.list', ['products' => $products]);
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
        $validator = $this->validate($request, [
            'name' => 'required',
        ]);
        $service = new Product();

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
    public function portfolioEdit(Request $request)
    {
        $validator = $this->validate($request, [
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
    public function subscribers()
    {
        $subscriber = Subscriber::all();
        return view('admin.subscribers.list', ['subscriber' => $subscriber]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vacancies()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.vacancies', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bridgeVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'bridge')->get();
        return view('admin.vacancies.bridge-vacancies', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function anchoriaVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'anchoria')->get();
        return view('admin.vacancies.anchoria-vacancies', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dynastyVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'dynasty')->get();
        return view('admin.vacancies.dynasty-vacancies', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function microfinanceVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'microfinance')->get();
        return view('admin.vacancies.microfinance-vacancies', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function everdonVacancy()
    {
        $vacancies = PortfolioVacancy::where('portfolio', '=', 'everdon')->get();
        return view('admin.vacancies.everdon-vacancies', ['vacancies' => $vacancies]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vacancy()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.new-vacancy', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newVacancy(Request $request)
    {
        $validator = $this->validate($request, [
            'role' => 'required',
            'description' => 'required'
        ]);
        $vacancy = new Vacancy();

        $vacancy->role = $request->role;
        $vacancy->description = $request->description;
        $vacancy->level = $request->level;
        $vacancy->deadline = $request->deadline;
        $vacancy->department = $request->department;
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
        return view('admin.vacancies.new-portfolio-vacancy', ['vacancies' => $vacancies]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newPortfolioVacancy(Request $request)
    {
        $validator = $this->validate($request, [
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
        return view('admin.financial.list', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function financialInfoNew()
    {
        $info = FinancialInformation::all();
        return view('admin.financial.new', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postFinancialInfoNew(Request $request)
    {
        $validator = $this->validate($request, [
            'cover' => 'required',
            'document' => 'required',
            'name' => 'required',
            'year' => 'required',
        ]);
        $finInfo = new FinancialInformation();

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        if ($request->hasFile('document')) {
            $filename = $request->document->store('documents', 'public');
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
    public function financialInfoEdit($id)
    {
        $info = FinancialInformation::find($id);
        return view('admin.financial.edit', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postFinancialInfoEdit(Request $request, $id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = FinancialInformation::find($id);

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        if ($request->hasFile('document')) {
            $filename = $request->document->store('documents', 'public');
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
    public function postFinancialInfoDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = FinancialInformation::find($id);

        // $finInfo->delete();
        $info = FinancialInformation::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect('admin/financial-information')->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
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
        return view('admin.conference.list', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function conferenceNew()
    {
        $info = ConferenceCall::all();
        return view('admin.conference.new', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postConferenceNew(Request $request)
    {
        $validator = $this->validate($request, [
            'cover' => 'required',
            'document' => 'required',
            'name' => 'required',
            'year' => 'required',
        ]);
        $finInfo = new ConferenceCall();

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        if ($request->hasFile('document')) {
            $filename = $request->document->store('documents', 'public');
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
    public function conferenceEdit($id)
    {
        $info = ConferenceCall::find($id);
        return view('admin.conference.edit', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postConferenceEdit(Request $request, $id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = ConferenceCall::find($id);

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        if ($request->hasFile('document')) {
            $filename = $request->document->store('documents', 'public');
            $finInfo->document = $filename;
        }


        $finInfo->title = $request->name;
        $finInfo->year = $request->year;
        $finInfo->save;
        $info = ConferenceCall::all();

        // return view('admin.about.edit',['company' => $company]);
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
    public function postConferenceDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = ConferenceCall::find($id);

        // $finInfo->delete();
        $info = ConferenceCall::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect('admin/conference')->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
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
        return view('admin.press.list', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pressNew()
    {
        $info = PressRelease::all();
        return view('admin.press.new', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postPressNew(Request $request)
    {
        $validator = $this->validate($request, [
            'cover' => 'required',
            'document' => 'required',
            'content' => 'required',
            'name' => 'required',
            'year' => 'required',
        ]);
        $finInfo = new PressRelease();

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        if ($request->hasFile('document')) {
            $filename = $request->document->store('documents', 'public');
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
    public function pressEdit($id)
    {
        $info = PressRelease::find($id);
        return view('admin.press.edit', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postPressEdit(Request $request, $id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = PressRelease::find($id);

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        if ($request->hasFile('document')) {
            $filename = $request->document->store('documents', 'public');
            $finInfo->document = $filename;
        }


        $finInfo->title = $request->name;
        $finInfo->year = $request->year;
        $finInfo->save;
        $info = PressRelease::all();

        // return view('admin.about.edit',['company' => $company]);
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
    public function postPressDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = PressRelease::find($id);

        // $finInfo->delete();
        $info = PressRelease::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect('admin/press')->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
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
        return view('admin.faq.index', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function generalFaq()
    {
        $faq = FAQ::where('type', '=', 'general')->get();
        return view('admin.faq.general', ['faq' => $faq]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function careerFaq()
    {
        $faq = CareerFaq::all();
        return view('admin.faq.career', ['faq' => $faq]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function investorFaq()
    {
        $faq = InvestorFaq::all();
        return view('admin.faq.investor', ['faq' => $faq]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqNew()
    {
        $company = Company::find(1);
        return view('admin.faq.new', ['company' => $company]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postFaqNew(Request $request)
    {
        $validator = $this->validate($request, [
            'question' => 'required',
            'response' => 'required',
            'type' => 'required',
        ]);
        if($request->type == 'general'){
            $faq = new FAQ();
            $faq->question = $request->question;
            $faq->response = $request->response;
            $faq->type = $request->type;
            $faq->rank = $request->type;
            $faq->save;
            if ($faq->save()) {
                return redirect('admin/faq/general');
            } else {
                return redirect()->back()->withErrors($validator);
            }
        }
        if($request->type == 'career'){
            $faq = new CareerFaq();
            $faq->question = $request->question;
            $faq->response = $request->response;
            // $faq->type = $request->type;
            $faq->rank = $request->type;
            $faq->save;
            if ($faq->save()) {
                return redirect('admin/faq/career');
            } else {
                return redirect()->back()->withErrors($validator);
            }
        }
        if($request->type == 'investor'){
            $faq = new InvestorFaq();
            $faq->question = $request->question;
            $faq->response = $request->response;
            // $faq->type = $request->type;
            $faq->rank = $request->type;
            $faq->save;
            if ($faq->save()) {
                return redirect('admin/faq/investor');
            } else {
                return redirect()->back()->withErrors($validator);
            }
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postFaqDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = FAQ::find($id);

        // $finInfo->delete();
        $info = FAQ::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect()->back()->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
        }
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function culturePostEdit(Request $request)
    {
        $validator = $this->validate($request, [
            'culture' => 'required',
        ]);
        $company = Company::find(1);
        $company->culture = $request->culture;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/culture/edit');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function culture()
    {
        return view('admin.culture.index');
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postMission(Request $request)
    {
        $validator = $this->validate($request, [
            'mission' => 'required',
        ]);
        $company = Company::find(1);
        $company->mission = $request->mission;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/mission');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mission()
    {
        $company = Company::find(1);
        return view('admin.culture.missionEdit', ['company' => $company]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postVision(Request $request)
    {
        $validator = $this->validate($request, [
            'vision' => 'required',
        ]);
        $company = Company::find(1);
        $company->vision = $request->vision;
        $company->save;
        // return view('admin.about.edit',['company' => $company]);
        if ($company->save()) {
            return redirect('admin/vision');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vision()
    {
        $company = Company::find(1);
        return view('admin.culture.visionEdit', ['company' => $company]);
    }



    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cultureEdit()
    {
        $company = Company::find(1);
        return view('admin.culture.cultureEdit', ['company' => $company]);
    }



    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        $info = Blog::all();
        return view('admin.blog.list', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogNew()
    {
        $info = Blog::all();
        return view('admin.blog.new', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postBlogNew(Request $request)
    {
        $validator = $this->validate($request, [
            'cover' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $finInfo = new Blog();

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $img = $cover->store('images', 'public');
            $finInfo->image_path = $img;
        }

        $finInfo->title = $request->title;
        $finInfo->content = $request->content;
        $finInfo->save;
        $info = Blog::all();

        if ($finInfo->save()) {
            return redirect('admin/blog')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postBlogDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = blog::find($id);

        // $finInfo->delete();
        $info = blog::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect()->back()->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
        }
    }



    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gallery()
    {
        $info = Gallery::all();
        return view('admin.gallery.list', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryNew()
    {
        $info = Gallery::all();
        return view('admin.gallery.new', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postGalleryNew(Request $request)
    {
        $validator = $this->validate($request, [
            'cover' => 'required',
            'title' => 'required',
            'year' => 'required',
        ]);

        $finInfo = new Gallery();

        if ($request->hasFile('cover')) {
            foreach ($request->file('cover') as $image) {
                // $cover = $request->file('cover');
                $img = $image->store('images', 'public');
                $data[] = $img;
            }
        }
        
        $finInfo->image_path = json_encode($data);
        $finInfo->title = $request->title;
        $finInfo->content = '';
        $finInfo->year = $request->year;
        $finInfo->save;
        $info = Gallery::all();

        if ($finInfo->save()) {
            return redirect('admin/gallery')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postGalleryDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = Gallery::find($id);

        // $finInfo->delete();
        $info = Gallery::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect()->back()->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
        }
    }



    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subsidiary()
    {
        $info = Product::all();
        return view('admin.subsidiaries.list', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subsidiaryNew()
    {
        $info = Product::all();
        return view('admin.subsidiaries.new', ['info' => $info]);
    }


    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postSubsidiaryNew(Request $request)
    {
        $validator = $this->validate($request, [
            'logo' => 'required',
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $finInfo = new Product();

        if ($request->hasFile('logo')) {
            $cover = $request->file('logo');
            $img = $cover->store('images', 'public');
            $finInfo->image = $img;
        }

        $finInfo->name = $request->name;
        $finInfo->description = $request->description;
        $finInfo->link = $request->link;
        $finInfo->save;
        $info = Product::all();

        if ($finInfo->save()) {
            return redirect('admin/subsidiaries')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postSubsidiaryDelete($id)
    {
        // $validator = $this->validate($request,[
        //     'cover' => 'required',
        //     'document' => 'required',
        //     'name' => 'required',
        //     'year' => 'required',
        // ]);
        $finInfo = Product::find($id);

        // $finInfo->delete();
        $info = Product::all();

        // return view('admin.about.edit',['company' => $company]);
        if ($finInfo->delete()) {
            return redirect()->back()->with('info', $info);
        } else {
            return redirect()->back()->withErrors();
        }
    }



    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function governance()
    {
        $info = Profile::all();
        return view('admin.governance.index', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function port()
    {
        $info = Profile::where('section', '=', 'portfolio')->get();
        return view('admin.governance.portfolio', ['info' => $info]);
    }
    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function management()
    {
        $info = Profile::where('section', '=', 'management')->get();
        return view('admin.governance.management', ['info' => $info]);
    }
    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function directors()
    {
        $info = Profile::where('section', '=', 'directors')->get();
        return view('admin.governance.directors', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function govenranceNew()
    {
        $info = Product::all();
        return view('admin.governance.new', ['info' => $info]);
    }

    /**
     * Show the company's about page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postGovernanceNew(Request $request)
    {
        $validator = $this->validate($request, [
            'logo' => 'required',
            'name' => 'required',
            'brief' => 'required',
            'description' => 'required',
        ]);

        $finInfo = new Profile();

        if ($request->hasFile('logo')) {
            $cover = $request->file('logo');
            $img = $cover->store('images', 'public');
            $finInfo->image = $img;
        }

        $finInfo->name = $request->name;
        $finInfo->brief = $request->brief;
        $finInfo->role = $request->role;
        $finInfo->section = $request->section;
        $finInfo->description = $request->description;
        $finInfo->twitter = $request->twitter;
        $finInfo->instagram = $request->instagram;
        $finInfo->facebook = $request->facebook;
        $finInfo->linkedin = $request->linkedin;
        $finInfo->save;
        $info = Profile::all();

        if ($finInfo->save()) {
            return redirect('admin/governance')->with('info', $info);
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }
}
