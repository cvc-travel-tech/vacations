<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DestinationDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\DestinationRepository;
use App\Http\Requests\LocationRequest;
use Illuminate\Http\Request;
use App\Destination;

class DestinationController extends Controller
{

    private $request;
    private $repo;
    private $data;
    private $datatable;
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, DestinationDatatables $datatable, DestinationRepository $repo)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->datatable = $datatable;
        $this->data = [
            'module' => 'Destination',
            'module-url' => route('admin.destination.index'),
            'create-url' => route('admin.destination.create'),
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


        $data = $this->data;
        $datatable = $this->datatable;
        $data['page-doc'] = "index";
        return $datatable->render('admin.Destination.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $form = [
            'name' => [
                'type' => 'text',
                'tital' => 'Name',
                'placeholder' => 'Pick a size...',
            ],
            'description' => [
                'type' => 'ckeditor',
                'tital' => 'description',
                'placeholder' => 'Pick a size...',

            ],
            'img' => [
                'type' => 'img',
                'tital' => 'Img',
                'width' => '12',
                'placeholder' => 'Pick a size...',
            ],
            // 'img2' => [
            //     'type' => 'multi-image',
            //     'tital' => 'multi-image',
            //     'width' => '12',
            //     'placeholder' => 'Pick a size...',
            // ],
            'tmp_img' => [
                'type' => 'img',
                'tital' => 'Tmp Img',
                'width' => '12',
                'placeholder' => 'Pick a size...',
            ],
            'locations' => [
                'type' => 'json',
                'tital' => 'Tmp Img',
                'width' => '12',
                'inputs' => [
                    'tital' => [
                        'type' => 'text',
                        'tital' => 'Tmp Img',
                        'width' => '20%',
                        'placeholder' => 'Pick a size...',
                    ],
                    'description' => [
                        'type' => 'ckeditor',
                        'tital' => 'description',
                        'placeholder' => 'Pick a size...',
                        'width' => '55%',
                    ],
                    'tmp_img' => [
                        'type' => 'img',
                        'tital' => 'Tmp Img',
                        'width' => '20%',
                        'placeholder' => 'Pick a size...',
                    ],

                ],
                'placeholder' => 'Pick a size...',
            ],
        ];
        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Destination.create', compact('data', 'form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        //
        $data = $this->repo->create($request->all());
        return redirect()->route('admin.destination.index')->with('successMsg', 'Property is updated .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $rows = $this->repo->findOrFail($slug);
       // $rows['SEO'] = $rows->getSeoMeta();
        $form = [
            'name' => [
                'type' => 'text',
                'tital' => 'Name',
                'placeholder' => 'Pick a size...',
            ],
            'description' => [
                'type' => 'ckeditor',
                'tital' => 'description',
                'placeholder' => 'Pick a size...',

            ],
            'img' => [
                'type' => 'img',
                'tital' => 'Img',
                'width' => '12',
                'placeholder' => 'Pick a size...',
            ],
            // 'img2' => [
            //     'type' => 'multi-image',
            //     'tital' => 'multi-image',
            //     'width' => '12',
            //     'placeholder' => 'Pick a size...',
            // ],
            'tmp_img' => [
                'type' => 'img',
                'tital' => 'Tmp Img',
                'width' => '12',
                'placeholder' => 'Pick a size...',
            ],
            'locations' => [
                'type' => 'json',
                'tital' => 'Tmp Img',
                'width' => '12',
                'inputs' => [
                    'tital' => [
                        'type' => 'text',
                        'tital' => 'Tmp Img',
                        'width' => '20%',
                        'placeholder' => 'Pick a size...',
                    ],
                    'description' => [
                        'type' => 'ckeditor',
                        'tital' => 'description',
                        'placeholder' => 'Pick a size...',
                        'width' => '55%',
                    ],
                    'tmp_img' => [
                        'type' => 'img',
                        'tital' => 'Tmp Img',
                        'width' => '20%',
                        'placeholder' => 'Pick a size...',
                    ],

                ],
                'placeholder' => 'Pick a size...',
            ],
        ];
        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Destination.edit', compact('data', 'form', 'rows'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $this->repo->find($id);
        $data = $this->repo->update($data, $this->request->all());
        return redirect()->route('admin.destination.index')->with('successMsg', 'Property is updated .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Destination::findOrFail($id)->delete();
        return redirect()->back();
    }
}
