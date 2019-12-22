@php
    $noRequired = isset($no_required);
    if($noRequired){
      $noRequired = $no_required;
      dd($noRequired);
    }
@endphp
@if(count($errors->all()) > 0)

<div class="form-group">
  <label for="{{ $id }}">{{ $label }} @if($noRequired) @else <font color="red">(*)</font> @endif</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <i class="{{ $ikon }}"></i>
      </div>
    </div>
    <input @if($noRequired) @else required="required" @endif value="{{ old($id) }}" @isset($accept) accept="{{ $accept }}" @endisset type="{{ $type ?? 'text' }}" class="form-control {{ isset($classAppend) ? $classAppend : '' }} @error($id) is-invalid @else is-valid @enderror" name="{{ $id }}" id="{{ $id }}">
    @error($id)
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @else
    <span class="invalid-feedback">
      Data sudah benar
    </span>
    @enderror
  </div>
</div>

@else

<div class="form-group">
  <label for="{{ $id }}">{{ $label }} @if($noRequired) @else <font color="red">(*)</font> @endif</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <i class="{{ $ikon }}"></i>
      </div>
    </div>
    <input @if($noRequired) @else required="required" @endif value="{{ isset($value) ? $value : '' }}" @isset($accept) accept="{{ $accept }}" @endisset type="{{ $type ?? 'text' }}" class="form-control {{ isset($classAppend) ? $classAppend : '' }}" name="{{ $id }}" id="{{ $id }}">
  </div>
</div>

@endif