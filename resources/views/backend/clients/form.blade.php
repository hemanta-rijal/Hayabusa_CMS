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
                           value="{{ old('name_en', $client->name_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'name_en'])
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="name_jp">
                        Name JP
                    </label>
                    <input type="text" class="form-control" name="name_jp"
                           id="name_jp" value="{{ old('name_jp', $client->name_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'name_jp'])
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="image">
                        Image <span class="text-danger"> *</span>
                    </label>
                    <div class="multiple-file-upload">
                        <input id="image" name="image" type="file" class="file-input-preview"
                               accept="image/png,image/jpeg,image/jpg"
                               data-browse-on-zone-click="true" {{ $client->id ? '' : 'required' }}>
                    </div>
                    @include('backend.shared.form_field_error', ['name' => 'image'])
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
