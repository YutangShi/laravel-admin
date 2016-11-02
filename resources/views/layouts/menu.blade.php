<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{!! route('news.index') !!}"><i class="fa fa-edit"></i><span>news</span></a>
</li>

<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{!! route('news.index') !!}"><i class="fa fa-edit"></i><span>News</span></a>
</li>

<li class="{{ Request::is('managers*') ? 'active' : '' }}">
    <a href="{!! route('managers.index') !!}"><i class="fa fa-edit"></i><span>Managers</span></a>
</li>

<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{!! route('news.index') !!}"><i class="fa fa-edit"></i><span>News</span></a>
</li>

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{!! route('courses.index') !!}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('banners*') ? 'active' : '' }}">
    <a href="{!! route('banners.index') !!}"><i class="fa fa-edit"></i><span>Banners</span></a>
</li>

<li class="{{ Request::is('teams*') ? 'active' : '' }}">
    <a href="{!! route('teams.index') !!}"><i class="fa fa-edit"></i><span>Teams</span></a>
</li>

