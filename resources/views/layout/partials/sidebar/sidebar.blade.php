<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://www.gravatar.com/avatar/{{ md5(\Auth::user()->email) }}&s=160" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name }}</p>
                <!-- Status -->
                <a><i class="fa fa-user text-success"></i> {{ \Auth::user()->email }}</a>
            </div>
        </div>

        @if(\Config::get('quickadmin.search.url') != '')
        <!-- search form (Optional) -->
        <form action="{{ \Config::get('quickadmin.search.url') }}" method="{{ \Config::get('quickadmin.search.method') }}" class="sidebar-form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="input-group">
                <input type="text" name="{{ \Config::get('quickadmin.search.parameter') }}" class="form-control" placeholder="{{ \Config::get('quickadmin.search.placeholder') }}"/>
                <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ \Config::get('quickadmin.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            {!! $menu or 'no menu found' !!}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>