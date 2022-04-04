 @extends('font_layout')
 @section('content')
 <!--Get Latest post-->
 <main class="container">
 	<div class="row">
 		<div class="col-md-9">
 		  <div class="row"> 
 		@if(count ($posts) > 0)
 		@foreach($posts as $post)
 		<div class="col-md-4 mb-3">
          <div class="card mt-4">
		    <img class="card-img-top" src="{{asset('imgs/thumb/'.$post->thumb)}}" alt="" style="height:150px;border:1px solid gray">
			<div class="card-body">
			 <h5 class="card-title"><a href="{{url('details/'.$post->id)}}">{{$post->title}}</a></h5>
			  </div>
               </div>
 		</div>
          @endforeach
           @else
           <p class="alert alert-danger">No post found</p>
          @endif
 	    </div>
           <!--Pagination bar-->
           {{$posts->links()}}
          </div>
          <!--right sidebar-->

          <div class="col-md-3 ">
          	<div class="card mt-4">
          		<h5 class="card-header">Search</h5>
          		<div class="card-body">
                         <form action="{{url('/')}}">
          			<div class="input-group">
					  <input type="text" class="form-control" name="q" >
					  <div class="input-group-append">
					    <button class="btn btn-dark" type="button">Search</button>
					 </div>
                      </div>
                      </form>
          		</div>
          			
          		</div>

                    <!--Recent Post-->
          	 <div class="card mt-4">
          		<h5 class="card-header">Recent Post</h5>
          		  <div class="list-group-flush">
          		  	@if($recent_post_limit)
          		  	@foreach($recent_post_limit as $post)
          		  	<a class="list-group-item" href="#">{{$post->title}}</a>
          		  	
          		  	@endforeach
                         @endif
          		  </div>
          		
          	  </div>
               

          	        <!--Popular Post-->
          	 <div class="card mt-4">
          		<h5 class="card-header">Popular Post</h5>
          		<div class="list-group-flush">
                    @if($popular_post_limit)
                    @foreach($popular_post_limit as $post)
                    <a class="list-group-item" href="#">{{$post->title}}<span class="badge badge-info ml-2">{{$post->views}}</span></a>
                    @endforeach
                    @endif
                      </div>
          		
          	  </div>

          	</div>
          </div>

 	
 </main>



 @endsection('content')



