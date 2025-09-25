<input type="{{isset($type)?$type:'checkbox'}}"
    class="form-check-input @if(isset($classesPrincipal)){{$classesPrincipal}}@endif @error($nameArrayOld ?? ($name ?? 'check_val') ) is-invalid @enderror" 
    id="{{ $propGeneral ?? ($id ?? 'check_') }}" name="{{ $propGeneral ?? ($name ?? 'check_') }}"
        value="{{$assignedValue??'value'}}"
        @if (isset($assignedValue) && old($propGeneral??($name??'check_val')) == $assignedValue)
            checked  
        @endif
        @if (isset($dataRoute))
            data-route="{{$dataRoute}}"
        @endif
        @if (isset($nameArrayOld) && isset($keyValueId) && old($nameArrayOld,[])!=null && count(old($nameArrayOld,[]))>0)
        @foreach (old($nameArrayOld,[]) as $check)
            @if (isset($check[$keyValueId]) && $check[$keyValueId] == $assignedValue)
                checked
            @endif
          @endforeach 
        @elseif(isset($arrayValues) && isset($keyArrayValues))
          @foreach ($arrayValues as $value)
              @if ($value[$keyArrayValues] == $assignedValue)
                  checked
              @endif
          @endforeach  
        @elseif(isset($objectModelEnum) && isset($keyobjectModelEnum))
          @foreach ($objectModelEnum as $value)
              @if ($value->$keyobjectModelEnum->value == $assignedValue)
                  checked
              @endif
          @endforeach  
        @elseif(isset($arrayValues) )
          @foreach ($arrayValues as $value)
              @if ($value == $assignedValue)
                  checked
              @endif
          @endforeach  
        @endif

        @if (isset($foreceChecked) && $foreceChecked)
               checked
        @endif
>
  @if (!isset($noLabel))
  <label class="form-check-label text-start @if(isset($classesPrincipal)){{$classesPrincipal}}@endif" for="{{ $id ?? ($propGeneral ?? ($name ?? 'check')) }}">
    {{ $label ?? 'check' }}
  </label>
  @endif
  

  


