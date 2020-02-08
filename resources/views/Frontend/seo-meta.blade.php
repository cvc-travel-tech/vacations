@if(!empty($seo_meta))
    <title>{{ $seo_meta['seo_title'] ?? $seo_meta['service_title'] ?? $page_title ?? ""}} - {{setting_item('site_title' ,'Booking Core')}}</title>
    <meta name="description" content="{{$seo_meta['seo_desc'] ?? $seo_meta['service_desc'] ?? setting_item("site_desc")}}"/>
    {{-- <link rel="canonical" href="{{$seo_meta['full_url'] ?? ""}}"/> --}}
@else
    <title>{{ $page_title ?? ''}} {{setting('site', 'name' )}}</title>
    <meta name="description" content="{{setting('site' , 'description')}}"/>
@endif
