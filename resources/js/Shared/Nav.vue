<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    components: { Link },
})
</script>

<template>
    <nav>
        <ul>
            <li><Link href="/">Home</Link></li>
            <li><Link href="/users">Users</Link></li>
            <li><Link href="/settings">Settings</Link></li>
            
            <!-- Example POST link using Inertia || Using as button prevents the link being used otherwise -->
            <li><Link href="/logout" method="post" :data="{ foo: 'bar' }" as="button">Logout</Link></li> 
        </ul>
    </nav>
</template>