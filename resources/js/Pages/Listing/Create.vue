<script setup>
import { useForm, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    code: "",
    street: "",
    street_nr: "",
    price: 0,
});

const page =usePage()
</script>


<template>

    <div class="success" v-if="$page.props.flash.success">{{ $page.props.flash.success }}</div>
    <div>
        <form
            @submit.prevent="
                form.post('/listings', {
                    preserveScroll: true,
                    onSuccess: () => form.reset(),
                })
            "
        >
            <label>beds <input type="text" v-model="form.beds" /> </label>
            <br />
            <label>baths <input type="text" v-model="form.baths" /> </label
            ><br />
            <label>area <input type="text" v-model="form.area" /> </label><br />
            <label>code <input type="text" v-model="form.code" /> </label><br />
            <label>street <input type="text" v-model="form.street" /> </label
            ><br />
            <label
                >street_nr
                <input type="text" v-model="form.street_nr" /> </label
            ><br />
            <label>price <input type="text" v-model="form.price" /></label
            ><br />
            <button type="submit">Submit</button>
        </form>
        <p></p>
    </div>
</template>

<style  scoped>
.success {
    background-color: rgb(11, 110, 11);
}
</style>
