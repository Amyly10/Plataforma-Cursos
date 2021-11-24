<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/source-g478275316_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-dark font-bold text-4xl">Los mejores cursos de programación ¡GRATIS! y alcance de todos</h1>
                <p class="text-dark text-lg mt-2 mb-4">Si estás buscando potenciar tus conocimientos y descubrir talentos en la programación, has llegado al lugar indicado</p>

                <!--barra de buscador diseño-->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>

    @livewire('course-index')

</x-app-layout>
