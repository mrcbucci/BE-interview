<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class CompanyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
        'logo',
        'website'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Company::class;
    }

    /**
     * Create model record
     */
    public function create($request): Company
    {
        $input = $request->all();

        if ($request->hasFile('logo')) {
            $filename = Carbon::now()->format('YmdHis') . $input['name'] . '.' . $request->file('logo')->getClientOriginalExtension();
            $path = $request->file('logo')->storeAs('public', $filename);
            $input['logo'] = Storage::url($path);
        } else {
            $input['logo'] = null;
        }

        $model = $this->model->create($input);

        return $model;
    }

    /**
     * Update model record for given id
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function update($request, int $id)
    {
        $input = $request->all();

        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $model->fill($input);

        if ($request->hasFile('logo')) {
            $filename = Carbon::now()->format('YmdHis') . $input['name'] . '.' . $request->file('logo')->getClientOriginalExtension();
            $path = $request->file('logo')->storeAs('public', $filename);
            $model->logo = Storage::url($path);
        }

        $model->save();

        return $model;
    }
}
