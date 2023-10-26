@extends('layouts.app')

@section('content')
    <form action="{{ route('employee.update', ['id' => $employee->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <!-- Editable form fields here -->
        <input type="text" name="nameemployee" value="{{ $employee->nameemployee }}">
        <!-- Other fields here -->

        <button type="submit">Update Employee</button>
    </form>
@endsection
