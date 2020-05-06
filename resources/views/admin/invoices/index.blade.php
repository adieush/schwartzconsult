@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Invoices</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.invoices.create') }}"> Create New Invoice</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Client Name</th>
            <th>Amount</th>
            <th>Phone number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $invoice->client_name }}</td>
                <td>{{ $invoice->amount }}</td>
                <td>{{ $invoice->phone_number }}</td>
                <td>
                    <form action="{{ route('admin.invoices.destroy',$invoice->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('admin.invoices.show',$invoice->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('admin.invoices.edit',$invoice->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $invoices->links() !!}

@endsection