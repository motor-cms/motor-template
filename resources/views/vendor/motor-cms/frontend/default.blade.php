@extends(isset($template['meta']['namespace']) ? $template['meta']['namespace'].'::layouts.frontend.'.$version->template : 'layouts.frontend.'.$version->template)

@foreach ($renderedOutput as $container => $components)
    @foreach ($components as $component)
        @section($container)
            {!! $component !!}
        @append
    @endforeach
@endforeach
