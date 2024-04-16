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
                    <label class="form-label" for="question_en">
                        Question <span class="text-danger"> *</span>
                    </label>
                    <input type="text" class="form-control" name="question_en"
                           id="question_en" required
                           value="{{ old('question_en', $faq->question_en ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'question_en'])
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="question_jp">
                        Question JP
                    </label>
                    <input type="text" class="form-control" name="question_jp"
                           id="question_jp" value="{{ old('question_jp', $faq->question_jp ?? '') }}">
                    @include('backend.shared.form_field_error', ['name' => 'question_jp'])
                </div>
                <div class="form-group">
                    <label for="answer_en" class="form-label">
                        Answer<span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" id="answer_en" rows="5" name="answer_en"
                              placeholder="Description"
                              required>{{ old('answer_en', $faq->answer_en ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'answer_en'])
                </div>
                <div class="form-group">
                    <label for="answer_jp" class="form-label">
                        Answer JP<span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" id="answer_jp" rows="5" name="answer_jp"
                              placeholder="Description"
                              required>{{ old('answer_jp', $faq->answer_jp ?? '') }}</textarea>
                    @include('backend.shared.form_field_error', ['name' => 'answer_jp'])
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
