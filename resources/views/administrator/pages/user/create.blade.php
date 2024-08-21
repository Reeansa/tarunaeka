<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Tambah Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data"
            class="d-flex flex-column gap-3">
            @csrf
            <div class="form-group">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images" class="form-control">
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="role" class="form-label">Role</label>
                <select class="form-control" name="role" id="role">
                    <option value="">-- Pilih Role --</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password"
                    value="{{ old('password') }}">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <x-administrator.button type="submit" btnType="success">Simpan</x-administrator.button>
            </div>
        </form>
    </article>
</x-administrator.app>
