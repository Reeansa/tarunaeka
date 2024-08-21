<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Services</x-slot:title>

    {{-- Content --}}
    <section class="container-fluid">
        <div class="shadow-lg rounded p-4">
            <div class="my-3 d-flex align-items-center justify-content-between">
                <x-administrator.action navigate="{{ route('service.create') }}" linkType="success">Tambah Data</x-administrator.action>
                <x-administrator.search action="{{ route('service.index') }}">Search</x-administrator.search>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Images</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Specification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$services->isEmpty())
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ ($services->currentPage() - 1) * $services->perPage() + $loop->iteration }}</td>
                                <td><img src="{{ asset($service->images) }}" alt="{{ $service->heading }}" width="100">
                                </td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <div>
                                        <ul>
                                            <li><span class="w-50">Capacity</span>: {{ $service->capacity }}</li>
                                            <li><span class="w-50">Pressure</span>: {{ $service->pressure }}</li>
                                            <li><span class="w-50">Fuel</span>: {{ $service->fuel }}</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-administrator.action navigate="{{ route('service.edit', $service->id) }}" linkType="success">Edit</x-administrator.action>
                                        <form action="{{ route('service.destroy', $service->id) }}" method="post" class="d-inline">
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
            {{ $services->links('pagination::bootstrap-5') }}
        </div>
    </section>
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/summernote-lite.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/js/summernote-lite.js') }}"></script>
    @endpush
</x-administrator.app>
