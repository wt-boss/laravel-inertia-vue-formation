<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: "",
    password: "",
});

</script>

<template>
    <form  @submit.prevent="
                form.post('/login', {
                    preserveScroll: true,
                    onSuccess: () => form.reset(),
                })
            ">
        <div>
            <label for="email">E-MAIL</label>
            <input id="email" type="text" v-model="form.email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" v-model="form.password" />
        </div>
        <div>
            <input type="submit" value="SEnd">
        </div>

        <div v-if="form.errors.email">{{ form.errors.email }}</div>

    </form>
</template>

<style lang="css" scoped></style>
