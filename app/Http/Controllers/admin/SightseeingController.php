<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SightseeingDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\SightseeingRepository;
use App\Repositories\DestinationRepository;
use App\Http\Requests\SightseeingRequest;
use Illuminate\Http\Request;
use App\Sightseeing;

class SightseeingController extends Controller
{

    private $request;
    private $repo;
    private $destinations;
    private $data;
    private $datatable;
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, SightseeingDatatables $datatable, SightseeingRepository $repo, DestinationRepository $destinations)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->destinations = $destinations;
        $this->datatable = $datatable;
        $this->data = [
            'module' => 'Sightseeing',
            'module-url' => route('admin.sightseeing.index'),
            'create-url' => route('admin.sightseeing.create'),
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
        return $datatable->render('admin.Sightseeing.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $destinations = ;
        $form = $this->Form();
        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Sightseeing.create', compact('data', 'form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SightseeingRequest $request)
    {
        //
        $data = $this->repo->create($request->all());
        return redirect()->route('admin.sightseeing.index')->with('successMsg', 'Property is updated .');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Form()
    {
        //
        return  $form = [
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
            'description_id' => [
                'type' => 'select',
                'array' => $this->destinations->listByName(),
                'tital' => 'Destination',
                // 'multiple' => 'multiple',
                'placeholder' => 'Pick a size...',

            ],
            'img' => [
                'type' => 'img',
                'tital' => 'Img',
                'width' => '12',
                'placeholder' => 'Pick a size...',
            ],
        ];
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
        $rows['seo'] = $rows->getSeoMeta();
        $form = $this->Form();


        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Sightseeing.edit', compact('data', 'form', 'rows'));
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
        return redirect()->route('admin.sightseeing.index')->with('successMsg', 'Property is updated .');
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
        Sightseeing::findOrFail($id)->delete();
        return redirect()->back();
    }
}
