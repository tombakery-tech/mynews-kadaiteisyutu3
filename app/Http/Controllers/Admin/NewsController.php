<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News;

class NewsController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }
    
    public function create(Request $request)
{
    $this->validate($request, News::$rules);
    
    $news = new News;
    $form = $request->all();
    
    if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
        } else {
            $news->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $news->fill($form);
        $news->save();
        
    // admin/news/createにリダイレクト
    return redirect('admin/news/create');
 }
}

//あとで消す