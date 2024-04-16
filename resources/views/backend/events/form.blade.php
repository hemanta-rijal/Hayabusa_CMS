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
                           value="{{ old('title_en', $event->title_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'title_en'])
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="title_jp">
                        Title JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="title_jp"
                           id="title_jp" required
                           value="{{ old('title_jp', $event->title_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'title_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="host_en">
                        Host <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="host_en"
                           id="host_en" required
                           value="{{ old('host_en', $event->host_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'host_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="host_jp">
                        Host JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="host_jp"
                           id="host_jp" required
                           value="{{ old('host_jp', $event->host_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'host_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="date_en">
                        Date <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="date_en"
                           id="date_en" required
                           value="{{ old('date_en', $event->date_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'date_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="date_jp">
                        Date JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="date_jp"
                           id="date_jp" required
                           value="{{ old('date_jp', $event->date_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'date_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="time_en">
                        Time <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="time_en"
                           id="time_en" required
                           value="{{ old('time_en', $event->time_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'time_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="time_jp">
                        Time JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="time_jp"
                           id="time_jp" required
                           value="{{ old('time_jp', $event->time_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'time_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="venue_en">
                        Venue <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="venue_en"
                           id="venue_en" required
                           value="{{ old('venue_en', $event->venue_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'venue_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="venue_jp">
                        Venue JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="venue_jp"
                           id="venue_jp" required
                           value="{{ old('venue_jp', $event->venue_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'venue_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="location_en">
                        Location <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="location_en"
                           id="location_en" required
                           value="{{ old('location_en', $event->location_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'location_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="location_jp">
                        Location JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="location_jp"
                           id="location_jp" required
                           value="{{ old('location_jp', $event->location_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'location_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="entry_fee_en">
                        Entry Fee <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="entry_fee_en"
                           id="entry_fee_en" required
                           value="{{ old('entry_fee_en', $event->entry_fee_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'entry_fee_en'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="entry_fee_jp">
                        Entry Fee JP<span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="entry_fee_jp"
                           id="entry_fee_jp" required
                           value="{{ old('entry_fee_jp', $event->entry_fee_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'entry_fee_jp'])
                </div>

                <div class="col-md-12">
                    <label for="description_en">Description <span class="text-danger"> *</span></label>
                    <textarea id="description_en" class="ckeditor" required="required"
                              name="description_en">{{ old('description_en', $event->description_en ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'description_en'])
                </div>

                <div class="col-md-12">
                    <label for="description_jp">Description JP<span class="text-danger"> *</span></label>
                    <textarea id="description_jp" class="ckeditor" required="required"
                              name="description_jp">{{ old('description_jp', $event->description_jp ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'description_jp'])
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="thumbnail">
                        Thumbnail <span class="text-danger"> *</span>
                    </label>
                    <div class="multiple-file-upload">
                        <input id="thumbnail" name="thumbnail" type="file" class="file-input-preview"
                               accept="image/png,image/jpeg,image/jpg"
                               data-browse-on-zone-click="true" {{ $event->id ? '' : 'required' }}
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
