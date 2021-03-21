<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <x-jet-bar-container>
        <x-jet-bar-alert text="This is an alert" />

        <x-jet-bar-stats-container>
            <x-jet-bar-stat-card title="Total clients" number="6389" type="warning" >
                <x-jet-bar-icon type="users" fill />
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Account balance" number="$ 46,760.89" type="success" >
                <x-jet-bar-icon type="money" fill />
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="New sales" number="376" type="info" >
                <x-jet-bar-icon type="cart" fill />
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Pending contacts" number="35" type="danger" >
                <x-jet-bar-icon type="message" fill />
            </x-jet-bar-stat-card>
        </x-jet-bar-stats-container>

        <x-jet-bar-table :headers="['name', 'title', 'status', 'role', '', '']">
            <template x-data="{ total:3 }" x-for="index in total">
                <tr class="hover:bg-gray-50">
                    <x-jet-bar-table-data>
                        Jane Cooper
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        <x-jet-bar-badge text="Active" type="success" />
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        Admin
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <x-jet-bar-icon type="trash" fill />
                        </a>
                    </x-jet-bar-table-data>
                </tr>
            </template>
        </x-jet-bar-table>

    </x-jet-bar-container>
</x-app-layout>
