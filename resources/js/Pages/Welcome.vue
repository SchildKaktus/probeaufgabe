<template> 
    <head> 
        <title> {{ title }}</title>

    </head>
    <ul>
        <li v-for="firma in firmas" :key="firma.id" >
            <button class="ttext-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105" @click="selected=firma.id"> {{firma.firmenname}}</button> <Link class="bg-white text-sm text-blue-500" href="Mitarbeiter/Add" :data="{id: firma.id, name: firma.firmenname}"> Neuen Mitarbeiter erstellen</Link>
            <div v-if="firma.id == selected">
                <div v-for="mitarbeiter in mitarbeiters" :key="mitarbeiter.id">
                        <div class="" v-if="firma.id == mitarbeiter.firmen_id">
                            <div class="overflow-x-auto relative">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="py-4 px-6">
                                                Vorname: {{mitarbeiter.vorname}}
                                            </th>
                                            <td class="py-4 px-6">
                                                Nachname: {{mitarbeiter.nachname}}
                                            </td>
                                            <td class="py-4 px-6">
                                                E-Mail: {{mitarbeiter.email}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </li>
    </ul>
</template>

<script setup>
    defineProps({ title: String, firmas: Array, mitarbeiters: Array})
</script>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        data() {
            return {
                selected: 0
            }
        },
        components: { Link },
        methods: {
            change: function(id){
                selected = id
            }
        }
    }
</script>
