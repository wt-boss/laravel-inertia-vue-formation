<script setup>
import { Link } from "@inertiajs/vue3";
import Pagination from "../../components/Pagination.vue";
import Filtre from "../../components/Filtre.vue";

const props = defineProps({
    listings: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <Filtre></Filtre>
    <div v-for="listing in props.listings.data" :key="listing.id">
        <Link :href="`/listings/${listing.id}`"
            >{{ JSON.stringify(listing) }}
        </Link>
    </div>
    <Pagination :links="listings.links"></Pagination>
</template>

<style lang="scss" scoped></style>
