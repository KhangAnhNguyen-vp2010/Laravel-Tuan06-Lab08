<div class="mb-3">
    @if($label)
        <label for="{{ $name }}" class="block mb-1 font-semibold">{{ $label }}</label>
    @endif
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        value="{{ old($name, $value) }}" 
        class="border rounded px-2 py-1 w-full"
    />
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
