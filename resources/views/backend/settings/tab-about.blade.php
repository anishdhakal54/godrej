<div class="tab-pane" id="about">
    <div class="form-group{{ $errors->has('who_we_are') ? ' has-error' : '' }}">
        <label for="who_we_are" class="col-sm-2 control-label">Who we are</label>
        <div class="col-sm-10">
            <textarea name="who_we_are" id="who_we_are" class="form-control"
                      rows="5">{{ getConfiguration('who_we_are') }}</textarea>
            @if ($errors->has('who_we_are'))
                <span class="help-block">
                    {{ $errors->first('who_we_are') }}
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('about_image') ? ' has-error' : '' }}">
        <label for="site_logo" class="col-sm-2 control-label">About Image:</label>
        <div class="col-sm-10">
            <input type="file" name="about_image" id="about_image" class="form-control">
            @if ($errors->has('about_image'))
                <span class="help-block">
                    {{ $errors->first('about_image') }}
                </span>
            @endif

            @if(getConfiguration('about_image'))
                <div class="mt-15 half-width">
                    <img src="{{ url('storage') . '/' . getConfiguration('about_image') }}"
                         class="thumbnail img-responsive">
                </div>
            @endif
        </div>
    </div>

</div>
<!-- /.tab-pane -->

