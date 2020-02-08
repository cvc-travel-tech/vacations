<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingPackageOption;
use App\BookingRoomType;
use App\Destination;
use App\Hotel;
use App\PackageOption;
use App\Repositories\BlogRepository;
use App\Repositories\PackageRepository;
use App\Images;
use App\PackagePrice;
use App\Package;
use App\Blog;
use App\booking_complimentary;
use App\booking_acom;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\sendbooking;

use App\Transfers;



class FrontendController extends Controller
{
    private $Blog;
    private $Package;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(BlogRepository $Blog, PackageRepository $Package)
    {
        $this->Blog = $Blog;
        $this->Package = $Package;
        $this->middleware('auth', ['only' => ['Booking']]);

    }


   


 public function my_profile($id)
    {
        
         $user = auth()->user();
        $Booking = Booking::where('email',$user->email)->get();

         return view('my_profile',compact('Booking'));
       // dd($Booking);
      //  return 'hello';
    }
    
    
    
     public function booking_d($id)
    {
        $comp=booking_complimentary::all()->where('booking_id',$id);
        $booking_Trans=Transfers::all()->where('booking_id',$id);
        $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
        $packages = Package::all();
        $booking_acoms=booking_acom::all()->where('booking_id',$id);
        $Booking_D = Booking::find($id);
        $roomdata=BookingRoomType::all()->where('booking_id',$id);

//dd($Booking_D);
         return view('booking_history',compact('Booking_D','roomdata','booking_Trans','data','packages','comp','booking_acoms'));
        
    }
    
    
    
    public function index()
    {

         $features = setting('site', 'features');       
         $destinations = Destination::latest()->limit(5)->withCount('Hotels')->with('tmpImg', 'Img')->get();

        $Package = Package::latest()->limit(5)->with('package_prices')->get();

//dd($Package);
         $hotels = Hotel::latest()->limit(8)->get();

         $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));


         return view('index', compact('features', 'titles', 'destinations', 'hotels', 'Package'));
    }


    public function about()
    {
        $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));

        return view('about', compact('titles'));
    }


    public function blog()
    {
        $blogs = $this->Blog->getQuery();
        $Blog=Blog::latest()->limit(8)->get();
                $titles = json_encode(collect(setting('site', 'titles'))->pluck('tital'));
        return view('blog', compact('blogs','titles','Blog'));
    }


    public function destinations()
    {
        $destinations = Destination::latest()->withCount('Hotels')->with('tmpImg', 'Img')->get();

        return view('destinations', compact('destinations'));
    }


    public function contact()
    {
        return view('contact');

    }



 public function register()
    {
        return view('registerr');

    }
    
    
    
    public function logiin()
    {
        return view('loginn');

    }

    public function Packages_details($slug)
    {

        $package = $this->Package->findOrFail($slug);

        $package['package_images'] = Images::whereIn('id', $package->images)->get();

        if (PackagePrice::where('package_id', $package->id)->count() > 0) {
            $apckage['prices'] = PackagePrice::where('package_id', $package->id)->first();
        }
     //   $package = Package::where('id', $id)->with('package_options', 'package_prices')->first();

     $package_price =PackagePrice::where('package_id',$package->id)->first();

        return view('Complete', compact('package','apckage','package_price'));
    }


    public function blog_details($id)
    {
        $Blog = Blog::find($id);
        return view('blog-details', compact('Blog'));
    }


    /*
    public function pack()
    {
        $packages = $this->Package->getQuery();
        foreach ($packages as $key => $package) {
            $package['package_images'] = Images::whereIn('id', $package->images)->get();

            if (PackagePrice::where('package_id', $package->id)->count() > 0) {

                $package['three_p_price'] = PackagePrice::
                    where('package_id', $package->id)
                        ->orderBy('id', 'desc')->first()->{'3_person'} ?? '';

            }

        }

        // dd($package);

        return view('Pack', compact('packages', 'package'));
    }
*/

    public function Complete()
    {

        return view('Complete');
    }


    public function Booking(Request $request ,$id)
    {
        
        
$package_price =PackagePrice::where('package_id',$id)->whereRaw('? between date and end_date', [request('dbook')])->first();

if(  $package_price == true){

     $package_price =PackagePrice::where('package_id',$id)->whereRaw('? between date and end_date', [request('dbook')])->first();
     $x= $request->input('dbook');
     $package = Package::where('id', $id)->with('package_options', 'package_prices')->first();
     return view('Booking', compact('package', 'x', 'package_price'));    
   
}else{
    
 return back()->with('success', 'You can not Booking This Package in This date plaeas  try again with anthor date');

}


      
      
    }




