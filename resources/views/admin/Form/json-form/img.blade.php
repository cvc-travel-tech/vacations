<!-- Basic text input -->
<?php
$tital= null;
$width= 12;
$modal_id = random_code();

?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
$width= $attributes['width'];
?>
@endisset



@isset($value_key)
<div class="form-group item" data-number="{{$value_key}}">
    <div class="col-lg-{{$width}}">

    <!-- User thumbnail -->
    <div class="thumbnail">
            <div class="thumb thumb-slide" div-id="{{$value_key}}">
                    @isset ($value)
                        <img src="{{ getImg($value)}}" alt="">
                    @else
                        <img src="{{ asset('admin/images/cover.jpg')}}" alt="">
                    @endisset
                <div class="caption">
                    <span>
                        <button type="button" class="btn bg-success-400 btn-icon btn-xs legitRipple select-img" img-id="{{$value_key}}"  ><i class="icon-plus2"></i></button>
                    </span>
                </div>
                <input type="hidden" name="{{$jsonName}}[{{$value_key}}][{{$inputName}}]" value="{{$value}}" id="input-{{$value_key}}">
            </div>
        </div>
        <!-- /user thumbnail -->
    </div>
</div>
@else
<div class="form-group item" data-number="__number__">
    <div class="col-lg-{{$width}}">

    <!-- User thumbnail -->
    <div class="thumbnail">
            <div class="thumb thumb-slide" div-id="__number__">
                    @isset ($value)
                        <img src="{{ getImg($value)}}" alt="">
                    @else
                        <img src="{{ asset('admin/images/cover.jpg')}}" alt="">
                    @endisset
                <div class="caption">
                    <span>
                        <button type="button" class="btn bg-success-400 btn-icon btn-xs legitRipple select-img" img-id="__number__"  ><i class="icon-plus2"></i></button>
                    </span>
                </div>
                <input type="hidden" __name__="{{$jsonName}}[__number__][{{$inputName}}]" value="{{$value}}" id="input-__number__">
            </div>
        </div>
        <!-- /user thumbnail -->
    </div>
</div>
@endisset
<!-- /basic text input -->



@push('script')

<script>

</script>
@endpush
