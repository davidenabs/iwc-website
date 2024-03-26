<x-guest title="IWC">
    @include('include.hero')
    @include('include.section.services') 
    @include('include.section.featured-services')
    @include('include.section.faq')
    @include('include.section.blog', ['posts', $posts])
    @include('include.section.contact')

    {{-- @include('include.section.about')
    @include('include.section.iwc-guarantees')
    @include('include.section.services') --}}

    {{-- @include('include.section.testimonials') --}}

    {{-- @include('include.section.pricing')
    @include('include.section.faq')
    @include('include.section.blog', ['posts', $posts])
    @include('include.section.contact') --}}
</x-guest>
