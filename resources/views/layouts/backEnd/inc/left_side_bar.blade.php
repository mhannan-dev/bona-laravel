<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('storage/profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.settings') : route('author.settings')}}"><i class="material-icons">settings</i>Settings</a>
                    </li>

                    <li role="seperator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

                @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard')? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag')? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">text_fields</i>
                        <span>Tag</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/category')? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">filter_vintage</i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post')? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">local_parking</i>
                        <span>Post</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/pending')? 'active' : '' }}">
                    <a href="{{ route('admin.post.pending') }}">
                        <i class="material-icons">fiber_new</i>
                        <span>Pending Post</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/favourite')? 'active' : '' }}">
                    <a href="{{ route('admin.favourite.index') }}">
                        <i class="material-icons">favorite</i>
                        <span>Favourite Post</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/subscriber')? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber.index') }}">
                        <i class="material-icons">subscriptions</i>
                        <span>Subscribers</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/comment')? 'active' : '' }}">
                    <a href="{{ route('admin.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>




                <li class="header">Systems</li>
                <li class="{{ Request::is('admin/settings')? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif


                @if(Request::is('author*'))

                <li class="{{ Request::is('author/dashboard')? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/post')? 'active' : '' }}">
                    <a href="{{ route('author.post.index') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Post</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/favourite')? 'active' : '' }}">
                    <a href="{{ route('author.favourite.index') }}">
                        <i class="material-icons">favorite</i>
                        <span>Favourite Post</span>
                    </a>
                </li>

                <li class="{{ Request::is('author/comment')? 'active' : '' }}">
                    <a href="{{ route('author.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>


                <li class="header">Systems</li>
                <li class="">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li>
                <li class="header">Systems</li>
                <li class="{{ Request::is('author/settings')? 'active' : '' }}">
                    <a href="{{ route('author.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>





                @endif

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2019 - 2019 <a href="javascript:void(0);">Muhammad Hannan</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.1
        </div>
    </div>
    <!-- #Footer -->
</aside>