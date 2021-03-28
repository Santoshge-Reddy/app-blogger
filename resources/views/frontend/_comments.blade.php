
<div class="row" >
    <div class="col-md-8 ml-auto mr-auto">
        <div class="media-area">
            <h3 id="comments" class="title text-center">{{count($post->comments)}} Comments</h3>

            @forelse ($post->comments as $comment)
            <div class="media">
            
            <div class="media-body content-comment pr-0">
                <h4 class="media-heading">{{ ucfirst(@$comment->user->name) }} says...
                    <small>· 
                            {{ $comment->created_at->diffForHumans() }}
                    </small>
                </h4>
                <h6 class="text-muted"></h6>
                <p>{{ $comment->body }}</p>
          
            </div>
            </div>
            @empty

            <div class="media">
            
            <div class="media-body content-comment pr-0">
                <h4 class="media-heading">Not Found!!</h4>
                <h6 class="text-muted"></h6>
                <p>Sorry! No comment found for this post.</p>
             
            </div>
            </div>

            @endforelse


        </div>
    </div>
</div>





