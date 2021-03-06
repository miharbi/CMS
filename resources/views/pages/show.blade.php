@extends('layouts.default')

@section('title')
{{ $page->title }}
@stop

@section('top')
@if($page->show_title)
    <div class="page-header">
    <h1>{{ $page->title }}</h1>
    </div>
@endif
@stop

@section('content')
@auth('edit')
    <div class="well clearfix">
        <div class="hidden-xs">
            <div class="col-xs-6">
                <p>
                    <strong>{{ trans('pages.page_owner') }}:</strong> {!! $page->owner !!}
                </p>
                <a class="btn btn-info" href="{!! URL::route('pages.edit', array('pages' => $page->slug)) !!}">
                    <i class="fa fa-pencil-square-o"></i> {{ trans('pages.edit_page') }}
                </a> 
                <a class="btn btn-danger" href="#delete_page" data-toggle="modal" data-target="#delete_page">
                    <i class="fa fa-times"></i> {{ trans('pages.delete_page') }}
                </a>
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <p>
                        <em>{{ trans('pages.page_created') }}: {!! html_ago($page->created_at) !!}</em>
                    </p>
                    <p>
                        <em>{{ trans('pages.last_updated') }}: {!! html_ago($page->updated_at) !!}</em>
                    </p>
                </div>
            </div>
        </div>
        <div class="visible-xs">
            <div class="col-xs-12">
                <p>
                    <strong>{{ trans('pages.page_owner') }}:</strong> {!! $page->owner !!}
                </p>
                <p>
                    <strong>{{ trans('pages.page_created') }}:</strong> {!! html_ago($page->created_at) !!}
                </p>
                <p>
                    <strong>{{ trans('pages.last_updated') }}:</strong> {!! html_ago($page->updated_at) !!}
                </p>
                <a class="btn btn-info" href="{!! URL::route('pages.edit', array('pages' => $page->slug)) !!}">
                    <i class="fa fa-pencil-square-o"></i> {{ trans('pages.edit_page') }}
                </a> 
                <a class="btn btn-danger" href="#delete_page" data-toggle="modal" data-target="#delete_page">
                    <i class="fa fa-times"></i> {{ trans('pages.delete_page') }}
                </a>
            </div>
        </div>
    </div>
    <hr>
@endauth
@if (Config::get('cms.eval', false))
<?php eval('?>'.$page->body); ?>
@else
{!! $page->body !!}
@endif
@stop

@section('bottom')
@auth('edit')
    @include('pages.delete')
@endauth
@stop

@section('css')
{!! $page->css !!}
@stop

@section('js')
{!! $page->js !!}
@stop
