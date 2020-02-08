<!-- Basic text input -->
<?php
$tital= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset
<!-- Basic textarea -->
<div class="form-group">
    {!! Form::label($name, $tital, ['class' => 'control-label col-lg-3']) !!}
    <div class="col-lg-12">
        {!! Form::textarea($name, $value, ['class'=>'form-control'], $attributes) !!}
        @error($name)
            <label id="{{$name}}-error" class="validation-error-label" for="{{$name}}">{{ $message }}</label>
        @enderror
    </div>
</div>
<!-- /basic textarea -->
