<script setup>
import {Link} from '@inertiajs/vue3'
import Pagination from '../../components/Pagination.vue';


const props = defineProps({
    listings: {
        type: Object,
        required: true,
    },
});
 
</script>


<template>
    <div v-for="listing in props.listings.data" :key="listing.id">

        <Link :href="`/listings/${listing.id}`">{{`${listing.price} ${listing.code}`}} </Link>
            
    </div> 
    <Pagination :links="listings.links"></Pagination>
</template>


<style lang="scss" scoped>

</style>