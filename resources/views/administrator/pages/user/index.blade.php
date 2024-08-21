<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Users</x-slot:title>

    {{-- Content --}}
    <section class="container-fluid">
        <div class="shadow-lg rounded p-4">
            <div class="my-3 d-flex align-items-center justify-content-between">
                <x-administrator.action navigate="{{ route('user.create') }}" linkType="success">Tambah Data</x-administrator.action>
                <x-administrator.search action="{{ route('user.index') }}">Search</x-administrator.search>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Images</th>
                        <th>Name</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$users->isEmpty())
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                                <td><img src="{{ asset($user->images) }}" alt="{{ $user->name }}" width="100">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name ?? 'Belum mendapatkan role' }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-administrator.action navigate="{{ route('user.edit', $user->id) }}" linkType="success">Edit</x-administrator.action>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <x-administrator.button type="submit" btnType="danger">Delete</x-administrator.button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </section>
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/summernote-lite.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/js/summernote-lite.js') }}"></script>
    @endpush
</x-administrator.app>
