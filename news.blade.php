@extends('welcome')

@section('content')



<div class="col-md-3 row col-sm-12" style="position: absolute; top:25%; left: 2%;">
        @foreach($p as $posts)
        <h5  style="margin-left: 10px; color: white;"><a style="color: white;" href="{{ route('news',['id' => $posts->id])}}" class="badge bg-secondary" >
          
            <br> {{$posts->name}}          

        </a></h5>
        
 @endforeach
    </div>



   

<div style="background-color:#cbd4d2; margin: 0 0 !important;" >
    @foreach($row as $posts)

         




<a href="{{ route('show', ['id' => $posts->id])}}"> 


    <div class="card col-md-6 col-sm-12 alert alert-secondary" style="min-height:500px; margin: 2% 35%; border-width: 0;">
  <img style="width:100% !important;" height="350px" src="/exampleapp/public/public/file_img/{{$posts->image}}" class="card-img-top" alt="">
  <div class="card-body alert alert-secondary" style="margin: 4% 0px !important;">
    <h4>{{$posts->title}}</h4>
    <p class="card-text" style="margin: 3% 0%">{{$posts->content}}</p>

     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
     <a >{{$posts->view_count}}</a>
   <p style="float:right;">



</p>
 </div>
  </div>
@endforeach
</a>
</div>





@endsection