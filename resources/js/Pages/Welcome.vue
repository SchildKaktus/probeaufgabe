<template> 
    <head> 
        <title> {{ title }}</title>

    </head>
    <ul>
        <li class="translate-x-3 translate-y-3 justify-around" v-for="firma in firmas" :key="firma.id" >
            <button class="text-3xl font-bold rounded bg-blue-50" @click="selected=firma.id"> {{firma.firmenname}}</button> <Link class="bg-white text-sm text-blue-500" href="Mitarbeiter/Add" :data="{id: firma.id, name: firma.firmenname}"> Neuen Mitarbeiter erstellen</Link>
            <div v-if="firma.id == selected">
                <uli v-for="mitarbeiter in mitarbeiters" :key="mitarbeiter.id">
                        <div class="" v-if="firma.id == mitarbeiter.firmen_id">
                            {{ mitarbeiter.vorname }} - {{ mitarbeiter.nachname }}
                        </div>
                </uli>
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
