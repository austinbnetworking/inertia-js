<script setup>
import Layout from "../Shared/Layout.vue"

defineProps({
    time: String,
    components: { Layout }
})
</script>

<template>
    <Layout>
        <h2 class="text-2xl font-bold">Users</h2>
        <div style="margin-top: 800px;">
            <p>The current time is {{ time }}.</p>
            <!-- Example link with preserve scroll enabled -->
            <Link
                class="text-blue-600"
                href="/users"
                preserve-scroll
            >
            Refresh
            </Link>
        </div>
    </Layout>
</template>