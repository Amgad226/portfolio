<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <button type="{{ $type ?? 'button' }}" class="{{ $class ?? '' }}" {{ $attributes }}>
    {{ $slot }}
</button>
</div>