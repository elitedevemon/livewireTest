<div>
  {{ $name }}
  @foreach ($users as $user)
    <div wire:key="{{ $user->id }}">
      <p>{{ $user->name }}</p>
      <input type="text" name="{{ $user->id }}" value="{{ $user->name }}" wire:model.live="name" id="">
    </div>
  @endforeach
</div>
