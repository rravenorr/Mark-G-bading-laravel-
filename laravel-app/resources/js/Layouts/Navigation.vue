<script setup lang="ts">
import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-gray-50 flex flex-col justify-center items-center">
        <header class="min-h-[90px] h-[90px] flex justify-center w-screen fixed top-0 z-50 bg-gray-50">
            <nav class="grid grid-cols-12 justify-center items-center h-[90px] w-[1600px]">
                <Link href="/">Logo</Link>
                <Link href="/signup" class="col-start-12">Sign Up</Link>
            
            </nav>
        </header>

        <main class=" h-screen  w-full">
            <slot />
        </main>
    </div>
</template>