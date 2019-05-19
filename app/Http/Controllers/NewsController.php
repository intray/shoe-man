<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class NewsController extends Controller
{
    public function getListNews()
    {
    	$news = news::all();
    	return view('admin.News.List',compact('news'));
    }

    public function getAddNews(){
    	$news = news::all();
    	return view('admin.News.Add',['news'=>$news]);
    }

    public function postAddNews(Request $request)
    {
        if ($request -> hasFile('file')) 
        {
            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('source/img/blog', $filename);
            $news = new news;
            $news -> title = $request -> title;
            $news-> content = $request -> content;
            $news-> image = $filename;
            $news -> save();
        }
    	return redirect ('admin/news/list');
    }

    public function getEditNews($id){
        $news = news::find($id);
        return view('admin.News.Edit',['news'=>$news]);
    }

    public function postEditNews(Request $request,$id)
    {
        $news = news::find($id);
        if ($request -> hasFile('file')) 
        {
            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('source/img/blog', $filename);
            $news -> title = $request -> title;
            $news-> content = $request -> content;
            $news-> image = $filename;
            $news -> save();
        }
        return redirect ('admin/news/list');
    }

    public function postDeleteNews($id) {
        $news = news::find($id);
        $news->delete();
        return redirect('admin/news/list')->with('thongbao','Xóa rồi nhá');
    }
}
