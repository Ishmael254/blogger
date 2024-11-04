@isset($label)
    <label class="form-label">{{ $label }}</label>
@endisset
<div class="custom-input-group input-group">
    @if (@$settings->currency->position == 1)
        <span class="input-group-text px-4 bg-white">{{ @$settings->currency->symbol }}</span>
    @endif
    <input {{ isset($id) ? 'id=' . $id : '' }} type="number" {{ isset($name) ? 'name=' . $name : '' }}
        class="form-control input-numeric" placeholder="0"
        value="{{ isset($value) ? $value : (isset($name) ? old($name) : '') }}" step="any"
        {{ isset($min) ? 'min=' . $min : '' }} {{ isset($max) ? 'max=' . $max : '' }} @disabled($disabled ?? false)
        @required($required ?? false)>
    @if (@$settings->currency->position == 2)
        <span class="input-group-text px-4 bg-white">{{ @$settings->currency->symbol }}</span>
    @endif
</div>
