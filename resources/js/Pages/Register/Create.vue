<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
</script>

<template>
    <form
        @submit.prevent="
            form.post('/account', {
                preserveScroll: true,
                onSuccess: () => form.reset(),
            })
        " >
        <div>
            <label for="name">NAME</label>
            <input id="name" type="text" v-model="form.name" />
        </div>
        <div>
            <label for="email">E-MAIL</label>
            <input id="email" type="text" v-model="form.email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" v-model="form.password" />
        </div>
        <div>
            <label for="password_confirmation">Password confirmation</label>
            <input
                id="password_confirmation"
                type="password"
                v-model="form.password_confirmation "
            />
        </div>
        <div>
            <input type="submit" value="SEnd" />
        </div>

        <div v-if="form.errors.email">{{ form.errors.email }}</div>
    </form>
</template>

<style lang="css" scoped></style>
