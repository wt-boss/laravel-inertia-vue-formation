<template>
    <div>
        <Link href="/">Index</Link>&nbsp;
        <Link href="/show">Show</Link>
        <Link href="/login">login</Link>
        {{ count }}
    </div>{{ $page.props.user.name }}
    <div class="name"></div>
        <slot></slot>

</template>

<script setup>
import { Link , usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const page = usePage()
const count = ref(0);

setInterval(()=>{
    count.value++;
},1000)


</script>

<style lang="scss" scoped></style>
