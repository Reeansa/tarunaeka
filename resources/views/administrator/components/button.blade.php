<button {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $btnType]) }}>
    {{ $slot }}
</button>
