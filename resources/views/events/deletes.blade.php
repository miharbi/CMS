@foreach ($events as $event)
    <div id="delete_event_{!! $event->id !!}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ trans('globals.are_you_sure') }}</h4>
            </div>
            <div class="modal-body">
                <p>{{ trans('events.delete_message') }}</p>
                <p>{{ trans('globals.are_you_sure_you_wish') }}</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="{!! URL::route('events.destroy', array('events' => $event->id)) !!}" data-token="{!! Session::getToken() !!}" data-method="DELETE">{{ trans('globals.yes') }}</a>
                <button class="btn btn-danger" data-dismiss="modal">{{ trans('globals.no') }}</button>
            </div>
        </div>
        </div>
    </div>
@endforeach
