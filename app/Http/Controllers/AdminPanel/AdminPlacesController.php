<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;


class AdminPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($place, $title)
    {
        if ($place->parent_id == 0) {
            return $title;
        }
        $parent = Place::find($place->parent_id);
        $title = $parent->title . '>' . $title;
        return AdminPlacesController::getParentsTree($parent, $title);
    }


    public function index()
    {
        $data = Place::all();
        return view('admin.place.index', [
            'data' => $data
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Place();
        $data->category_id = $request->category_id;
        $data->user_id = 0;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->created_at = $request->created_at;
        $data->updated_at = $request->updated_at;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/place');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place, $id)

        //
    {
        $data = Place::find($id);
        return view('admin.place.show', [
            'data' => $data
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */

    public function edit(Place $place, $id)
    {

        $data = Place::find($id);
        $datalist = Place::all();
        return view('admin.place.edit', [
            'data' => $data,
            'datalist' => $datalist
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place, $id)

    {

        $data = Place::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;
        $data->detail = $request->detail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->created_at = $request->created_at;
        $data->updated_at = $request->updated_at;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/place');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place, $id)
    {
        //
        $data = Place::find($id);
        if ($data->image && Storage::disk( 'public')->exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect( 'admin/place');
    }

    public function create()
    {
        $data = Place::all();
        return view('admin.place.create', [
            'data' => $data
        ]);
    }
}

