<?php

namespace App\Repositories;

use App\Sightseeing;
use Illuminate\Validation\ValidationException;
use App\Seo;

class SightseeingRepository
{
    private $data;
    private $model = 'Sightseeing';

    /**
     * Instantiate a new instance.
     *
     * @return void
     */
    public function __construct(Sightseeing $sightseeing)
    {
        $this->data = $sightseeing;
    }

    /**
     * Get todo query
     *
     * @return Sightseeing query
     */

    public function getQuery()
    {
        return $this->data->get();
    }

    /**
     * Find todo with given id or throw an error.
     *
     * @param integer $id
     * @return Sightseeing
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
     * @return Sightseeing
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
     * @return Sightseeing
     */
    public function create($params)
    {

        $data = $this->data->forceCreate($this->formatParams($params));
        $seo = new Seo();
        $seo->object_id = $data->id;
        $seo->object_model = $this->model;
        $seo->seo_title = isset($params['seo_title']) ? $params['seo_title'] : $data->name;
        $seo->seo_desc = isset($params['seo_desc']) ?  $params['seo_desc'] : $data->description;
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
            'description' => isset($params['description']) ? $params['description'] : null,
            'img' => isset($params['img']) ? $params['img'] : null,
            'destination_id' => isset($params['destination_id']) ? $params['destination_id'] : null,
        ];
        // if ($action === 'create') {
        //     $formatted['user_id'] = \Auth::user()->id;
        // }
        return $formatted;
    }




    /**
     * List sightseeing by name only
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
    public function update(Sightseeing $sightseeing, $params)
    {
        $sightseeing->forceFill($this->formatParams($params, 'update'))->save();
        $seo = SEO::where('object_id', $sightseeing->id)->where('object_model', 'Sightseeing')->first();
        $seo->object_id = $sightseeing->id;
        $seo->object_model = $this->model;
        $seo->seo_title = isset($params['seo_title']) ? $params['seo_title'] : $sightseeing->name;
        $seo->seo_desc = isset($params['seo_desc']) ?  $params['seo_desc'] : $sightseeing->description;
        $seo->seo_image = isset($params['seo_image']) ?  $params['seo_image'] : $sightseeing->tmp_img;
        $seo->save();
        return $sightseeing;
    }

    /**
     * Delete Branch.
     *
     * @param integer $id
     * @return bool|null
     */
    public function delete(Sightseeing $sightseeing)
    {
        return $sightseeing->delete();
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
