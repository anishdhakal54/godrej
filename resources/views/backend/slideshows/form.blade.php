<div class="col-md-9">
    <div class="box box-default">
        <div class="box-body">

            <div class="form-group @if ($errors->has('name')) has-error @endif">
                {!! Form::label('name','Name *', ['class' => 'control-label']) !!}
                {!! Form::text('name',null, ['class'=> 'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>

            {{--            <div class="form-group @if ($errors->has('heading')) has-error @endif">--}}
            {{--                {!! Form::label('heading','Heading *', ['class' => 'control-label']) !!}--}}
            {{--                {!! Form::text('heading',null, ['class'=> 'form-control']) !!}--}}
            {{--                @if ($errors->has('heading'))--}}
            {{--                    <span class="help-block">--}}
            {{--                        {{ $errors->first('heading') }}--}}
            {{--                    </span>--}}
            {{--                @endif--}}
            {{--            </div>--}}
            <div class="form-group @if ($errors->has('link')) has-error @endif">
                {!! Form::label('link','Link *', ['class' => 'control-label']) !!}
                {!! Form::text('link',null, ['class'=> 'form-control']) !!}
                @if ($errors->has('link'))
                    <span class="help-block">
                        {{ $errors->first('link') }}
                    </span>
                @endif
            </div>

            <div class="form-group hidden @if ($errors->has('caption')) has-error @endif">
                {!! Form::label('caption','Caption', ['class' => 'control-label']) !!}
                {{ Form::textarea('caption', null, ['class' => 'form-control']) }}
                @if ($errors->has('caption'))
                    <span class="help-block">
                        {{ $errors->first('caption') }}
                    </span>
                @endif

            </div>
            <div class="form-group @if ($errors->has('priority')) has-error @endif">
                {!! Form::label('priority','Priority *', ['class' => 'control-label']) !!}
                {{ Form::text('priority', null, ['class' => 'form-control']) }}
                @if ($errors->has('priority'))
                    <span class="help-block">
                        {{ $errors->first('priority') }}
                    </span>
                @endif

            </div>


            {{--            {!! Form::label('Home','Home:',['class'=>'control-label']) !!}--}}
            {{--            {!! Form ::radio('page', 'home',(isset($slideshow->page) && $slideshow->page == "home"))!!}--}}
            {{--            {!! Form::label('category','Category:',['class'=>'control-label']) !!}--}}
            {{--            {!! Form ::radio('page', 'category',(isset($slideshow->page) && $slideshow->page == "category"))!!}--}}

            {{--            @if($errors->has('page'))--}}
            {{--                <span class="help-block">{{$errors->first()}}</span>--}}
            {{--            @endif--}}


        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</div>

<div class="col-md-3">
    <div class="box box-default">
        <div class="box-body">

            <div class="form-group @if ($errors->has('active')) has-error @endif">
                {!! Form::label('active','Enable/Disable', ['class' => 'control-label']) !!}
                {{ Form::select('active', [1 => 'Enable', 0 => 'Disable'], null, ['class' => 'form-control']) }}
                @if ($errors->has('active'))
                    <span class="help-block">
                        {{ $errors->first('active') }}
                    </span>
                @endif
            </div>

            <div class="form-group @if ($errors->has('featured_image')) has-error @endif">
                {!! Form::label('featured_image','Featured Image', ['class' => 'control-label']) !!}
                {!! Form::file('featured_image', ['class'=> 'form-control']) !!}
                <input type="hidden" name="id" value="{{$slideshow->id}}"/>
                @if ($errors->has('featured_image'))
                    <span class="help-block">
                        {{ $errors->first('featured_image') }}
                    </span>
                @endif

                @if(isset($slideshow) )
                    <div class="mt-15">
                        <img src="{{asset('storage/'.$slideshow->featured_image) }}"
                             class="thumbnail img-responsive mb-none">
                    </div>
                @endif


            </div>

        </div>
        <div class="box-footer">
            {!! Form::submit($submitButtonText, ['class'=>'btn btn-danger pull-right']) !!}
        </div>
    </div>
</div>
