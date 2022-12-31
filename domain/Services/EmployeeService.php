<?php

namespace domain\Services;

use App\Models\HumanResources\Employee;
use Illuminate\Database\Eloquent\Collection;

/**
 * Employee Service
 * php version 8
 *
 * @category Service
 * */
class EmployeeService
{
    protected $employees;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->employees = new Employee();
    }

    /**
     * Get All Employee Records
     *
     *@return Collection
     */
    public function all(): ?Collection
    {
        return $this->employees->all();
    }
    /**
     * Get Employee Records by Id
     * @param  int $id attendance Id
     *
     * @return Employee
     */
    public function get($id): ?Employee
    {
        return $this->employees->find($id);
    }

    /**
     * Make Attendance Records
     *
     * @param  array $data Information About Employee
     *
     * @return Employee
     */
    public function make(array $data): ?Employee
    {
        return $this->create($data);
    }

    /**
     * Create Attendance Records
     *
     * @param  array $data Information About Attendance
     *
     * @return Employee
     */
    public function create(array $data): ?Employee
    {
        return $this->employees->create($data);
    }

    /**
     * Edit Attendance Records
     *
     * @param  Attendance   $employee  Related Employee Object
     * @param  array  $data  Information About Employee
     *
     * @return array
     */
    public function edit(Employee $employee, array $data): ?array
    {
        return array_merge($employee->toArray(), $data);
    }

    /**
     * Update Employee
     *
     * @param  Employee  $employee
     * @param  array $data
     *
     * @return void
     */
    public function update(Employee $employee, array $data): void
    {
        $employee->update($this->edit($employee, $data));
    }

    /**
     * Delete Employee Records By id
     *
     * @param  Employee $employee
     *
     */
    public function delete(Employee $employee): ?bool
    {
        return $employee->delete();
    }

    /**
     * Get By Email
     *
     * @param  String $email
     * @return Employee
     */
    public function getByEmail($email): ?Employee
    {
        return $this->employees->getByEmail($email);
    }
}