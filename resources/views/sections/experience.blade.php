@include('components.header', [ 'text' => 'Experience' ])
<div class="container m-auto flex flex-wrap">
    @php
    $companies = [ 'Manchester Metropolitan University', 'Regit']
    @endphp
    @foreach($companies as $company)
    <div class="w-1/3">
        @include('components.experience-card', [ 'company' => $company ])
    </div>
    @endforeach
</div>
