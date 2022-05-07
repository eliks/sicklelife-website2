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
            Edit Team Member
            <a href="{{ route('dashboard.teammember.index') }}" class="btn btn-default pull-right">Team Members List</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Edit Team Member Form</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('dashboard.teammember.update', ['teammember' => $teammember]) }}" class="form-horizontal" onsubmit="fetchBodyText();">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="bio" id="bio">
                            <div class="form-group @error('name') has-error  @enderror">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $teammember->name }}">
                                    @error('name')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('photo') has-error  @enderror">
                                <label class="col-sm-2 control-label">Photo</label>
                                <div class="col-sm-10">
                                    <select style="margin-bottom:15px;" class="form-control" id="photo" name="photo" onchange="updateHeadlineImage()">
                                        @foreach($images as $image)
                                            <option value="{{ $image->id }}" {{ old("photo") == $image->id ? "selected" : ($teammember->image_id == $image->id ? "selected" : "") }}>{{ $image->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('photo')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('role') has-error  @enderror">
                                <label for="role" class="col-sm-2 control-label">Role</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="role" name="role" value="{{ old('role') ?? $teammember->role  }}">
                                    @error('role')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('display_as_team_member') has-error  @enderror">
                                <label for="display_as_team_member" class="col-sm-2 control-label">Display as Team Member</label>
                                <div class="col-sm-10">
                                    <select style="margin-bottom:15px;" class="form-control" id="display_as_team_member" name="display_as_team_member">
                                        <option value="0" {{ old("display_as_team_member") == 0 ? "selected" : (!in_array(old("display_as_team_member"), ["0","1"]) && !$teammember->displayed_as_teammember ? "selected" : "") }}>NO</option>
                                        <option value="1" {{ old("display_as_team_member") == 1 ? "selected" : (!in_array(old("display_as_team_member"), ["0","1"]) && $teammember->displayed_as_teammember ? "selected" : "") }}>YES</option>
                                    </select>
                                    @error('display_as_team_member')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('bio') has-error  @enderror">
                                <label class="col-sm-2 control-label">Bio</label>
                                <div class="col-sm-10">
                                    <div class="summernote">{!! old("bio") ?? $teammember->bio  !!}</div>
                                    @error('bio')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('sm_facebook') has-error  @enderror">
                                <label for="sm_facebook" class="col-sm-2 control-label">Facebook Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_facebook" name="sm_facebook" value="{{ old('sm_facebook') ?? $teammember->sm_facebook  }}">
                                    @error('sm_facebook')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('sm_twitter') has-error  @enderror">
                                <label for="sm_twitter" class="col-sm-2 control-label">Twitter Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_twitter" name="sm_twitter" value="{{ old('sm_twitter') ?? $teammember->sm_twitter  }}">
                                    @error('sm_twitter')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('sm_linkedin') has-error  @enderror">
                                <label for="sm_linkedin" class="col-sm-2 control-label">LinkedIn Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_linkedin" name="sm_linkedin" value="{{ old('sm_linkedin') ?? $teammember->sm_linkedin  }}">
                                    @error('sm_linkedin')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('sm_instagram') has-error  @enderror">
                                <label for="sm_instagram" class="col-sm-2 control-label">Instagram Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_instagram" name="sm_instagram" value="{{ old('sm_instagram') ?? $teammember->sm_instagram  }}">
                                    @error('sm_instagram')
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
                                    <button type="submit" class="btn btn-block btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img alt="Headline image preview" class="img-thumbnail" id="selected-image-preview">
                            </div>
                        </div>
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
            $("input#bio").val($("div.note-editable").html())
        }

        function updateHeadlineImage(){
            url = "{{ asset('aaaaaa') }}"
            selected_image = images.filter(image => image.id == $("select#photo").val())[0]
            url = url.replace("aaaaaa", selected_image.image_url)
            $('img#selected-image-preview').attr('src', url);
        }   
    </script>
    
@endsection