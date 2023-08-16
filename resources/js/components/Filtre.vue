<script setup>
import { useForm } from "@inertiajs/vue3";

const filterForm = useForm({
    priceFrom: null,
    priceTo: null,
    beds: null,
    baths: null,
    areaTo:null,
    AreaForm:null
});

const filtre = () => {
    filterForm.get("listings", {
        preserveScroll: true,
        preserveState: true,
    });
};

const clear = ()=>{
    filterForm.priceFrom= null,
    filterForm.priceTo= null,
    filterForm.beds= null,
    filterForm.baths= null,
    filterForm.areaTo=null,
    filterForm.AreaForm=null,
    filtre();
}
</script>

<template>
    <div>
        <form @submit.prevent="filtre">
            <div>
                <input type="number" placeholder="price from" id="" v-model="filterForm.priceFrom"/>
                <input type="number" placeholder="price to" id="" v-model="filterForm.priceTo" />
            </div>
            <div>
                <select id="" v-model="filterForm.beds">
                    <option :value="null">Beds</option>
                    <option v-for="n in 5" :value="n" :key="n">{{ n }}</option>
                    <option :value="null">6+</option>
                </select>
                <select id="" v-model="filterForm.baths">
                    <option :value="null">Baths</option>
                    <option v-for="n in 5" :value="n" :key="n">{{ n }}</option>
                    <option :value="null">6+</option>
                </select>
            </div>
            <div>
                <input type="number" placeholder="Area from" id="" v-model="filterForm.AreaForm" />
                <input type="number" placeholder="Area to" id="" v-model="filterForm.areaTo" />
            </div>
            <div>
                <input type="submit" value="Filtrer" />
                <input type="reset" @click="clear" value="fresh" />
            </div> 
        </form>
    </div>
</template>

<style lang="scss" scoped></style>
