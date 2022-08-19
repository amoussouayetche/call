<x-app-layout>
    <x-slot name="header">
        <h1>Liste des produits</h1>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                        @foreach ($mesproduits as $mesproduit)
                            <div class="min-h-screen bg-gray-100 flex justify-center items-center">
                                <div class="w- p-6 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500">
                                    <div class="p-2 m-4"><h1 class="text-2xl font-bold text-gray-700">{{$mesproduit->nom}}</h1></div>
                                <img class="h-56 lg:h-60 w-full object-cover" src="{{$mesproduit->image}}" alt="" />
                                <div class="mt-4">
                                    <p class="text-sm mt-2 text-gray-700">{{$mesproduit->description}}</p>
                                    <div class="mt-3 space-x-4 flex p-1">
                                        <div class="p-1 border-4 rounded-full cursor-pointer hover:border-green-200 hover:scale-105 transition transform duration-200">
                                            <span class="block h-6 w-6 bg-green-400 rounded-full"> </span>
                                        </div>
                                        <div class="p-1 border-4 rounded-full cursor-pointer hover:border-blue-200 hover:scale-105 transition transform duration-200">
                                            <span class="block h-6 w-6 bg-blue-400 rounded-full"> </span>
                                        </div>
                                        <div class="p-1 border-4 rounded-full cursor-pointer hover:border-yellow-200 hover:scale-105 transition transform duration-200">
                                            <span class="block h-6 w-6 bg-yellow-400 rounded-full"> </span>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-2 flex justify-between pl-4 pr-2">
                                    <button class="block text-xl font-semibold text-gray-700 cursor-auto">{{$mesproduit->prix}} FCFA</button>
                                    <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">Buy</button>
                                    </div>
                                    <add-to-cart> </add-to-cart>
                                    {{-- <add-to-card :produit-id="{{$mesproduit->id}}"></add-to-card> --}}
                                    {{-- bouton ajouter au panier,voir js composant, installer vue@next vuelaoder  --}}
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>