<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Role</x-slot:title>

    {{-- Content --}}
    <section class="container-fluid">
        <div class="shadow-lg rounded p-4">
            <div class="my-3 d-flex align-items-center justify-content-between">
                <x-administrator.action navigate="{{ route('role.create') }}" linkType="success">Tambah Data</x-administrator.action>
                <x-administrator.search action="{{ route('role.index') }}">Search</x-administrator.search>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Role</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$roles->isEmpty())
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ ($roles->currentPage() - 1) * $roles->perPage() + $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-administrator.action navigate="{{ route('role.edit', $role->id) }}" linkType="success">Edit</x-administrator.action>
                                        <form action="{{ route('role.destroy', $role->id) }}" method="post" class="d-inline">
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
            {{ $roles->links('pagination::bootstrap-5') }}
        </div>
    </section>
</x-administrator.app>
