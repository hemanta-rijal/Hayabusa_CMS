<div class="col-lg-12 layout-spacing col-md-12 col-12">
  <div class="statbox widget box box-shadow">
      <div class="widget-header">
          <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                  <h4>Menu Information</h4>
              </div>
          </div>
      </div>

      <div class="widget-content widget-content-area">
          <div class="row g-3">
              <div class="col-md-12">
                  <label class="form-label" for="main-title-en">
                      Main Title (English)<span class="text-danger"> *</span>
                  </label>
                  <input type="text" class="form-control" name="title_en" id="main-title-en" required
                      value="{{ old('title_en',$cta->main_title_en ?? '') }}">
                  @include('backend.shared.form_field_error', ['name' => 'title_en'])
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