<div id="social">
    <div class="container">
        <div class="row centered">
            @if(theme_config('footer_social_facebook'))
                <div class="col-lg-2">
                    <a href="{{ theme_config('footer_social_facebook') }}"><i class="fa fa-facebook"></i></a>
                </div>
            @endif
            @if(theme_config('footer_social_twitter'))
                <div class="col-lg-2">
                    <a href="{{ theme_config('footer_social_twitter') }}"><i class="fa fa-twitter"></i></a>
                </div>
            @endif
            @if(theme_config('footer_social_discord'))
                <div class="col-lg-2">
                    <a href="{{ theme_config('footer_social_discord') }}"><i class="fa fa-discord"></i></a>
                </div>
            @endif
            @if(theme_config('footer_social_instagram'))
                <div class="col-lg-2">
                    <a href="{{ theme_config('footer_social_instagram') }}"><i class="fa fa-instagram"></i></a>
                </div>
            @endif
            @if(theme_config('footer_social_teamspeak'))
                <div class="col-lg-2">
                    <a href="{{ theme_config('footer_social_teamspeak') }}"><i class="fa fa-teamspeak"></i></a>
                </div>
            @endif
            @if(theme_config('footer_social_youtube'))
                <div class="col-lg-2">
                    <a href="{{ theme_config('footer_social_youtube') }}"><i class="fa fa-youtube"></i></a>
                </div>
            @endif


        </div>
    </div>
</div>

<div id="copyrights">
    <div class="container">
        <p>
            {{ setting('copyright') }}
        </p>
        <div class="credits">Propulsé par Azuriom.</div>
    </div>
</div>
