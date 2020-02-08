@extends('admin.layouts.app')

@section('content')
                {!! Form::open(['route' => 'admin.Blog.store', 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'novalidate'=>'novalidate']) !!}

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

                                {!! getInput($key , null, $attributes ) !!}

                        @endforeach



                    </fieldset>



                    <div class="text-right">
                        <button type="reset" class="btn btn-default legitRipple" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                        <button type="submit" class="btn btn-primary legitRipple">Submit <i class="icon-arrow-left13 position-right"></i></button>
                    </div>


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
                    <span>Add New Blog</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

               
            </div>
            <!-- /sidebar search -->



            <!-- Form sample -->
                    <div class="text-right">
                       
                        <button type="submit" class="btn btn-primary legitRipple" style="margin-left:75px;margin-top:30px">Submit <i class="icon-arrow-left13 position-right"></i></button>
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
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/plugins/media/fancybox.min.js')}}"></script>

<!-- Iconified modal -->
    <div id="single-img" class="modal fade " modal-id="" >
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="file-uploader"><p>Your browser doesn't have Flash installed.</p></div>
                    <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Modal with icons</h5>
                </div>
                <div class="modal-body">
                    <div class="row get-images get-images">

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
                    <button class="btn btn-primary save-images-input" type="button" ><i class="icon-check"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /iconified modal -->

    <script>


    $(".file-uploader").pluploadQueue({
    runtimes: "html5, html4, Flash, Silverlight",
    url: "{{route('admin.media.store')}}",
    chunk_size: "15000Kb",
    unique_names: true,
    multiple_queues : true,
    refresh : true,
    filters: {
        max_file_size: "10000Kb",
        mime_types: [
            {
                title: "Image files",
                extensions: "jpg,gif,png"
            }
        ]
    },

    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
});
var uploader = $('.file-uploader').pluploadQueue();
uploader.bind('UploadComplete', function() {
  // Autostart
  console.log('testsetsetset');

    $.ajax({
        type:'GET',
        url:'{{route('admin.media.getImages')}}',
        success:function(data){
            console.log(data);
            getImages(data , $("#single-img").attr("modal-id"));
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$.ajax({
    type:'GET',
    url:'{{route('admin.media.getImages')}}',
    success:function(data){
        console.log(data);
        getImages(data , $("#single-img").attr("modal-id"));
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });
function getImages(data,img_id){
  //some code
    $('.get-images').html('');
    for(var i=0;i<data.length;i++) {
        $('.get-images').append(`
            <div class="col-lg-1 col-sm-3 ">
                <div class="thumbnail ">
                    <div class="thumb single-img">
                        <img src="{{ asset('storage/tmp/uploads/thumb')}}/${data[i].file_path}" img-src="{{ asset('storage/tmp/uploads/large')}}/${data[i].file_path}"" img-id="${data[i].id}" input-id="${img_id}" class=""  alt="">
                        <div class="caption-overflow ">
                            <span class="">
                                <a href="{{ asset('storage/tmp/uploads')}}/${data[i].file_path}" img-id="${data[i].id}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded legitRipple"><i class="icon-plus3"></i></a>
                                <button type="button"  role="button"class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 legitRipple img-file-up " ><i class="icon-link2"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        `);
    }
}
$(document).on("click",".img-file-up",function() {
    if($(this).parent().parent().parent().hasClass('single-img')){
        for (let index = 0; index < $('img.selected').length; index++) {
            const element = $('img.selected')[index];
            $(element).removeClass('selected');
        }
    }

    if($(this).parent().parent().siblings('img').hasClass('selected')) {
        console.log($(this).parent().parent().siblings('img'));
        $(this).parent().parent().siblings('img').removeClass('selected');
    }
    else {
        $(this).parent().parent().siblings('img').addClass('selected');
    }
    // console.log($(this).parent().parent().siblings('img') , $('img.selected'));

});
$(document).on("click",".select-img",function() {
console.log(uploader);
    var ImgId = $(this).attr('img-id');
    $.ajax({
        type:'GET',
        url:'{{route('admin.media.getImages')}}',
        success:function(data){
            console.log(ImgId);
            getImages(data , ImgId);
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#single-img").modal("toggle");
    $("#single-img").attr("modal-id" , ImgId);
});
// Defaults
// Defaults
$(document).on("click",".save-images-input",function() {

    for (let index = 0; index < $('img.selected').length; index++) {

        const element = $('img.selected')[index];
        console.log($(element));
        var myDiv = $('div[div-id="' + $(element).attr('input-id') + '"]');
        myDiv.find( "img" ).attr("src",$(element).attr('img-src'));
        myDiv.find( "#input-"+$(element).attr('input-id') ).val($(element).attr('img-id'));
        $(element).removeClass('selected');
    }
    $("#single-img").modal("hide");
});


    </script>
@endsection
