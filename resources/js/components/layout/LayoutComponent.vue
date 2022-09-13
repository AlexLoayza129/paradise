<template>
  <div>
    <header class="bg-gradient-to-r from-pink-400 to-fuchsia-300 shadow-md text-black flex justify-between items-center p-6 fixed w-full top-0">
        <a :href="homeUrl" class="font-bold text-white text-3xl tracking-tight transition-all ease-in-out duration-500 hover:border-b-4 hover:border-pink-600 animate-pulse">BC Store</a>
        <ul class="flex space-x-4">
            <li><a class="text-white hover:bg-pink-300 rounded-md p-2" :href="favoriteUrl">Favoritos</a></li>
            <li><a class="text-white hover:bg-pink-300 rounded-md p-2" :href="productsUrl">Productos</a></li>
            <li><a class="text-white hover:bg-pink-300 rounded-md p-2" :href="offers">Ofertas</a></li>
            <li><a class="text-white hover:bg-pink-300 rounded-md p-2" :href="newProductsUrl">Lo nuevo</a></li>
        </ul>
        <a :href="addCart" class="hover:bg-pink-300 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </a>
    </header>
  </div>
</template>

<script>
export default {
    data(){
      return {
          homeUrl: route('home'),
          productsUrl: route('products.index'),
          favoriteUrl: route('products.favorite'),
          newProductsUrl: route('products.new'),
          offers: route('offers.index'),
          addCart: route('cart.index')
      }
  }

}
</script>

<style>

</style>