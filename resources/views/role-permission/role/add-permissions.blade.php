<x-master-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Permission Role</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Permission Role</li>
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

                    <div class="card">
                        <div class="card-header">
                            <h4>Role : {{ $role->name }}
                                <a href="{{ url('roles') }}" class="btn btn-danger float-right"><i
                                        class="fas fa-undo-alt"></i>Back</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('roles/' . $role->id . '/give-permissions') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    @error('permission')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <label for="">Permissions</label>

                                    <div class="row">
                                        @foreach ($permissions as $permission)
                                            <div class="col-md-2">
                                                <label>
                                                    <input type="checkbox" name="permission[]"
                                                        value="{{ $permission->name }}"
                                                        {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} />
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

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
    </div><!-- /.container-fluid -->
    </div>
</x-master-layout>
