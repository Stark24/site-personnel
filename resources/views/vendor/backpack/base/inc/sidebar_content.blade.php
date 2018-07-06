<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Manage Tags</span></a></li>
<li><a href="{{ url('admin/menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Menu Modification</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/detail_perso') }}"><i class="fa fa-newspaper-o"></i> <span>Modifier Details</span></a></li>
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/footer') }}"><i class="fa fa-list"></i> <span>Modifier Footer</span></a></li>
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/qualification') }}"><i class="fa fa-tag"></i> <span>Modifier qualification</span></a></li>
    </ul>
</li>
