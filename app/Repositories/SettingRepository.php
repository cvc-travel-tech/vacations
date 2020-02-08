<?php

namespace App\Repositories;

use App\Setting;
use Illuminate\Validation\ValidationException;
use App\Seo;

class SettingRepository
{
    private $data;
    private $model = 'Setting';

    /**
     * Instantiate a new instance.
     *
     * @return void
     */
    public function __construct(Setting $setting)
    {
        $this->data = $setting;
    }

    /**
     * Get todo query
     *
     * @return Setting query
     */

    public function getQuery()
    {
        return $this->data->get();
    }

    /**
     * Find todo with given id or throw an error.
     *
     * @param integer $id
     * @return Setting
     */

    public function findOrFail($id)
    {
        $data = $this->data->find($id);
        if (!$data) {
            throw ValidationException::withMessages(['message' => trans('todo.could_not_find')]);
        }
        return $data;
    }

    /**
     * Find todo with given id or throw an error.
     *
     * @param integer $id
     * @return Setting
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
            'imgAbout' => isset($params['imgAbout']) ? $params['imgAbout'] : null,
            'content' => isset($params['content']) ? $params['content'] : null,
            'tmp_img' => isset($params['tmp_img']) ? $params['tmp_img'] : null,
            'img' => isset($params['img']) ? $params['img'] : null,
            'locations' => isset($params['locations']) ? $params['locations'] : null,
        ];
        // if ($action === 'create') {
        //     $formatted['user_id'] = \Auth::user()->id;
        // }
        return $formatted;
    }


    /**
     * Create a new todo.
     *
     * @param array $params
     * @return Destination
     */
    public function create($params)
    {
        foreach ($params as $paramskey => $params) {
            if ($paramskey != "_token") {
                foreach ($params as $key => $value) {
                    # code...
                    $data = $this->data->updateOrCreate(['group' => $paramskey, 'name' => $key], ['val' => $value]);
                }
            }
        }
        return $data;
    }

    /**
     * List setting by name only
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
    public function update(Setting $setting, $params)
    {
        $setting->forceFill($this->formatParams($params, 'update'))->save();
        return $setting;
    }
}
