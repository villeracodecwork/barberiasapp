{{-- usage: params array required: enum ::: params string required:  label,propGeneral :::: optionals: id,name --}}
@if(isset($label))    
    <label for="{{ $propGeneral ?? ($id ?? 'select_enum') }}" class="form-label">
        <span class="spinner-border spinner-border-sm d-none" id="spinner_{{ $propGeneral ?? ($id ?? 'select_enum') }}" role="status" aria-hidden="true"></span>
        {{ $label }}
    </label>
@endif


<select name="{{ $propGeneral ?? ($name ?? ($id ?? 'select_enum')) }}@if (isset($multiple) && $multiple)[]@endif"
    id="{{ $id ?? ($propGeneral ?? 'select_enum') }}"
    class="form-select @if (!isset($define) || (isset($define) && $define)) select-search @endif 
    @if(isset($classesPrincipal)){{$classesPrincipal}}@endif @error($propGeneral ?? ($name ?? 'error_select_enum') ) is-invalid @enderror"
    @if (isset($required))
     required
    @endif
    @if($readonly ?? false)
        readonly="readonly"
        disabled="disabled"
    @endif
    @if (isset($multiple) && $multiple) multiple="multiple" @endif
    >

    @if (!isset($emptyOption) || (isset($emptyOption) && $emptyOption))
    <option value='' selected>Selecciona Una Opción</option>
    @endif

    @if (isset($valueRequired))
        @foreach ($enum as $enu)
            <option value="{{ $enu->value }}" {{ $valueRequired == $enu->value ? 'selected' : '' }}>
                {{ $enu->description() }}
            </option>
        @endforeach
    @elseif (isset($value))
        @foreach ($enum as $enu)
            <option value="{{ $enu->value }}" {{ old(($propGeneral ?? ($name ?? 'name_autocompletado')), $value) == $enu->value ? 'selected' : '' }}>
                {{ $enu->description() }}
            </option>
        @endforeach
    @else
        @foreach ($enum as $enu)
            <option value="{{ $enu->value }}"
                {{ old($propGeneral ?? ($name ?? 'name_autocompletado')) == $enu->value ? 'selected' : '' }}>
                {{ $enu->description() }}
            </option>
        @endforeach
    @endif

   

</select>
@error($propGeneral ?? ($name ?? 'select_enum'))
<span class="invalid-feedback">
    {{ $message }}
</span>
@enderror
