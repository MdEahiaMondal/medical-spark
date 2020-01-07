<br>
<br>

<div class="form-group"><label class="col-lg-2 control-label">Subject Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input type="text" value="{{isset($subject->name) ? $subject->name:old('name')}}" name="name" placeholder="Subject Name" class="form-control">
        @error('name')
        <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Subject Code<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input type="text" value="{{isset($subject->subject_code) ? $subject->subject_code:old('subject_code')}}" name="subject_code" placeholder="Subject Code" class="form-control">
        @error('subject_code')
        <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
{{--<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <div class="i-checks">
            <label class="">
                <div class="icheckbox_square-green" style="position: relative;">
                    <input type="checkbox" {{ (isset($department->is_active) AND $department->is_active == 1) ? 'checked':'' }} value="1" name="is_active" style="position: absolute; opacity: 0;">
                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                </div>
                <i></i> Active
            </label>
        </div>
    </div>
</div>--}}