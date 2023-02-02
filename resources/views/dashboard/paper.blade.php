@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-7">
                <div class="card card-primary">
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="topic">Topic</label>
                                <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                    <option>Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="abstract-title">Abstract Title</label>
                                <input type="text" class="form-control" id="abstract-title">
                            </div>
                            <div class="form-group">
                                <label for="authors-name">Authors Name</label>
                                <input type="text" class="form-control" id="authors-name">
                            </div>
                            <div class="form-group">
                                <label for="co-authors-name">Co-Authors Name</label>
                                <input type="text" class="form-control" id="co-authors-name">
                            </div>
                            <div class="form-group">
                                <label for="affiliation">Affiliation</label>
                                <input type="text" class="form-control" id="affiliation">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Information</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Deadline of paper submission : 24 Nopember 2023 </p>
                        <p>Visit this link for information about paper, template, and guideline</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
