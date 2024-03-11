<x-master-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Users
                                @can('create user')
                                    <a href="{{ url('users/create') }}" class="btn btn-primary float-right"><i
                                            class="fas fa-plus-circle"></i>
                                        Add User</a>
                                @endcan
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $rolename)
                                                        <label class="badge bg-primary mx-1">{{ $rolename }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                @can('update user')
                                                    <a href="{{ url('users/' . $user->id . '/edit') }}"
                                                        class="btn btn-success">
                                                        <i class="far fa-edit"></i></i>Edit</a>
                                                @endcan

                                                @can('delete user')
                                                    <a href="{{ url('users/' . $user->id . '/delete') }}"
                                                        class="btn btn-danger mx-2">
                                                        <i class="far fa-trash-alt"></i>
                                                        Delete</a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</x-master-layout>
