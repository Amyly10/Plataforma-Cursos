<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('img/home/a-book-gc393cd4aa_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnología con Amytiville site</h1>
                <p class="text-white text-lg mt-2 mb-4">Ven y estimula tus sentidos con pocos minutos al dia</p>

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


    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/pexels-nemuel-sereti-6424586.jpg')}}" alt="">
                </figure>

                <header class="mat-2">
                    <h1 class="text-center text-xl text-gray-700">Programacion Web</h1>
                </header>
                <p class="text-sm text-gray-500">Grandes frameworks que te abriran la puerta a un sin fin de oportunidades</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/pexels-hitesh-choudhary-879109.jpg')}}" alt="">
                </figure>

                <header class="mat-2">
                    <h1 class="text-center text-xl text-gray-700">Atajos de entornos</h1>
                </header>
                <p class="text-sm text-gray-500">Visual studio code proporciona multiples atajos y ayudas... conocelas ahora</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/pexels-kevin-ku-577585.jpg')}}" alt="">
                </figure>
                <header class="mat-2">
                    <h1 class="text-center text-xl text-gray-700">C / C++</h1>
                </header>
                <p class="text-sm text-gray-500">La tecnologia y el futuro nos dominan o nosotros a ellos, aprende ahora</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/pexels-christina-morillo-1181376.jpg')}}" alt="">
                </figure>
                <header class="mat-2">
                    <h1 class="text-center text-xl text-gray-700">GitHub</h1>
                </header>
                <p class="text-sm text-gray-500">Conoce las ventajas del trabajo en equipo de manera remota</p>

            </article>
        </div>

    </section>


    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos y filtralos por categoria o nivel</p>

        <div class="flex justify-center mt-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </button>
        </div>

    </section>

</x-app-layout>
