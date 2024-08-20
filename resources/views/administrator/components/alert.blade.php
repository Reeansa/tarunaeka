<div class="alert alert-{{ $alertType }} position-fixed z-3" id="alert" role="alert" style="bottom: 50px; right: 50px;">{{ $message }}</div>

@push('scripts')
    <script>
        setTimeout(() => {
            $('#alert').fadeOut('slow');
        }, 3000);
    </script>

@endpush
