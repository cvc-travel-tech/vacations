<?php

namespace App\Repositories;

use App\Package;
use Illuminate\Validation\ValidationException;
use App\Seo;

class PackageRepository
{
    private $data;
    private $model = 'Package';

    /**
     * Instantiate a new instance.
     *
     * @return void
     */
    public function __construct(Package $package)
    {
        $this->data = $package;
    }

    /**
     * Get todo query
     *
     * @return Package query
     */

    public function getQuery()
    {
        return $this->data->get();
    }

    /**
     * Find todo with given id or throw an error.
     *
     * @param integer $id
     * @return Package
     */

    public function findOrFail($slug)
    {
        $data = $this->data->where('slug', $slug)->first();
        if (!$data) {
            throw ValidationException::withMessages(['message' => trans('todo.could_not_find')]);
        }
        return $data;
    }

    /**
     * Find todo with given id or throw an error.
     *
     * @param integer $id
     * @return Package
     */

    public function find($id)
    {
        $data = $this->data->find($id);
        if (!$data) {
            throw ValidationException::withMessages(['message' => trans('todo.could_not_find')]);
        }
        return $data;
    }

    /**
     * Paginate all todos using given params.
     *
     * @param array $params
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */

    public function paginate($params)
    {

        $sort_by = isset($params['sort_by']) ? $params['sort_by'] : 'created_at';
        $order = isset($params['order']) ? $params['order'] : 'desc';
        $page_length = isset($params['page_length']) ? $params['page_length'] : config('config.page_length');
        $keyword = isset($params['keyword']) ? $params['keyword'] : null;
        $status = isset($params['status']) ? $params['status'] : 0;
        $start_date = isset($params['start_date']) ? $params['start_date'] : null;
        $end_date = isset($params['end_date']) ? $params['end_date'] : null;
        $query = $this->data;
        return $query->orderBy($sort_by, $order)->paginate($page_length);
    }

    /**
     * Create a new todo.
     *
     * @param array $params
     * @return Package
     */
    public function create($params)
    {

        $data = $this->data->forceCreate($this->formatParams($params));
        $seo = new Seo();
        $seo->object_id = $data->id;
        $seo->object_model = $this->model;
        $seo->seo_title = isset($params['seo_title']) ? $params['seo_title'] : $data->name;
        $seo->seo_desc = isset($params['seo_desc']) ?  $params['seo_desc'] : $data->overview;
        $seo->seo_image = isset($params['seo_image']) ?  $params['seo_image'] : $data->tmp_img;
        $seo->save();
        return $data;
    }
    /**
     * Prepare given params for inserting into database.
     *
     * @param array $params
     * @param string $type
     * @return array
     */
    private function formatParams($params, $action = 'create')
    {
        $formatted = [
            'name' => isset($params['name']) ? $params['name'] : null,
            'overview' => isset($params['overview']) ? $params['overview'] : null,
            'duration' => isset($params['duration']) ? $params['duration'] : null,
            'itinerary' => isset($params['itinerary']) ? $params['itinerary'] : null,
            'inclusion' => isset($params['inclusion']) ? $params['inclusion'] : null,
            'trip_map' => isset($params['trip_map']) ? $params['trip_map'] : null,
            'client_reviews' => isset($params['client_reviews']) ? $params['client_reviews'] : null,
            'flight_prices' => isset($params['flight_prices']) ? $params['flight_prices'] : null,
            'options' => isset($params['options']) ? $params['options'] : null,
            'trip_video' => isset($params['trip_video']) ? $params['trip_video'] : null,
            'daly' => isset($params['daly']) ? $params['daly'] : null,
            'type' => isset($params['type']) ? $params['type'] : null,
            'images' => isset($params['images']) ? $params['images'] : null,
        ];
        // if ($action === 'create') {
        //     $formatted['user_id'] = \Auth::user()->id;
        // }
        return $formatted;
    }


    /**
     * List package by name only
     *
     * @param string $token
     * @return Catorgy
     */

    public function listByName()
    {
        return $this->data->get()->pluck('name', 'id')->all();
    }


    /**
     * Update given Branch.
     *
     * @param Branch $branch
     * @param array $params
     *
     * @return branch
     */
    public function update(Package $package, $params)
    {
        $package->forceFill($this->formatParams($params, 'update'))->save();
        $seo = SEO::where('object_id', $package->id)->where('object_model', 'Package')->first();
        $seo->object_id = $package->id;
        $seo->object_model = $this->model;
        $seo->seo_title = isset($params['seo_title']) ? $params['seo_title'] : $package->name;
        $seo->seo_desc = isset($params['seo_desc']) ?  $params['seo_desc'] : $package->overview;
        $seo->seo_image = isset($params['seo_image']) ?  $params['seo_image'] : $package->tmp_img;
        $seo->save();
        return $package;
    }

    /**
     * Delete Branch.
     *
     * @param integer $id
     * @return bool|null
     */
    public function delete(Package $package)
    {
        return $package->delete();
    }

    /**
     * Delete multiple branches.
     *
     * @param array $ids
     * @return bool|null
     */
    public function deleteMultiple($ids)
    {
        return $this->data->whereIn('id', $ids)->delete();
    }
}
