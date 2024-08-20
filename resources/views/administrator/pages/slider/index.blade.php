<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Sliders</x-slot:title>

    {{-- Content --}}
    <section class="container-fluid">
        <div class="shadow-lg rounded p-4">
            <div class="my-3 d-flex align-items-center justify-content-between">
                <x-administrator.action navigate="{{ route('slider.create') }}" linkType="success">Tambah
                    Data</x-administrator.action>
                <x-administrator.search action="{{ route('slider.index') }}">Search</x-administrator.search>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>images</th>
                        <th>Heading</th>
                        <th>Sub-Heading</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$sliders->isEmpty())
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($slider->images) }}" alt="{{ $slider->heading }}" width="100">
                                </td>
                                <td>{{ $slider->heading }}</td>
                                <td>{{ $slider->subheading }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <x-administrator.action navigate="{{ route('slider.edit', $slider->id) }}"
                                            linkType="success">Edit</x-administrator.action>
                                        <form action="{{ route('slider.destroy', $slider->id) }}" method="POST"
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
            {{ $sliders->links('pagination::bootstrap-5') }}
        </div>
    </section>
</x-administrator.app>
