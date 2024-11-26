<x-layout>
    <x-slot:heading>
        Registration Page
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <!-- First Name -->
                <x-form-filed>
                    <x-form-lable for="first_name">First Name</x-form-lable>
                    <div class="mt-1">
                        <x-form-input type="text" name="first_name" id="first_name" placeholder="First Name" ></x-form-input>
                        <x-form-error props="first_name"></x-form-error>
                    </div>
                </x-form-filed>

                <!-- Last Name -->
                <x-form-filed>
                    <x-form-lable for="last_name">Last Name</x-form-lable>
                    <div class="mt-1">
                        <x-form-input type="text" name="last_name" id="last_name" placeholder="Last Name" ></x-form-input>
                        <x-form-error props="last_name"></x-form-error>
                    </div>
                </x-form-filed>

                <!-- Email -->
                <x-form-filed>
                    <x-form-lable for="email">Email</x-form-lable>
                    <div class="mt-1">
                        <x-form-input type="email" name="email" id="email" placeholder="Email" ></x-form-input>
                        <x-form-error props="email"></x-form-error>
                    </div>
                </x-form-filed>

                <!-- Password -->
                <x-form-filed>
                    <x-form-lable for="password">Password</x-form-lable>
                    <div class="mt-1">
                        <x-form-input type="password" name="password" id="password" placeholder="Password" ></x-form-input>
                        <x-form-error props="password"></x-form-error>
                    </div>
                </x-form-filed>

                <!--Confirm Password -->
                <x-form-filed>
                    <x-form-lable for="password_confirmation">Confirm Password</x-form-lable>
                    <div class="mt-1">
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation" ></x-form-input>
                        <x-form-error props="password_confirmation"></x-form-error>
                    </div>
                </x-form-filed>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button type="button" color="red"> <a href="/">Cancel</a> </x-form-button>
            <x-form-button type="submit" color="green">Registration</x-form-button>
        </div>
    </form>
</x-layout>
