@extends('admin.layouts.app')

@section('content')
    {!! Form::open(['route' => ['admin.booking.update',$data->id], 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'method' => 'PUT', 'id', 'novalidate'=>'novalidate']) !!}
    <div class="container-detached">
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

 




<div class="container">

      <h4 align="center">Enter Item Details</h4>
      <br />
        <div class="table-repsonsive">
          <span id="error"></span>
          <table class="table table-bordered" id="item_table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Type</th>
                <th>From</th>
                <th>To</th>
                <th>Arrive Via </th>
                <th>Arrive At </th>
                <th>DELETE</th>
                <th><button type="button" name="add" class="btn btn-success btn-xs add"><span class="glyphicon glyphicon-plus"></span></button></th>
              </tr>
            </thead>
            <tbody class="h">
           
            </tbody>
          </table>
          <div align="center">
            <!-- <input type="submit" name="submit" class="btn btn-info" value="Insert" /> -->
          </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary legitRipple">Submit <i
                                class="icon-arrow-left13 position-right"></i></button>


    {!! Form::close() !!}


<br>
<br>
<br>


<h1>Added Befor</h1>
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
<td>control</td>
    </tr>
    
  </thead>
  <tbody>

@foreach($Transfers as $value)
 <tr>
     
        <form action="{{url('backend/store',$value['id']) }} " method='post'>
            @csrf
      <th scope="col"><input type="date" name="date" value="{{$value['date_t'] }}" placeholder='data'></th>
      <th scope="col"><select name="sele">
          <option value="Arrival Transfer">Arrival Transfer</option>
                    <option value="Arrival Transfer">Arrival Transfer</option>

          Departure Transfer
          </select></th>
      <th scope="col"><input type="text" name="form" value="{{$value['from_t']}}" placeholder='form'></th>
      <th scope="col"><input type="text" name="to"value="{{$value['to_t'] }}" placeholder='to'></th>
      <th scope="col"> <input type="text" name="arrive_via" value="{{$value['arrive_via']}}" placeholder='arrive_via'></th>
            <th scope="col"><input type="time" name="arrive_at" value="{{$value['arrive_at'] }}" placeholder='arrive_at'></th>
<td><button class="btn btn-info" type="submit">Update</button>
<form action="{{ url('backend/delete', $value->id)}}" method="POST">
   @csrf
   
   <input class="btn btn-danger" type="submit" value="Delete" />
</form></td>
   
    </tr>
@endforeach
  </tbody>
</table>
</table>

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
    $(document).ready(function(){
      
      var count = 0;

      $(document).on('click', '.add', function(){
        count++;
        var html = '';
        html += '<tr>';
        html += '<td><input type="date" name="item_name[]" class="form-control" /></td>';
        html += '<td><select name="type[]" class="form-control" data-sub_category_id="'+count+'"><option value="Arrival Transfer">Arrival Transfer</option><option value="Departure Transfer"> Departure Transfer</option></select></td>';
        html += '<td><input type="text" name="from[]" class="form-control " /></td>';
        html += '<td><input type="text" name="to[]" class="form-control " /></td>';
        html += '<td><input type="text" name="arrive_via[]" class="form-control " /></td>';
        html += '<td><input type="time" name="arrive_at[]" class="form-control " /></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span></button></td>';
        $('.h').append(html);
      });

      $(document).on('click', '.remove', function(){
        $(this).closest('tr').remove();
      });

      
    });
</script>

    @include('admin.layouts.include.img')

@endsection