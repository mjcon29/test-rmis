
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($office)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('short_name') ? 'has-error' : '' }}">
    <label for="short_name" class="col-md-2 control-label">Short Name</label>
    <div class="col-md-10">
        <input class="form-control" name="short_name" type="text" id="short_name" value="{{ old('short_name', optional($office)->short_name) }}" maxlength="255" placeholder="Enter short name here...">
        {!! $errors->first('short_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

