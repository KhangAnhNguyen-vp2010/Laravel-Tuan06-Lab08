<form action="{{ $action }}" method="POST">
    @csrf
    @if($method === 'PUT') @method('PUT') @endif

    <x-input name="name" label="Tên sản phẩm" :value="$product->name ?? ''" />
    <x-input name="price" label="Giá" type="number" :value="$product->price ?? ''" />
    <x-input name="stock" label="Tồn kho" type="number" :value="$product->stock ?? 0" />

    <label for="category_id">Danh mục</label>
    <select name="category_id" id="category_id" class="border rounded px-2 py-1 w-full">
        <option value="">Chọn danh mục</option>
        @foreach($categories as $c)
            <option value="{{ $c->id }}" {{ (isset($product) && $product->category_id == $c->id) ? 'selected' : '' }}>
                {{ $c->name }}
            </option>
        @endforeach
    </select>
    @error('category_id') <p class="text-red-500">{{ $message }}</p> @enderror

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">
        {{ $buttonText }}
    </button>
</form>
