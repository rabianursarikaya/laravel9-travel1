<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $appends = [
        'getParentsTree'
    ];
    public static function getParentsTree($category,$title)
    {
        if ($category->parent_id==0)
        {
            return $title;
        }
        $parent = Place::find($category->parent_id);
        $title = $parent->title . '>' . $title;
        return CategoryController::getParentsTree($parent,$title);
    }










    public function index()
    {
        $data=  Place::all();
        return view('admin.category.index',[
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
        $data=new Place();
        $data->parent_id =$request->parent_id ;
        $data-> title= $request->title;
        $data-> keywords= $request->keywords;
        $data-> description= $request->description;
        $data-> status= $request->status;
        if ($request->file( 'image')){
            $data->image= $request->file('image')->store( 'images');
        }
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Place $category
     * @return \Illuminate\Http\Response
     */
    public function show(Place $category, $id)

        //
        {
            $data=  Place::find($id);
            return view('admin.category.show',[
                'data' => $data
            ]);
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Place $category
     * @return \Illuminate\Http\Response
     */

    public function edit(Place $category, $id)
    {

        $data=  Place::find($id);
        $datalist= Place::all();
        return view('admin.category.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Place $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $category, $id)
    {
        //

            $data=Place::find($id);
            $data->parent_id =$request->parent_id ;
            $data-> title= $request->title;
            $data-> keywords= $request->keywords;
            $data-> description= $request->description;
            $data-> status= $request->status;
            $data-> created_at= $request->created_at;
            $data-> updated_at =$request->updated_at;
            if ($request->file( 'image')){
                $data->image= $request->file('image')->store( 'images');
            }
            $data->save();
            return redirect('admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Place $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $category, $id)
    {
        //
        $data= Place::find($id);
        if ($data->image && Storage::disk( 'public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(to: 'admin/category');
    }

    public function create()
    {
        $data= Place::all();
        return view('admin.category.create',[
            'data' => $data
        ]);
    }
}

