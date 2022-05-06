@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  
    <link href="{{ asset('assets/plugins/summernote-master/summernote.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Add New Blog Article 
            <a href="{{ route('dashboard.blog.index') }}" class="btn btn-default pull-right">Blog Articles List</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title"> New Blog Article Form</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('dashboard.blog.store') }}" class="form-horizontal" onsubmit="fetchBodyText();">
                            @csrf
                            <input type="hidden" name="body" id="body">
                            <div class="form-group @error('title') has-error  @enderror">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                                    @error('title')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group @error('headline-image') has-error  @enderror">
                                        <label class="col-sm-3 control-label">Headline Image</label>
                                        <div class="col-sm-9">
                                            <select style="margin-bottom:15px;" class="form-control" id="headline-image" name="headline-image" onchange="updateHeadlineImage()">
                                                @foreach($images as $image)
                                                    <option value="{{ $image->id }}" {{ old("headline-image") == $image->id ? "selected" : "" }}>{{ $image->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('headline-image')
                                                <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group @error('brief') has-error  @enderror">
                                        <label for="brief" class="col-sm-3 control-label">Brief</label>
                                        <div class="col-sm-9">
                                            <textarea name="brief" id="brief"  class="form-control" cols="30" rows="10">{{ old('brief') }}</textarea>
                                            @error('brief')
                                                <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img alt="Headline image preview" class="img-thumbnail" id="selected-image-preview">
                                </div>
                            </div>
                            <div class="form-group @error('category') has-error  @enderror">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select style="margin-bottom:15px;" class="form-control" name="category">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old("category") == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('authors') has-error  @enderror">
                                <label class="col-sm-2 control-label">Author(s)</label>
                                <div class="col-sm-10">
                                    <select multiple class="form-control" name="authors[]">
                                        @foreach($authors as $author)
                                            <option value="{{ $author->id }}" {{  old("authors[]") && in_array($author->id, old("authors[]")) ? "selected" : "" }}>{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('authors')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('listing_date') has-error  @enderror">
                                <label for="listing_date" class="col-sm-2 control-label">Listing Date</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control date-picker" id="listing_date" name="listing_date" value="{{ old('listing_date') }}">
                                    @error('listing_date')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('body') has-error  @enderror">
                                <label class="col-sm-2 control-label">Body</label>
                                <div class="col-sm-10">
                                    <div class="summernote">{!! old("body") !!}</div>
                                    @error('body')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-block btn-warning">Clear</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    @include("dashboard.subs.footer")
</div><!-- /Page Inner -->

@endsection

@section("extra_scripts")

    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote-master/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-elements.js') }}"></script>
    <script>
       images = JSON.parse({!! json_encode(App\Models\Image::all(["id", "image_url"])->toJson()) !!})

        updateHeadlineImage()

        function fetchBodyText(){
            $("input#body").val($("div.note-editable").html())
        }

        function updateHeadlineImage(){
            url = "{{ asset('aaaaaa') }}"
            selected_image = images.filter(image => image.id == $("select#headline-image").val())[0]
            url = url.replace("aaaaaa", selected_image.image_url)
            $('img#selected-image-preview').attr('src', url);
        }
    </script>
    
@endsection