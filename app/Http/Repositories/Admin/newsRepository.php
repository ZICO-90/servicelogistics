<?php
namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\newsInterface;
use App\Models\latest_news;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class newsRepository implements newsInterface
{
    private $news;
    public function __construct(latest_news $pram)
    {
        $this->news = $pram;
    }

    public function index()
    {
        $news = latest_news::all();
        return view('Dashboard.news.index', compact('news'));
    }


    public function create(){
        return view('Dashboard.news.create') ;

    }
    public function store($request)
    {
        $data = $request->validated();
        if($request->photo != null)
        {
            $path = Storage::disk('public')->putFile('/news',$request->photo);
            $data['photo']= $path;
        }
            latest_news::create($data);

        return redirect()->route('news.index');
    }

    public function edit($id){
        $new= latest_news::findorFail($id);
        return view('Dashboard.news.edit',compact('new'));
    }
    public function update($request, $id){

        $news = latest_news::findorFail($id);
        $data = $request->validated();
        if($request->photo != null)
        {
            $path = Storage::disk('public')->putFile('/news',$request->photo);
            $data['photo']= $path;
        }
        $news->update($data);
        return redirect()->route('news.index');
    }

        public function destroy($id)
        {
        $news = latest_news::findorFail($id);
        $news->delete();
        return redirect()->route('news.index');
        }
    }

