<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <x-jet-bar-container>
        <x-jet-bar-alert title="This is an alert" text-link="View more" link="{{ route('profile.show') }}" />
        <x-jet-bar-stats />
        <x-jet-bar-table :headers="['name', 'title', 'status', 'role', '']" >
            <tr>
                <x-jet-bar-table-data>
                    Jane Cooper
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                    <div class="text-sm text-gray-500">Optimization</div>
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <x-jet-bar-badge text="Active" type="danger" />
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    Admin
                </x-jet-bar-table-data>

                <x-jet-bar-table-data>
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </x-jet-bar-table-data>
            </tr>
        </x-jet-bar-table>
    </x-jet-bar-container>
</x-app-layout>
