@php
  $pins = option('pins');
  $pinsArray = [];

  foreach ($pins as $pin) {
      $pinObject = new stdClass();
      $pinObject->pin = $pin['pin'];
      $pinObject->content = $pin['tooltip'];
      $pinObject->icon = $pin['icon']['url'];

      array_push($pinsArray, $pinObject);
  }

  $pinsJSON = json_encode($pinsArray);
@endphp

<div class="map" id="google-map2" google-map2 data-pins="{{ $pinsJSON }}"></div>

{{-- @dump($pins)
@dump($pinsArray) --}}
