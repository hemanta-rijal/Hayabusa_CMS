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

                <div class="col-md-12">
                    <label class="form-label" for="title_en">
                        Title <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="title_en"
                           id="title_en" required
                           value="{{ old('title_en', $blog->title_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'title_en'])
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="title_jp">
                        Title JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="title_jp"
                           id="title_jp" required
                           value="{{ old('title_jp', $blog->title_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'title_jp'])
                </div>

                <div class="col-md-12">
                    <label for="description_en">Description <span class="text-danger"> *</span></label>
                    <textarea id="description_en" class="ckeditor" required="required"
                              name="description_en">{{ old('description_en', $blog->description_en ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'description_en'])
                </div>

                <div class="col-md-12">
                    <label for="description_jp">Description JP<span class="text-danger"> *</span></label>
                    <textarea id="description_jp" class="ckeditor" required="required"
                              name="description_jp">{{ old('description_jp', $blog->description_jp ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'description_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="thumbnail">
                        Thumbnail <span class="text-danger"> *</span>
                    </label>
                    <div class="multiple-file-upload">
                        <input id="thumbnail" name="thumbnail" type="file" class="file-input-preview"
                               accept="image/png,image/jpeg,image/jpg"
                               data-browse-on-zone-click="true" {{ $blog->id ? '' : 'required' }}
                               data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                    </div>
                    @include('backend.shared.form_field_error', ['name' => 'thumbnail'])
                </div>

                <div class="col-md-12">
                    <div class="mb-1">
                        <label class="form-label" for="images">Related Images</label>
                        <div class="form-label gallery-360">
                            <input type="file" name="images[]" id="images"
                                   accept="image/png,image/jpeg,image/jpg"
                                   class="gallery-input-preview" multiple
                                   data-browse-on-zone-click="true"
                                   data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
