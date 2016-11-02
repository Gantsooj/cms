<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" />

            </div>
            <div class="pull-left info">
                <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Онлайн</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Хайх..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{ setActive('admin') }}"><a href="{{ url(getLang() . '/admin') }}"> <i class="fa fa-dashboard"></i> <span>Удирдах хэсэг</span>
                </a></li>
            <li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Цэс нэмэх</span> </a>
            </li>
            <li class="treeview {{ setActive('admin/news*') }}"><a href="#"> <i class="fa fa-th"></i> <span>Мэдээ</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> Бүх мэдээ</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Мэдээ</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive('admin/page*') }}"><a href="#"> <i class="fa fa-bookmark"></i> <span>Хуудас</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> Бүх хуудас</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Хуудас нэмэх</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive(['admin/photo-gallery*', 'admin/video*']) }}"><a href="#"> <i class="fa fa-picture-o"></i> <span>Галлерей </span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Зургийн цомог</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Видео цомог</a>
                    </li>

                </ul>
            </li>
            <li class="treeview {{ setActive('admin/article*') }}"><a href="#"> <i class="fa fa-book"></i> <span>Нийтлэл</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> Бүх нийтлэл</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Нийтлэл нэмэх</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive('admin/slider*') }}"><a href="#"> <i class="fa fa-tint"></i> <span>Нэмэлт </span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Слайдэр</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive('admin/project*') }}"><a href="#"> <i class="fa fa-gears"></i> <span>Төсөл</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> Бүх төсөл</a>
                    </li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Төсөл нэмэх</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive('admin/faq*') }}"><a href="#"> <i class="fa fa-question"></i> <span>Нийтлэг асуулт</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> Бүх асуулт</a></li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Асуулт нэмэх</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive(['admin/user*', 'admin/group*']) }}"><a href="#"> <i class="fa fa-user"></i> <span>Хэрэглэгч</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> Бүх хэрэглэгч</a>
                    </li>
                    <li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Эрх нэмэх</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ setActive(['admin/logs*', 'admin/form-post']) }}"><a href="#"> <i class="fa fa-thumb-tack"></i> <span> Records</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a target="_blank" href="{{ url(getLang() . '/admin/logs') }}"><i class="fa fa-save"></i> Алдааны мэдээлэл</a></li>
                    <li>
                        <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActive('admin/settings*') }}">
                <a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span> Тохиргоо</span> </a>
            </li>
            <li class="{{ setActive('admin/logout*') }}">
                <a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span> Гарах</span> </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>