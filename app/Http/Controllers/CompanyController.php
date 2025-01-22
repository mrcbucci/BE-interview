<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;
use Flash;

class CompanyController extends AppBaseController
{
    /** @var CompanyRepository $companyRepository*/
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepository = $companyRepo;
    }

    /**
     * Display a listing of the Company.
     */
    public function index(Request $request)
    {
        $companies = $this->companyRepository->paginate(10);

        return view('companies.index')
            ->with('companies', $companies);
    }

    /**
     * Show the form for creating a new Company.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created Company in storage.
     */
    public function store(CreateCompanyRequest $request)
    {
        $company = $this->companyRepository->create($request);

        Flash::success('Company saved successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Display the specified Company.
     */
    public function show($id)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        return view('companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified Company.
     */
    public function edit($id)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        return view('companies.edit')->with('company', $company);
    }

    /**
     * Update the specified Company in storage.
     */
    public function update($id, UpdateCompanyRequest $request)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        $company = $this->companyRepository->update($request, $id);

        Flash::success('Company updated successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified Company from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $company = $this->companyRepository->find($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        $this->companyRepository->delete($id);

        Flash::success('Company deleted successfully.');

        return redirect(route('companies.index'));
    }
}
