<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Tambah Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
            @csrf
            <div>
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images" class="form-control" multiple>
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                @foreach ($errors->get('images.*') as $message)
                    <span class="text-danger">{{ $message }}</span>
                @endforeach
            </div>
            <div>
                <label for="heading" class="form-label">Heading</label>
                <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading') }}">
                @error('heading')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="heading" class="form-label">Sub-Heading</label>
                <input type="text" name="sub_heading" id="sub_heading" class="form-control" value="{{ old('sub_heading') }}">
                @error('sub_heading')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div>
                <x-administrator.button type="submit" btnType="success">Simpan</x-administrator.button>
            </div>
        </form>
    </article>
</x-administrator.app>
