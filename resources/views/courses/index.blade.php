<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/source-g478275316_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-dark font-bold text-4xl">Los mejores cursos de programación ¡GRATIS! y alcance de todos</h1>
                <p class="text-dark text-lg mt-2 mb-4">Si estás buscando potenciar tus conocimientos y descubrir talentos en la programación, has llegado al lugar indicado</p>

                @livewire('search');

            </div>
        </div>
    </section>

    @livewire('course-index')

</x-app-layout>
