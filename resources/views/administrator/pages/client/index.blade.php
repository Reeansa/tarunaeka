<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Client</x-slot:title>

    {{-- Content --}}
    <section class="container-fluid">
        <div class="shadow-lg rounded p-4">
            <div class="my-3 d-flex align-items-center justify-content-between">
                <x-administrator.action navigate="{{ route('client.create') }}" linkType="success">Tambah
                    Data</x-administrator.action>
                <x-administrator.search action="{{ route('client.index') }}">Search</x-administrator.search>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Client</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$clients->isEmpty())
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ ($clients->currentPage() - 1) * $clients->perPage() + $loop->iteration }}</td>
                                <td>{{ $client->clientType->name }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->description }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-administrator.action navigate="{{ route('client.edit', $client->id) }}"
                                            linkType="success">Edit</x-administrator.action>
                                        <form action="{{ route('client.destroy', $client->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <x-administrator.button type="submit"
                                                btnType="danger">Delete</x-administrator.button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $clients->links('pagination::bootstrap-5') }}
        </div>
    </section>
</x-administrator.app>
