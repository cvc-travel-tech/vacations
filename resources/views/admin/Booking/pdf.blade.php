<html>
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 </head>
 <body>
<img style="width:200px" src="{{ asset('frontend/images/Najaf.png') }}" >
<hr>

<center>
    <div>
<ul>
                          <h4 style="text-align:left">      File Number : {{$data->id}} </h4>
<h4 style="text-align:left">
    To Destination Company Email : {{$data->email}}
</h4>


<h4 style="text-align:left">
    Package Name : {{$data->package->name}}
</h4>



        <h4 style="text-align:left"> Tour Guide Gender :
                                  
                                  @if($data->gender==1)
                                  female
                                  @elseif($data->gender==2)
                                 male
                                  @endif
                           </h4>

                         <h4 style="text-align:left"> Language :
                               
    @if($data->language==1)
                                  german
                                  @else if($data->Language==2)
                                 english
                                  @endif    
</h4>

  <h4 style="text-align:left"> Reservation Date : {{$data->res_at}}</h4>
<h4 style="text-align:left">created At:  {{$data->created_at}}</h4>

</div>
 </center>

 <h3>Accommodation : </h3>
 
 <div>
 {!! $data->Accommodation !!}
  @foreach($booking_acom as $acoms)
<ul>
    <li>{{$acoms->d_from}} / {{$acoms->d_to}} /{{$acoms->hotel}} /{{$acoms->location}} / {{$acoms->notes}}</li>
 
</ul>@endforeach	
 </div>


 <h3>Transfers : </h3>
 

@if($booking_Trans != '')
 @foreach($booking_Trans as $value)



<li>{{$value['date_t'] ." " ." ". $value['type'] ." from " .  $value['from_t']  ." " . " to " . $value['to_t'] .", via " . $value['arrive_via'] . " at " . $value['arrive_at']    }}</li>

@endforeach

@else

<p>No Transfers is added</p>

@endif
 </ul>
 </div>




 <h3>Included Sightseeing: </h3>
 <div>

 
 <ul>

@if($booking_site_seeing != '')
 @foreach($booking_site_seeing as $seeing)


<li>{{$seeing['date_s'] ."  " ." | ". $seeing['s_time'] ." | ".$seeing['s_name'] ." | ".$seeing['places'] ." | "."Tour Gauid :" .$seeing['tour']   }}</li>

@endforeach

@else

<p>No Transfers is added</p>

@endif
 </ul>


 </div>




 <h3>Complimentary : </h3>
 <div>
<ul>

@if($booking_complimentary != '')
 @foreach($booking_complimentary as $comp)



<li>{{$comp['name_c'] ." " ." | ". $comp['description_c']    }}</li>

@endforeach

@else

<p>No Complimentary is added</p>

@endif
 </ul>
 </div>
 

<h3>special_requirements:</h3>

<ul>
    <li>{{$data->special_requirements}}</li>
</ul> 


 <h3>Passenger information: </h3>
<br>
 <div>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">F.Name</th>
      <th scope="col">L.Name</th>
      <th scope="col">Gander</th>
      <th scope="col">Phone</th>
      <th scope="col">Nationality</th>
    </tr>
  </thead>


  <tbody>

@foreach($roomdata  as $value)



    <tr>
      <td>{{ $value['first_name'] }}</td>
      <td>{{ $value['last_name'] }}</td>
      <td>{{ $value['gender'] }}</td>
      <td>{{ $value['phone'] }}</td>
      <td>{{ $value['nationality'] }}</td>

    </tr>
 
@endforeach


  </tbody>
</table>
 
 </div>


 </body>
</html>