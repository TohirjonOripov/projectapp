 @extends('welcome')

@section('content')


<div style="background-color:#cbd4d2; margin: 0 0 !important;" >
      
         <div class="card col-md-7 col-sm-12 alert alert-secondary" style="min-height:500px; margin: 2% auto;">
  <img width="100%" height="350px" src="/exampleapp/public/public/file_img/{{$post->image}}" class="card-img-top" alt="">
  <div class="card-body alert alert-secondary" style="margin: 4% 0px !important;">
    <h4>{{$post->title}}</h4>
    <p class="card-text" style="margin: 3% 0%">{{$post->content}}</p>
        
         <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>

     <a >{{$post->view_count}}</a>
   <p style="float:right;">


</p>
  </div>
  


@foreach($com as $comment)


<div class="container alert alert-info" >
    
    <h3>{{$comment->name}}</h3>
    <br>

    <p>{{$comment->comment}}</p>

</div>

@endforeach






<div class="col-md-12 col-sm-12" style="margin: 8% auto;">
    <form action="{{route('comment')}}" method="POST">
        @csrf
        <h4>Comments</h4>
        <input type="text" name="comment" class="form-control">
        <br>
        <input style="display:none;" type="text" name="com_id" value="{{$post->id}}" class="form-control">
        <textarea type="text" name="name" class="form-control" ></textarea>
           <br>
        <input type="submit" value="Save comment" class="btn btn-info"> 
    </form>
</div>
</div>





</div>






  


























  @endsection