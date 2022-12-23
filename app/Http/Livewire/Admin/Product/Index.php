<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brands;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $category_id, $name, $slug, $brand, $small_description,
        $description, $original_price, $selling_price, $quantity,
        $trending, $featured, $status, $meta_title, $meta_keyword, $meta_description, $images = [], $colorSelected = [], $colorQuantitySelected = [];


    public function rules()
    {
        return [
            'category_id' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'string'
            ],
            'slug' => [
                'required',
                'string',
                'max:255'
            ],
            'brand' => [
                'required',
                'string',
                'max:255'
            ],
            'small_description' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'original_price' => [
                'required',
                'integer'
            ],
            'selling_price' => [
                'required',
                'integer'
            ],
            'quantity' => [
                'required',
                'integer'
            ],
            'trending' => [
                'nullable'
            ],
            'status' => [
                'nullable'
            ],
            'meta_title' => [
                'required',
                'string',
                'max:255'
            ],
            'meta_keyword' => [
                'required',
                'string'
            ],
            'meta_description' => [
                'required',
                'string',
            ],
            'images' => [
                'nullable',
            ]
        ];
    }

    public function storeProduct()
    {
        $validatedData = $this->validate();
        $product = Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'brand' => $this->brand,
            'small_description' => $this->small_description,
            'description' => $this->description,
            'original_price' => $this->original_price,
            'selling_price' => $this->selling_price,
            'quantity' => $this->quantity,
            'trending' => $this->trending == true ? '1' : '0',
            'featured' => $this->featured == true ? '1' : '0',
            'status' => $this->status == true ? '1' : '0',
            'meta_title' => $this->meta_title,
            'meta_keyword' => $this->meta_keyword,
            'meta_description' => $this->meta_description,
        ]);


        foreach ($this->images as $image) {
            $imageName = $image->hashName();
            $manager = new ImageManager();
            $image = $manager->make($image)->resize(300, 200);
            $image->save('uploads/' . $imageName);
            $imagePath = 'uploads/' . $imageName;
            $product->productImages()->create([
                'product_id' => $product->id,
                'image' => $imagePath,
            ]);
        }

        if ($this->colorSelected) {
            foreach ($this->colorSelected as $key => $color) {
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $this->colorQuantitySelected[$key] ?? 0
                ]);

            }
        }

        session()->flash('message', 'Product Added Successfully');
    }




    public function render()
    {
        $categories = Category::all();
        $brands = Brands::all();
        $colors = Color::where('status', '0')->get();
        return view('livewire.admin.product.index',  ['categories' => $categories, 'brands' => $brands, 'colors' => $colors]);
    }
}
