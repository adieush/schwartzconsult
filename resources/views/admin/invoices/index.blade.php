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

    {!! $invoices->links() !!}

    <!-- START RESPONSIVE TABLES -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Responsive tables</h3>
                </div>

                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-actions">
                            <thead>
                            <tr>
                                <th width="50">id</th>
                                <th>name</th>
                                <th width="100">status</th>
                                <th width="100">currency</th>
                                <th width="100">amount</th>
                                <th width="100">updated at</th>
                                <th width="120">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($invoices as $invoice)
                                <tr id="trow_1">
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td><strong>{{ $invoice->client_name }}</strong></td>
                                    <td>
                                        @if ($invoice->order_status == 'processing')
                                            <span class="label label-warning">Processing</span>
                                        @elseif ($invoice->order_status == 'approved')
                                            <span class="label label-success">Approved</span>
                                        @else
                                            <span class="label label-info">Created</span>
                                        @endif
                                    </td>
                                    <td>{{ $invoice->currency }}</td>
                                    <td>{{ $invoice->getAmount() }}</td>
                                    <td>{{ $invoice->updated_at }}</td>
                                    <td>

                                        <form action="{{ route('admin.invoices.destroy',$invoice->id) }}" method="POST">

                                            <a href="{{ route('admin.invoices.show',$invoice->id) }}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-eye"></span></a>


                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-rounded btn-condensed btn-sm"><span class="fa fa-times"></span></button>

                                            {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- END RESPONSIVE TABLES -->

@endsection


