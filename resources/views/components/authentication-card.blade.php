<div
    class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0"
>
    {{--
        <div>
        {{ $logo }}
        </div>
    --}}

    <div
        class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-lg sm:max-w-md sm:rounded-lg"
    >
        {{ $slot }}
    </div>
</div>
