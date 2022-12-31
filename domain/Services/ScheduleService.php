<?php

namespace domain\Services;

use App\Models\HumanResources\Schedule;
use Illuminate\Database\Eloquent\Collection;

/**
 * Schedule Service
 * php version 8
 *
 * @category Service
 * */
class ScheduleService
{
    protected $schedules;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->schedules = new Schedule();
    }

    /**
     * Get All Employee Records
     *
     *@return Collection
     */
    public function all(): ?Collection
    {
        return $this->schedules->all();
    }
    /**
     * Get Schedule Records by Id
     * @param  int $id schedule Id
     *
     * @return Schedule
     */
    public function get($id): ?Schedule
    {
        return $this->schedules->find($id);
    }

    /**
     * Make Schedule Records
     *
     * @param  array $data Information About Schedule
     *
     * @return Schedule
     */
    public function make(array $data): ?Schedule
    {
        return $this->create($data);
    }

    /**
     * Create Schedule Records
     *
     * @param  array $data Information About Schedule
     *
     * @return Schedule
     */
    public function create(array $data): ?Schedule
    {
        return $this->schedules->create($data);
    }

    /**
     * Edit Schedule Records
     *
     * @param  Schedule   $schedule  Related Schedule Object
     * @param  array  $data  Information About Schedule
     *
     * @return array
     */
    public function edit(Schedule $schedule, array $data): ?array
    {
        return array_merge($schedule->toArray(), $data);
    }

    /**
     * Update Schedule
     *
     * @param  Schedule  $schedule
     * @param  array $data
     *
     * @return void
     */
    public function update(Schedule $schedule, array $data): void
    {
        $schedule->update($this->edit($schedule, $data));
    }

    /**
     * Delete Employee Records By id
     *
     * @param  Schedule $schedule
     *
     */
    public function delete(Schedule $schedule): ?bool
    {
        return $schedule->delete();
    }
}