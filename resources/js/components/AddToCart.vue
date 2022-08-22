import '../../../vendor/symfony/error-handler/Resources/assets/css/error.css';
import axios from '../../../public/js/app';
<template>
        <button class="bg-blue-400 text-white p-2"
        v-on:click.prevent="addToCart"
        >ajouter au panier</button>
</template>

<script setup>
    const produitsId = defineProps(['produitsId']);
    const addToCart = async() => {
        await axios.get('/sanctum/csrf-cookie');
        await axios.get('/api/user')
            .then(async(res) => {
                // let response =await axios.post('api/produits', {
                //     produitsId : produitsId
                // });

                // console.log(response);
                console.log(res);
            })
            .catch(err =>console.log(err));
        // console.log(produitsId);
    }
</script>