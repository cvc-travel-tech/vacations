<!-- Basic text input -->
<?php
$tital= null;
$array= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
$array= $attributes['array'];
unset($attributes['array']);
?>
@endisset
<div class="form-group">
    {!! Form::label($name,$tital, ['class' => 'control-label col-lg-3']) !!}
    <div class="col-lg-9">
        {{ Form::select($name,$array , $value,array_merge(['class' => 'form-control select2'], $attributes))  }}
        @error($name)
            <label id="{{$name}}-error" class="validation-error-label" for="{{$name}}">{{ $message }}</label>
        @enderror
    </div>
</div>
        {{-- dd($attributes); --}}

<!-- /basic text input -->
