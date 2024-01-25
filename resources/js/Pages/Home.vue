<script setup>
import Nav from "../Shared/Nav.vue"

defineProps({
    name: String,
    components: { Nav },
})
</script>

<template>
    <h1 class="text-3xl font-bold underline">Hey there, {{ name }}</h1>

    <Nav></Nav>
</template>