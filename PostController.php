<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Name;
use App\Events\PostHasViewed;
use Illuminate\Pagination\Paginator;


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function view()
    {
        
        $row = Post::paginate(3);


        return view('post.view',compact('row'));
    }


       public function post()
    {
        
        $post = Post::paginate(3);
        $posts = Post::all();
        $new = Name::all();

        return view('post.post',compact('post','posts','new'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     *     $table->string('title');
    $table->text('content');
    $table->string('image');
     */
    




public function comment(Request $request){
  $data = new Comment();
   $request->validate([
         'comment' => 'required',                
         'name' => 'required',

         'com_id' => 'required'
         
        ]);

           $data->comment = $request->input('comment');
            $data->name = $request->input('name');
            $data->com_id = $request->input('com_id');
            
            $data->save();



}


    public function create(Request $request)
    {
        

         $data = new Post();
     
         $request->validate([
         'title' => 'required',                
         'content' => 'required',
         
         
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/file_img'), $filename);
            $data['image'] = $filename;
            $data->title = $request->input('title');
            $data->content = $request->input('content');
            $data->name_id = $request->input('name_id');

        
        
        


         $data->save();  
        } 

         
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    
        public function show($id)
  {




  
  $post = Post::findOrFail($id);
    
  event('postHasViewed', $post);

   $com = Comment::where('com_id', $post->id)->get();
   $new = Name::all();
    
   
   


  return view('post.show', compact('post','com','new'));
  }

  public function news($id){
     
    $name = Name::findOrFail($id);
    $p = Name::all();
    $row = Post::where('name_id', $name->id)->get();
     
    return view('post.news',compact('row','p'));
  }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
