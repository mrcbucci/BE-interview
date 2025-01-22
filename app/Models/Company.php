<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    public $table = 'companies';

    public $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];

    protected $casts = [
        'name'    => 'string',
        'email'   => 'string',
        'website' => 'string'
    ];

    public static array $rules = [
        'name'       => 'required|string|max:255',
        'email'      => 'nullable|string|max:255|email',
        'logo'       => 'nullable|image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100',
        'website'    => 'nullable|string|max:255|url:https,http',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'company_id');
    }
}
