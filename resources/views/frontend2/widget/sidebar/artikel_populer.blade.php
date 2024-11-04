<div class="widget bg-white p-a20 recent-posts-entry homepage-widget">
    <div class="widget-title style-1">Artikel Popular</div>
    <div class="widget-post-bx">
        <div class="widget-arsip">
            <ul class="timeline">
                @foreach ($popularposts as $post)
                    <li>
                        <!-- Style Ikon FA yang diperbaiki -->
                        <i class="fa fa-file-text"
                            style="color: white; background-color: olivedrab; padding: 10px; border-radius: 50%; font-size: 24px; display: inline-block; text-align: center; width: 40px; height: 40px; line-height: 20px;"></i>
                        <div class="timeline-item" style="margin-left: 60px;">
                            <div class="timeline-header">
                                <a href="{{ route('frontend.post', $post->slug) }}">{{ $post->title }}</a>
                            </div>
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-date">Dibaca {{ $post->views }} Kali</li>
                                    <li class="post-cat">
                                        <a href="{{ route('frontend.category', $post->category->slug) }}"
                                            class="cat-label">{{ $post->category->title }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
