<x-layout>
    <x-slot:heading>
        Registration Page
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <!-- Email -->
                <x-form-filed>
                    <x-form-lable for="email">Email</x-form-lable>
                    <div class="mt-2">
                        <x-form-input type="email" name="email" id="email" placeholder="Email" required></x-form-input>
                        <x-form-error props="email"></x-form-error>
                    </div>
                </x-form-filed>

                <!-- Password -->
                <x-form-filed>
                    <x-form-lable for="password">Password</x-form-lable>
                    <div class="mt-2">
                        <x-form-input type="text" name="password" id="password" placeholder="Password" required></x-form-input>
                        <x-form-error props="password"></x-form-error>
                    </div>
                </x-form-filed>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button type="button" color="red"> <a href="/">Cancel</a> </x-form-button>
            <x-form-button type="submit" color="green">Login</x-form-button>
        </div>
    </form>
</x-layout>
