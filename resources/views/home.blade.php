<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/1.0.5/jquery.mobile-events.js"></script>
    <title>Document</title>

    <link rel="stylesheet" href="{{ URL::asset('asset/css/home.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('asset/css/media.css') }}" />
</head>

<body class="controls" style="overflow: hidden;">
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- menu -->
    <div class="d-flex justify-content-between w-100 menu_top p-3 menu_h" style="position: fixed; z-index: 999">
        <div class="d-flex" style="cursor: pointer">
            <h1 class="fs_0_6 my-auto pe-2 btn_home">TAO TAJIM</h1>
            /
            <a href="#demo" class="fs_0_5 my-auto ps-2 btn_about">About</a>
        </div>
        <div class="d-none d-sm-flex">
            <a href="#" class="fs_0_6 my-auto pe-1">facebook</a>/
            <a href="#" class="fs_0_5 my-auto ps-1">video</a>
        </div>
    </div>

    <!-- icon menu -->
    <div style="position: fixed; z-index: 999; width: 50px; height: 50px" id="icon_menu">
        <div class="m-0 ms-0 my-sm-auto d-flex" style="height: 50px; width: 50px">
            <svg class="ps-0 icon_menu m-0" style="width: 4rem; cursor: pointer" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7H19" stroke-width="2" stroke-linecap="round" />
                <path d="M5 12H15" stroke-width="2" stroke-linecap="round" />
                <path d="M5 17H11" stroke-width="2" stroke-linecap="round" />
            </svg>
        </div>
    </div>

    <!-- banner -->
    <div class="banner_home pt-3" data-id="">
        <div class="banner_content">
            <div class="d-flex flex-grow-1 flex-column flex-wrap flex-sm-row">
                <div class="col-12 col-sm-10 d-flex flex-column mt-0 mx-auto">
                    <div class="m-auto mt-5 mt-sm-0 d-flex flex-grow-1 col-11 col-lg-8 flex-wrap">
                        <div class="d-flex m-auto flex-wrap w-100 pb-5">
                            <div style="color: aliceblue" class="d-flex flex-column col-md-9 col-12">
                                <div class="d-flex branch">
                                    <h1 class="fs_0_7 my-auto pe-2">#000</h1>
                                    /
                                    <h2 class="fs_0_6 my-auto ps-2">private work</h2>
                                </div>
                                <h2 class="fs_1_2 b_title">TELE-PLAY - prism</h2>
                                <p class="fs_0_6 b_content w-100"
                                    style="
                      overflow: hidden;
                      text-overflow: ellipsis;
                      display: -webkit-box;
                      -webkit-line-clamp: 7; /* number of lines to show */
                      line-clamp: 7;
                      -webkit-box-orient: vertical;
                    ">
                                    Directed
                                </p>
                                <div class="d-flex">
                                    <p class="fs_0_6 my-auto">Share :</p>
                                    <a href="#" class="my-auto">
                                        <img style="width: 0.6rem" class="pb-1 ms-1" src="img/icon_facebook.svg"
                                            alt="" />
                                    </a>
                                </div>
                            </div>
                            <div style="width: 6rem; height: 6rem" >
                                <div class="btn_play" data-id="" data-link="https://www.youtube.com/watch?v=JjCr6d8H1xA">
                                    <p class="m-auto">PLAY</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex banner_f_r position-absolute justify-content-around w-100"
                    style="bottom: 40px; right: 0">
                    <div class="d-flex icon_left flex-column align-items-end" style="max-width: 40%" data-id="">
                        <p class="fs_0_6 m-0 id">#001</p>
                        <p class="fs_0_6 m-0 text-end title">N???i dung b??n tr??i</p>
                        <div class="d-flex justify-content-end">
                            <svg viewBox="0 0 360 7">
                                <polyline points="360,7 0,7 21,0 21,6 360,6" fill="#fff"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex icon_right flex-column align-items-start" style="max-width: 40%" data-id="">
                        <p class="fs_0_6 m-0 id">#001</p>
                        <p class="fs_0_6 m-0 title">N???i dung b??n ph???i</p>
                        <div class="d-flex justify-content-start">
                            <svg viewBox="0 0 360 7">
                                <polyline points="0,7 360,7 339,0 339,6 0,6" fill="#fff"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <iframe style="width: 90%; height: 90%; position: fixed; top: 3%;" src="https://www.youtube.com/embed/JJi5KwdxmiI"  allowfullscreen="true" allowscriptaccess="always" frameborder="0"></iframe> -->
    </div>
    <div class="d-flex container listCard flex-wrap p-1 p-md-5">
        @foreach ($Projects as $index => $Project)
            <div class="col-12 col-lg-4 col-md-6 px-3 card_item d-flex flex-column" data-id="{{ $index }}"
                data-img="{{ URL::asset('storage') }}/{{ str_replace('\\', '/', $Project->image) }}">
                <p class="m-0 fs_0_8 card_id" style="order: 0">{{ $Project->slug }}</p>

                <p class="fs_0_7 card_title" style="order: 2">{{ $Project->title }}</p>
            </div>
        @endforeach
    </div>

    <div class="d-flex container flex-column contact">
        <div class="col-10 d-flex flex-column m-auto">
            <h3 class="fs_1">Filmmaker</h3>
            <h1 style="letter-spacing: 1.5rem" class="pb-2">TAO TAJIMA</h1>
            <p class="m-0 fs_0_8">from TANGRAM co.ltd.</p>
            <a class="mb-4 fs_0_8" href="">http://tangram.to</a>
            <p class="m-0 fs_0_7">
                A director and film maker with the Tokyo visual design studio Tangram.
            </p>
            <p class="m-0 fs_0_7">
                Characterized by a worldview that completely transforms casual
                everyday landscapes, expressed through the skillful use of light.
            </p>
            <p class="mt-4 mb-2 fs_0_8">Contact</p>
            <a href="" class="fs_0_7 mb-5">http://tangram.to</a>
        </div>
    </div>
</body>

</html>
<script src="https://pixijs.download/v6.1.0-rc.4/pixi.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pixi-filters@latest/dist/pixi-filters.js"></script>
<script src="{{ URL::asset('asset/js/animation.js') }}"></script>

<script>
    const listImage = [
        @foreach ($Projects as $index => $Project)
            [
                "{{ $index }}",
                "{{ $Project->slug }}",
                "{{ $Project->category }}",
                "{{ $Project->title }}",
                "{{ $Project->content }}",
                "{{ $Project->video }}",
                "{{ URL::asset('storage') }}/{{ str_replace('\\', '/', $Project->image) }}",
            ],
        @endforeach
    ];
</script>
<script src="{{ URL::asset('asset/js/banner.js') }}"></script>
<script src="{{ URL::asset('asset/js/listCard.js') }}"></script>
