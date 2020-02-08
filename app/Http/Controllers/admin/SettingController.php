<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    private $request;
    private $repo;
    private $data;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, SettingRepository $repo)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->data = [
            'module' => 'Setting',
            'module-url' => route('admin.setting.index'),
            'create-url' => route('admin.setting.create'),
        ];

        // $this->user = $user;
        // $this->middleware('feature.available:todo');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rows = $this->repo->getQuery();

        $inputVal = [];
        foreach ($rows as $row) {
            $inputVal[$row->group . '[' . $row->name . ']'] = $row->val;
        }

//        dd($inputVal);
        $form = [
            'site' => [
                'site[name]' => [
                    'type' => 'text',
                    'tital' => 'Site Name',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'site[description]' => [
                    'type' => 'textarea',
                    'tital' => 'Site Description',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'site[logo]' => [
                    'type' => 'img',
                    'tital' => 'Site Logo',
                    'width' => '3',
                    'placeholder' => 'Pick a size...',
                ],
                'site[mine-img]' => [
                    'type' => 'img',
                    'tital' => 'Mine Img',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'site[features]' => [
                    'type' => 'json',
                    'tital' => 'Features',
                    'width' => '12',
                    'inputs' => [
                        'tital' => [
                            'type' => 'text',
                            'tital' => 'Tital',
                            'width' => '40%',
                            'placeholder' => 'Pick a size...',
                        ],

                        'description' => [
                            'type' => 'text',
                            'tital' => 'description',
                            'width' => '40%',
                            'placeholder' => 'Pick a size...',
                        ],


                        'icon' => [
                            'type' => 'img',
                            'tital' => 'Icon',
                            'width' => '20%',
                            'placeholder' => 'Pick a size...',
                        ],

                    ],
                ],
                'site[titles]' => [
                    'type' => 'json',
                    'tital' => 'Site Titles',
                    'width' => '12',
                    'inputs' => [
                        'tital' => [
                            'type' => 'text',
                            'tital' => 'Tital',
                            'width' => '90%',
                            'placeholder' => 'Pick a size...',
                        ],

                    ],
                ], 'about[imgAbout]' => [
                    'type' => 'img',
                    'tital' => 'About Image',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'about[content]' => [
                    'type' => 'ckeditor',
                    'tital' => 'Site Description',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],

            ],
            'admin' => [
                'admin[sitename]' => [
                    'type' => 'text',
                    'tital' => 'admin Name',
                    'width' => '12',
                    'placeholder' => 'Pick a size...',
                ],
                'admin[logo]' => [
                    'type' => 'img',
                    'tital' => 'admin Logo',
                    'width' => '3',
                    'placeholder' => 'Pick a size...',
                ],
            ],
            'app' => [
                'app[android-url]' => [
                    'type' => 'text',
                    'tital' => 'Android Url',
                    'width' => '12',
                    'placeholder' => 'https://play.google.com/store/apps/details?id=com....',
                ],
                'app[apple-url]' => [
                    'type' => 'text',
                    'tital' => 'Apple Url',
                    'width' => '3',
                    'placeholder' => 'https://apps.apple.com/us/app/...',
                ],
            ]
        ];
        // dd();
        //dd($form);
        $data = $this->data;
        $data['page-doc'] = "Setting";
        return view('admin.Setting.index', compact('data', 'form', 'inputVal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $data = $this->repo->update($data, $this->request->all());
        $data = $this->repo->create($request->all());

        return redirect()->route('admin.setting.index')->with('successMsg', 'Property is updated .');
    }
}
