<x-administrator.app>
    {{-- Content --}}
    <x-slot:title>Services</x-slot:title>

    {{-- Content --}}
    <article class="rounded shadow-lg p-4">
        <form action="{{ route('service.store') }}" method="post" class="d-flex flex-column gap-3">
            <div class="form-group">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images" class="form-control">
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form-label">description</label>
                <input type="text" name="description" id="description" class="form-control">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <h2>Specification</h2>
                <div>
                    <label for="capacity" class="form-label">Capacity</label>
                    <input type="text" name="capacity" id="capacity" class="form-control">
                    @error('capacity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="pressure" class="form-label">Pressure</label>
                    <input type="text" name="pressure" id="pressure" class="form-control">
                    @error('pressure')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="fuel" class="form-label">Fuel</label>
                    <input type="text" name="fuel" id="fuel" class="form-control">
                    @error('fuel')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </form>
    </article>
</x-administrator.app>
