
@if ($thread->is_excellent)
  <div class="ribbon">
      <div class="ribbon-excellent">
          <i class="fa fa-trophy"></i> {{ trans('threads.partials.ribbon.is_excellent') }}
      </div>
  </div>
@endif
