@props([
    'image' => config('bladewind.empty_state.image', '/vendor/bladewind/images/empty-state.svg'),
    'heading' => '',
    'button_label' => '', // button will not be displayed if no text is passed
    'buttonLabel' => '',
    'message' => '',   // message to display
    // true or false. set to false if you want to fully control the content
    'show_image' => config('bladewind.empty_state.show_image', true),
    'showImage' => config('bladewind.empty_state.show_image', true),
    'onclick' => '',
    'class' => '',
    'image_css' => '',
])
@php
    // reset variables for Laravel 8 support
    $show_image = parseBladewindVariable($show_image);
    $showImage = parseBladewindVariable($showImage);
    if ($buttonLabel !== $button_label) $button_label = $buttonLabel;
    if (! $showImage) $show_image = $showImage;
@endphp
<div class="text-center px-4 pb-6 bw-empty-state {{$class}}">
    @if($show_image == 'true')
        <img src="{{ $image }}" class="h-40 mx-auto mb-3 {{$image_css}}"/>
    @endif
    @if($heading != '')
        <div class="text-slate-700 dark:text-dark-400 text-2xl pt-4 pb-3 px-4 font-light">{!!$heading!!}</div>
    @endif
    @if($message != '')
        <div class="text-slate-600/70 dark:text-dark-500 px-6">{!!$message!!}</div>
    @endif
    <div class="pt-2 dark:text-dark-400">{!! $slot !!}</div>
    @if($button_label != '')
        <x-bladewind::button
                onclick="{!!$onclick!!}" class="block mx-auto my-2"
                size="small">{{$button_label}}</x-bladewind::button>
    @endif
</div>
