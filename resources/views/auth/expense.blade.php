<x-App-Layout>

    <x-slot name="title">
        Edit Categories
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Categories
                            <a href="{{ url('layouts/applayout') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layouts/' . $category->id . '/edit') }}" method="POST">

                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="Date" value="{{ $category->Date }}"
                                    class="form-control" />

                                @error('Date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="Name" value="{{ $category->Name }}"
                                    class="form-control" />
                                @error('Name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="expense_type" class="form-label">Expense Types</label>
                                <div class="input-group">
                                    <select name="ExpenseType" id="expense_type" class="form-select">
                                        <option value="">Select an Expense Type</option>
                                        <option value="Daily_Expences"
                                            {{ old('ExpenseType') == 'Daily_Expences' ? 'selected' : '' }}>Daily
                                            Expenses</option>
                                        <option value="grocery" {{ old('ExpenseType') == 'grocery' ? 'selected' : '' }}>
                                            Grocery</option>
                                        <option value="unwanted"
                                            {{ old('ExpenseType') == 'unwanted' ? 'selected' : '' }}>Unwanted</option>
                                    </select>
                                    <button type="button" class="btn btn-primary ms-2" onclick="addExpenses()">Add
                                        Custom Expenses</button>
                                </div>
                                @error('ExpenseType')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Purpose</label>
                                <textarea name="Purpose" class="form-control">{{ $category->Purpose }}</textarea>
                                @error('Purpose')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="number" name="Amount" value="{{ $category->Amount }}"
                                    class="form-control" />
                                @error('Amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Reciept</label>
                                <input type="text" name="Reciept" value="{{ $category->Reciept }}"
                                    class="form-control" />
                                @error('Reciept')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-App-Layout>
