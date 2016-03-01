@extends('app')
@section('content')

    {{--@if(isset($_SESSION['status']))
        <script type="text/javascript">
            swal({title: "Success", text: "successfully inserted!", type: "success", confirmButtonText: "Cool"});
        </script>
    @endif--}}
    <link rel="stylesheet" href="{{ asset('css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-skin.css')}}">
    <script src="{{ asset('js/photoswipe.min.js')}}"></script>
    <script src="{{ asset('js/photoswipe-ui-default.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" rel="stylesheet" type="text/css">
    <form action="image" class="dropzone" method="post" enctype="multipart/form-data">
        {{--<input type="submit"  value="">--}}
    </form></br></br>
    @if(isset($show))
        @foreach($show->chunk(4) as $val)
            <div class="row">
                @foreach($val as $photo)
                    <div class="col-xs-6 col-md-3">


                        <img class="img-thumbnail" src="{!! asset('flyer_photos/th'.$photo->image) !!}" alt="" onclick="openPhotoSwipe('{!! asset('flyer_photos/th'.$photo->image) !!}')">
                        <a href="{{ url('deleteimage/'.$photo->id)}}"><span class="glyphicon glyphicon-trash" style="color: #00b3ee">Delete</span></a>
                        <hr>
                    </div>
                @endforeach
            </div>
            {{-- <a href="{{ url('deleteimage/'.$val['id'])}}"><span class="glyphicon glyphicon-trash" style="color: #00b3ee">Delete</span></a>--}}
            {{--<a href="{!! asset('flyer_photos/'.$val["image"]) !!}" data-lity>  <img src="{!! asset('flyer_photos/th'.$val["image"]) !!}"></a>--}}
            @endforeach
            @endif

            {{--<button id="btn">Open PhotoSwipe</button>--}}

                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe.
                     It's a separate element, as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                    <div class="pswp__container">
                        <!-- don't modify these 3 pswp__item elements, data is added later on -->
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>

                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">

                        <div class="pswp__top-bar">

                            <!--  Controls are self-explanatory. Order can be changed. -->

                            <div class="pswp__counter"></div>

                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                            <button class="pswp__button pswp__button--share" title="Share"></button>

                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                            <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                            <!-- element will get class pswp__preloader--active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>

                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>

                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>

                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>

                    </div>

                </div>

            </div>
            <script>
                var openPhotoSwipe = function (path) {
                    var pswpElement = document.querySelectorAll('.pswp')[0];

                    // build items array
                    var items = [
                        {
                            src: path,
                            w: 964,
                            h: 1024
                        },
                            @foreach($show as $val)
                        {
                            src: '{!! asset('flyer_photos/'.$val['image']) !!}',
                            w: 964,
                            h: 1024
                        }, @endforeach

            ];

                    // define options (if needed)
                    var options = {
                        // history & focus options are disabled on CodePen
                        history: false,
                        focus: false,

                        showAnimationDuration: 0,
                        hideAnimationDuration: 0
                    };
                    var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();
                };
                /*openPhotoSwipe();*/
               /* document.getElementById('btn').onclick = openPhotoSwipe;*/
            </script>
@endsection