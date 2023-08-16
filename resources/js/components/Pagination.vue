<script setup>
import { Link } from "@inertiajs/vue3";

    defineProps(
        {
            links:Array
        }
    )
</script>


<template>
    <div v-for="(link, index) in links" :key="index">
        <Link :href="link.url">{{ link.label }}</Link>
    </div>
</template>


<style lang="scss" scoped>

</style>