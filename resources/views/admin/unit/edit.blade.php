@extends('admin.master.master')

@section('title')
    Dashboard | Unit Edit
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Edit Unit</h2>
                        </div>
                        <div class="card-body bg-dark text-white">
                            <form action="{{route('unit.update', ['id' => $unit->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
{{--                                <input type="hidden" name="category_id" value="{{$category->id}}">--}}
                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$unit->name}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$unit->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{$unit->status == 1? 'checked' : ''}} value="1"/> Published</label>
                                        <label for=""><input type="radio" name="status" {{$unit->status == 0? 'checked' : ''}} value="0"/> Unpublished</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="" class="btn btn-outline-light" value="Update Unit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
