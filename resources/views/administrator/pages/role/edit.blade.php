<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Edit Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('role.update', $role->id) }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" name="role" id="role" value="{{ $role->name }}">
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $role->description }}">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <x-administrator.button type="submit" btnType="success">Simpan</x-administrator.button>
            </div>
        </form>
    </article>
</x-administrator.app>
