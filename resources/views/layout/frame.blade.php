<div class="wrapper">
@include('layout.header')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if(!isset($noContentHeader) || !$noContentHeader)
            <section class="content-header">
                <h1>
                    @yield('header')
                    <small>@yield('subheader')</small>
                </h1>
                @if(!isset($noBreadCrumb) || !$noBreadCrumb)
                    <ol class="breadcrumb">
                        <li><a href={{ route('overview') }}>{{ __('app.side_bar.overview') }}</a></li>
                        @yield('breadcrumb')
                    </ol>
                @endif
            </section>
        @endif

        <section class="content">
            @if(Session::has('message_success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ Session::get('message_success') }}
                </div>
            @endif
            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Failed!</h4>
                    <ul>
                        @if(is_array($errors))
                            @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @else
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            @endif
            @yield('content')
        </section>
    </div>

    @include('layout.footer')
</div>
