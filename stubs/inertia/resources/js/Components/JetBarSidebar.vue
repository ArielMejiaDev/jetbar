<template>
    <div class="flex flex-col w-full lg:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 lg:border-r">
        <div class="flex-shrink-0 px-4 lg:px-8 py-4 flex flex-row items-center justify-between">
            <!-- App Title -->
            <inertia-link :href="route('dashboard')" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Jetbar</inertia-link>
            <!-- End App Title -->
            <button class="rounded-lg lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="showingNavigationDropdown = !showingNavigationDropdown">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path v-show="!showingNavigationDropdown" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path v-show="showingNavigationDropdown" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div v-show="showingNavigationDropdown" @click="showingNavigationDropdown = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>
        <!-- Sidebar Links -->
        <nav :class="{'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown}" class="flex-grow lg:block px-4 pb-4 lg:pb-0 lg:overflow-y-auto z-10">
            <template v-if="$page.props.jetstream.hasTeamFeatures">
                <inertia-link v-if="$page.props.jetstream.canCreateTeams" :class="route().current('teams.create') ? 'bg-gray-200' : 'bg-transparent'" class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" :href="route('teams.create')">Create Team</inertia-link>
                <inertia-link :class="route().current('teams.show') ? 'bg-gray-200' : 'bg-transparent'" class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" :href="route('teams.show', $page.props.user.current_team)">Team Settings</inertia-link>
            </template>
            <inertia-link :class="route().current('profile.show') ? 'bg-gray-200' : 'bg-transparent'" class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" :href="route('profile.show')">Profile</inertia-link>
            <div  class="relative" >
                <button @click="showingSidebarNavigationDropdown = !showingSidebarNavigationDropdown" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Dropdown</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': showingSidebarNavigationDropdown, 'rotate-0': !showingSidebarNavigationDropdown}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95" >
                    <div v-if="showingSidebarNavigationDropdown" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-20">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                        </div>
                    </div>
                </transition>
            </div>

            <jet-bar-responsive-links />

        </nav>
        <div v-show="showingSidebarNavigationDropdown" @click="showingSidebarNavigationDropdown = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>
        <!-- End Sidebar Links -->
    </div>
</template>

<script>
import JetBarResponsiveLinks from "@/Components/JetBarResponsiveLinks";
export default {
    name: "JetBarSidebar",
    components: {JetBarResponsiveLinks},
    data() {
        return {
            showingNavigationDropdown: false,
            showingSidebarNavigationDropdown: false,
        }
    },
}
</script>
