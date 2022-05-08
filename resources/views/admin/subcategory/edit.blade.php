@extends('admin.master.master')

@section('title')
    Dashboard | SubCategory Edit
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Edit SubCategory</h2>
                        </div>
                        <div class="card-body bg-dark text-white">
                            <form action="{{route('subcategory.update', ['id' => $subcategory->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
{{--                                <input type="hidden" name="category_id" value="{{$category->id}}">--}}

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name :</label>
                                    <div class="col-md-8">
                                        <select name="category_id" class="form-control" id="">
                                            <option value="" disabled>Select a Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id == $subcategory->category_id? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">SubCategory Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{$subcategory->name}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">SubCategory Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$subcategory->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">SubCategory Image :</label>
                                    <div class="col-md-8">
                                        <img src="{{asset($subcategory->image)}}" style="height: 100px; width: 100px;" class="pb-3" alt="">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">SubCategory Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{$subcategory->status == 1? 'checked' : ''}} value="1"/> Published</label>
                                        <label for=""><input type="radio" name="status" {{$subcategory->status == 0? 'checked' : ''}} value="0"/> Unpublished</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="" class="btn btn-outline-light" value="Update SubCategory"/>
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
