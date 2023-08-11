 @extends('welcome')

@section('content')



 <div class="container-fluid row" style="background: #c0d1c7; margin-top: 5%;">

  @foreach($row as $r)

<div class="card col-md-3 col-sm-6" style="width: 18rem; background: #d7deda; margin:2% 3%;">
  <a style="display:block; color: black; text-decoration: none;" href="http://localhost/exampleapp/public/show/{{$r->id}}"  >
  <img style="margin: 3% 0; width: 100% !important;" src="/exampleapp/public/public/file_img/{{$r->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$r->title}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p style="display:flex; margin:10% 2%;"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>  <a style="margin:0px 5%;" >{{$r->view_count}}</a>

<p style="float:right; margin:-19% 2%;"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
</p>

    </p>
  
   
</a>
  </div>
</div>
  @endforeach


<div class="col-md-5" style="margin: 3% 3%"> {{ $row->links()}}
</div>




</div>





<!-- <div class="col-md-5 col-sm-8" style="margin:5% auto;">
 

<form action="{{ route('create')}}"  method="POST" enctype="multipart/form-data">
 @csrf

<input type="text" class="form-control" placeholder="" name="title" value="Can you write title?" />
<br><br>
<input type="text" class="form-control" placeholder="" name="content" value="Can you write contnet?"/>

<br><br>
<input type="text" class="form-control" placeholder="" name="name_id" value=""/>

<input type="file" name="image">

<br>
<br>

<select>
  
</select>

<button type="submit" class="btn btn-primary">Saqlash</button>

</form>



<br>

<br>



</div> -->






  @endsection