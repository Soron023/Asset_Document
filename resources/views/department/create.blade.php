<x-master-layout>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Department</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Department</li>
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

                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Create Department
                                <a href="{{ url('users') }}" class="btn btn-danger float-right">
                                    <i class="fas fa-undo-alt"></i>Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('department') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</x-master-layout>
