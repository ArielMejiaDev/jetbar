<template>
    <header class="hidden lg:flex justify-between items-center py-4 px-6 bg-white border-b border-gray-200">
        <!-- Searchbar -->
        <div class="flex items-center">
            <div class="relative mr-4 lg:mx-0">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>

                <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 p-2 bg-gray-100 border-1 border-transparent focus:bg-transparent focus:border-indigo-300" type="text" placeholder="Search">
            </div>
        </div>
        <!-- End Searchbar -->

        <div class="flex items-center">
            <!-- Notifications -->
            <div class="relative">
                <button @click="showingNotificationDropdown = ! showingNotificationDropdown" class="flex mx-4 text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>

                <div v-show="showingNotificationDropdown" @click="showingNotificationDropdown = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                <!-- Notifications links -->
                <div v-show="showingNotificationDropdown" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl border border-gray-200 overflow-hidden z-10" style="width: 20rem; display: none;">
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 -mx-2">
                        <figure class="w-1/6">
                            <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="avatar">
                        </figure>
                        <p class="text-sm mx-2 w-full">
                            <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-indigo-400">Upload Image</span> article. 2m
                        </p>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 -mx-2">
                        <figure class="w-1/6">
                            <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="avatar">
                        </figure>
                        <p class="text-sm mx-2 w-full">
                            <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                        </p>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 -mx-2">
                        <figure class="w-1/6">
                            <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="avatar">
                        </figure>
                        <p class="text-sm mx-2 w-full">
                            <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                        </p>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 -mx-2">
                        <figure class="w-1/6">
                            <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=398&amp;q=80" alt="avatar">
                        </figure>
                        <p class="text-sm mx-2 w-full">
                            <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                        </p>
                    </a>
                </div>
                <!-- End Notifications links -->
            </div>
            <!-- End Notifications -->

            <!-- Dropdown Menu -->
            <div class="relative">
                <button v-if="$page.props.jetstream.managesProfilePhotos" @click="showingUserDropdown = ! showingUserDropdown" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                </button>
                <span v-else @click="showingUserDropdown = ! showingUserDropdown" class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        {{ $page.props.user.name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </span>

                <div v-show="showingUserDropdown" @click="showingUserDropdown = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                <!-- User menu links -->
                <div v-show="showingUserDropdown"
                     class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl border border-gray-200 z-10"
                     style="display: none;">

                    <template v-if="$page.props.jetstream.hasTeamFeatures">

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Team
                        </div>

                        <inertia-link :href="route('teams.show', $page.props.user.current_team)" class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100">Team Settings</inertia-link>
                        <inertia-link :href="route('teams.create')" v-if="$page.props.jetstream.canCreateTeams" class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100">Create New Team</inertia-link>
                        <div class="border-t border-gray-100"></div>
                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Switch Teams
                        </div>

                        <template v-for="team in $page.props.user.all_teams" :key="team.id">
                            <form @submit.prevent="switchToTeam(team)">
                                <button class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out w-full" as="button">
                                    <div class="flex items-center">
                                        <svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <div>{{ team.name }}</div>
                                    </div>
                                </button>
                            </form>
                        </template>

                        <div class="border-t border-gray-100"></div>

                    </template>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Manage Account
                    </div>

                    <inertia-link :href="route('profile.show')" class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100">Profile</inertia-link>

                    <inertia-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures" class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100">API Tokens</inertia-link>

                    <form @submit.prevent="logout">
                        <button class="block px-4 py-2 text-sm text-gray-500 hover:bg-gray-100 w-full text-left focus:outline-none" as="button">
                            Log Out
                        </button>
                    </form>
                </div>
                <!-- End User menu links -->
            </div>
            <!-- End Dropdown Menu -->
        </div>
    </header>
</template>

<script>
export default {
    name: "JetBarNavigationMenu",
    data() {
        return {
            showingNotificationDropdown: false,
            showingUserDropdown: false,
        }
    },
    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },
        logout() {
            this.$inertia.post(route('logout'));
        },
    }
}
</script>

<style scoped>

</style>
