@extends('school.admin.inc.main')
@section('main-container')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                        <p>Here's Help for you. Don't ignore if you are totally bad</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    @php
                        $boxes = [
                            ['title' => 'Edit', 'icon' => 'fa-pencil', 'bg' => 'bg-info', 'desc' => 'Press this to Edit'],
                            ['title' => 'View', 'icon' => 'fa-eye', 'bg' => 'bg-success', 'desc' => 'Click Me to View data'],
                            ['title' => 'Delete', 'icon' => 'fa-trash', 'bg' => 'bg-warning', 'desc' => 'Click Me to Delete'],
                            ['title' => 'Manage', 'icon' => 'fa-bars', 'bg' => 'bg-danger', 'desc' => 'Click to manage uploaded data'],
                            ['title' => 'File Manager', 'icon' => 'fa-folder-open', 'bg' => 'bg-success', 'desc' => 'Upload files here', 'route' => 'file.create'],
                            ['title' => 'Events', 'icon' => 'fa-calendar', 'bg' => 'bg-warning', 'desc' => 'Add an event', 'route' => 'event.create'],
                            ['title' => 'Notices', 'icon' => 'fa-bell', 'bg' => 'bg-danger', 'desc' => 'Add notices', 'route' => 'notice.create'],
                            ['title' => 'Blogs', 'icon' => 'fa-edit', 'bg' => 'bg-success', 'desc' => 'Post blogs', 'route' => 'blog.create'],
                            ['title' => 'Slider', 'icon' => 'fa-images', 'bg' => 'bg-danger', 'desc' => 'Upload sliders', 'route' => 'slider.create'],
                            ['title' => 'About', 'icon' => 'fa-info-circle', 'bg' => 'bg-info', 'desc' => 'Upload about info', 'route' => 'about.create'],
                            ['title' => 'Staff', 'icon' => 'fa-user', 'bg' => 'bg-success', 'desc' => 'Register staff here', 'route' => 'teacher.create'],
                            ['title' => 'Gallery', 'icon' => 'fa-camera', 'bg' => 'bg-danger', 'desc' => 'Upload photos', 'route' => 'gallery.create'],
                            ['title' => 'Contact', 'icon' => 'fa-envelope', 'bg' => 'bg-warning', 'desc' => 'View visitor messages', 'route' => 'contactForm.create'],
                            ['title' => 'Settings', 'icon' => 'fa-cogs', 'bg' => 'bg-warning', 'desc' => 'Manage configurations', 'route' => 'setting.index'],
                        ];
                    @endphp

                    @foreach($boxes as $box)
                        <div class="col-lg-3 col-6">
                            <div class="small-box {{ $box['bg'] }}">
                                <div class="inner text-center">
                                    <h3><i class="fa {{ $box['icon'] }}" aria-hidden="true"></i> {{ $box['title'] }}</h3>
                                    <p>{{ $box['desc'] }}</p>
                                </div>
                                @if(isset($box['route']))
                                    <a href="{{ route($box['route']) }}" class="small-box-footer">
                                        Click here <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>

@endsection