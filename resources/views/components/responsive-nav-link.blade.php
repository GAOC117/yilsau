@props(['active'])

@php
    $classes =
        $active ?? false
            ? ' block w-full ps-3 pe-4 py-2 border-l-4 border-left-nav-selected nav-selected lg:text-sm text-xs text-start text-base  focus:outline-none focus:text-black  focus:border-green-50 transition duration-150 ease-in-out'
            : ' block w-full ps-3 pe-4 py-2 border-l-4 border-left-nav-no-selected border-transparent  lg:text-sm text-xs text-start text-base font-medium text-gray-600 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';

    // $classes =
    //     $active ?? false
    //         ? 'nav-selected focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
    //         : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent font-bold lg:font-normal lg:text-sm text-xs leading-5 nav-no-selected  border-bottom-nav-no-selected  focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';

@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
