<template>
            <div>
                {{ message }}
            </div>
</template>

<script setup>

const props = defineProps({
    message: {
        type: String,
        required: true,
    },
});
</script>



<style lang="scss" scoped></style>
