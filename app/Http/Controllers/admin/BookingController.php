<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Package;
use App\BookingPackageOption;
use PDF;
use App\Product;
use App\Transfers;
use App\booking_complimentary;
use App\booking_site_seeing;
use App\User;
use App\BookingRoomType;
class BookingController extends Controller

{
    
    
    public function index()
    {
        $data = Booking::with('package')->latest()->paginate();
        return view('admin.Booking.index', compact('data'));
    }



    public function store()
    {

    }



    public function show($id)
    {

        $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();

        dd($data);


        // $roomdata=BookingRoomType::all()->where('booking_id',$id);
        // $data = Booking::find($id);
        // $filename=$data->id;
        // $pdf = PDF::loadView('admin.Booking.pdf',compact('data','roomdata'))->setPaper('a4', 'portrait');
        // return $pdf->stream( $filename,'.pdf');

    }



    public function edit($id)
    {
        $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
        $packages = Package::all();

        return view('admin.Booking.edit', compact('data','packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



//     public function update($id)
//     {

// //dd(request($id));


//         foreach (request('item_name') as $key => $value) {
//           //  dd(request('i_name.'.$key));
//         $add = new Product();
//         $add->name =request('item_name.'.$key);
//         $add->description = request('i_name.'.$key);
//         $add->price =$id;
//         $add->save();


//         }




        
//       // dd(request()->all());
//     //     Booking::findOrFail($id)->update(request()->all());


//     //     foreach (request('room_type') as $key => $value) {

//     //         for ($i = $index_loop; $i < $value + $index_loop; $i++) {
//     //             DB::table('booking_room_types')->insert([
//     //                 'booking_id' => $booking_id,
//     //                 'room_type' => $value,
//     //                 'gender' => request('gender.' . $i),
//     //                 'first_name' => request('first_name.' . $i),
//     //                 'last_name' => request('last_name.' . $i),
//     //                 'phone' => request('phone.' . $i),
//     //                 'nationality' => request('nationality.' . $i),
//     //             ]);
//     //         }

//     //         $index_loop += $value;

//     // }


//     //     return back()->with('successMsg', 'Property is updated .');
//     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     
  public function destroy($id)
    {
        //
        Booking::findOrFail($id)->delete();
        return redirect()->back();
 
   }



   public function Trensfer($id)
   {
      
    $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
    $packages = Package::all();
    $Transfers = Transfers::all()->where('booking_id',$id);
    return view('admin.Booking.Transfers', compact('data','packages','Transfers'));
  }



 
//   public function New($id)
//   {
     
//   $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
//   $packages = Package::all();

//   return view('admin.Booking.complimentry', compact('data','packages'));
//  }




  public function complimentry($id)
  {
     
   $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
   $packages = Package::all();

   return view('admin.Booking.complimentry', compact('data','packages'));
 }






 public function complimentryup($id)
 {

   // dd(request()->all());
 foreach (request('item_name') as $key => $value) {
    $add = new booking_complimentary();
    $add->name_c =request('item_name.'.$key);
    $add->description_c =request('description.'.$key);
    $add->booking_id =$id;
    $add->save();
}


 }
 
 
 
 
   
  public function siteseeing($id)
  {
     
   $data = Booking::where('id',$id)->with('package','booking_package_options','booking_room_types')->first();
   $packages = Package::all();

   return view('admin.Booking.siteseeing', compact('data','packages'));
 }





  
 public function siteseeingup($id)
 {

   // dd(request()->all());
 foreach (request('date_s') as $key => $value) {
    $add = new booking_site_seeing();

    $add->date_s =request('date_s.'.$key);
    $add->s_name =request('s_name.'.$key);
    $add->places =request('places.'.$key);
    $add->s_time =request('s_time.'.$key);
    $add->tour =request('tour.'.$key);

    $add->booking_id =$id;
    $add->save();
          return back();

}

 }

  public function update($id){
 //   dd(request()->all());


      foreach (request('item_name') as $key => $value) {
      $add = new Transfers();
      $add->date_t =request('item_name.'.$key);
      $add->type =request('type.'.$key);
      $add->from_t =request('from.'.$key);
      $add->to_t =request('to.'.$key);
      $add->arrive_via =request('arrive_via.'.$key);
      $add->arrive_at =request('arrive_at.'.$key);
      $add->booking_id =$id;
      $add->save();
      return back();

}

  }






   public function pdf($id)
   {
       $roomdata=BookingRoomType::all()->where('booking_id',$id);
       $booking_Trans=Transfers::all()->where('booking_id',$id);

       $booking_site_seeing=booking_site_seeing::all()->where('booking_id',$id);
       $booking_complimentary=booking_complimentary::all()->where('booking_id',$id);

       $data = Booking::find($id);
       $filename=$data->id;
       $pdf = PDF::loadView('admin.Booking.pdf',compact('data','roomdata','booking_Trans','booking_site_seeing','booking_complimentary'))->setPaper('a4', 'portrait');
       return $pdf->stream( $filename,'.pdf');

   }
   
  public function destroy1($id)
    {
        $del = Transfers::find($id);
        $del->delete();
        return back();

    }   
   
 





}
