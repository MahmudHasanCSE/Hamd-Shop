@extends('admin.master.master')

@section('title')
    Dashboard | Unit Manage
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Units</h2>
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
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($units as $unit)
                                                    <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$unit->name}}</td>
                                                    <td>{{$unit->description}}</td>
                                                    <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                                    <td>
                                                        <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?')">
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
