<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>tambah Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('role.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
            @csrf
            <div class="form-group">
                <label for="role" class="form-label">Role Name</label>
                <input type="text" name="role" id="role" class="form-control" value="{{ old('role') }}">
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
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
