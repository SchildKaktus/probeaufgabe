<script setup>
    import { useForm } from "@inertiajs/inertia-vue3";
    
    const props = defineProps({
            id: String,
            name: String
    })
    let form = useForm({
        firmen_id: props.id,
        vorname: '',
        nachname: '',
        email: '',
        name: props.name
    })

    let submit = () => {
        form.post('/Mitarbeiter/Add');
    }
</script>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: { Link, },
    }
</script>

<template>
    <head> 
        <title> Mitarbeiter erstellen </title>
    </head>
    <form @submit.prevent="submit" class="w-full max-w-sm">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Firmen Id
            </label>
            </div>
            <div class="md:w-2/3">
            <input required disabled v-model="form.name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Firmen Id
            </label>
            </div>
            <div class="md:w-2/3">
            <input disabled v-model="form.firmen_id" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Vorname
            </label>
            </div>
            <div class="md:w-2/3">
            <input required v-model="form.vorname" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Nachname
            </label>
            </div>
            <div class="md:w-2/3">
            <input required v-model="form.nachname" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Email
            </label>
            </div>
            <div class="md:w-2/3">
            <input required v-model="form.email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                Mitarbeiter erstellen
            </button>
            </div>
        </div>
    </form>
</template>

<style>
    .container {
        width: 370px;
        clear: both;
        text-align: center;
    }
</style>