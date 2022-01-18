@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="px-3 bg-light rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Portofolios</h1>

                <div class="table-responsive">
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#addModal">
                    Add Portofolio
                    </button>
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show my-1" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Job</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portofolios as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $item->image }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->job }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal-{{ $item->id }}">
                                            Edit
                                        </button>
                                        <form method="POST" action="{{route('portofolios.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                        </form>
                                    </td>
                                </tr>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Portofolio</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('portofolios.update', $item->id) }}" method="POST">
                                                    <input type="hidden" name="_method" value="PUT">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="text" name="image" class="form-control" id="image" value="{{ $item->image }}" required>   
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" name="title" class="form-control" id="title" value="{{ $item->title }}" required>   
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="job">Job</label>
                                                        <input type="text" name="job" class="form-control" id="job" value="{{ $item->job }}" required>   
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Portofolio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('portofolios.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" name="image" class="form-control" id="image" required>   
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" required>   
                            </div>
                            <div class="form-group">
                                <label for="job">Job</label>
                                <input type="text" name="job" class="form-control" id="job" required>   
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection