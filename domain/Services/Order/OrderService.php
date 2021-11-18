<?php

namespace domain\Services\Order;

use App\Models\Order;
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
class OrderService
{
    protected $order;

    public function __construct()
    {
        $this->order = new Order();
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
    public function get(int $id): ?order
    {
        return $this->order->find($id);
    }
    /**
     * Get first gallery
     *
     * @return Gallery
     */
    public function getFirst(): ?order
    {
        return $this->order->first();
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
    public function create(array $data): order
    {
        return $this->order->create($data);
    }

    /**
     * Update Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return bool
     */
    public function update(Order $order, array $data): void
    {
        $order->update($this->edit($order, $data));
    }

    /**
     * Edit Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return array
     */
    protected function edit(Order $order, array $data): array
    {
        return array_merge($order->toArray(), $data);
    }

    /**
     * Delete a gallery
     *
     * @return string
     */
    public function delete(int $id): void
    {
        $order = $this->order->find($id);
        $order->delete();
    }

    /**
     * Update gallery status
     *
     * @param  Gallery $gallery
     *
     * @return void
     */
    public function status(Order $order): void
    {
        if ($order['status'] == 0) {
            $data['status'] = 1;
            $this->update($order, $data);
        } else {
            $data['status'] = 0;
            $this->update($order, $data);
        }
    }
}
