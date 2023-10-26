<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($employees as $employee)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold">{{ $employee->productName }}</h4>
                    <p>NRP: {{ $employee->productID }}</p>
                    <p>Position: {{ $employee->owner }}</p>
                    <p>Gender: {{ $employee->location }}</p>
                    <p>Brief Description: {{ $employee->description }}</p>
                    
                    <a href="{{ route('employee.edit', ['id' => $employee->id]) }}" class="btn btn-info">Edit</a>
                    
                    <form action="{{ route('employee.delete', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" style="background-color: #ff0000; color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); border-radius: 5px; padding: 5px 15px;">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
