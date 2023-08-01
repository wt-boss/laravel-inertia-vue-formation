<template>
    <div>
        {{JSON.stringify(listing) }}
    </div>
</template>

<script setup>

    const props = defineProps(
        [ 'listing']
    )

</script>

<style lang="scss" scoped>

</style>