@extends('layouts.default')

@section('title')
{!! trans('credits.mine') !!} @parent
@stop

@section('content')

<div class="panel panel-default">

    <div class="panel-heading">
      {{ trans('credits.mine') }}
    </div>
    <div class="panel-body">
      <div class="media">
      <div class="media-heading">
        {{ trans('credits.balance_current') }}
       <span class="coin_list" data-toggle="tooltip", data-placement="bottom" title="{{ $current_user->score }}">
        {!! $current_user->coins !!}
        </span>
        </div>
      </div>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th>#</th>
            <th>{{ trans('credits.time') }}</th>
            <th>{{ trans('credits.type') }}</th>
            <th>{{ trans('credits.reward') }}</th>
            <th>{{ trans('credits.balance') }}</th>
          </tr>
          @foreach ($credits as $index => $credit)
          <tr>
            <td>{{ $credit->id }}</td>
            <td class="timeago">{{ $credit->created_at }}</td>
             <td>{{ $credit->rule->name }}</td>
            <td>{!! $credit->reward_formatted !!}</td>
            <td>{{ $credit->balance }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@stop