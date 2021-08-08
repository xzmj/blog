@extends('layouts.app')

@section('title', $article->title)

@section('content')
    @component('particals.jumbotron')
        <h4>{{ $article->title }}</h4>

        <h6>{{ $article->subtitle }}</h6>

        <div class="header">
            <i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}，
            @if(count($article->tags))
            <i class="fas fa-tags"></i>
                @foreach($article->tags as $tag)
                    <a href="{{ url('tag', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a>，
                @endforeach
            @endif
            <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }}
        </div>
    @endcomponent

    <div class="article container">
    <div class="row text-center">
{{--            <div class="col-md-8 offset-md-2">--}}
{{--            <img alt="{{ $article->slug }}" src="{{ $article->page_image }}"  style="borde-radius:50px">--}}
{{--            </div>--}}
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 offset-md-2">

            <parse content="{{ $article->content['raw'] }}"></parse>

            @if($article->is_original)
                @endif
                @if(config('blog.social_share.article_share'))
                <div class="footing">
                    <div class="social-share"
                        data-title="{{ $article->title }}"
                        data-description="{{ $article->title }}"
                        {{ config('blog.social_share.sites') ? "data-sites=" . config('blog.social_share.sites') : '' }}
                        {{ config('blog.social_share.mobile_sites') ? "data-mobile-sites=" . config('blog.social_share.mobile_sites') : '' }}
                        initialized></div>
                </div>
                @endif
            </div>
        </div>
    </div>

	<comment title="Comments"
	commentable-type="articles"
	commentable-id="{{ $article->id }}"
	@can('comment',$article)
	username="{{ Auth::user()->name }}"
	user-avatar="{{ Auth::user()->avatar }}"
	can-comment
	@endcan
	></comment>

@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <script src="/js/home.js?id=72ccd01c56d195b2468a"></script>
    <script>
        hljs.initHighlightingOnLoad();
        let elements = $(".markdown").find("h2,h3,h4,h5,h6");
        if( elements.length>0){
            $('.toc-container').show();
            elements.each(function (i, item) {
                let tag = $(item).get(0).localName;
                $(item).attr("id", "anchor-" + i).addClass('anchor-section');
                let current = i === 0 ? 'active' : '';
                $("#toc-tree").append('<li><a data-anchor="anchor-' + i + '" class="anchor-nav anchor-' + tag + ' ' + current + '" href="#anchor-' + i + '">' + $(this).text() + '</a></li>');
                $(".anchor-h3,.anchor-h4,.anchor-h5,.anchor-h6").css("padding-left", '14px').css('font-size', '14px').css('color', '#8C9498');
            });
        }


        let navs = $('.anchor-nav'),          // 导航
            sections = $('.anchor-section'),       // 模块
            navLength = navs.length - 1;

        $(window).scroll(function () {
            let scrollTop = $(window).scrollTop();
            if (scrollTop >= 280) {
                $("#tox-box").css('position', 'fixed');
            } else {
                $("#tox-box").css('position', '');
            }
            let len = navLength;

            for (; len > -1; len--) {
                let that = sections.eq(len);
                if (scrollTop + 10 >= that.offset().top) {
                    navs.removeClass('active').eq(len).addClass('active');
                    break;
                }
            }
        });

        $(".anchor-nav").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            let section_anchor ='#'+$(this).data('anchor');
            let top =$(section_anchor).offset().top;
            $("html,body").animate({scrollTop:top},370);
        });

    </script>


    <script>
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        });
        let oldTop=0,currentTop=0;
        $(window).scroll(function(){
            currentTop = $(this).scrollTop();
            if(currentTop>=oldTop){
                $(".navbar").fadeOut(500);
            }else{
                $(".navbar").fadeIn(500);
            }
            setTimeout(function(){oldTop = currentTop;},1000);
            if($(window).scrollTop() >= 260){
                $("#navbar-fixed").css('box-shadow','1px 0 10px rgba(0,0,0,0.2)').css('opacity',1);
            } else{
                $top = $(window).scrollTop();
                $("#navbar-fixed").css('box-shadow','none').css('opacity',$top/260);
            }
        });
    </script>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?218c3dd327894dc42031cb34fc9a6c4e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
@endsection
