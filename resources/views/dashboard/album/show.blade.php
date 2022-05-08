@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Album
            <a href="{{ route('dashboard.album.index') }}" class="btn btn-default pull-right">Album List</a>
            <a href="{{ route('dashboard.album.edit', ['album' => $album]) }}" class="btn btn-default pull-right">Edit Album</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Album Details</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th class="text-primary">Title</th>
                                <td>{{ $album->title }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Description</th>
                                <td>{{ $album->description }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Album Category</th>
                                <td>{{ $album->category_str }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Listing Date</th>
                                <td>{{ $album->listing_date }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Status</th>
                                <td>@if(true || $album->published) <span class="text-info">PUBLISHED</span> @else <span class="text-warning">NOT PUBLISHED</span>@endif</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Added By</th>
                                <td>{{ $album->added_by_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Created At</th>
                                <td>{{ $album->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Album Images</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if(count($album->images) > 0)
                                @foreach($album->images as $k => $al_image)
                                    <div class="col-md-4">
                                        <img src="{{ asset($al_image->image_url) }}" alt="{{ $al_image->name }}" class="img-thumbnail" style="margin-bottom: 7px;" title="{{ $al_image->name }}">
                                        <form method="POST" action="{{ route('dashboard.album.remove_image', ['album' => $album]) }}" class="form-horizontal">
                                            @csrf
                                            <input type="hidden" name="add_image" value="{{ $al_image->id }}">
                                            <button class="btn btn-block btn-sm btn-default" style="margin-bottom: 21px;">Click to remove image</button>
                                        </form>
                                    </div>
                                    @if(($k+1)%3 == 0)
                                        <div class="clearfix"></div>
                                    @endif
                                @endforeach
                            @else
                                <p>No images added to album yet.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Add Image to Album</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('dashboard.album.add_image', ['album' => $album]) }}" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group @error('add_image') has-error  @enderror">
                                        <label class="col-sm-3 control-label">Image</label>
                                        <div class="col-sm-9">
                                            <select style="margin-bottom:15px;" class="form-control" id="add_image" name="add_image" onchange="updateHeadlineImage()">
                                                @foreach($addable_images as $ad_image)
                                                    <option value="{{ $ad_image->id }}" {{ old("add_image") == $ad_image->id ? "selected" : "" }}>{{ $ad_image->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('add_image')
                                                <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <img alt="Headline image preview" class="img-thumbnail" id="selected-image-preview">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 21px;">
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-block btn-warning" onblur="updateHeadlineImage()">Clear</button>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-block btn-success">Add Image</button>
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
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    <script>
        images = JSON.parse({!! json_encode(App\Models\Image::all(["id", "image_url"])->toJson()) !!})

        updateHeadlineImage()

        function updateHeadlineImage(){
            url = "{{ asset('aaaaaa') }}"
            selected_image = images.filter(image => image.id == $("select#add_image").val())[0]
            url = url.replace("aaaaaa", selected_image.image_url)
            $('img#selected-image-preview').attr('src', url);
        }
    </script>
    
@endsection