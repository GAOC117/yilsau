<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 w-full sm:w-auto border border-transparent rounded-md font-semibold text-xs  uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-700 btn-yilsau focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
