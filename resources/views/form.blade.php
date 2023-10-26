<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recruitment Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/employee" method="POST" style="text-align: justify; display: flex; flex-direction: column; align-items: center;">
                    @csrf

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="nameemployee">Name:</label>
                        <input type="text" name="nameemployee" placeholder="Ex: John" id="nameemployee" required>
                    </div>

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="nrp">NRP:</label>
                        <input type="text" name="nrp" placeholder="Ex: 123XXXXX" id="nrp" required>
                    </div>

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="position">Position:</label>
                        <input type="text" name="position" placeholder="Ex: CEO" id="position" required>
                    </div>

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="gender">Gender:</label>
                        <input type="text" name="gender" placeholder="Ex: Male" id="gender" required>
                    </div>
                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="description">Description:</label>
                        <input type="text" name="description" placeholder="Add description" id="description" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: green; color: white; padding: 5px 10px; border: none;">
                        <i class="nav-icon fas fa-plus-circle"></i>Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
