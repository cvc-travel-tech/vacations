<!-- Basic text input -->
<?php
$tital= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset
<!-- /basic text input -->
@isset($value_key)
<div class="form-group item" data-number="{{$value_key}}">
    <div class="col-lg-12">
        <input type="number" name="{{$jsonName}}[{{$value_key}}][{{$inputName}}]" value="{{$value}}" class="form-control" placeholder="{{__('Eg: When and where does the tour end?')}}">
    </div>
</div>
@else
<div class="form-group item" data-number="__number__">
    <div class="col-lg-12">
        <input type="number" __name__="{{$jsonName}}[__number__][{{$inputName}}]" value="{{$value}}" class="form-control" placeholder="{{__('Eg: When and where does the tour end?')}}">
    </div>
</div>
@endisset
