<!-- Basic text input -->
<?php
$tital= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset

@isset($value_key)
<!-- Basic textarea -->
<div class="form-group">
    <div class="col-lg-12">
        {{-- {!! Form::textarea($name, $value, ['class'=>'form-control ckeditor' ,'id' => 'ckeditor-__number__'], $attributes) !!} --}}
    <textarea name="{{$jsonName}}[{{$value_key}}][{{$inputName}}]" id="ckeditor-{{$value_key}}"  class="form-control ckeditor">{{$value}}</textarea>
        @error($jsonName)
            <label id="{{$jsonName}}-error" class="validation-error-label" for="{{$jsonName}}">{{ $message }}</label>
        @enderror
    </div>
</div>
<!-- /basic textarea -->
@else
<!-- Basic textarea -->
<div class="form-group">
    <div class="col-lg-12">
        {{-- {!! Form::textarea($name, $value, ['class'=>'form-control ckeditor' ,'id' => 'ckeditor-__number__'], $attributes) !!} --}}
        <textarea __name__="{{$jsonName}}[__number__][{{$inputName}}]" id="ckeditor-__number__"  class="form-control "></textarea>
        @error($jsonName)
            <label id="{{$jsonName}}-error" class="validation-error-label" for="{{$jsonName}}">{{ $message }}</label>
        @enderror
    </div>
</div>
<!-- /basic textarea -->
@endisset
