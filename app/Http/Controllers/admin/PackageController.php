<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PackageDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\PackageRepository;
use App\Repositories\DestinationRepository;
use App\Http\Requests\PackageRequest;
use Illuminate\Http\Request;
use App\PackagePrice;
use App\PackageOption;
use App\Package;

class PackageController extends Controller
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
    public function __construct(Request $request, PackageDatatables $datatable, PackageRepository $repo, DestinationRepository $destinations)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->destinations = $destinations;
        $this->datatable = $datatable;
        $this->data = [
            'module' => 'Package',
            'module-url' => route('admin.package.index'),
            'create-url' => route('admin.package.create'),
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
        return $datatable->render('admin.Package.index', compact('data'));
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
        return view('admin.Package.create', compact('data', 'form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {


        //
        // dd($request->all());


        
        $data = $this->repo->create($request->all());

        foreach(request('options') as $key => $value){
             PackageOption::create([
                'package_id' => $data->id,
                'name' => $value['Name'],
                'price' => $value['price'],    
            ]);

        }

        foreach(request('daly') as $key => $value){
      
    $start_date = (\DateTime::createFromFormat('m/d/Y', rtrim(explode('-',$value['datepicker'])[0])))->format('Y-m-d');
    $end_date = (\DateTime::createFromFormat('m/d/Y', ltrim(explode('-',$value['datepicker'])[1])))->format('Y-m-d');

          PackagePrice::create([
                'package_id' => $data->id,
                'date' => $start_date,
                'end_date' => $end_date,    
                'solo' => $value['solo'],
                'p_p' => $value['p-p'],
                'three_person' => $value['3person'],
                'sgl' => $value['sgl']
            ]);
        }
      
        return redirect()->route('admin.package.index')->with('successMsg', 'Property is updated .');
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
                'placeholder' => 'package Title',
            ],
            'duration' => [
                'type' => 'text',
                'tital' => 'Duration',
                'placeholder' => 'Duration (7 days / 6 night)',
            ],
            'overview' => [
                'type' => 'ckeditor',
                'tital' => 'Overview',
                'placeholder' => 'overview ',
            ],
            'images' => [
                'type' => 'multi-image',
                'tital' => 'images',
                'width' => '12',
                'placeholder' => 'Selecte Images',
            ],
            'itinerary' => [
                'type' => 'ckeditor',
                'tital' => 'itinerary',
                'placeholder' => 'itinerary',
            ],
            // 'trip_video' => [
            //     'type' => 'text',
            //     'tital' => 'Trip Video',
            //     'placeholder' => 'Trip Video (youtub <ifram>)',
            // ],
            'inclusion' => [
                'type' => 'ckeditor',
                'tital' => 'Package Inclusion',
                'placeholder' => 'Package Inclusion',
            ],
 
            // 'trip_map' => [
            //     'type' => 'text',
            //     'tital' => 'Trip Map',
            //     'placeholder' => 'Pick a size...',
            // ],
            // 'client_reviews' => [
            //     'type' => 'text',
            //     'tital' => 'Client Reviews',
            //     'placeholder' => 'Pick a size...',
            // ],
            // 'flight_prices' => [
            //     'type' => 'number',
            //     'tital' => 'Flight Prices',
            //     'placeholder' => 'Pick a size...',
            // ],

            'options' => [
                'type' => 'json',
                'tital' => 'options',
                'width' => '12',
                'inputs' => [
                    'Name' => [
                        'type' => 'text',
                        'tital' => 'Name',
                        'width' => '60%',
                        'placeholder' => 'Pick a size...',
                    ],
                    'price' => [
                        'type' => 'number',
                        'tital' => 'Price',
                        'placeholder' => 'Pick a size...',
                        'width' => '30%',
                    ],

                ]
                ],
            'daly' => [
                'type' => 'json',
                'tital' => 'Price categories ',
                'width' => '12',
                'inputs' => [
                    'datepicker' => [
                        'type' => 'datepicker',
                        'tital' => 'date From : To',
                        'width' => '20%',
                        'placeholder' => 'date From : To',
                    ],
                    'solo' => [
                        'type' => 'number',
                        'tital' => 'solo',
                        'placeholder' => 'Pick a size...',
                        'width' => '20%',
                    ],
                    'p-p' => [
                        'type' => 'number',
                        'tital' => 'per person in Double',
                        'placeholder' => 'per person in Double',
                        'width' => '20%',
                    ],
                    '3person' => [
                        'type' => 'number',
                        'tital' => 'per person in Triple ',
                        'placeholder' => 'Pick a size...',
                        'width' => '20%',
                    ],
                    'sgl' => [
                        'type' => 'number',
                        'tital' => 'SGL',
                        'placeholder' => 'SGL',
                        'width' => '20%',
                    ],

                ]
            ]
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
        return view('admin.Package.edit', compact('data', 'form', 'rows'));
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
        
        return redirect()->route('admin.package.index')->with('successMsg', 'Property is updated .');
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
        Package::findOrFail($id)->delete();
        return redirect()->back();
    }
}
