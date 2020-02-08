<?php
namespace App\Http\Controllers\Admin;
use App\DataTables\BlogDatatables;
use App\Http\Controllers\Controller;
use App\Repositories\BlogRepository;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    private $request;
    private $repo;
    private $data;
    private $datatable;
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, BlogDatatables $datatable, BlogRepository $repo)
    {
        $this->request = $request;
        $this->repo = $repo;
        $this->datatable = $datatable;
        $this->data = [
            'module' => 'Blog',
            'module-url' => route('admin.Blog.index'),
            'create-url' => route('admin.Blog.create'),
        ];

        // $this->user = $user;
        // $this->middleware('feature.available:todo');
    }


    public function index()
    {
        $data = $this->data;
        $datatable = $this->datatable;
        $data['page-doc'] = "index";
        return $datatable->render('admin.Blog.index', compact('data'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

                $form = [
            'title' => [
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
            'tmp_img' => [
                'type' => 'img',
                'tital' => 'Tmp Img',
                'width' => '4',
                'placeholder' => 'Pick a size...',
            ],
       
        ];
        $data = $this->data;
        $data['page-doc'] = "Create";
       // return view('admin.Destination.create', compact('data', 'form'));

          return view('admin.Blog.create', compact('data', 'form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input('title');
        $data = $this->repo->create($request->all());
        return redirect()->route('admin.Blog.index')->with('successMsg', 'Property is updated .');
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
    public function edit($id)
    {
      

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
        Blog::findOrFail($id)->delete();
        return redirect()->back();
    }
}
