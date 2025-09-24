@if(isset($label))    
    <label for="{{ $propGeneral ?? ($id ?? 'select_basic') }}" class="form-label">
        <span class="spinner-border spinner-border-sm d-none" id="spinner_{{ $propGeneral ?? ($id ?? 'select_basic') }}" role="status" aria-hidden="true"></span>
        {{ $label }}
    </label>
@endif

<select name="{{ $propGeneral ?? ($name ?? ($id ?? 'select_basic')) }}"
    id="{{ $propGeneral ?? ($id ?? 'select_basic') }}"
    class="form-select @if (!isset($define) || (isset($define) && $define)) select-search @endif @if(isset($classesPrincipal)){{$classesPrincipal}}@endif @error($propGeneral ?? ($name ?? 'error_select_basic') ) is-invalid @enderror"
    @if (isset($onChange) && $onChange) onchange="{{ $onChange }}" @endif>

    @if (!isset($hideNullOption) || (isset($hideNullOption) && !$hideNullOption))
        
        <option value='' {{ isset($value) && old(($propGeneral ?? ($name ?? 'name_autocompletado')), $value) == '' ? 'selected' : '' }}>@if (isset($nameOptionFirst)){{ $nameOptionFirst }}@else {{ isset($nullText) ? $nullText : 'Seleccione una opción' }} @endif</option>
        
    @endif
    

    @if (isset($valueRequired))
        @foreach ($options as $key => $option)
            <option value="{{ $key }}" {{ $valueRequired == $key ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    @elseif (isset($value))
        @foreach ($options as $key => $option)
            <option value="{{ $key }}" {{ old(($propGeneral ?? ($name ?? 'name_autocompletado')), $value) == $key ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    @else
        @foreach ($options as $key => $option)
            <option value="{{ $key }}" {{ old($propGeneral ?? ($name ?? 'name_autocompletado')) == $key ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    @endif

</select>
@error($propGeneral ?? ($name ?? 'select_basic'))
    <span class="invalid-feedback">
        {{ $message }}
    </span>
@enderror