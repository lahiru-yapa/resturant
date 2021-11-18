<?php

namespace domain\Services\Sub;

use App\Models\Sub;
use domain\Facades\Gallery\AlbumFacade;
use Illuminate\Database\Eloquent\Collection;

/**
 * Gallery Service
 *
 * php version 8
 *
 * @category Service
 * @author   Spera Labs <janith@speralabs.com.au>
 * @license  https://niwadudeals.lk Config
 * @link     https://niwadudeals.lk/
 **/
class SubService
{
    protected $sub;

    public function __construct()
    {
        $this->sub = new Sub();
    }

    /**
     * All Gallery
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        return $this->contact->all();
    }

    /**
     * Get gallery using id
     *
     * @param int $id
     *
     * @return Gallery
     */
    public function get(int $id): ?sub
    {
        return $this->sub->find($id);
    }
    /**
     * Get first gallery
     *
     * @return Gallery
     */
    public function getFirst(): ?sub
    {
        return $this->sub->first();
    }

    /**
     * Make gallery
     *
     * @param array $data
     *
     * @return Gallery
     */
    public function make(array $data)
    {
        return $this->create($data);
    }

    /**
     * Create gallery
     *
     * @param array $data
     *
     * @return Gallery
     */
    public function create(array $data): sub
    {
        return $this->sub->create($data);
    }

    /**
     * Update Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return bool
     */
    public function update(Sub $sub, array $data): void
    {
        $sub->update($this->edit($sub, $data));
    }

    /**
     * Edit Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return array
     */
    protected function edit(Sub $sub, array $data): array
    {
        return array_merge($sub->toArray(), $data);
    }

    /**
     * Delete a gallery
     *
     * @return string
     */
    public function delete(int $id): void
    {
        $sub = $this->sub->find($id);
        $sub->delete();
    }

    /**
     * Update gallery status
     *
     * @param  Gallery $gallery
     *
     * @return void
     */
    public function status(Sub $sub): void
    {
        if ($sub['status'] == 0) {
            $data['status'] = 1;
            $this->update($sub, $data);
        } else {
            $data['status'] = 0;
            $this->update($sub, $data);
        }
    }
}
