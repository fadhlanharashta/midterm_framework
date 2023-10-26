<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/employee" method="POST" style="text-align: justify; display: flex; flex-direction: column; align-items: center;">
                    @csrf

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="productName">Name:</label>
                        <input type="text" name="productName" placeholder="Ex: John" id="productName" required>
                    </div>

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="productID">productID:</label>
                        <input type="text" name="productID" placeholder="Ex: 123XXXXX" id="productID" required>
                    </div>

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="owner">owner:</label>
                        <input type="text" name="owner" placeholder="Ex: CEO" id="owner" required>
                    </div>

                    <div class="mb-4" style="display: flex; flex-direction: column;">
                        <label for="location">location:</label>
                        <input type="text" name="location" placeholder="Ex: Male" id="location" required>
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
