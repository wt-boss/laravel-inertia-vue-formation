<script setup>
import {Link} from '@inertiajs/vue3'


const props = defineProps({
    listings: {
        type: Array,
        required: true,
    },
});
 
</script>


<template>
    <div v-for="listing in props.listings" :key="listing">
        <Link :href="`/listings/${listing.id}`">{{`${listing.price} ${listing.code}`}} </Link>
        
    </div> 



    hello word
</template>


<style lang="scss" scoped>

</style>