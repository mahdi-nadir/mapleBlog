<x-app-layout>
    <section id="extraInfo">{{ __('generalInfo') }} <br><b>{{ __('comingSoon') }}</b><br>
        <p class="mt-10">{{ __('extraInfoMsg') }}</p>
        <div class="overflow-x-auto">
            <div id="infoContainer">
                <table id="table" class="table-auto mx-auto mt-5 w-5/6 lg:w-2/3">
                    <thead>
                        <tr class="bg-indigo-100 text-sm md:text-lg">
                            <th class="py-2 border-2 border-gray-400">{{ __('draw') }}</th>
                            <th class="py-2 border-2 border-gray-400">Date</th>
                            <th class="py-2 border-2 border-gray-400">ITA</th>
                            <th class="py-2 border-2 border-gray-400">{{ __('crsAbr') }}</th>
                            <th class="py-2 border-2 border-gray-400">{{ __('program') }}</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </x-app-layout>