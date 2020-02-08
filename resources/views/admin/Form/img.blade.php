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
<div class="form-group">
<div class="col-lg-{{$width}}">
        <!-- User thumbnail -->
        <div class="thumbnail">
                <div class="thumb thumb-slide" div-id="{{$modal_id}}">
                    @isset ($value)
                        <img src="{{ getImg($value)}}" alt="">
                    @else
                        <img src="{{ asset('admin/images/cover.jpg')}}" alt="">
                    @endisset
                    <div class="caption">
                        <span>
                            <button type="button" class="btn bg-success-400 btn-icon btn-xs legitRipple select-img" img-id="{{$modal_id}}"  ><i class="icon-plus2"></i></button>
                        </span>
                    </div>
                    <input type="hidden" name="{{$name}}" value="{{$value}}" id="input-{{$modal_id}}">
                </div>
                <div class="caption text-center">
                    <h2 class="no-margin">{{$tital}}</h2>
                    @error($name)
                        <label id="{{$name}}-error" class="validation-error-label" for="{{$name}}">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <!-- /user thumbnail -->
        </div>
</div>

<!-- /basic text input -->



@push('script')

<script>

</script>
@endpush
