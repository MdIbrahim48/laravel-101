<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Mail\CategoryMailTrip;
use App\Models\Category;
use App\Models\User;
use App\Notifications\CategoryNotification;
use Dotenv\Validator;
use Illuminate\Contracts\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // query builder way
        //  $categories = DB::table('categories')->get();
        // $categories = DB::table('categories')
        //             ->where('type',1)
        //             ->where('status',1)
        //             ->orderBy('id','desc')
        //             ->take(10)
        //             ->get();

        // orm way
        // $categories = Category::query()
        //             ->where('type',1)
        //             ->where('status',1)
        //             ->count();
                    //->get();
                    //->pluck('name');
                    // return $categories;

        // $categories = Category::query()
        //             ->where([
        //                 'type'=>1,
        //                 'status'=>1
        //             ])
        //             ->get();      
        //return $categories;

        // $categories = Category::query()
        //             ->distinct('name')
        //             ->get();
        // //             return $categories;

        // $categories = Category::query()
        //             ->select('name','status')
        //             ->where('status',1)
        //             ->where('type',1);
        //             if ($request->get('select')==1) {
        //                 $categories->addSelect('type');
        //             }
                    //return $categories->get();
        $categories = Category::paginate();
        return view('backend.category.list',[
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.addFrom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, Category $category)
    {

        // $rules = [
        //     'name'=>'required',
        //     'type'=>'required',
        //     'status'=>'required'
        // ];
        // $this->validate($request,$rules);

        //$request->validate($rules);
        //request()->validate($rules);

        // $validator = Validator::make($request->all(),$rules);
        // if ($validator->errors()) {
        //     # code...
        // }else{

        // }

        // $category = new Category;
        $category->fill($request->all())->save();
        // Mail::to('ibrahim382245@gmail.com')->send(new CategoryMailTrip($category));
        // notification
        $user = User::where('email','ibrahim@gmail.com')->first();
        Notification::send($user,new CategoryNotification());
        Session()->flash('alert-success','Resource Added Successfully');
        return redirect()->route('categories.index');
        
        // Category::create($request->except('_token'));
        //dd('saved');

        //  dump($request->all());
        //  dump($request->except('_token'));
        //  dump($request->only([
        //     'name',
        //     'status'
        // ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit',[
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::query()->findOrFail($id);
        $category->fill($request->all())->save();
        Session()->flash('alert-success','Resource Update Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->first()->delete();
        Session()->flash('alert-danger','Resource Delete Successfully');
        return back();
    }
     public function view()
    {
        //
    }
}
