<form class="form-horizontal" action="{{ $form['url'] }}" method="POST">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="{{ $form['method'] }}">
    <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="title">{{ trans('events.event_title') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="title" value="{!! Request::old('title', $form['defaults']['title']) !!}" type="text" class="form-control" placeholder="{{ trans('events.event_title') }}">
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('location')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="location">{{ trans('events.event_location') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="location" value="{!! Request::old('location', $form['defaults']['location']) !!}" type="text" class="form-control" placeholder="{{ trans('events.event_location') }}">
            {!! ($errors->has('location') ? $errors->first('location') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('date')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="date">{{ trans('events.event_date') }}</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <div class="input-group date" id="datetimepicker1">
                <input name="date" value="{!! Request::old('date', $form['defaults']['date']) !!}" type='text' class="form-control" placeholder="Event Date">
                <span class="input-group-addon"><span class="fa fa-calendar fa-fw"></span></span>
            </div>
        </div>
        {!! ($errors->has('date') ? $errors->first('date') : '') !!}
    </div>

    <div class="form-group{!! ($errors->has('body')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">{{ trans('events.event_body') }}</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="body" type="text" class="form-control" data-provide="markdown" placeholder="{{ trans('events.event_body') }}" rows="10">{!! Request::old('body', $form['defaults']['body']) !!}</textarea>
            {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

</form>
