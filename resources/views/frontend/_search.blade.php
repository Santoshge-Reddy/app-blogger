<div class="row form-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form', 'class'=>'form-inline ml-auto']) !!}
            <div class="form-group no-border nav-category-search bmd-form-group">
                {!! Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
            </div>
            <button type="submit" style="margin-right: 30px;" class="btn btn-white btn-just-icon btn-round">
                    <i class="material-icons">search</i>
                </button>
    {!! Form::close() !!}
</div>


