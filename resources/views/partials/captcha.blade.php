<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="verifycode" style="width: 200px;margin-right: 20px;" placeholder="{{ trans('patials.captcha') }}">
        <span class="input-group-captcha">
            <a href="#" class="captcha-image-box"><img src="{{ $captcha }}"  title="{{ trans('partials.captcha_refresh') }}" /></a>
        </span>
    </div>
</div>