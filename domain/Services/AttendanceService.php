<?php

namespace domain\Services;

use App\Models\HumanResources\Attendance;
use Illuminate\Database\Eloquent\Collection;

/**
 * Attendance Service
 * php version 8
 *
 * @category Service
 * */
class AttendanceService
{
    protected $attendance;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->attendance = new Attendance();
    }

    /**
     * Get All Attendance Records
     *
     *@return Collection
     */
    public function all(): ?Collection
    {
        return $this->attendance->all();
    }
    /**
     * Get Attendance Records by Id
     * @param  int $id attendance Id
     *
     * @return Attendance
     */
    public function get($id): ?Attendance
    {
        return $this->attendance->find($id);
    }

    /**
     * Make Attendance Records
     *
     * @param  array $data Information About Attendance
     *
     * @return void
     */
    public function make(array $data): ?Attendance
    {
        return $this->create($data);
    }

    /**
     * Create Attendance Records
     *
     * @param  array $data Information About Attendance
     *
     * @return Attendance
     */
    public function create(array $data): ?Attendance
    {
        return $this->attendance->create($data);
    }

    /**
     * Edit Attendance Records
     *
     * @param  Attendance   $attendance  Related Attendance Object
     * @param  array  $data  Information About Attendance
     *
     * @return array
     */
    public function edit(Attendance $attendance, array $data): ?array
    {
        return array_merge($attendance->toArray(), $data);
    }

    /**
     * Update Attendance
     *
     * @param  Attendance  $attendance
     * @param  array $data
     *
     * @return void
     */
    public function update(Attendance $attendance, array $data): void
    {
        $attendance->update($this->edit($attendance, $data));
    }

    /**
     * Delete Attendance Records By id
     *
     * @param  Attendance $attendance
     *
     */
    public function delete(Attendance $attendance): ?bool
    {
        return $attendance->delete();
    }

    /**
     * Get By Employee
     *
     * @param  Int $employeeId
     * @return Collection
     */
    public function getByEmployee(int $employeeId): ?Collection
    {
        return $this->attendance->getByEmployee($employeeId);
    }
}