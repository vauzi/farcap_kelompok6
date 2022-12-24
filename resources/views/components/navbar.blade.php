
<div class="flex flex-wrap items-center">
    <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-gray-900 text-white w-screen">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                {{-- Logo --}}
                <a class="text-3xl font-bold font-heading" href="#">
                    Aspirasi
                </a>
                {{-- Menu Navbar --}}
                <ul class="flex px-4 mx-auto font-semibold font-heading space-x-12">
                    <li><a class="hover:text-gray-200" href="{{ route('home')}}">Home</a></li>
                    <li><a class="hover:text-gray-200" href="{{ route('aspirasi.dashboard')}}">Dashoboard</a></li>
                </ul>
                <!-- Header Icons -->
                <div class="flex items-center space-x-5">
                    <a href="" class="px-5 py-3 text-gray-50 border border-gray-50 rounded-lg hover:text-gray-800 hover:bg-gray-50 duration-200">Login</a>
                    <a href="" class="px-5 py-3 text-gray-50 border border-gray-50 rounded-lg hover:text-gray-800 hover:bg-gray-50 duration-200">Register</a>
                </div>
            </div>
        </nav>
      
    </section>
  </div>