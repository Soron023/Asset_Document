<x-master-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Permission </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Permission</li>
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
                            <h4>Permissions
                                @can('create permission')
                                    <a href="{{ url('permissions/create') }}" class="btn btn-primary float-right"><i
                                            class="fas fa-plus-circle"></i>Add
                                        Permission</a>
                                @endcan
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th width="40%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                @can('update permission')
                                                    <a href="{{ url('permissions/' . $permission->id . '/edit') }}"
                                                        class="btn btn-success"><i class="far fa-edit"></i>Edit</a>
                                                @endcan

                                                @can('delete permission')
                                                    <a href="{{ url('permissions/' . $permission->id . '/delete') }}"
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
        </div>
    </div><!-- /.container-fluid -->
    </div>
</x-master-layout>
