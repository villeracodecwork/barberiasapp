@if(isset($label) && $label != '')    
    <label for="{{ $id ?? ($propGeneral ?? 'id_autocompletado') }}" class="form-label">
        <span class="spinner-border spinner-border-sm d-none " id="spinner_{{ $id ?? ($propGeneral ?? 'id_autocompletado') }}" role="status" aria-hidden="true"></span>
        <span class="label_input">{!! $label !!}</span> 
    </label>
@endif

<input type="{{ $type ?? 'text' }}"  @if (isset($accept)) accept="{{$accept}}" @endif

    class="form-control @if(!isset($label)) mt-2 @endif @if(isset($readonly)) readonly @endif @if(isset($classesPrincipal)){{$classesPrincipal}}@endif @error($propGeneral ?? ($name ?? 'input_val') ) is-invalid @enderror"
    id="{{ $propGeneral ?? ($id ?? 'input_') }}" name="{{ $propGeneral ?? ($name ?? 'input_') }}"
    placeholder="{{ $placeholder1 ?? '' }}"
    autocomplete={{$autocomplete ?? 'off'}}
    @if(isset($type) && $type == 'number')
    step="any"
    @endif
    @if (isset($multiple)) multiple @endif
    @if(isset($min))
    min="{{ $min }}"
    @endif
    @if(isset($max))
    max="{{ $max }}"
    @endif
    @if(isset($disabled))
    disabled="{{ $disabled }}"
    @endif
    @if (isset($valueRequired))
        value="{{ $valueRequired }}"
    @elseif (isset($value)) 
        value="{{ old(($propGeneral ?? ($name ?? 'input_val')), $value) }}"
    @else
        value="{{ old($propGeneral ?? ($name ?? 'input_val')) }}"
    @endif
    @if (isset($readonly)) readonly @endif  @if (isset($required)) required @endif
    @if(isset($action))
    {{ $action }}
    @endif >

@error($propGeneral ?? ($name ?? 'input_val'))
    <span class="invalid-feedback">
        {{ $message }}
    </span>
@enderror
