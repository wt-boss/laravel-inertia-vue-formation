<template>
    <div>
        <Link href="/">Index</Link>&nbsp;
        <Link href="/show">Show</Link>
    </div>

    <div class="name" v-if="page.props.user">
        {{ $page.props.user.name }}
        <Link href="/logout" method="delete" as="button">logout</Link>
    </div>

    <div v-else>
        <Link href="/login">login</Link>
        <Link href="/account/create">Register</Link>

    </div>
    <slot></slot>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const page = usePage();
const count = ref(0);
</script> 

<style lang="scss" scoped></style>
