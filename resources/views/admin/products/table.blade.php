<table class="table table-striped table-hover text-center">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Product Status</th>
        <th>@lang('menubar.edit')</th>
        <th>@lang('menubar.show')</th>
        <th>@lang('menubar.delete')</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td class="p-0 text-center">{{$product->id}}</td>
            <td class="p-0 text-center">{{$product->p_name}}</td>
            <td class="p-0 text-center">{{$product->p_desc}}</td>
            <td class="p-0 text-center">{{$product->p_price}}</td>
            <td class="p-0 text-center">
                <img src="{{asset('storage/admin/products/'.$product->p_image)}}" class="rounded-circle" style="width: 40px; height: 40px;"
                     alt="user"></td>
            <td class="p-0 text-center">
                @if($product->status == 'deactive')
                    <a href="{{route('products.status',$product->id)}}" class="btn btn-danger btn-sm">Deactivate</a>
                @else
                    <a href="{{route('products.status',$product->id)}}" class="btn btn-success btn-sm">Activate</a>
                @endif
            </td>

            <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
            </td>
            <td><a href="{{route('products.show',$product->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
            </td>
            <td>
                <form action="{{route('products.destroy',$product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>


