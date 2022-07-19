@extends("app")

@section("content")

<div class="container">
    
    <div class="row mt-5">
       
        @foreach (\App\Models\Resource::all() as $resource)
            @switch($resource->resourceable_type)
                @case('App\Models\File')
                    <div class="col-md-4">
                        @component("components.file") 
                        @slot('title') {{ $resource->resourceable->title }} @endslot
                        @slot('link') {{ $resource->resourceable->link }} @endslot
                        @slot('created_at') {{ $resource->created_at }} @endslot
                        @endcomponent
                    </div> 
                    @break

                    @case('App\Models\Link')
                    <div class="col-md-4">
                        @component("components.link")
                        @slot('title') {{ $resource->resourceable->title }} @endslot
                        @slot('link') {{ $resource->resourceable->link }} @endslot
                        @slot('new_tab') {{ $resource->resourceable->new_tab }} @endslot
                        @slot('created_at') {{ $resource->created_at }} @endslot
                        @endcomponent
                    </div> 
                    @break

                    @case('App\Models\Snippet')
                    <div class="col-md-4">
                        @component("components.snippet")
                        @slot('title') {{ $resource->resourceable->title }} @endslot
                        @slot('description') {{ $resource->resourceable->description }} @endslot
                        @slot('snippet') {{ $resource->resourceable->snippet }} @endslot
                        @slot('created_at') {{ $resource->created_at }} @endslot
                        @endcomponent
                    </div> 
                    @break
            
                @default
                    
            @endswitch
        @endforeach
    </div>
</div>

@endsection