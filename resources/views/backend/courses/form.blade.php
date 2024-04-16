<div class="col-lg-12 layout-spacing col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Basic Information</h4>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="name_en">
                        Name <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="name_en"
                           id="name_en" required
                           value="{{ old('name_en', $course->name_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'name_en'])
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="name_jp">
                        Name JP
                    </label>
                    <input type="text" class="form-control" name="name_jp"
                           id="name_jp" value="{{ old('name_jp', $course->name_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'name_jp'])
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
