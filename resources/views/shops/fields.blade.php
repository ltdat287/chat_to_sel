<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label class="col-sm-2 control-label">{{ trans('labels.name') }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control"
               value="{{ old( 'name', isset( $shop ) ? $shop->name : '' )  }}"
               name="name">
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="hr-line-dashed"></div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
    <label class="col-sm-2 control-label">{{ trans('labels.url') }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control"
               value="{{ old( 'url', isset( $shop ) ? $shop->url : '' )  }}"
               name="url">
        {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="hr-line-dashed"></div>

<div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label class="col-sm-2 control-label">{{ trans('labels.avatar') }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control"
               value="{{ old( 'avatar', isset( $shop ) ? $shop->avatar : '' )  }}"
               name="avatar">
        {!! $errors->first('avatar', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="hr-line-dashed"></div>

<div class="form-group {{ $errors->has('landing_image') ? 'has-error' : ''}}">
    <label class="col-sm-2 control-label">{{ trans('labels.landing_image') }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control"
               value="{{ old( 'landing_image', isset( $shop ) ? $shop->landing_image : '' )  }}"
               name="landing_image">
        {!! $errors->first('landing_image', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="hr-line-dashed"></div>