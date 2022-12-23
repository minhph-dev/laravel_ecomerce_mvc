<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border" wire:ignore>
                        @if ($product->productImages)
                            <div class="exzoom" id="exzoom">

                                <div class="exzoom_img_box">
                                    <ul class='exzoom_img_ul'>
                                        @foreach ($product->productImages as $itemImg)
                                            <li><img src="{{ asset($itemImg->image) }}" /></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="exzoom_nav"></div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn">
                                        < </a>
                                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                </p>
                            </div>
                        @else
                            No Image Added
                        @endif
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}
                        </h4>
                        <hr>
                        <div class="container alight-content-center my-1">
                            <a href="/" class="me-2 text-decoration-none link-success"><i
                                    class="fa-solid fa-house me-1"></i> Home</a> / <a
                                href="{{ url('/collections/' . $product->category->name) }}"
                                class="mx-2 text-decoration-none link-success">{{ $product->category->name }} </a> /
                            <span class="ms-2 link-success">{{ $product->name }}</span>
                        </div>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
                        </div>
                        <div>
                            @if ($product->productColors->count() > 0)
                                @if ($product->productColors)
                                    @foreach ($product->productColors as $colorItem)
                                        <label for=""
                                            class="colorSelectionLabel me-2 border-primary me-2 btn btn-primary"
                                            name="colorSelection" wire:click="colorSelected({{ $colorItem->id }})"
                                            style="background-color:{{ $colorItem->color->code }}">
                                            {{ $colorItem->color->name }}
                                        </label>
                                    @endforeach
                                @endif

                                <div>
                                    @if ($this->prodColorSelectedQuantity > 0)
                                        <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                                    @else
                                        <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                                    @endif
                                </div>
                            @else
                                @if ($product->quantity)
                                    <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                                @else
                                    <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                                @endif

                            @endif
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"
                                    readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn1"> <i
                                    class="fa fa-shopping-cart"></i> Add To Cart</button>
                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1"> <i
                                    class="fa fa-shopping-cart"></i> Add To Wishlist</button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p> {!! $product->small_description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>{!! $product->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="text-3xl">Đánh giá</h3>
        <div class="rounded border shadow">
            @foreach ($product->comments as $comment)
                <div class="row p-2">
                    <div style="width:5%">
                        <div class="rounded-circle border shadow p-2 d-flex align-items-center justify-content-center"
                            style="width:35px;height:35px">U</div>
                    </div>
                    <div style="width:95%">
                        <div class="d-flex align-items-center">
                            <div class="font-bold text-lg me-2 fw-bold">{{ $comment->user->name }}</div>
                            <div class="text-xs text-gray-500 font-semibold" style="font-size: 12px">
                                {{ $comment->created_at->diffForHumans() }}</div>
                        </div>
                        <p class="text-gray-800">{{ $comment->comment }}</p>
                        @if ($comment->image)
                            <img src="{{ asset('uploads/' . "$comment->image") }}" width="100px" />
                        @endif
                    </div>
                </div>
                <hr class="mx-2">
            @endforeach
        </div>
        @error('newComment')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <div>
            @if (session()->has('message'))
                <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <form wire:submit.prevent="addComment({{ $product->id }})" class="d-flex flex-column mt-3 rounded border p-2">
            @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" width="50px">
            @endif
            <input type="file" wire:model="photo">
            @error('photo')
                <span class="error">{{ $message }}</span>
            @enderror
            <textarea rows="4" wire:model.debounce.500ms="comment" class="rounded border shadow" style="outline: none"></textarea>
            <div class="py-2">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>




    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>Related
                        @if ($category)
                            {{ $category->name }}
                        @endif
                        Products
                    </h3>
                    <div class="underline"></div>
                </div>
                @forelse ($category->relatedProducts as $relatedProductItem)
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                @if ($relatedProductItem->productImages->count() > 0)
                                    <a
                                        href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">

                                        <img src="{{ asset($relatedProductItem->productImages[0]->image) }}"
                                            alt="{{ $relatedProductItem->name }}">
                                    </a>
                                @endif
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                <h5 class="product-name">
                                    <a
                                        href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                        {{ $relatedProductItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">${{ $relatedProductItem->selling_price }}</span>
                                    <span class="original-price">${{ $relatedProductItem->original_price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-2 col-md-12">
                        <h4>No Related Products Available </h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>Related
                        @if ($product)
                            {{ $product->brand }}
                        @endif
                        Products
                    </h3>
                    <div class="underline"></div>
                </div>
                @forelse ($category->relatedProducts as $relatedProductItem)
                    @if ($relatedProductItem->brand == "$product->brand")
                        <div class="col-md-3 mb-3">
                            <div class="product-card">
                                <div class="product-card-img">
                                    @if ($relatedProductItem->productImages->count() > 0)
                                        <a
                                            href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">

                                            <img src="{{ asset($relatedProductItem->productImages[0]->image) }}"
                                                alt="{{ $relatedProductItem->name }}">
                                        </a>
                                    @endif
                                </div>
                                <div class="product-card-body">
                                    <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                    <h5 class="product-name">
                                        <a
                                            href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                            {{ $relatedProductItem->name }}
                                        </a>
                                    </h5>
                                    <div>
                                        <span class="selling-price">${{ $relatedProductItem->selling_price }}</span>
                                        <span class="original-price">${{ $relatedProductItem->original_price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="p-2 col-md-12">
                        <h4>No Related Products Available </h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $("#exzoom").exzoom({
                "navWidth": 60,
                "navHeight": 60,
                "navItemNum": 5,
                "navItemMargin": 7,
                "navBorder": 1,
                "autoPlay": false,
                "autoPlayTimeout": 2000
            });

        });
    </script>
@endpush
