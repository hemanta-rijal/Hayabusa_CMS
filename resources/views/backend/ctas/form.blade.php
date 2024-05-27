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
                  <label class="form-label" for="main-title-en">
                      Main Title (English)<span class="text-danger"> *</span>
                  </label>
                  <input type="text" class="form-control" name="main_title_en" id="main-title-en" required
                      value="{{ old('main_title_en',$cta->main_title_en ?? '') }}">
                  @include('backend.shared.form_field_error', ['name' => 'main_title_en'])
              </div>
              <div class="col-md-6">
                  <label class="form-label" for="main-title-jp">
                      Main Title (Japanese)<span class="text-danger"> *</span>
                  </label>
                  <input type="text" class="form-control" name="main_title_jp" id="main-title-jp" required
                      value="{{ old('main_title_jp',$cta->main_title_jp ?? '') }}">
                  @include('backend.shared.form_field_error', ['name' => 'main_title_jp'])
              </div>
              <div class="col-md-6">
                  <label class="form-label" for="sup-title-en">
                      Supplemental Title (English)<span class="text-danger"> *</span>
                  </label>
                  <input type="text" class="form-control" name="sup_title_en" id="sup-title-en" required
                      value="{{ old('sup_title_en',$cta->sup_title_en ?? '') }}">
                  @include('backend.shared.form_field_error', ['name' => 'sup_title_en'])
              </div>
              <div class="col-md-6">
                  <label class="form-label" for="sup-title-jp">
                      Supplemental Title (Japanese)<span class="text-danger"> *</span>
                  </label>
                  <input type="text" class="form-control" name="sup_title_jp" id="sup-title-jp" required
                      value="{{ old('sup_title_jp',$cta->sup_title_jp ?? '') }}">
                  @include('backend.shared.form_field_error', ['name' => 'sup_title_jp'])
              </div>
              <div class="col-md-6">
                  <label class="form-label" for="link">
                      Link<span class="text-danger"> *</span>
                  </label>
                  <input type="text" class="form-control" name="link" id="link" required
                      value="{{ old('link',$cta->link ?? '') }}">
                  @include('backend.shared.form_field_error', ['name' => 'link'])
              </div>

             

              <div class="col-md-6">
                <label class="form-label" for="image">
                    Thumbnail <span class="text-danger"> *</span>
                </label>
                <div class="multiple-file-upload">
                    <input id="image" name="image" type="file" class="file-input-preview"
                           accept="image/png,image/jpeg,image/jpg"
                           data-browse-on-zone-click="true" {{ isset($cta) ? '' : 'required' }}
                           data-allowed-file-extensions='["png", "jpg", "jpeg"]'>
                </div>
                @include('backend.shared.form_field_error', ['name' => 'image'])
            </div>

              <div class="row g-3 mt-3">
                  <div class="col-12">
                      <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>