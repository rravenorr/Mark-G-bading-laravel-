<script setup>
    defineProps({
        user: String
        })
</script>

<template>
    <Head title="About" />
    <div>
        <h1 class="text-3xl">About {{ user }}</h1>
    </div>
</template>