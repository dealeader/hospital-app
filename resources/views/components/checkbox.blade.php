<div class="form-check">
    <input {{ $attributes->class([
      "form-check",
    ]) }} name="data_agreement" type="checkbox" value="1" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      {{ $slot }}
    </label>
  </div>