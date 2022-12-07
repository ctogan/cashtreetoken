<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CTT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" href="{{url('favicon.jpg')}}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Nunito:wght@300;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body>
    <div class="menu-mobile ">
      <img class="close-menu" src="{{asset('images/close_menu.svg')}}" alt="" width="10">
      <ul class="navbar-menu">
        <li><a target="blank" href="https://docs.cashtreetoken.io/cashtree-1/v/english/introduction/cashtree">Docs</a></li>
        <li><a href="/#scn-ctt-is">What is CTT</a></li>
        <li><a href="/#scn-utility">Utility</a></li>
        <li><a href="/#scn-token">Tokenomics</a></li>
        <li><a href="/#scn-roadmap">Roadmaps</a></li>
        <li><a href="/#scn-ecosystem">Ecosystem</a></li>
        <li><a href="/#scn-community">Community</a></li>
        <li><a href="/#scn-team">Team</a></li>
        <li><a href="/faq">F.A.Q</a></li>
      </ul>
      <ul id="sub-menu-lang" class="lang-dropdown mtop-20">
        <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'en' ? 'active' : ''}}">
          <a class="language" href="{{url('/setlang/en')}}">@lang('lang.english')</a>
          <img class="mleft-10" src="{{asset('images/flag_eng.svg')}}" alt="">
        </li>
        <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'id' ? 'active' : ''}}">
          <a class="language" href="{{url('/setlang/id')}}">@lang('lang.indonesian')</a>
          <img class="mleft-10" src="{{asset('images/flag_ind.svg')}}" alt="">
        </li>
        {{-- <li>
          <a href="#">Korea</a>
          <img src="{{asset('images/flag_kor.svg')}}" alt="">
        </li> --}}
      </ul>
    </div>

    <div class="overlay"></div>
    <div class="transparant-overlay"></div>

    <header class="animate__animated animate__fadeInDown">
      <div class="navbar">
        <div class="logo-container animate__animated animate__backInLeft">
          <a class="pointer" href="/">
            <img class="mright-15" src="{{asset('images/logo.svg')}}" alt="" width="55">
          </a>
          <div class="text-logo">CTT</div>
          {{-- <div class="text-logo-2">
            <div class="sub-text-logo">Blokchain Based</div>
            <div class="sub-text-logo">Advertising Mobile Platform</div>
          </div> --}}
        </div>
        <ul class="navbar-menu">
          <li class="animate__animated animate__backInRight"><a target="blank" class="nav" href="https://docs.cashtreetoken.io/cashtree-1/v/english/introduction/cashtree">Docs</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-ctt-is">What is CTT</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-utility">Utility</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-token">Tokenomics</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-roadmap">Roadmaps</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-ecosystem">Ecosystem</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-community">Community</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/#scn-team">Team</a></li>
          <li class="animate__animated animate__backInRight"><a class="nav" href="/faq">F.A.Q</a></li>
        </ul>
        {{-- <div class="ctt_balance">
          <div class="balance">
            <img src="{{asset('images/small_ctt_logo.svg')}}" alt="">
            3.56 USD
          </div>
          <div id="dropdown-currency" class="drpdwn_crncy d-flex align-center pointer relative">
            <img class="mright-5 mleft-10" src="{{asset('images/arrow_lang.svg')}}" alt="" width="10">
            <div class="change_currency">
              <a href="#">USD</a>
              <div id="sub-menu-currency" class="currency-dropdown d-none">
                <div class="d-flex align-start">
                  <img class="mtop-5 mright-5" src="{{asset('images/arrow_lang.svg')}}" alt="" width="10">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">IDR</a></li>
                    <li><a href="#">BTC</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        
        <button class="sale animate__animated animate__backInLeft">Coming Soon!</button>
        <div id="dropdown-lang" class="menu-lang d-flex pointer relative justify-between animate__animated animate__backInRight">
          <div class="d-flex align-center absolute w-100 justify-between option-lang">
            <img class="z-2" src="{{asset('images/arrow_lang.svg')}}" alt="" width="10">
            <a href="javascript:void(0)" class="fp-white mright-5 mleft-5 z-2" href="#">@lang('lang.active_lang')</a>
            <img class="z-2" src="{{asset('images/globe_lang.svg')}}" alt="" width="17">
          </div>
          <ul id="sub-menu-lang" class="lang-dropdown d-none">
            <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'en' ? 'active' : ''}}">
              <a class="language" href="{{url('/setlang/en')}}">@lang('lang.english')</a>
              <img src="{{asset('images/flag_eng.svg')}}" alt="">
            </li>
            <li class="{{\Illuminate\Support\Facades\Config::get('app.locale') == 'id' ? 'active' : ''}}">
              <a class="language" href="{{url('/setlang/id')}}">@lang('lang.indonesian')</a>
              <img src="{{asset('images/flag_ind.svg')}}" alt="">
            </li>
            {{-- <li>
              <a href="#">Korea</a>
              <img src="{{asset('images/flag_kor.svg')}}" alt="">
            </li> --}}
          </ul>
        </div>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </div>
    </header>
  
    @yield('content')

    {{-- <button class="scroll-up"></button> --}}
    <footer>
      <div class="footer-content">
        <div class="d-flex align-center">
          <img class="ct-footer mright-30" src="{{asset('images/ct_footer.svg')}}" alt="">
          <div class="white-dots mright-30"></div>
          <div class="d-flex align-center">
            <img class="ct-small-logo mright-5" src="{{asset('images/small_ctt_logo.svg')}}" alt="">
            <div class="text-logo">CTT</div>
          </div>
        </div>
        <div class="d-flex align-center">
          <div class="fp-white fw-700 mright-20 copyright">©2022 - Cashtree. All right reserved</div>
          <a class="fp-white fw-700 mright-20 policy pointer" href="/policy">Privacy Policy</a>
          <ul>
            <li><a target="blank" href="https://www.instagram.com/cashtreetoken"><img src="{{asset('images/ft_ctt_ig.svg')}}" alt=""></a></li>
            {{-- <li><a target="blank" href="#"><img src="{{asset('images/ft_ctt_yt.svg')}}" alt=""></a></li> --}}
            <li><a target="blank" href="https://www.facebook.com/cashtreetoken"><img src="{{asset('images/ft_ctt_fb.svg')}}" alt=""></a></li>
            <li><a target="blank" href="https://twitter.com/Cashtree_Token"><img src="{{asset('images/ft_ctt_tw.svg')}}" alt=""></a></li>
            <li><a target="blank" href="https://t.me/CashtreeToken"><img src="{{asset('images/ft_ctt_tl.svg')}}" alt=""></a></li>
            <li><a target="blank" href="https://discord.gg/RPcAXXSKEY"><img src="{{asset('images/ft_ctt_dc.svg')}}" alt=""></a></li>
            <li><a target="blank" href="https://medium.com/@CashtreeToken"><img src="{{asset('images/ft_ctt_md.svg')}}" alt=""></a></li>
          </ul>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/js/index.js') }}"></script>

    <script>
      const text = $('#desc-lang').text().length
      if(text > 100){
        $('.text-description').addClass('active');
        $('.read-more').addClass('active')
      } else{
        $('.text-description').removeClass('active');
        $('.read-more').removeClass('active');
      }
    </script>

  </body>
</html>
