<script setup>
defineProps({
    active: Boolean
})
</script>

<template>
    <!-- Link is registered as a global component, no need for it to be defined -->
    <!-- See resources/js/app.js -->
    <Link :class="{ 'font-bold underline': active }">
    <slot></slot>
    </Link>
</template>