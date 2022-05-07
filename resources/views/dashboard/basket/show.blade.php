@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Basket
            <a href="{{ route('dashboard.basket.index') }}" class="btn btn-default pull-right">Basket List</a>
            <a href="{{ route('dashboard.basket.edit', ['basket' => $basket]) }}" class="btn btn-default pull-right">Edit Basket</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">basket Details</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th class="text-primary">Name</th>
                                <td>{{ $basket->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Description</th>
                                <td>{{ $basket->description }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Albums Count</th>
                                <td>{{ count($basket->albums) }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Sort Rank</th>
                                <td>{{ $basket->sort_rank }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Added By</th>
                                <td>{{ $basket->added_by_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Created At</th>
                                <td>{{ $basket->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Add Album to Basket</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('dashboard.basket.add_album', ['basket' => $basket]) }}" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group @error('add_album') has-error  @enderror">
                                        <label class="col-sm-3 control-label">Album</label>
                                        <div class="col-sm-9">
                                            <select style="margin-bottom:15px;" class="form-control" id="add_album" name="add_album" onchange="updateAlbumImage()">
                                                @foreach($addable_albums as $ad_album)
                                                    <option value="{{ $ad_album->id }}" {{ old("add_album") == $ad_album->id ? "selected" : "" }}>{{ $ad_album->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('add_album')
                                                <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <img alt="selected album preview" class="img-thumbnail" id="selected-album-preview">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 21px;">
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-block btn-warning" onblur="updateAlbumImage()">Clear</button>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-block btn-success">Add Album</button>
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
        albums = JSON.parse({!! json_encode(App\Models\Album::all(["id"])->append("image_url")->toJson()) !!})
        console.log(albums)

        updateAlbumImage()

        function updateAlbumImage(){
            url = "{{ asset('aaaaaa') }}"
            selected_image = albums.filter(image => image.id == $("select#add_album").val())[0]
            url = url.replace("aaaaaa", selected_image.image_url)
            console.log(url)
            $('img#selected-album-preview').attr('src', url);
        }
    </script>
    
@endsection