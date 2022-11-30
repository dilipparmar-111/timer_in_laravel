<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $products->id }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('p_name', 'Product Name:') !!}
    <p>{{ $products->p_name }}</p>
</div>

<!-- Product Description Field -->
<div class="col-sm-12">
    {!! Form::label('p_desc', 'Product Description:') !!}
    <p>{{ $products->p_desc }}</p>
</div>

<!-- Product Price Field -->
<div class="col-sm-12">
    {!! Form::label('p_price', 'Product Price:') !!}
    <p>{{ $products->p_price }}</p>
</div>

<!-- Product Image Field -->
<div class="col-sm-12">
    {!! Form::label('p_image', 'Product Image:') !!}
    <br><img src="{{asset('storage/admin/products/'.$products->p_image)}}" class="rounded-circle" height="50px"
             width="50px">
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    @if($products->status == 'active')
        <br><span class="badge badge-success">Active</span>
    @else
        <br><span class="badge badge-success">Deactive</span>
    @endif
</div>

<!-- Created Date Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created Date:') !!}
    <p>{{ $products->created_at }}</p>
</div>

<!-- Updated Date Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated Date:') !!}
    <p>{{ $products->updated_at }}</p>
</div>
