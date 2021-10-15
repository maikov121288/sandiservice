@extends('layouts.landing')
@section('content')

<div class="page">
    <div id="section-content" class="content page-1 moto-section" data-widget="section" data-container="section">
        
        @include('landing.components.mainSection')
        
        @include('landing.components.benefits')

        @include('landing.components.aboutSection')
        
        @include('landing.components.brandsSection')
        
    </div>
</div>

@include('landing.components.technicalSupportSection')

@include('landing.components.servicesSupportSection')

@include('landing.components.callBackSection')

@include('landing.components.footer')

</section>
</div>

@include('landing.components.toTopBtn')

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="{{ asset('./js/script.js') }}"></script>

{{-- old: testing --}}
{{--<script>--}}
    {{--(function(w,d,u){--}}
        {{--var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);--}}
        {{--var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);--}}
    {{--})(window,document,'https://sandi.com.ua/upload/crm/site_button/loader_2_s7bdpb.js');--}}
{{--</script>--}}

{{-- new: 06.10.21 --}}

<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://sandi.com.ua/upload/crm/site_button/loader_4_5x66p1.js');
</script>


@endsection
