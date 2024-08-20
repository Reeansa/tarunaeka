<x-administrator.app>
    {{-- Title --}}
    <x-slot:title>Edit Data</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <img src="{{ asset($slider->images) }}" alt="{{ $slider->heading }}" width="500" height="250"
            class="object-fit-cover" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">
        <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data"
            class="d-flex flex-column gap-3 mt-5">
            @csrf
            @method('PUT')
            <div>
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images" class="form-control" value="{{ $slider->images }}">
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                @foreach ($errors->get('images.*') as $message)
                    <span class="text-danger">{{ $message }}</span>
                @endforeach
            </div>
            <div>
                <label for="heading" class="form-label">Heading</label>
                <input type="text" name="heading" id="heading" class="form-control" value="{{ $slider->heading }}">
                @error('heading')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="heading" class="form-label">Sub-Heading</label>
                <input type="text" name="sub_heading" id="sub_heading" class="form-control"
                    value="{{ $slider->subheading }}">
                @error('sub_heading')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <x-administrator.button type="submit" btnType="success">Simpan</x-administrator.button>
            </div>
        </form>
    </article>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <img src="{{ asset($slider->images) }}" alt="{{ $slider->heading }}">
        </div>
    </div>
</x-administrator.app>
