@extends('layouts.default')

@section('title')
    {{ trans('threads.create.add') }}_@parent
@stop

@section('content')

    <div class="thread_create">

        <div class="col-md-9 main-col">
            <div class="panel panel-default corner-radius">
                <div class="panel-heading">{{ trans('threads.create.add') }}</div>
                <div class="panel-body">
                    <div class="reply-box form box-block">
                        @if (isset($thread))
                            {!! Form::model($thread, ['route' => ['thread.update', $thread->id], 'id' => 'thread_edit_form', 'class' => 'create_form', 'method' => 'patch']) !!}
                        @else
                            {!! Form::open(['route' => 'thread.store','id' => 'thread_create_form', 'class' => 'create_form', 'method' => 'post']) !!}
                        @endif

                        <div class="form-group">
                            {!! Form::text('thread[title]', isset($thread) ? $thread->title : null, ['class' => 'form-control', 'id' => 'thread_title', 'placeholder' => trans('threads.create.title')]) !!}
                        </div>

                        <div class="form-group">
                            <select class="form-control selectpicker" name="thread[node_id]">
                                <option value=""
                                        disabled {!! $node ? null : 'selected'; !!}>{{ trans('threads.create.pick_node') }}</option>
                                @foreach ($sections as $section)
                                    <optgroup label="{{ $section->name }}">
                                        @if(isset($section->nodes))
                                            @foreach ($section->nodes as $item)
                                                <option value="{{ $item->id }}" {!! (Input::old('node_id') == $item->id || (isset($node) && $node->id==$item->id)) ? 'selected' : ''; !!} >
                                                    - {{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                        <!-- editor start -->
                        @include('threads.partials.editor_toolbar')
                    <!-- end -->
                        <div class="form-group">
                            {!! Form::textarea('thread[body]', isset($thread) ? $thread->body_original : null, ['class' => 'post-editor form-control',
                                                              'rows' => 15,
                                                              'style' => "overflow:hidden",
                                                              'id' => 'body_field',
                                                              'placeholder' => trans('threads.create.markdown_support')]) !!}
                        </div>

                        <div class="form-group">
                            <select class="form-control js-tag-tokenizer" multiple="multiple" name="thread[tags][]">
                                @if(isset($thread))
                                    @foreach($thread->tags as $tag)
                                        <option selected="selected">{{ $tag->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <small>
                                {{ trans('threads.create.tag_help') }}
                            </small>
                        </div>

                        <div class="form-group status-post-submit">
                            {!! Form::submit(trans('threads.create.publish'), ['class' => 'btn btn-primary col-xs-2', 'id' => 'thread-create-submit']) !!}
                            <div class="pull-right">
                                <small>{!! trans('threads.create.drag_drop') !!}</small>
                                <a href="/markdown" target="_blank"><i
                                            class="fa fa-lightbulb-o"></i> {{ trans('threads.create.markdown_desc') }}
                                </a>
                                </small>
                            </div>
                        </div>

                        <div class="box preview markdown-body" id="preview-box" style="display:none;"></div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3 side-bar">

            @if ( $node )
                <div class="panel panel-default corner-radius help-box">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">{{ trans('threads.create.current_node') }} : {{ $node->name }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $node->description }}
                    </div>
                </div>
            @endif

            <div class="panel panel-default corner-radius help-box">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">{{ trans('threads.create.tip.title') }}</h3>
                </div>
                <div class="panel-body">
                    <ul class="list">
                        <li>{{ trans('threads.create.tip.1.title') }}
                            <p>{{ trans('threads.create.tip.1.desc') }}</p>
                        </li>
                        <li>{{ trans('threads.create.tip.2.title') }}
                            <p>{{ trans('threads.create.tip.2.desc') }}</p>
                        </li>
                        <li>{{ trans('threads.create.tip.3.title') }}
                            <p>{!! trans('threads.create.tip.3.desc') !!}</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default corner-radius help-box">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">{{ trans('threads.create.guide.title') }}</h3>
                </div>
                <div class="panel-body">
                    <ul class="list">
                        <li>{{ trans('threads.create.guide.1.title') }}
                            <p>{{ trans('threads.create.guide.1.desc') }}</p>
                        </li>
                        <li>{{ trans('threads.create.guide.2.title') }}
                            <p>{{ trans('threads.create.guide.2.desc') }}</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

@stop
