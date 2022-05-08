@extends('admin.master.master')

@section('title')
    Dashboard | SubCategory Manage
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All SubCategories</h2>
                        </div>
                        <div class="card-body">
                            <div class="page-content fade-in-up">
                                <div class="ibox">
                                    <div class="ibox-head">
                                        <div class="ibox-title">Data Table</div>
                                    </div>
                                    <div class="ibox-body">
                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">

                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Category Name</th>
                                                    <th>SubCategory Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($subcategories as $subcategory)
                                                    <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$subcategory->category->name}}</td>
                                                    <td>{{$subcategory->name}}</td>
                                                    <td>{{$subcategory->description}}</td>
                                                    <td>
                                                        <img src="{{asset($subcategory->image)}}" style="height: 100px; width: 100px;" alt=""/>
                                                    </td>
                                                    <td>{{$subcategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('subcategory.edit', ['id' => $subcategory->id])}}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="{{route('subcategory.delete', ['id' => $subcategory->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
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
                </div>
            </div>
        </div>
    </section>
@endsection
