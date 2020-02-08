@extends('admin.layouts.app')

@section('content')
    <div class="container-detached">
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

        <div class="content">

            <!-- Simple panel -->
            <center>
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>





                <div class="panel-body">
                    
                    
                    
                    

                    {{-- <form class="form-horizontal form-validate-jquery" action="#" novalidate="novalidate"> --}}
                    <fieldset class="content-group">












                        <div class="row">
                            <div class="col-md-12">
                          <div class="text-center" style="text-align:center">
                          <h2 style="text-align:left">      File Number : {{$data->id}} </h2>
<h2 style="text-align:left">
    To Destination Company Email : {{$data->email}}
</h2>


<h2 style="text-align:left">
    Package Name : {{$data->package->name}}
</h2>



        <h2 style="text-align:left"> Tour Guide Gender :
                                  
                                  @if($data->gender ==1)
                                  female
                                  @elseif($data->gender==2)
                                 male
                                  @endif
                           </h2>

                         <h2 style="text-align:left"> Language :
                               
    @if($data->language==1)
                                  german
                                  @elseif($data->Language==2)
                                 english
                                  @endif    
</h2>

  <h2 style="text-align:left"> Reservation Date : {{$data->res_at}}</h2>
<h2 style="text-align:left">created At:  {{$data->created_at}}</h2>
<h2 style="text-align:left"> special_requirements:  {{$data->special_requirements}}</h2>


</div>

<h1 class="text-center">Transfers</h1>
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
      <th scope="col">date</th>
      <th scope="col">Type</th>
      <th scope="col">from</th>
      <th scope="col">to</th>
      <th scope="col">arrive_via</th>
            <th scope="col">arrive_at</th>
    </tr>
    
  </thead>
  <tbody>

@foreach($Transfers as $value)
 <tr>
      <th scope="row">{{$value['date_t'] }}</th>
      <td>{{$value['type']}}</td>
      <td>{{$value['from_t']}}</td>
      <td>{{$value['to_t'] }}</td>
      <td>{{$value['arrive_via']}}</td>
      <td> {{$value['arrive_at'] }}</td>
  
    </tr>
@endforeach
  </tbody>
</table>


<h1>Accommodation</h1>
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
      <th scope="col">D .from</th>
      <th scope="col">D To</th>
      <th scope="col">Hotel</th>
      <th scope="col">Location</th>
      <th scope="col">Note</th>
    </tr>
    
  </thead>
  <tbody>

@foreach($booking_acom as $value)
 <tr>
      <th scope="row">{{$value['date_f'] }}</th>
      <td>{{$value['date_t']}}</td>
      <td>{{$value['hotel']}}</td>
      <td>{{$value['location'] }}</td>
      <td>{{$value['notes']}}</td>
     
    </tr>
@endforeach
  </tbody>
</table>


<h1 class="text-center">siteseeing </h1>
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
                <th>Date</th>
                <th>Name</th>
                <th>Places</th>
                <th>Time</th>
                <th>Guide</th>
    </tr>
    
  </thead>
  <tbody>

@foreach($booking_site_seeing as $value)
 <tr>
      <th scope="row">{{$value['date_s'] }}</th>
      <td>{{$value['s_name']}}</td>
            <td>{{$value['places']}}</td>      
            <td>{{$value['s_time']}}</td>      
            <td>{{$value['tour']}}</td>

    
    </tr>
@endforeach
  </tbody>
</table>


<h1 class="text-center">complimentary</h1>
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
    
  </thead>
  <tbody>

@foreach($booking_complimentary as $value)
 <tr>
      <th scope="row">{{$value['name_c'] }}</th>
      <td>{{$value['description_c']}}</td>

  
    </tr>
@endforeach
  </tbody>
</table>


<h1 class="text-center">optional Tours</h1>
<table class="table table-striped table-bordered table-dark">
  <thead>  
   <tr style="background: #263238;
    color: white;">
                                <th>Option</th>
                                <th>Number of Pax</th>
                                <th>Price</th>
                            </tr>
                            </thead
  </thead>
  <tbody>

  @foreach($data->booking_package_options as $key => $value)
                                <tr>
                                    <td>{{$value->package_option->name}}</td>
                                    <td>{{$value->no_of_pax}}</td>
                                    <td>{{$value->price}}</td>
                                </tr>
                            @endforeach      
  
  </tbody>
</table>

        <h1>Type room</h1>
<table class="table table-striped table-bordered table-dark">
  <thead>
    <tr style="background: #263238;
    color: white;">
      <th scope="col">TypeR room</th>
   
    </tr>
    
  </thead>
  <tbody>

@foreach($data->booking_room_types as $key => $value)
 <tr>
      <th scope="row">   @if($value->room_type ==1)
                Singel
              @elseif($value->room_type ==2)
                 double
                 @elseif($value->room_type ==3)
                 triple
              @endif
      </th>
     
     
    </tr>
@endforeach
  </tbody>
</table>            
<h2 style="text-align:left">total_price :{{$data->total_price}}</h2>

                </div>
                
            </div></center>
            <!-- /simple panel -->

        </div>
    </div>



@endsection
@section('script')

    <script type="text/javascript" src="{{ asset('admin/js/pages/form_validation.js')}}"></script>

@endsection
@section('js')

    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switch.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/dropzone.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>
    <script type="text/javascript"
            src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/media/fancybox.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/anytime.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/pickers/pickadate/legacy.js')}}"></script>


    <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

    @include('admin.layouts.include.img')

@endsection
