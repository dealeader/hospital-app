<div class="accordion-collapse collapse" id="flush-collapse-{{ $id }}" aria-labelledby="flush-heading-{{ $id }}">
    <div class="accordion-body">
        <a href="{{ route('appointment.show', ['name' => $category]) }}"> {{ $slot }} </a>
    </div>
  </div>