public function saveBooking(Request $request){
        
   //     dd(request()->all());
$user = auth()->user();
$curTime = new \DateTime();
$created_at = $curTime->format("Y-m-d H:i:s");

        $verification_code = rand(pow(10, 3), pow(10, 4) - 1);

        $booking_id = DB::table('bookings')->insertGetId([
            'payment_method' => 1,
            'package_id' => request('package_id'),
            'email' => $user->email,
            'verification_code' => $verification_code,
            'phone' =>$user->phone,
            'special_requirements' => $request->input('customer_notes'),
            'no_of_children' => $request->input('chiled'),
            'res_at' => $request->input('date_du'),
            'total_price' => $request->input('x'),
            'created_at' =>$created_at,

        
        ]);
        
        

        $index_loop = 0;

    foreach (request('room_type') as $key => $value) {

            for ($i = $index_loop; $i < $value + $index_loop; $i++) {
                DB::table('booking_room_types')->insert([
                    'booking_id' => $booking_id,
                    'room_type' => $value,
                    'gender' => request('gender.' . $i),
                    'first_name' => request('first_name.' . $i),
                    'last_name' => request('last_name.' . $i),
                    'phone' => request('phone.' . $i),
                    'nationality' => request('nationality.' . $i),
                ]);
            }

            $index_loop += $value;

    }




        foreach (request('package_options') as $key => $value) {
            $option_price = PackageOption::where('id', $value)->first()->price;
            BookingPackageOption::create([
                'booking_id' => $booking_id,
                'package_option_id' => $value,
                'no_of_pax' => request('no_of_pax')[$key],
                'price' => $option_price,
            ]);
        }


     $data= 'Visit Link : http://to-istanbultours.com/verify?email=' .$user->email.'&hash='. $verification_code;
$name= auth()->user()->name;

Mail::send(new sendbooking($name,$data) ) ;
/////////////////
    //   $data['mainemail'] =$user->email;
       
       
    //           $data ['level'] = 'success';
       
    // $data['introLines'] = ['Visit Link : http://to-istanbultours.com/Tur/public/verify?email=' .$user->email.'&hash='. $verification_code];
       
       
    //           $data['outroLines'] = ['Thank You For Using Our Website!'];
    //           sendEmail($data);
///////////////////
         return   redirect('/')->with('success', 'Your request has been registered successfully. Please confirm your email in inbox or Spam');
    }
    
    





    public function destinations_details($id)
    {
        $hotels = Hotel::all()->where('destination_id', $id);
        $destinations_details = Destination::find($id);
        return view('destinations_details', compact('destinations_details', 'hotels'));
    }


    public function bookingVerify()
    {
        $booking = Booking::where('email', request('email'))->where('verification_code', request('hash'))->first();
//dd(request('hash'));

        if ($booking->is_verified == 1) {

        
            return 'you had verified this booking before.';

          
        }else{

    $booking->update(['is_verified' => 1]);

//    $data['mainemail'] = 'didobedo31@gmail.com';

     $data['mainemail'] = 'om.ist.ofuk@gmail.com';
    $data ['level'] = 'success';
           
           
        $data['introLines'] = ['There are an resarvation'];
           
           
                  $data['outroLines'] = ['Please check the Admin panel!'];
    sendEmail($data);
    return 'booking has been verified successfully!';
   
  
   
}
    }


    public function hotel_ditails($id)
    {
        $hotel_ditails = Hotel::find($id);
        return view('hotel_ditails', compact('hotel_ditails'));
    }


    public function Pack()
    {
        $Package = Package::all();
        return view('Pack', compact('Package'));
    }



    public function spdf(){

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

    }

}
