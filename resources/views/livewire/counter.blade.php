<div class="flex flex-col justify-evenly">
  <div>
    <x-button primary label="Klick mich" wire:click="incrementCounter" />
  </div>

  <div class="flex justify-center">
    <strong>{{ $saveCounter }}</strong>
  </div>
</div>
