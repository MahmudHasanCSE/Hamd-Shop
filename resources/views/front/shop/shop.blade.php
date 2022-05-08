@extends('front.master.master')

@section('title')
    Hamd | Shop Page
@endsection

@section('body')

    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">Shop</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>{{$category->name}}</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="{{asset('/')}}assets/images/banner/breadcrumb-1.png" alt="">
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="{{asset('/')}}assets/images/banner/breadcrumb-2.png" alt="">
        </div>
    </div>
    <div class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12">
                    <div class="shop-topbar-wrapper mb-40">
                        <div class="shop-topbar-left">
                            <div class="showing-item">
                                <span>Showing 1–12 of 60 results</span>
                            </div>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-sorting-area">
                                <select class="nice-select nice-select-style-1">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by latest</option>
                                </select>
                            </div>
                            <div class="shop-view-mode nav">
                                <a class="active" href="#shop-1" data-bs-toggle="tab"><i class=" ti-layout-grid3 "></i> </a>
                                <a href="#shop-2" data-bs-toggle="tab" class=""><i class=" ti-view-list-alt "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                                <div class="product-img img-zoom mb-25">
                                                    <a href="{{route('product.details', ['id', $product->id])}}">
                                                        <img src="{{asset($product->image)}}" alt="">
                                                    </a>
                                                    <div class="product-badge badge-top badge-right badge-pink">
                                                        <span>-100%</span>
                                                    </div>
                                                    <div class="product-action-wrap">
                                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                        <button class="product-action-btn-1 showModal" title="Quick View" id="showModal" data-id="{{$product->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="pe-7s-look"></i>
                                                        </button>
                                                    </div>
                                                    <div class="product-action-2-wrap">
                                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('product.details', ['id', $product->id])}}">{{$product->name}}</a></h3>
                                                    <div class="product-price">
                                                        <span class="old-price">&#2547;{{$product->regular_price}} </span>
                                                        <span class="new-price">&#2547;{{$product->selling_price}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pagination-style-1" data-aos="fade-up" data-aos-delay="200">
                                    <ul>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="next" href="#"><i class=" ti-angle-double-right "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        @foreach($products as $product)
                                            <div class="col-lg-4 col-sm-5">
                                                <div class="product-list-img">
                                                    <a href="{{route('product.details', ['id', $product->id])}}">
                                                        <img src="{{asset($product->image)}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-badge badge-right badge-pink">
                                                        <span>-20%</span>
                                                    </div>
                                                    <div class="product-list-quickview">
                                                        <button class="product-action-btn-2 showModal" title="Quick View" data-id="{{$product->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="pe-7s-look"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-7">
                                                <div class="shop-list-content">
                                                    <h3><a href="{{route('product.details', ['id', $product->id])}}">{{$product->name}}</a></h3>
                                                    <div class="product-price">
                                                        <span class="old-price">&#2547;{{$product->regular_price}} </span>
                                                        <span class="new-price">&#2547;{{$product->selling_price}} </span>
                                                    </div>
                                                    <div class="product-list-rating">
                                                        <i class=" ti-star"></i>
                                                        <i class=" ti-star"></i>
                                                        <i class=" ti-star"></i>
                                                        <i class=" ti-star"></i>
                                                        <i class=" ti-star"></i>
                                                    </div>
                                                    <p>{{$product->short_description}}</p>
                                                    <div class="product-list-action">
                                                        <button class="product-action-btn-3" title="Add to cart"><i class="pe-7s-cart"></i></button>
                                                        <button class="product-action-btn-3" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                        <button class="product-action-btn-3" title="Compare"><i class="pe-7s-shuffle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pagination-style-1">
                                    <ul>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="next" href="#"><i class=" ti-angle-double-right "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('front-js')
    <script>
        $(document).on('click', '.showModal', function () {
            // event.preventDefault();
            let productID = $(this).data('id');
            // alert(productID);
            let baseUrl = {!! json_encode(url('/')) !!};
            // alert(baseUrl);
            $.ajax({
                url: "{{url('/get-product-data-for-modal')}}",
                method: "GET",
                dataType: "JSON",
                data: {id:productID},
                success: function (data) {
                    // console.log(data);
                    $('#modalImage').attr('src', baseUrl+'/'+data.image);
                    $('#modalName').text(data.name);
                    $('#modalRegularPrice').text('৳ '+data.regular_price);
                    $('#modalSellingPrice').text('৳ '+data.selling_price);
                    $('#modalShortDescription').text(data.short_description);
                },
                error: function (e) {
                    console.log(e);
                },
            })
        });
    </script>
@endsection
