<script setup>
import NavLink from './NavLink.vue'

defineProps({
    component: {
        NavLink
    }
})
</script>

<template>
    <nav>
        <ul class="flex space-x-4">
            <li>
                <NavLink
                    :active="$page.component == 'Home'"
                    href="/"
                >Home</NavLink>
            </li>
            <li>
                <NavLink
                    :active="$page.component == 'Users'"
                    href="/users"
                >Users</NavLink>
            </li>
            <li>
                <NavLink
                    :active="$page.component == 'Settings'"
                    href="/settings"
                >Settings</NavLink>
            </li>

            <!-- Example POST link using Inertia || Using as button prevents the link being used otherwise -->
            <li>
                <Link
                    href="/logout"
                    method="post"
                    :data="{ foo: 'bar' }"
                    as="button"
                >Logout</Link>
            </li>
        </ul>
    </nav>
</template>