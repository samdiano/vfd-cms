<?php

namespace App\Http\Controllers;
use App\Company;
use App\Vacancy;

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
}
