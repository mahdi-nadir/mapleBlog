<x-app-layout>
    <x-slot name="header">
        <h2 class="form_title">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="formulaireEdit">
        <div>
            <div>
                <div>
                    @include('profile.partials.update-image-form')
                </div>
            </div>

            <div>
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div>
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div>
                <div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
