<template>
    <head> 
        <title> Mitarbeiter - Index</title>
    </head>
    <body>
        <div v-if="$page.props.flash.message" class="w-full max-w-sm translate-y-2">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Firmenname
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input disabled v-model="$page.props.flash.message.name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Firmen Id
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input disabled v-model="$page.props.flash.message.firmen_id" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Vorname
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input disabled v-model="$page.props.flash.message.vorname" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Nachname
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input disabled v-model="$page.props.flash.message.nachname" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Email
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input disabled v-model="$page.props.flash.message.email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                </div>
            </div>
                <div >
                    <Link href="/" class="m-auto shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"> Home </Link>
                </div>
        </div>
        <a v-else> {{ greet() }}</a>
    </body>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: { Link, },
        methods: {
            greet: function () {
                window.location.href = "/"
            }
        }
    }
    
</script>