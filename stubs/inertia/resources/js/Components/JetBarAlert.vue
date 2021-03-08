<template>
    <inertia-link class="flex items-center justify-between p-3 mb-8 text-sm font-semibold text-indigo-100 bg-indigo-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline" :href="link">
        <div class="flex items-center">
            <div class="py-2 px-2 rounded-full bg-indigo-900 mr-2">
                <svg class="w-6 h-6 text-indigo-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            </div>
            <span class="text-lg font-bold">{{ title }}</span>
        </div>
        <span class="hover:underline">{{ linkText }}</span>
    </inertia-link>
</template>

<script>
export default {
    name: "JetbarAlert",
    props: {
        title: String,
        linkText: String,
        link: String
    }
}
</script>

<style scoped>

</style>
