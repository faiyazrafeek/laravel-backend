<?php

namespace domain\Services;

use App\Models\HumanResources\Shift;
use Illuminate\Database\Eloquent\Collection;

/**
 * Shift Service
 * php version 8
 *
 * @category Service
 * */
class ShiftService
{
    protected $shifts;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->shifts = new Shift();
    }

    /**
     * Get All Shift Records
     *
     *@return Collection
     */
    public function all(): ?Collection
    {
        return $this->shifts->all();
    }
    /**
     * Get Shift Records by Id
     * @param  int $id shift Id
     *
     * @return Shift
     */
    public function get($id): ?Shift
    {
        return $this->shifts->find($id);
    }

    /**
     * Make Shift Records
     *
     * @param  array $data Information About Shift
     *
     * @return Shift
     */
    public function make(array $data): ?Shift
    {
        return $this->create($data);
    }

    /**
     * Create Shift Records
     *
     * @param  array $data Information About Shift
     *
     * @return Shift
     */
    public function create(array $data): ?Shift
    {
        return $this->shifts->create($data);
    }

    /**
     * Edit Shift Records
     *
     * @param  Shift   $shift  Related Shift Object
     * @param  array  $data  Information About Shift
     *
     * @return array
     */
    public function edit(Shift $shift, array $data): ?array
    {
        return array_merge($shift->toArray(), $data);
    }

    /**
     * Update Shift
     *
     * @param  Shift  $shift
     * @param  array $data
     *
     * @return void
     */
    public function update(Shift $shift, array $data): void
    {
        $shift->update($this->edit($shift, $data));
    }

    /**
     * Delete Shift Records By id
     *
     * @param  Shift $shift
     *
     */
    public function delete(Shift $shift): ?bool
    {
        return $shift->delete();
    }

    /**
     * Get By Slug
     *
     * @param  String $slug
     * @return Shift
     */
    public function getBySlug($slug): ?Shift
    {
        return $this->shifts->getBySlug($slug);
    }
}