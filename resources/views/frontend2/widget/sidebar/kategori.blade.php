<div class="widget bg-white p-a20 recent-posts-entry homepage-widget">
    <div class="widget-title style-1">Kategori Berita</div>
    <div class="widget-post-bx">

        <!-- widget Menu-->
        <div class="widget-menu_kategori">
            <ul id="ul-menu" class="main">
                @foreach ($categories as $category)
                    <li class="cat-item">
                        <a href="{{ route('frontend.category', $category->slug) }}"><i class="fa fa-angle-right"></i>
                            {{ $category->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
