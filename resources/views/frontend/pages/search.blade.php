@extends('layouts.app')
@section('title', 'New Arrivals Product')
@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h4 style="font-weight:500">Search Result</h4>
                    <div class="underline mb-4" style="background: #F7941D">
                    </div>
                </div>
                @forelse ($searchProducts as $productItem)
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="product-card-img">
                                        <label class="stock bg-danger">New</label>
                                        @if ($productItem->productImages->count() > 0)
                                            <a
                                                href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">

                                                <img src="{{ asset($productItem->productImages[0]->image) }}" style="height: 100%"
                                                    alt="{{ $productItem->name }}">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-card-body">
                                        <p class="product-brand" >{{ $productItem->brandProduct->name }}</p>
                                        <h5 class="product-name">
                                            <a
                                                href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                {{ $productItem->name }}
                                            </a>
                                        </h5>
                                        <div>
                                            <span class="selling-price">${{ $productItem->selling_price }}</span>
                                            <span class="original-price">${{ $productItem->original_price }}</span>
                                        </div>
                                        <p style="height:45px;overflow:hidden">
                                            <b>Description: </b>{{$productItem->description}}
                                        </p>
                                        <a href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}" class="btn btn-outline-primary text-white mt-3">View</a>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-2 col-md-12">
                        <h4 style="font-weight: 500">No Products Found </h4>
                    </div>
                @endforelse

                <div class="col-md-10">
                    {{ $searchProducts->appends(request()->input())->links() }}
                </div>


            </div>

        </div>
    </div>
    </div>
@endsection
