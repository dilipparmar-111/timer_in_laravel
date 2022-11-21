<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Sliders::all();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
        if ($request->hasFile("image")) {
            $img = $request->file("image");
            $img->store('public/admin/sliders');
            $input['image'] = $img->hashName();
        }
        $input['status'] = 'active';
        Sliders::create($input);
        return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_succ'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sliders = Sliders::find($id);
        if (empty($sliders)) {
            return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_not_found'));
        }
        return view('admin.sliders.show', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = Sliders::find($id);
//        dd($sliders);
        if (empty($sliders)) {
            return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_not_found'));
        }
        return view('admin.sliders.edit', compact('sliders'));
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
        $sliders = Sliders::find($id);
        $input = $request->all();
        if ($request->hasFile("image")) {
            $img = $request->file("image");
            if (Storage::exists('public/admin/sliders' . $sliders->image)) {
                Storage::delete('public/admin/sliders' . $sliders->image);
            }
            $img->store('public/admin/sliders');
            $input['image'] = $img->hashName();
        }
        if (empty($sliders)) {
            return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_not_found'));
        }
        $sliders->update($input);

        return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_up'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = Sliders::find($id);
        if (empty($sliders)) {
            return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_not_found'));
        }
        $sliders->delete();
        return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_del'));
    }

    public function status_change($id)
    {
        $sliders = Sliders::find($id);

        if ($sliders->status == 'deactive') {
            $sliders->status = 'active';
        } else {
            $sliders->status = 'deactive';
        }
        if (empty($sliders)) {
            return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_not_found'));
        }

        $sliders->update();
        return redirect(route('sliders.index'))->with('success', Lang::get('menubar.slider_status'));
    }

    public function status_timer(Request $request, $id)
    {
        $sliders = Sliders::find($id);
        $request->start_time = date('Y-m-d H:i:s');
        $request->end_time = date('Y-m-d H:i:s');
        $input['start_time'] = $request->start_time;
        $input['end_time'] = $request->end_time;
        $input['status'] = 'deactive';
        $sliders->update($input);
        return redirect(route('sliders.index'))->with('success', 'Slider Deactivated Successfully');
    }

}
