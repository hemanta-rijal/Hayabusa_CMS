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

                <div class="col-md-12 project-select">
                    <label class="form-label" for="type">
                        Testimonial Type <span class="text-danger"> *</span>
                    </label>
                    <select id="type" class="form-select" autocomplete="off" name="type" required>
                        <option value="student"
                            {{ old('type', $testimonial->type ?? '') === 'student' ? 'selected' : '' }}>
                            Student
                        </option>
                        <option value="client"
                            {{ old('type', $testimonial->type ?? '') === 'client' ? 'selected' : '' }}>
                            Client
                        </option>
                    </select>
                    @include('backend.shared.form_field_error', ['name' => 'type'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="name_en">
                        Name <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="name_en"
                           id="name_en" required
                           value="{{ old('name_en', $testimonial->name_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'name_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="name_jp">
                        Name JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="name_jp"
                           id="name_jp" required
                           value="{{ old('name_jp', $testimonial->name_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'name_jp'])
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="tagline_en">
                        Tagline <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="tagline_en"
                           id="tagline_en" required
                           value="{{ old('tagline_en', $testimonial->tagline_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'tagline_en'])
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="tagline_jp">
                        Tagline JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="tagline_jp"
                           id="tagline_jp" required
                           value="{{ old('tagline_jp', $testimonial->tagline_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'tagline_jp'])
                </div>

                <div class="col-md-12">
                    <label for="testimonial_en">Testimonial <span class="text-danger"> *</span></label>
                    <textarea id="testimonial_en" class="ckeditor" required="required"
                              name="testimonial_en">{{ old('testimonial_en', $testimonial->testimonial_en ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'testimonial_en'])
                </div>

                <div class="col-md-12">
                    <label for="testimonial_jp">Testimonial JP<span class="text-danger"> *</span></label>
                    <textarea id="testimonial_jp" class="ckeditor" required="required"
                              name="testimonial_jp">{{ old('testimonial_jp', $testimonial->testimonial_jp ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'testimonial_jp'])
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="youtube">
                        Youtube URL
                    </label>
                    <input type="url" class="form-control" name="youtube"
                           id="youtube"
                           value="{{ old('youtube', $testimonial->youtube ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'youtube'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="image">
                        Image
                    </label>
                    <div class="multiple-file-upload">
                        <input id="image" name="image" type="file" class="file-input-preview"
                               accept="image/png,image/jpeg,image/jpg"
                               {{ $testimonial->id ? '' : 'required' }}
                               data-browse-on-zone-click="true"
                               data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
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
