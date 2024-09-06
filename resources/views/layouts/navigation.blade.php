<div x-data="{ open: false }" class="border-b border-green-100 bg-navegacion">
    <!-- Primary Navigation Menu -->
    <div class="container  d-flex">
        <div class="flex justify-between ">
            <div>
                <a href="{{ route('home') }}">
                    <x-application-logo/>
                </a>
            </div>
            
            
                <!-- Logo -->
            
                <!-- Navigation Links -->
                <div class="hidden border-gree space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                       Inicio
                    </x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('x')">
                       Sobre nosotros
                    </x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('x')">
                       Nuestros Servicios
                    </x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('x')">
                       Nuestros productos
                    </x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('x')">
                       Contacto
                    </x-nav-link>
                </div>
          

            <!-- Settings Dropdown -->
            @auth
                
            
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md btn-user focus:outline-none transition ease-in-out duration-150">
                            @auth

                                <div>{{ Auth::user()->name }}</div>
                            @endauth

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" class="bg-black">
                        <x-dropdown-link :href="route('profile.edit')" >
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-black hover:text-gray-500 hamburguesa focus:outline-none  focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @endauth

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
             <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                Inicio
             </x-responsive-nav-link>
             <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('x')">
                Sobre nosotros
             </x-responsive-nav-link>
             <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('x')">
                Nuestros Servicios
             </x-responsive-nav-link>
             <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('x')">
                Nuestros productos
             </x-responsive-nav-link>
             <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('x')">
                Contacto
             </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @auth
            
        
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth

                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            @endauth

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth


    </div>
</div>
