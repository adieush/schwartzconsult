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
                                <th width="100">amount</th>
                                <th width="100">date</th>
                                <th width="120">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($invoices as $invoice)
                                <tr id="trow_1">
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td><strong>{{ $invoice->client_name }}</strong></td>
                                    <td><span class="label label-success">New</span></td>
                                    <td>{{ $invoice->amount }}</td>
                                    <td>24/09/2015</td>
                                    <td>

                                        <form action="{{ route('admin.invoices.destroy',$invoice->id) }}" method="POST">

                                            <a href="{{ route('admin.invoices.show',$invoice->id) }}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>


                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-rounded btn-condensed btn-sm"><span class="fa fa-times"></span></button>

                                            {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            <tr id="trow_1">
                                <td class="text-center">1</td>
                                <td><strong>John Doe</strong></td>
                                <td><span class="label label-default">New</span></td>
                                <td>$430.20</td>
                                <td>24/09/2015</td>
                                <td>
                                    <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                </td>
                            </tr>
                            <tr id="trow_2">
                                <td class="text-center">2</td>
                                <td><strong>Dmitry Ivaniuk</strong></td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>$1,351.00</td>
                                <td>23/09/2015</td>
                                <td>
                                    <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                </td>
                            </tr>
                            <tr id="trow_3">
                                <td class="text-center">3</td>
                                <td><strong>Nadia Ali</strong></td>
                                <td><span class="label label-info">In Queue</span></td>
                                <td>$2,621.00</td>
                                <td>22/09/2015</td>
                                <td>
                                    <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- END RESPONSIVE TABLES -->

@endsection


