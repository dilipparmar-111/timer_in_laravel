<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['status'] = 'active';
        if ($request->hasFile("p_image")) {
            $img = $request->file("p_image");
            $img->store('public/admin/products');
            $input['p_image'] = $img->hashName();
        }
        $products = Product::create($input);
        return redirect(route('products.index'))->with('success', 'Product Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view('admin.products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        $input = $request->all();

        if ($request->hasFile('p_image')) {
            $image = $request->file('p_image');
            if (Storage::exists('public/admin/products' . $products->p_image)) {
                Storage::delete('public/admin/products' . $products->p_image);
            }
            $image->store('public/admin/products');
            $input['p_image'] = $image->hashName();
        }
        $products->update($input);
        return redirect(route('products.index'))->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect(route('products.index'))->with('error', 'Product Deleted Successfully');
    }

    public function product_status($id)
    {
        $products = Product::find($id);
        if ($products->status == 'active') {
            $input['status'] = 'deactive';
        } else {
            $input['status'] = 'active';
        }
        $products->update($input);
        return redirect(route('products.index'))->with('success', 'Product Status Changed Successfully');
    }
}
