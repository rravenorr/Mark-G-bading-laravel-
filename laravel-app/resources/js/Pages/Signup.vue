<script setup>
    import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <title>Sign Up</title>
    </Head>
    <div class="flex min-h-screen items-center justify-center bg-gray-50">
    <div class="w-full max-w-sm p-10">
        <h1 class="text-2xl font-semibold mb-6">SIGN UP</h1>
        <form method="POST" action="{{ route('login') }}"  id="loginForm">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="username" id="username" autocomplete="username" class="min-h-[40px] pl-4 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="password" name="password" id="password" autocomplete="current-password" class="min-h-[40px] pl-4 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" autocomplete="username" class="min-h-[40px] pl-4 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" autocomplete="current-password" class="min-h-[40px] pl-4 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Re-type Password</label>
                <input type="password" name="password" id="password" autocomplete="current-password" class="min-h-[40px] pl-4 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
            <div class="flex justify-end mb-6">
                <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Sign up
                </button>
            </div>
            <div class="border-t border-gray-300 pt-4 text-center">
                <Link href="/" class="text-blue-600 hover:text-blue-800">Already have an account?</Link>
            </div>
        </form>
    </div>
</div>
</template>