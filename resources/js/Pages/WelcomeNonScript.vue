<template>
    <h1>Hey There, {{ name }}</h1>
</template>

<script>
export default {
    props: {
        name: String,
    }
}
</script>