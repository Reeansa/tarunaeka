<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Edit Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <figure>
                    <img src="{{ asset($user->images) }}" alt="{{ $user->name }}" width="200" height="200" class="object-fit-cover rounded" style="object-position: center;">
                </figure>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="role" class="form-label">Role</label>
                <select class="form-control" name="role" id="role">
                    <option value="{{ $user->role_id }}">{{ $user->roles->name ?? 'Pilih role'}}</option>
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
                <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
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
