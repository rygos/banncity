@extends('layouts.default')

@section('title')
@if(Request::is('/'))
@elseif (isset($node))
{{ $node->name }}
 - @parent
@else
{{ trans('threads.index.list') }}
 - @parent
@endif
@stop

@section('content')

<div class="col-md-9 threads-index main-col">
    <div class="panel panel-default">

        <div class="panel-heading">
        <div class="pull-left hidden-sm hidden-xs">
          @if (Request::is('/'))
            <i class="fa fa-list"></i> {{ trans('threads.index.home') }}
          @elseif (isset($node))
          <div class="node-info">
            <strong>{{ $node->name }}</strong>
            <span class="total">{{ trans('threads.index.thread_count', ['threads' => $node->thread_count ]) }}</span>
            @if($node->description)<div class="summary">{{ $node->description }}</div>@endif
          </div>
          @elseif (isset($tag))
          <div class="node-info">
          {{ trans('threads.index.tags') }}: <strong>{{ $tag->name }}</strong>
          <span class="total">, {{ trans('threads.index.thread_count', ['threads' => $tag->threads->count() ]) }}</span>
          </div>
          @else
          <i class="fa fa-comments-o"></i> {{ trans('threads.index.threads') }}
          @endif
          </div>
          @if (!isset($tag))
            @include('threads.partials.filter')
          @endif
          <div class="clearfix"></div>
        </div>

        @if ( ! $threads->isEmpty())

            <div class="panel-body remove-padding-horizontal">
                @include('threads.partials.threads', ['column' => false])
            </div>

            <div class="panel-footer text-right remove-padding-horizontal pager-footer">
                <!-- Pager -->
                {!! $threads->appends(Request::except('page', '_pjax'))->render() !!}
            </div>

        @else
            <div class="panel-body">
                <div class="empty-block">{{ trans('threads.index.noitem') }}</div>
            </div>
        @endif

    </div>

    <!-- Nodes List -->
    @include('nodes.partials.list')

</div>

@include('partials.sidebar')


@stop
