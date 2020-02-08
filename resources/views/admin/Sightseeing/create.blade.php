@extends('admin.layouts.app')

@section('content')
{!! Form::open(['route' => 'admin.sightseeing.store', 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'novalidate'=>'novalidate']) !!}

<div class="container-detached">
    <div class="content-detached">

        <!-- Simple panel -->
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

                        @foreach ($form as $key => $attributes )
                        @if ($key != 'img')
                            {!! getInput($key , null, $attributes ) !!}
                        @endif
                        @endforeach
                    </fieldset>

            </div>
        </div>
        <!-- /simple panel -->


                <!-- Simple panel -->
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

                        {!! SeoInput() !!}


                    </fieldset>


            </div>
        </div>
        <!-- /simple panel -->
    </div>
</div>


<div class="sidebar-detached affix-top" >
    <div class="sidebar sidebar-default">
        <div class="sidebar-content">

            <!-- Sidebar search -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Search</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content">
                        <div class="has-feedback has-feedback-left">
                                @foreach ($form as $key => $attributes )
                                @if ($key == 'img')
                                    {!! getInput($key , null, $attributes ) !!}
                                @endif
                                @endforeach
                        </div>
                </div>
            </div>
            <!-- /sidebar search -->



            <!-- Form sample -->
                    <div class="text-right">
                        <button type="reset" class="btn btn-default legitRipple" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                        <button type="submit" class="btn btn-primary legitRipple">Submit <i class="icon-arrow-left13 position-right"></i></button>
                    </div>

            <!-- /form sample -->

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
    	<script type="text/javascript" src="{{ asset('admin/js/plugins/tables/footable/footable.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/pages/table_responsive.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
    	<script type="text/javascript" src="{{ asset('admin/js/plugins/media/fancybox.min.js')}}"></script>


    @include('admin.layouts.include.img')

@endsection
