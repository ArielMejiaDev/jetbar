<template>
    <div class="bg-white px-4 py-3 flex items-center justify-between sm:px-6 w-full border-t">
        <div class="hidden lg:block">
            <p class="text-sm leading-5 text-gray-700">
                Showing
                <span>
                    <span class="font-medium">{{ items.from }}</span> to
                    <span class="font-medium">{{ items.to }}</span>
                </span>
                <span v-if="items.total" class="font-medium"> of {{ items.total }}</span> results
            </p>
        </div>

        <div class="flex-1 flex md:justify-between lg:justify-end">
            <inertia-link
                v-if="items.prev_page_url"
                :href="items.prev_page_url"
                class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                preserve-scroll
            >Previous</inertia-link>

            <button v-else class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-200 text-sm leading-5 font-medium rounded-md text-gray-300 bg-white cursor-default" disabled>
                Previous
            </button>

            <inertia-link
                v-if="items.next_page_url"
                :href="items.next_page_url"
                class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                preserve-scroll
            >Next</inertia-link>

            <button v-else class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-200 text-sm leading-5 font-medium rounded-md text-gray-300 bg-white cursor-default" disabled>
                Next
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "JetBarSimplePagination"
,    props: {
        items: Object,
    },
}
</script>
