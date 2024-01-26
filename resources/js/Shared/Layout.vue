<script setup>
import Nav from './Nav.vue';
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3'

const page = usePage()

// a computed ref
const username = computed(() => {
    return page.props.auth.user.username;
})

defineProps({
    components: { Nav },
})
</script>

<template>
    <header class="flex justify-between items-center p-4 bg-slate-300">
        <h1 class="text-2xl font-bold">Inertia JS</h1>
        <Nav></Nav>
    </header>

    <div class="p-4">
        <h3>Welcome back, {{ username }}!</h3>
        <slot></slot>
    </div>
</template>