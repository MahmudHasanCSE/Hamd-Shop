@extends('admin.master.master')

@section('title')
    Dashboard | Product Add
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Add Product</h2>
                        </div>
                        <div class="card-body bg-dark text-white">
                            <form action="{{route('product.new')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Category Name :</label>
                                    <div class="col-md-8">
                                        <select name="category_id" class="form-control" id="categoryID">
                                            <option value="" disabled selected>Select a Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">SubCategory Name :</label>
                                    <div class="col-md-8">
                                        <select name="sub_category_id" class="form-control" id="subcategoryID">
                                            <option value="" disabled selected>Select a SubCategory</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Brand Name :</label>
                                    <div class="col-md-8">
                                        <select name="brand_id" class="form-control" id="">
                                            <option value="" disabled selected>Select a Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Unit Name :</label>
                                    <div class="col-md-8">
                                        <select name="unit_id" class="form-control" id="">
                                            <option value="" disabled selected>Select a Unit</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Regular Price :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="regular_price" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Selling Price :</label>
                                    <div class="col-md-8">
                                        <input type="text" name="selling_price" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Short Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Long Description :</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Image :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Other Product Images :</label>
                                    <div class="col-md-8">
                                        <input type="file" name="sub_image[]" class="form-control-file" multiple/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right">Product Status :</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1"/> Published</label>
                                        <label for=""><input type="radio" name="status" value="0"/> Unpublished</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 text-right"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="" class="btn btn-outline-light" value="Add New Product"/>
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

@section('admin-js')
    {{--jQuery--}}
    <script>
        // $(document).ready(function () {
        //     $('#categoryID').on('change', function () {
        //         alert('hi');
        //     })
        // })

        $(document).on('change', '#categoryID', function () {
            let categoryId = $(this).val();
            // alert(categoryId);
            $.ajax({
                url: "{{ url('/get-subcategory-by-category-id') }}" + '/' + categoryId,
                method: 'GET',
                dataType: 'JSON',
                data: {},
                success: function (res) {
                    let option = '';
                    option += '<option value="" disabled selected>Select a SubCategory</option>';
                    $.each(res, function (key, value) {
                        option += '<option value="'+value.id+'">'+value.name+'</option>';
                    })

                    $('#subcategoryID').empty().append(option);

                    // console.log(res);
                },
                error: function (e) {
                    console.log(e);
                },
            });
        })
    </script>
@endsection
