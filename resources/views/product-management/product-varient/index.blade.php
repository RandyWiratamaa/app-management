@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product Management</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product Varient</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Product Varient</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a href="{{ route('product-varient.add') }}" class="btn btn-success">Add New</a>
                        </div>
                        <h6 class="page-title">Product Varient</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($varientJson['data'] as $val)
                                <tr>
                                    <td class="text-center">{{ ucwords($val['name']) }}</td>
                                    <td class="text-center">{{ ucwords($val['description']) }}</td>
                                    <td class="text-center">
                                        @if ($val['is_active'] == 1)
                                        <span class="badge badge-lg bg-success"> AKTIF </span>
                                        @else
                                        <span class="badge badge-lg bg-danger"> NON-AKTIF </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown text-center">
                                            <a href="#" class="dropdown-toggle card-drop arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editBank` + row.id + `"><i class="fas fa-edit"></i> Edit </a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteBank` + row.id + `"><i class="fas fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a href="{{ route('product-varient.add') }}" class="btn btn-success">Add New</a>
                        </div>
                        <h6 class="page-title">Product Varient</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">Product Varient</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($varientValueJson['data'] as $val)
                                <tr>
                                    <td class="text-center">{{ ucwords($val['product_varient']['name']) }}</td>
                                    <td class="text-center">{{ ucwords($val['name']) }}</td>
                                    <td class="text-center">{{ ucwords($val['description']) }}</td>
                                    <td class="text-center">
                                        @if ($val['is_active'] == 1)
                                        <span class="badge badge-lg bg-success"> AKTIF </span>
                                        @else
                                        <span class="badge badge-lg bg-danger"> NON-AKTIF </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown text-center">
                                            <a href="#" class="dropdown-toggle card-drop arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editBank` + row.id + `"><i class="fas fa-edit"></i> Edit </a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteBank` + row.id + `"><i class="fas fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
