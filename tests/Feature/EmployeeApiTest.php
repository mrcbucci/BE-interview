<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Employee;

class EmployeeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_employee()
    {
        $employee = Employee::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/employees', $employee
        );

        $this->assertApiSuccess();
    }

    /**
     * @test
     */
    public function test_read_employee()
    {
        $employee = Employee::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/employees/'.$employee->id
        );

        $this->assertApiSuccess();
    }

    /**
     * @test
     */
    public function test_update_employee()
    {
        $employee = Employee::factory()->create();
        $editedEmployee = Employee::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/employees/'.$employee->id,
            $editedEmployee
        );

        $this->assertApiSuccess();
    }

    /**
     * @test
     */
    public function test_delete_employee()
    {
        $employee = Employee::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/employees/'.$employee->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/employees/'.$employee->id
        );

        $this->response->assertStatus(404);
    }
}
