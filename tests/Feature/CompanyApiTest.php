<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Company;

class CompanyApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_company()
    {
        $company = Company::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/companies', $company
        );

        $this->assertApiSuccess();
    }

    /**
     * @test
     */
    public function test_read_company()
    {
        $company = Company::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/companies/'.$company->id
        );

        $this->assertApiSuccess();
    }

    /**
     * @test
     */
    public function test_update_company()
    {
        $company = Company::factory()->create();
        $editedCompany = Company::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/companies/'.$company->id,
            $editedCompany
        );

        $this->assertApiSuccess();
    }

    /**
     * @test
     */
    public function test_delete_company()
    {
        $company = Company::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/companies/'.$company->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/companies/'.$company->id
        );

        $this->response->assertStatus(404);
    }
}
