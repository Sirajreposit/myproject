<x-App-Layout>
    <x-slot name="title">
        Add Categories
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Categories
                            <a href="{{ url('layouts/applayout') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="Date" value="{{ old('Date') }}" class="form-control" />
                                @error('Date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="Name" value="{{ old('Name') }}" class="form-control" />
                                @error('Name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="expense_type" class="form-label">Expense Types</label>
                                <div class="input-group gap-3">
                                    <select name="ExpenseType" id="expense_type" class="form-select">
                                        <option value="">Select an Expense Type</option>
                                        @foreach ($expenseTypes as $type)
                                            <option value="{{ $type->name }}"
                                                {{ old('ExpenseType') == $type->name ? 'selected' : '' }}>
                                                {{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('ExpenseType')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Purpose</label>
                                <textarea name="Purpose" class="form-control">{{ old('Purpose') }}</textarea>
                                @error('Purpose')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="number" name="Amount" value="{{ old('Amount') }}" class="form-control" />
                                @error('Amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Reciept</label>
                                <input type="text" name="Reciept" value="{{ old('Reciept') }}" class="form-control" />
                                @error('Reciept')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                        <div class="hello mt-4">
                            <div>
                                <label for="exptype">Add Custom Expenses</label>
                                <form action="{{ route('adddrop') }}" method="POST" id="custom-expense-form">
                                    @csrf
                                    <input type="text" name="exptype" id="exptype" class="form-control" placeholder="Enter Custom Expense Type">
                                    @error('exptype')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-3">
                                        <button type="submit" id="submit" class="btn btn-primary ms-2">Add Custom Expenses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#custom-expense-form').on('submit', function(e) {
                e.preventDefault();

                let exptype = $('#exptype').val();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            // Append new expense type to the dropdown
                            $('#expense_type').append(new Option(exptype, exptype));
                            // Clear the input field
                            $('#exptype').val('');
                        } else {
                            // Handle validation errors or other errors
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        // Handle error
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
</x-App-Layout>
