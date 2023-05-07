<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;



class DashboardController extends Controller
{
    public function index(){
        //  $url=url('/dashboard');
        //  $title='Add book';
        // $data=compact('url','title');
        return view('admin.dashboard');
        //->with($data);
    }
    public function add(){
        $value=new Book;
        $url=url('admin/dashboard/add');
        $title='Add book';
        $data=compact('url','title','value');
        return view('admin.addbook')->with($data);
    }
         public function store(Request $request)
    {
       
    //    echo '<pre>';
    //     print_r($request->all());
        $value=new Book;
        $value->name=$request['name'];
        $value->author=$request['author'];
        $value->type=$request['type'];
        $value->save();
        return redirect('admin/dashboard/show');
      //  return redirect()->back();
        // These two conditions are not working
        // return view('admin.addbook');
      // return redirect('admin.add');
    }
    public function show()
    {
        $books= Book::all();
    //      echo '<pre>';
    //    print_r( $books);
       // die;
        $data=compact('books');
        return view('admin.show')->with($data);

    }
    public function destroy($id)
    {
        $value= Book::find($id);
        $value ->delete();
         return redirect()->back();
    }
    public function edit($id)
    {
        $value= Book::find($id);
        $title='Update Book';
        if(is_null($value)){
            return redirect('admin/dashboard/show');
 // ---> this will generate error  return view('admin.show');
        }
        else{
            $url=url('admin/dashboard/update')."/" . $id;
            $data=compact('value','url','title');
       
            return view('admin.addbook')->with($data);
        }
    }
    public function update($id,Request $request)
    {
        $value= Book::find($id);
      
        $value->name=$request['name'];
        $value->author=$request['author'];
        $value->type=$request['type'];
        $value->save();
        return redirect('admin/dashboard/show');
     
    }

}
