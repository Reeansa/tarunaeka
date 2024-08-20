<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Tambah Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('client.update', $client->id) }}" method="post" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="{{ $client->id }}">{{ $client->clientType->name }}</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="new_category">Type Baru (Jika Tidak Ada)</label>
            <input type="text" name="new_type" id="new_type" class="form-control" placeholder="Enter a new type" value="{{ old('new_type') }}">
            <div class="form-group">
                <label for="client" class="form-label">Client</label>
                <input type="text" name="client" id="client" class="form-control" value="{{ $client->name }}">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $client->description }}">
            </div>
            <div>
                <x-administrator.button type="submit" btnType="success">Simpan</x-administrator.button>
            </div>
        </form>
    </article>
</x-administrator.app>
