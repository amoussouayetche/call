<template>
        <button class="bg-blue-400 text-white p-2"
        v-on:click.prevent="addToCart"
        >ajouter au panier</button>
</template>

<script setup>
    const addToCart = () => {
        console.log('bisous bisous');
    }
</script>