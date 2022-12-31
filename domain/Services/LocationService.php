<?php

namespace domain\Services;

use App\Models\HumanResources\Location;
use Illuminate\Database\Eloquent\Collection;

/**
 * Location Service
 * php version 8
 *
 * @category Service
 * */
class LocationService
{
    protected $locations;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->locations = new Location();
    }

    /**
     * Get All Employee Records
     *
     *@return Collection
     */
    public function all(): ?Collection
    {
        return $this->locations->all();
    }
    /**
     * Get Location Records by Id
     * @param  int $id location Id
     *
     * @return Location
     */
    public function get($id): ?Location
    {
        return $this->locations->find($id);
    }

    /**
     * Make Location Records
     *
     * @param  array $data Information About Location
     *
     * @return Location
     */
    public function make(array $data): ?Location
    {
        return $this->create($data);
    }

    /**
     * Create Location Records
     *
     * @param  array $data Information About Location
     *
     * @return Location
     */
    public function create(array $data): ?Location
    {
        return $this->locations->create($data);
    }

    /**
     * Edit Location Records
     *
     * @param  Location   $location  Related Location Object
     * @param  array  $data  Information About Location
     *
     * @return array
     */
    public function edit(Location $location, array $data): ?array
    {
        return array_merge($location->toArray(), $data);
    }

    /**
     * Update Location
     *
     * @param  Location  $location
     * @param  array $data
     *
     * @return void
     */
    public function update(Location $location, array $data): void
    {
        $location->update($this->edit($location, $data));
    }

    /**
     * Delete Location Records By id
     *
     * @param  Location $location
     *
     */
    public function delete(Location $location): ?bool
    {
        return $location->delete();
    }

    /**
     * Get By Slug
     *
     * @param  String $slug
     * @return Location
     */
    public function getBySlug($slug): ?Location
    {
        return $this->locations->getBySlug($slug);
    }
}