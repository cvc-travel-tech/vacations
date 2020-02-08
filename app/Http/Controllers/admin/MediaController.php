<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DestinationDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\DestinationRepository;
use Illuminate\Http\Request;
use Image;
use App\Images;

class MediaController extends Controller
{

    public static $defaultSize = [
        'thumb' => [
            150,
            150
        ],
        'medium' => [
            600,
            600
        ],
        'large' => [
            1024,
            1024
        ],
    ];



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
    public function getImages()
    {
        // return Images::all();
        return  response()->json(Images::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('file')) {

            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $path = storage_path('tmp/uploads');
            $path2 = storage_path('tmp/uploads/thumb');
            $path3 = storage_path('tmp/uploads/medium');
            $path4 = storage_path('tmp/uploads/large');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if (!file_exists($path2)) {
                mkdir($path2, 0777, true);
            }
            if (!file_exists($path3)) {
                mkdir($path3, 0777, true);
            }
            if (!file_exists($path4)) {
                mkdir($path4, 0777, true);
            }

            //Upload File
            $request->file('file')->storeAs('public/tmp/uploads', $filenametostore);
            $request->file('file')->storeAs('public/tmp/uploads/thumb', $filenametostore);
            $request->file('file')->storeAs('public/tmp/uploads/medium', $filenametostore);
            $request->file('file')->storeAs('public/tmp/uploads/large', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/tmp/uploads/thumb/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);

            //Resize image here
            $thumbnailpath = public_path('storage/tmp/uploads/medium/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);

            //Resize image here
            $thumbnailpath = public_path('storage/tmp/uploads/large/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1024, 1024, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
            Images::forceCreate([
                'file_path'  =>  $filenametostore,
                'file_name'  =>  $filename,
                'file_type'  =>  $extension,
            ]);
            return response()->json([
                'name'          => $filenametostore,
                // 'original_name' => $file->getClientOriginalName(),
            ]);
        }
    }
}
