


<div style="" id="replyForm" class="col-md-8 ml-auto mr-auto  pb-4">
    {!! Form::open(['url' => "posts/{$post->id}/comment"]) !!}
       
        <div class="media media-post">
            <a class="author float-left d-none d-sm-inline" href="https://material-blog-pro-laravel.creative-tim.com/author/admin-guy">
                <div class="avatar">
                    <img class="media-object" alt="" src="">
                </div>
            </a>
            <div class="media-body">
                <div class="form-group label-floating bmd-form-group">
                    <label class="form-control-label bmd-label-floating" for="exampleBlogPost"> Write some nice stuff or nothing...</label>
                     {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3, 'required']) !!}
                </div>
                <div class="media-footer">
                    <button type="submit" class="btn btn-primary btn-round btn-wd float-right">Post Comment</button>
                </div>
            </div>
        </div>
     {!! Form::close() !!}
</div>