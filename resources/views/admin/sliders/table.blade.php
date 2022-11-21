<table class="table table-striped table-hover text-center">
    <tr>
        <th>@lang('menubar.id')</th>
        <th>@lang('menubar.name')</th>
        <th>@lang('menubar.desc')</th>
        <th>@lang('menubar.image')</th>
        <th>@lang('menubar.status')</th>
        <th>@lang('menubar.edit')</th>
        <th>@lang('menubar.show')</th>
        <th>@lang('menubar.delete')</th>
    </tr>
    @foreach($sliders as $slider)
    <tr>
        <td class="p-0 text-center">{{$slider->id}}</td>
        <td class="p-0 text-center">{{$slider->name}}</td>
        <td class="p-0 text-center">{{$slider->desc}}</td>
        <td class="p-0 text-center">
            <img src="{{asset('storage/admin/sliders/'.$slider->image)}}" style="width: 40px; height: 40px;" alt="user"></td>
        <td class="p-0 text-center">
            @if($slider->status == 'deactive')
            <a href="{{route('status_change',$slider->id)}}" class="btn btn-danger">@lang('menubar.deactivate')</a>
                @else
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">@lang('menubar.select_time_for_deactivate')</button>
            @endif
        </td>

        <td><a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
        <td><a href="{{route('sliders.show',$slider->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a></td>
        <td><form action="{{route('sliders.destroy',$slider->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </form></td>
    </tr>
        @endforeach
</table>


