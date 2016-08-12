<ul class="pull-right list-inline remove-margin-bottom thread-filter">
    <li>
        <a {!! thread_filter('recent') !!}>
            <i class="fa fa-history"></i> {{ trans('threads.partials.filter.recent') }}
        </a>
    </li>
    <li>
        <a {!! thread_filter('excellent') !!}>
            <i class="fa fa-diamond"> </i> {{ trans('threads.partials.filter.excellent') }}
        </a>
    </li>
    <li>
        <a {!! thread_filter('like') !!}>
            <i class="fa fa-thumbs-o-up"> </i> {{ trans('threads.partials.filter.like') }}
        </a>
    </li>
    <li>
        <a {!! thread_filter('unanswered') !!}>
            <i class="fa fa-eye"></i> {{ trans('threads.partials.filter.unanswered') }}
        </a>
    </li>
</ul>
