<form class="form-horizontal" action="{{ $form['url'] }}" method="{{ $form['method'] }}">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="{{ $form['_method'] }}">

    <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="title">{{ trans('pages.page_title') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="title" id="title" value="{!! Request::old('title', $form['defaults']['title']) !!}" type="text" class="form-control" placeholder="{{ trans('pages.page_title') }}">
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('nav_title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="nav_title">{{ trans('pages.page_nav_title') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="nav_title" id="nav_title" value="{!! Request::old('nav_title', $form['defaults']['nav_title']) !!}" type="text" class="form-control" placeholder="{{ trans('pages.page_nav_title') }}">
            {!! ($errors->has('nav_title') ? $errors->first('nav_title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('slug')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="slug">{{ trans('pages.page_slug') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="slug" id="slug" value="{!! Request::old('slug', $form['defaults']['slug']) !!}" type="text" class="form-control" placeholder="{{ trans('pages.page_slug') }}">
            {!! ($errors->has('slug') ? $errors->first('slug') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('icon')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="icon">{{ trans('pages.page_icon') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="icon" id="icon" value="{!! Request::old('icon', $form['defaults']['icon']) !!}" type="text" class="form-control" placeholder="{{ trans('pages.page_icon') }}">
            {!! ($errors->has('icon') ? ' '.$errors->first('icon') : '(optional)') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('body')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">{{ trans('pages.page_body') }}</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="body" id="body" class="form-control" placeholder="{{ trans('pages.page_body') }}" rows="8">{!! Request::old('body', $form['defaults']['body']) !!}</textarea>
            {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('css')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="css">{{ trans('pages.page_css') }}</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="css" id="css" class="form-control" placeholder="{{ trans('pages.page_css') }}" rows="8">{!! Request::old('css', $form['defaults']['css']) !!}</textarea>
            {!! ($errors->has('css') ? $errors->first('css') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('js')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="js">{{ trans('pages.page_js') }}</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="js" id="js" class="form-control" placeholder="{{ trans('pages.page_js') }}" rows="8">{!! Request::old('js', $form['defaults']['js']) !!}</textarea>
            {!! ($errors->has('js') ? $errors->first('js') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('show_title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="show_title">{{ trans('pages.show_title') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input class="make-switch" data-on-text="<i class='fa fa-check fa-inverse'></i>" data-off-text="<i class='fa fa-times'>" name="show_title" id="show_title" type="checkbox"{!! (Request::old('show_title', $form['defaults']['show_title']) == true) ? ' checked' : '' !!}>
            {!! ($errors->has('show_title') ? $errors->first('show_title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('show_nav')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="show_nav">{{ trans('pages.show_on_nav') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input class="make-switch" data-on-text="<i class='fa fa-check fa-inverse'></i>" data-off-text="<i class='fa fa-times'>" name="show_nav" id="show_nav" type="checkbox"{!! (Request::old('show_nav', $form['defaults']['show_nav']) == true) ? ' checked' : '' !!}>
            {!! ($errors->has('show_nav') ? $errors->first('show_nav') : '') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

</form>
