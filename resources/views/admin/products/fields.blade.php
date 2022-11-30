<div class="row">
    <div class="col-6">
        <label>Product Name:</label>
        @if(isset($products))
            <input type="text" name="p_name" class="form-control" value="{{$products->p_name}}"
                   placeholder="Enter Product Name">
        @else
            <input type="text" name="p_name" class="form-control" placeholder="Enter Product Name">
        @endif
    </div>

    <div class="col-6">
        <label>Product Description:</label>
        @if(isset($products))
            <input type="text" name="p_desc" class="form-control" value="{{$products->p_desc}}"
                   placeholder="Enter Product Description">
        @else
            <input type="text" name="p_desc" class="form-control" placeholder="Enter Product Description">
        @endif
    </div>

    <div class="col-6">
        <br><label>Product Price:</label>
        @if(isset($products))
            <input type="text" name="p_price" class="form-control" value="{{$products->p_price}}"
                   placeholder="Enter Product Price">
        @else
            <input type="text" name="p_price" class="form-control" placeholder="Enter Product Price">
        @endif
    </div>

    <div class="col-6">
        <br><label>Product Image:</label>

        <div class="custom-file">
            @if(isset($products))
                <input type="file" name="p_image" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label><br><br>
                <img src="{{asset('storage/admin/products/'.$products->p_image)}}" class="rounded-circle" height="50px" width="50px">
            @else
                <input type="file" name="p_image" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            @endif
        </div>
    </div>
</div>
