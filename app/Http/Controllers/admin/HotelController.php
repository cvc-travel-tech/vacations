<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\HotelDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\HotelRepository;
use App\Repositories\DestinationRepository;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
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
    public function __construct(Request $request, HotelDatatables $datatable, HotelRepository $repo, DestinationRepository $destinations)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->destinations = $destinations;
        $this->datatable = $datatable;
        $this->data = [
            'module' => 'Hotel',
            'module-url' => route('admin.hotel.index'),
            'create-url' => route('admin.hotel.create'),
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
        return $datatable->render('admin.Hotel.index', compact('data'));
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
        return view('admin.Hotel.create', compact('data', 'form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        //
        // dd($request->all());
        $data = $this->repo->create($request->all());
        return redirect()->route('admin.hotel.index')->with('successMsg', 'Property is updated .');
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
            'email' => [
                'type' => 'text',
                'tital' => 'Email',
                'placeholder' => 'Pick a size...',
            ],
            'phone' => [
                'type' => 'text',
                'tital' => 'Phone Number',
                'placeholder' => 'Pick a size...',
            ],
            'overview' => [
                'type' => 'ckeditor',
                'tital' => 'Overview',
                'placeholder' => 'Pick a size...',
            ],
            'destination_id' => [
                'type' => 'select',
                'array' => $this->destinations->listByName(),
                'tital' => 'Destination',
                // 'multiple' => 'multiple',
                'placeholder' => 'Pick a size...',
            ],
            'images' => [
                'type' => 'multi-image',
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
       // $rows['seo'] = $rows->getSeoMeta();
        $form = $this->Form();
        $data = $this->data;
        $data['page-doc'] = "Create";
        return view('admin.Hotel.edit', compact('data', 'form', 'rows'));
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
        return redirect()->route('admin.hotel.index')->with('successMsg', 'Property is updated .');
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
        Hotel::findOrFail($id)->delete();
        return redirect()->back();
    }
}
