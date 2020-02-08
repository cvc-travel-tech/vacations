@extends('admin.layouts.app')

@section('content')
    {!! Form::open(['route' => ['admin.setting.store'], 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'id', 'novalidate'=>'novalidate']) !!}
    <div class="col-md-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="tabbable nav-tabs-vertical nav-tabs-left">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        @foreach ($form as $key => $inputs )
                            <li class="@if($loop->first) active @endif"><a href="#{{$key}}" data-toggle="tab"
                                                                           class="legitRipple" aria-expanded="false"><i
                                        class="icon-menu7 position-left"></i> {{$key}}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach ($form as $group => $inputs )
                            <div class="tab-pane  has-padding @if($loop->first) active @endif" id="{{$group}}">
                                @foreach ($inputs as $key => $attributes )
                                    @isset($inputVal[$key])
                                        {!! getInput($key , $inputVal[$key], $attributes ) !!}
                                    @else
                                        {!! getInput($key , null, $attributes ) !!}
                                    @endisset
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="text-right">
                    <button type="reset" class="btn btn-default legitRipple" id="reset">Reset <i
                            class="icon-reload-alt position-right"></i></button>
                    <button type="submit" class="btn btn-primary legitRipple">Submit <i
                            class="icon-arrow-left13 position-right"></i></button>
                </div>
            </div>
        </div>
    </div>




    {!! Form::close() !!}

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



    @include('admin.layouts.include.img')

@endsection
