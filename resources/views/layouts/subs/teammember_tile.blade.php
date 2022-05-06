<div class="team-box" style="min-height: 12rem;">
    <img src="{{ asset($tile_teammember->image_url) }}" alt="{{ $tile_teammember->name }}" style="max-width: 10rem;"/>
    <h4>{{ $tile_teammember->name }} @if($tile_teammember->role != "")<span style="color: #bebebe;">({{ $tile_teammember->role }})</span>@endif</h4>
    {!! $tile_teammember->bio !!}
    <ul>
        @if($tile_teammember->sm_facebook != "")
            <li><a href="{{ $tile_teammember->sm_facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
        @endif
        @if($tile_teammember->sm_twitter != "")
            <li><a href="{{ $tile_teammember->sm_twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
        @endif
        @if($tile_teammember->sm_linkedin != "")
            <li><a href="{{ $tile_teammember->sm_linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        @endif
        @if($tile_teammember->sm_instagram != "")
            <li><a href="{{ $tile_teammember->sm_instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
        @endif
    </ul>
</div>