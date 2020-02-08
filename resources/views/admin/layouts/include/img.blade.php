
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
function getImages(data,img_id , multi = false){
  //some code
    console.log(multi);

    $('.get-images').html('');
    for(var i=0;i<data.length;i++) {
        $('.get-images').append(`
            <div class="col-lg-1 col-md-2 col-xs-3 ">
                <div class="thumbnail ">
                    <div class="thumb single-img " multi="${multi}">
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
    console.log($(this).parent().parent().parent().attr('multi'));
    if($(this).parent().parent().parent().attr('multi') == 'false'){
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
$(document).on("click",".image-gallery",function() {
    var ImgId = $(this).attr('gallery-id');
    $.ajax({
        type:'GET',
        url:'{{route('admin.media.getImages')}}',
        success:function(data){
            console.log(ImgId);
            getImages(data , ImgId , true );
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
    if ($('img.selected').length == 1) {
        for (let index = 0; index <= $('img.selected').length; index++) {

            const element = $('img.selected')[index];
            console.log($(element));
            var myDiv = $('div[div-id="' + $(element).attr('input-id') + '"]');
            myDiv.find( "img" ).attr("src",$(element).attr('img-src'));
            myDiv.find( "#input-"+$(element).attr('input-id') ).val($(element).attr('img-id'));
            $(element).removeClass('selected');
        }
    }else{
        console.log($('img.selected'));
        var length = $('img.selected').length ;

            var myDiv = $('div[gallery-id="' + $($('img.selected')[0]).attr('input-id') + '"]');
            myDiv.empty();

         for (let x = 0; x <= length-1 ; x++ ) {


            const element = $('img.selected')[x];
            console.log(x);
            // var myDiv = $('div[gallery-id="' + $(element).attr('input-id') + '"]');
            var inputName = myDiv.attr('input-name');
            myDiv.append(`
            <div class="col-lg-2 col-md-3 col-xs-4 ">
                <div class="thumbnail ">
                    <div class="thumb single-img ">
                        <img src="${$(element).attr('img-src')}"  class=""  alt="">
                        <input type="hidden" name="${inputName}[]" value="${$(element).attr('img-id')}" >
                    </div>
                </div>
            </div>
        `);;
            // myDiv.find( "img" ).attr("src",$(element).attr('img-src'));
            // myDiv.find( "#input-"+$(element).attr('input-id') ).val($(element).attr('img-id'));
        }
        for (let x = 0; x <= length-1 ; x++ ) {
            const element = $('img.selected')[x];
            $(element).removeClass('selected');
        }
    }
    $("#single-img").modal("hide");
});


    </script>
