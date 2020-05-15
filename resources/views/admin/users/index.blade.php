@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {!! $users->links() !!}

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
                                <th width="100">email</th>
                                <th width="100">created at</th>
                                <th width="120">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr id="trow_1">
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td><strong>{{ $user->name }}</strong></td>
                                    <td><strong>{{ $user->email }}</strong></td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>

                                        <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">

                                            <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-eye"></span></a>


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


