<div class="row d-flex {{$class ?? ''}}" @if (isset($id))id="{{$id}}" @endif  >
 {{$slot}}
</div>