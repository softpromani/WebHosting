@extends('home.includes.layout')
@section('title', $menu_cat->name ?? 'product')
@section('header-area')
    <meta name="keywords" content="{{ $menu_cat->name }}">
    <meta name="description" content="{{ $menu_cat->name }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        :root {
            --theme-color: #684DF4;
            --theme-color2: #684DF4;
            --title-color: #141D38;
            --body-color: #737887;
            --smoke-color: #F5F5F5;
            --smoke-color2: #E2E8FA;
            --smoke-color3: #EFF1F9;
            --black-color: #000000;
            --black-color2: #080E1C;
            --gray-color: #bdbdbd;
            --white-color: #ffffff;
            --light-color: #72849B;
            --yellow-color: #FFB539;
            --success-color: #28a745;
            --error-color: #dc3545;
            --th-border-color: #E0E0E0;
            --title-font: 'Barlow', sans-serif;
            --body-font: 'Roboto', sans-serif;
            --icon-font: "Font Awesome 6 Pro";
            --main-container: 1220px;
            --container-gutters: 24px;
            --section-space: 120px;
            --section-space-mobile: 80px;
            --section-title-space: 60px;
            --ripple-ani-duration: 5s,
        }

        .bg-theme {
            background-color: var(--primary-color) !important
        }

        .main-timeline {
            font-family: 'Poppins', sans-serif;
        }

        .main-timeline:after {
            content: '';
            display: block;
            clear: both;
        }

        .main-timeline .timeline {
            width: 50%;
            padding: 0 40px 0 0;
            margin: 0 2px 0 0;
            float: left;
        }

        .main-timeline .timeline-content {
            color: #777;
            background-color: #fff;
            padding: 20px 90px 20px 20px;
            box-shadow: 0 0 15px -3px rgba(0, 0, 0, 0.15);
            display: block;
            position: relative;
        }

        .main-timeline .timeline-content:hover {
            text-decoration: none;
        }

        .main-timeline .timeline-content:before {
            content: '';
            background: #B77C02;
            width: 12px;
            height: 120px;
            border-radius: 0 8px 8px 0;
            transform: translateY(-50%);
            position: absolute;
            right: -12px;
            top: 50%;
        }

        .main-timeline .timeline-icon {
            color: #fff;
            background-color: #FEA703;
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            line-height: 100px;
            height: 100px;
            width: 110px;
            transform: translateY(-50%);
            position: absolute;
            top: 50%;
            right: -39px;
            z-index: 1;
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        }

        .main-timeline .title {
            font-size: 20px;
            font-weight: 600;
            text-transform: capitalize;
            letter-spacing: 0.5px;
            margin: 0 0 8px;
        }

        .main-timeline .description {
            font-size: 14px;
            letter-spacing: 1px;
            line-height: 22px;
            margin: 0;
        }

        .main-timeline .timeline:nth-child(even) {
            padding: 0 0 0 40px;
            margin: 0 0 0 2px;
            float: right;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            padding: 20px 20px 20px 90px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            border-radius: 8px 0 0 8px;
            right: auto;
            left: -12px;
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            right: auto;
            left: -39px;
        }

        .main-timeline .timeline:nth-child(4n+2) .timeline-content:before {
            background-color: #4B8C47;
        }

        .main-timeline .timeline:nth-child(4n+2) .timeline-icon {
            background-color: #5BB25D;
        }

        .main-timeline .timeline:nth-child(4n+3) .timeline-content:before {
            background-color: #003346;
        }

        .main-timeline .timeline:nth-child(4n+3) .timeline-icon {
            background-color: #09687E;
        }

        .main-timeline .timeline:nth-child(4n+4) .timeline-content:before {
            background-color: #1360C3;
        }

        .main-timeline .timeline:nth-child(4n+4) .timeline-icon {
            background-color: #0C8AFA;
        }

        @media screen and (max-width:767px) {

            .main-timeline .timeline,
            .main-timeline .timeline:nth-child(even) {
                width: 100%;
                padding: 0 0 0 40px;
                margin: 0 0 30px;
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                padding: 20px 20px 20px 90px;
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                border-radius: 8px 0 0 8px;
                left: -12px;
            }

            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(even) .timeline-icon {
                left: -39px;
                right: auto;
            }
        }

        @media screen and (max-width:479px) {

            .main-timeline .timeline,
            .main-timeline .timeline:nth-child(even) {
                padding: 40px 0 0 0;
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                text-align: center;
                padding: 90px 20px 20px;
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                width: 120px;
                height: 12px;
                border-radius: 8px 8px 0 0;
                transform: translateY(0) translateX(-50%);
                top: -12px;
                left: 50%;
            }

            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(even) .timeline-icon {
                line-height: 110px;
                width: 100px;
                height: 110px;
                transform: translateY(0) translateX(-50%);
                top: -39px;
                left: 50%;
                clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
            }
        }



        .cta-sec6 {
            padding: 45px 100px;
            border-radius: 30px
        }

        @media (max-width: 1199px) {
            .cta-sec6 {
                padding: 80px 50px
            }
        }

        .cta-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media (max-width: 991px) {
            .cta-content {
                display: block
            }
        }

        .cta-content .cta-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 25px;
            border-right: 1px solid rgba(255, 255, 255, 0.15);
            padding-right: 80px;
            margin-right: 80px;
            min-width: 440px
        }

        @media (max-width: 1299px) {
            .cta-content .cta-wrapper {
                padding-right: 40px;
                margin-right: 40px;
                min-width: 360px
            }
        }

        @media (max-width: 991px) {
            .cta-content .cta-wrapper {
                border: none;
                padding: 0;
                margin: 0
            }
        }

        @media (max-width: 375px) {
            .cta-content .cta-wrapper {
                display: block
            }
        }

        .cta-content .cta-wrapper .cta-icon {
            width: 90px;
            height: 90px;
            line-height: 90px;
            border-radius: 90px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.22);
            background: rgba(255, 255, 255, 0.05);
            -webkit-backdrop-filter: blur(11px);
            backdrop-filter: blur(11px);
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out
        }

        .cta-content .cta-wrapper .cta-icon:hover {
            background-color: var(--title-color)
        }

        @media (max-width: 375px) {
            .cta-content .cta-wrapper .cta-icon {
                margin-bottom: 20px
            }
        }

        .cta-content .cta-wrapper .header-info_link {
            font-size: 30px;
            font-weight: 600;
            color: var(--white-color);
            letter-spacing: -0.3px;
            margin-bottom: 0
        }

        @media (max-width: 1299px) {
            .cta-content .cta-wrapper .header-info_link {
                font-size: 24px
            }
        }

        .cta-content .cta-wrapper .header-info_link a {
            color: inherit
        }

        .cta-content .title-area {
            margin-right: 64px
        }

        @media (max-width: 1299px) {
            .cta-content .title-area {
                margin-right: 20px
            }
        }

        @media (max-width: 991px) {
            .cta-content .title-area {
                margin: 30px 0 30px 0 !important
            }
        }

        .cta-content .cta-group {
            min-width: 160px;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin-left: auto;
            -webkit-box-flex: 0;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none
        }

        @media (max-width: 991px) {
            .cta-content .cta-group {
                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                margin: 0
            }
        }




        .background-image,
        [data-bg-src] {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center
        }

        .bg-fluid {
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center center
        }

        .bg-auto {
            background-size: auto auto
        }

        .bg-top-center {
            background-size: auto;
            background-position: top center
        }

        .bg-bottom-center {
            background-size: auto;
            background-position: bottom center
        }

        .bg-repeat {
            background-size: auto;
            background-repeat: repeat
        }

        .bg-bottom-right {
            background-size: auto;
            background-position: bottom right
        }

        .bg-top-right {
            background-size: auto;
            background-position: top right
        }

        .text-theme {
            color: var(--theme-color) !important
        }

        .text-title {
            color: var(--title-color) !important
        }

        .text-body {
            color: var(--body-color) !important
        }

        .text-white {
            color: var(--white-color) !important
        }

        .text-light {
            color: var(--light-color) !important
        }

        .text-yellow {
            color: var(--yellow-color) !important
        }

        .text-success {
            color: var(--success-color) !important
        }

        .text-error {
            color: var(--error-color) !important
        }

        .text-inherit {
            color: inherit
        }

        .text-inherit:hover {
            color: var(--theme-color)
        }

        a.text-theme:hover,
        .text-reset:hover {
            text-decoration: underline
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%
        }

        .position-center {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        [data-overlay] {
            position: relative;
            z-index: 2
        }

        [data-overlay] [class^="col-"],
        [data-overlay] [class*="col-"] {
            z-index: 1
        }

        [data-overlay]:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 1
        }

        [data-overlay="theme"]:before {
            background-color: var(--theme-color)
        }

        [data-overlay="title"]:before {
            background-color: var(--title-color)
        }

        [data-overlay="white"]:before {
            background-color: var(--white-color)
        }

        [data-overlay="black"]:before {
            background-color: var(--black-color)
        }

        [data-overlay="overlay1"]:before {
            background-color: #080E1C
        }

        [data-opacity="1"]:before {
            opacity: .1
        }

        [data-opacity="2"]:before {
            opacity: .2
        }

        [data-opacity="3"]:before {
            opacity: .3
        }

        [data-opacity="4"]:before {
            opacity: .4
        }

        [data-opacity="5"]:before {
            opacity: .5
        }

        [data-opacity="6"]:before {
            opacity: .6
        }

        [data-opacity="7"]:before {
            opacity: .7
        }

        [data-opacity="8"]:before {
            opacity: .8
        }

        [data-opacity="9"]:before {
            opacity: .9
        }

        [data-opacity="10"]:before {
            opacity: 1
        }





        .th-btn {
            position: relative;
            z-index: 2;
            overflow: hidden;
            vertical-align: middle;
            display: inline-block;
            border: none;
            text-transform: uppercase;
            text-align: center;
            background-color: var(--theme-color);
            color: var(--white-color);
            font-family: var(--body-font);
            font-size: 14px;
            font-weight: 500;
            line-height: 1;
            padding: 20.5px 20px;
            min-width: 144px;
            border-radius: 4px
        }

        .th-btn:before,
        .th-btn:after {
            content: "";
            position: absolute;
            height: 100%;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--title-color);
            z-index: -1;
            -webkit-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            border-radius: 99px;
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1)
        }

        .th-btn:before {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0)
        }

        .th-btn:after {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0)
        }

        .th-btn:hover,
        .th-btn.active {
            color: var(--white-color);
            box-shadow: none
        }

        .th-btn:hover::before,
        .th-btn:hover:after,
        .th-btn.active::before,
        .th-btn.active:after {
            border-radius: 0;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1)
        }

        .th-btn.style2 {
            background-color: transparent;
            color: var(--white-color);
            border: 1px solid var(--white-color);
            padding: 20px 40px;
            box-shadow: none
        }

        .th-btn.style2:hover {
            color: var(--title-color);
            border-color: var(--white-color)
        }

        .th-btn.style2:hover:before,
        .th-btn.style2:hover:after {
            background-color: var(--white-color)
        }

        .th-btn.style3:hover {
            color: var(--title-color)
        }

        .th-btn.style3:hover:before,
        .th-btn.style3:hover:after {
            background-color: var(--white-color)
        }

        .th-btn.style4 {
            background-color: var(--title-color);
            color: var(--white-color)
        }

        .th-btn.style4:hover {
            color: var(--title-color)
        }

        .th-btn.style4:hover:before,
        .th-btn.style4:hover:after {
            background-color: var(--white-color)
        }

        .th-btn.style5 {
            background-color: var(--white-color);
            color: var(--title-color);
            box-shadow: none
        }

        .th-btn.style5:hover {
            color: var(--white-color)
        }

        .th-btn.style5:hover:before,
        .th-btn.style5:hover:after {
            background-color: var(--title-color)
        }

        .th-btn.style6 {
            background-color: var(--white-color);
            color: var(--title-color);
            box-shadow: none
        }

        .th-btn.style6:hover {
            color: var(--white-color)
        }

        .th-btn.style6:hover:before,
        .th-btn.style6:hover:after {
            background-color: var(--theme-color)
        }

        .th-btn.style7 {
            background-color: var(--title-color);
            color: var(--white-color)
        }

        .th-btn.style7:hover:before,
        .th-btn.style7:hover:after {
            background-color: var(--theme-color)
        }

        .th-btn.style8 {
            font-size: 16px;
            padding: 19.5px 37px;
            text-transform: capitalize;
            border-radius: 100px
        }

        .th-btn.style9 {
            background-color: var(--white-color);
            color: var(--theme-color);
            box-shadow: none;
            border: none;
            padding: 17px 35.6px;
            font-weight: 700
        }

        .th-btn.style9:hover {
            color: var(--white-color)
        }

        .th-btn.style9:hover:before,
        .th-btn.style9:hover:after {
            background-color: var(--title-color)
        }

        .th-btn.style10 {
            background-color: var(--white-color);
            border: 1px solid #E3E7F0;
            color: var(--theme-color);
            border-radius: 100px;
            padding: 18px 44px
        }

        .th-btn.style10:hover {
            color: var(--white-color)
        }

        .th-btn.blue-border {
            background: #1C1C25;
            border: 1px solid var(--theme-color);
            border-radius: 100px
        }

        .th-btn.blue-border:hover:before,
        .th-btn.blue-border:hover:after {
            background-color: var(--theme-color)
        }

        .th-btn.btn-gradient {
            font-size: 16px;
            text-transform: capitalize;
            padding: 18px 20px;
            background-color: var(--theme-color);
            background: -webkit-linear-gradient(top, var(--theme-color) 0%, var(--theme-color2) 100%);
            background: linear-gradient(180deg, var(--theme-color) 0%, var(--theme-color2) 100%)
        }

        .th-btn.btn-gradient:hover {
            background: -webkit-linear-gradient(top, var(--theme-color2) 0%, var(--theme-color) 100%);
            background: linear-gradient(180deg, var(--theme-color2) 0%, var(--theme-color) 100%)
        }

        .th-btn.btn-gradient:hover:before,
        .th-btn.btn-gradient:hover:after {
            display: none
        }

        .th-btn.th-gradient-btn {
            font-size: 16px;
            text-transform: capitalize;
            padding: 18px 20px;
            background-color: var(--theme-color);
            background: -webkit-linear-gradient(top, var(--theme-color) 0%, var(--theme-color2) 100%);
            background: linear-gradient(180deg, var(--theme-color) 0%, var(--theme-color2) 100%);
            border-radius: 100px
        }

        .th-btn.th-gradient-btn:hover {
            background: -webkit-linear-gradient(top, var(--theme-color2) 0%, var(--theme-color) 100%);
            background: linear-gradient(180deg, var(--theme-color2) 0%, var(--theme-color) 100%)
        }

        .th-btn.th-gradient-btn:hover:before,
        .th-btn.th-gradient-btn:hover:after {
            display: none
        }

        .th-btn.style-radius {
            border-radius: 100px;
            padding: 18px 40px
        }

        @media (max-width: 375px) {
            .th-btn.style-radius {
                padding: 18px 25px
            }
        }

        .th-btn.btn-fw {
            width: 100%
        }

        .th-btn.btn-fw:before,
        .th-btn.btn-fw:after {
            display: none
        }

        .th-btn.btn-fw:hover {
            background-color: var(--title-color)
        }

        .th-btn.style-border {
            background-color: transparent;
            color: var(--theme-color);
            border: 1px solid var(--theme-color);
            box-shadow: none
        }

        .th-btn.style-border:hover {
            color: var(--white-color);
            border-color: var(--theme-color)
        }

        .th-btn.style-border:hover:before,
        .th-btn.style-border:hover:after {
            background-color: var(--theme-color)
        }

        .th-btn.style-border2 {
            background-color: transparent;
            color: var(--title-color);
            border: 1px solid var(--title-color);
            box-shadow: none
        }

        .th-btn.style-border2:hover {
            color: var(--white-color);
            border-color: var(--title-color)
        }

        .th-btn.style-border2:hover:before,
        .th-btn.style-border2:hover:after {
            background-color: var(--title-color)
        }

        .th-btn.th-border {
            border: 1px solid rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.06);
            -webkit-backdrop-filter: blur(12.5px);
            backdrop-filter: blur(12.5px);
            padding: 16px 39.4px
        }

        .th-btn.th-border:hover {
            background: var(--title-color);
            border: 1px solid var(--title-color)
        }

        .icon-btn {
            display: inline-block;
            width: var(--btn-size, 56px);
            height: var(--btn-size, 56px);
            line-height: var(--btn-size, 56px);
            font-size: var(--btn-font-size, 16px);
            background-color: var(--icon-bg, transparent);
            color: var(--title-color);
            text-align: center;
            border-radius: 4px;
            border: 1px solid #232C47;
            -webkit-transition: 0.4s ease-in-out;
            transition: 0.4s ease-in-out
        }

        .icon-btn:hover {
            background-color: var(--white-color);
            color: var(--theme-color);
            border-color: var(--white-color)
        }




        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(https://i.ibb.co/G32GT0L/heading-line.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {
            background: url(img/heading-line-white.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /* clearfix */
        .owl-carousel .owl-wrapper:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        /* display none until init */
        .owl-carousel {
            display: none;
            position: relative;
            width: 100%;
            -ms-touch-action: pan-y;
        }

        .owl-carousel .owl-wrapper {
            display: none;
            position: relative;
            -webkit-transform: translate3d(0px, 0px, 0px);
        }

        .owl-carousel .owl-wrapper-outer {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .owl-carousel .owl-wrapper-outer.autoHeight {
            -webkit-transition: height 500ms ease-in-out;
            -moz-transition: height 500ms ease-in-out;
            -ms-transition: height 500ms ease-in-out;
            -o-transition: height 500ms ease-in-out;
            transition: height 500ms ease-in-out;
        }

        .owl-carousel .owl-item img {
            max-width: 100%;
        }

        .owl-carousel .item {
            padding: 0 7.5px;
        }

        .owl-carousel .owl-item {
            float: left;
        }

        .owl-controls .owl-page,
        .owl-controls .owl-buttons div {
            cursor: pointer;
        }

        .owl-controls {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        /* mouse grab icon */
        .grabbing {
            cursor: url(grabbing.png) 8 8, move;
        }

        /* fix */
        .owl-carousel .owl-wrapper,
        .owl-carousel .owl-item {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
        }

        #demo1 .customNavigation,
        #demo2 .customNavigation {
            top: 50%;
            position: absolute;
            width: 100%;
            left: 0px;
            margin-top: -40px;
        }

        #demo1 .customNavigation .btn,
        #demo2 .customNavigation .btn {
            padding: 0px;
        }

        #demo1 .customNavigation .btn.prev,
        #demo2 .customNavigation .btn.prev {
            position: relative;
            left: -76px;
        }

        #demo1 .customNavigation .btn.next,
        #demo2 .customNavigation .btn.next {
            position: relative;
            right: -70px;
            float: right;
        }

        div#demo1 {
            position: relative;
        }

        .user-blog {
            background: #65e82e21;
            padding: 50px 0 50px;
        }

        .user-blog:before {
            position: absolute;
            top: -100px;
            left: 0;
            content: " ";
            background: url(img/user-blog.png);
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }

        div#owl-demo1 .item {
            padding: 0 15px;
        }

        .blog-grid {
            background: #fff;
            box-shadow: 0px 0px 20px #c3c3c3;
            margin: 10px 0;
            border: 1px solid #d6d6d6;
            border-radius: 1px;
        }

        .discretion-blog {
            padding: 15px;
        }

        .discretion-blog p {
            font-size: 15px;
            color: #454343;
        }

        .discretion-blog h4 {
            color: #454343;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .discretion-blog .btn {
            color: #fefeff;
            background: #454343;
            width: 100%;
            text-transform: uppercase;
            border-radius: 0px;
            margin-top: 10px;
            -webkit-transform: perspective(1px) translateZ(0);
            -moz-transform: perspective(1px) translateZ(0);
            -o-transform: perspective(1px) translateZ(0);
            transform: perspective(122px) translateZ(0);
        }


        .discretion-blog .btn:hover {
            color: #ffffff;
        }

        .discretion-blog .btn:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #79b82d;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            border: 2px solid #79b82d;
        }

        .discretion-blog .btn:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            transform: scaleX(1);
        }

        .date-blog {
            background: #82b53f;
            width: 70px;
            position: absolute;
            bottom: 0;
            left: 15px;
            color: #fff;
            text-align: center;
            padding: 10px 0px;
        }

        .date-blog:after {
            width: 0;
            height: 0;
            content: "";
            border-left: 0 solid transparent;
            border-right: 70px solid transparent;
            border-bottom: 12px solid #82b53f;
            top: -11px;
            position: absolute;
            left: 0;
        }

        .img-date {
            position: relative;
        }

        .user-blog .owl-theme .owl-controls .owl-page span {
            width: 17px;
            height: 17px;
            background: #454343;
            opacity: 1;
        }

        .user-blog .owl-theme .owl-controls .owl-page.active span,
        .user-blog .owl-theme .owl-controls.clickable .owl-page:hover span {
            background: #82b53f;
        }


        /* swiper css */
        .swiper {
            width: 100%;
            height: 100%;
            padding-right: 30px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
            /* Change the color to match your design */
        }

        .services-img-2 {
            height: 400px;
            width: 400px;
        }

        /* Product slide */
        .card {
            border: none;
            border-radius: 0;
            box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        }

        .carousel-inner {
            padding: 1em;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: #110e0e;
            width: 6vh;
            height: 6vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-control-prev span,
        .carousel-control-next span {
            width: 1.5rem;
            height: 1.5rem;
        }

        @media screen and (min-width: 577px) {
            .cards-wrapper {
                display: flex;
            }

            .card {
                margin: 0 0.5em;
                width: calc(100% / 2);
            }

            .image-wrapper {
                height: 20vw;
                margin: 0 auto;
            }
        }

        @media screen and (max-width: 576px) {
            .card:not(:first-child) {
                display: none;
            }
        }

        .image-wrapper img {
            max-width: 100%;
            max-height: 100%;
        }


        /* animate images */
        .hover-animate:hover {
            animation: moveAround 3s infinite alternate ease-in-out;
        }

        @keyframes moveAround {
            0% {
                top: 0px;
                left: 0px;
            }

            25% {
                top: -15px;
                left: 15px;
            }

            50% {
                top: 15px;
                left: -15px;
            }

            75% {
                top: -15px;
                left: -15px;
            }

            100% {
                top: 0px;
                left: 0px;
            }
        }

        .text blockquote {
            color: white !important;
        }

        /* ul li checkbox */
        .feature-list {
            list-style: none;
            /* Removes default bullets */
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .feature-list li {
            flex: 0 0 50%;
            /* Two items per row */
            font-weight: normal;
            /* Not bold */
            margin-bottom: 8px;
            position: relative;
            padding-left: 25px;
            /* Space for the checkmark */
        }

        .feature-list li::before {
            content: '✅';
            /* Custom checkmark icon */
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>
@endsection
@section('content')


    {{-- Silder --}}
    <div
        style="background-image: url('{{ asset('storage/' . settingValue('breadcrumb_image')) }}');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;
           padding: 80px 0;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-start"
                    data-aos="fade-up" data-aos-delay="200" style="color: white;">
                    <h2>{!! $category_desc->title ?? '' !!}</h2>
                    <p>{!! $category_desc->description ?? '' !!}</p>
                    <br>
                    <x-cta-btn :links="[
                        'contact_us' => '/contact-us',
                        'start_7_days_free_trial' => '/apply-now',
                    ]" />
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200"
                    style="display: flex; justify-content: center; align-items: center;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
                        <div class="carousel-inner" style="width: 80%; margin-left: 150px;">
                            {{-- @foreach ($products->slide_img as $md) --}}
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/' . $category_desc->image) }}"
                                    class="d-block w-100 hover-animate" alt="..."
                                    style="border-radius: 10px; position: relative;">
                            </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row align-items-center">
            <!-- Left side image -->
            <div class="col-md-5 mb-4 mb-md-0">
                <img src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/images/ElephantsDream.jpg"
                    alt="Dummy Live Image" class="img-fluid rounded shadow">
            </div>

            <!-- Right side content -->
            <div class="col-md-7">
                <h5 class="fw-bold">Transform Business Efficiency with Sage Cloud Hosting</h5>
                <h5 class="fw-bold">● Anywhere Access to Sage Applications:</h5>
                <p> Work without boundaries by accessing your Sage software from any device, anytime, ensuring uninterrupted
                    productivity.</p>

                <h6 class="fw-bold mt-4">● Secure Data Environment: </h6>
                <p>Rely on multi-layered security protocols, including encryption, intrusion detection, and continuous
                    backups, to safeguard sensitive data.</p>

                <h6 class="fw-bold mt-4">● Streamlined Business Operations:</h6>
                <p>Centralize workflows, improve data accuracy, and simplify task management for improved collaboration and
                    decision-making.</p>
                <h6 class="fw-bold mt-4">● Adaptable and Cost-Efficient Hosting:</h6>
                <p>Scale resources dynamically to match your business’s evolving demands without overstepping your budget.
                </p>
            </div>
        </div>
    </div>
    {{-- <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">

                <div
                    class="col-sm-12 product-content-description d-flex flex-column  justify-content-center align-items-start">
                    <h2>{{ $category_desc->title ?? '' }}</h2>
                    {!! $category_desc->description ?? '' !!}
                </div>

                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                    <div class="card-img" style="margin-left: 70px">
                        <img src="{{ asset('storage/' . optional($products->content_img)->media) }}" alt="no available"
                            class="img-fluid services-img rounded" style="height:400px; width:400px">

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="bg-solitude-blue">
        @include('home.category_desc.category_business_service')
    </section>

    {{-- <div class="container py-5">
        <h4 class="fw-bold mb-4">What Makes Our Sage Hosting Unique?</h4>
        <ol class="ps-3">
            <li class="mb-3">
                <span class="fw-bold">Seamless Remote Access</span><br>
                <span>Access your Sage applications from any internet-enabled device, supporting work-from-anywhere models
                    and business continuity.</span>
            </li>
            <li class="mb-3">
                <span class="fw-bold">Ironclad Data Protection</span><br>
                <span>Protect your critical business data with state-of-the-art encryption, regular audits, and
                    comprehensive recovery solutions.</span>
            </li>
            <li class="mb-3">
                <span class="fw-bold">Optimized Collaboration Tools</span><br>
                <span>Enable team members to collaborate effortlessly within Sage, sharing data and insights in
                    real-time.</span>
            </li>
            <li class="mb-3">
                <span class="fw-bold">Customizable Hosting Plans</span><br>
                <span>Choose from flexible hosting plans tailored to fit the needs of businesses of all sizes, with scalable
                    options for future growth.</span>
            </li>
        </ol>
    </div> --}}
    <div class="container-fluid my-5">
        <div class="row align-items-center text-white p-5"
            style="background: linear-gradient(90deg, #031e3b 0%, #167792 100%); border-radius: 10px;">
            <div class="col-md-8">
                <h2 class="mb-3">Simplify Your Business Processes with Sage Hosting!</h2>
                <p class="lead">
                    Being the best sage cloud hosting service provider, we empower your business with secure, scalable, and
                    seamless access to your essential applications.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://dummyimage.com/600x400/000/fff" alt="Dummy Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>



    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <h3 class="text-center fw-bold mb-3">Key Features of Our Sage Cloud Hosting</h3>
            @for ($i = 0; $i < 2; $i++)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <div class="d-flex justify-content-center gap-3">

                        <div class="card text-center p-3" style="width: 18rem;">
                            <div class="card-body">
                                <i class="bi bi-cloud fs-1" style="color: #09687E"></i>
                                <h4 class="card-title mt-2">On-Demand Accessibility </h4>
                                <p class="card-text">Ensure that your Sage software is available whenever and wherever you
                                    need it.</p>
                            </div>
                        </div>

                        <div class="card text-center p-3" style="width: 18rem;">
                            <div class="card-body">
                                <i class="bi bi-cloud fs-1" style="color: #09687E"></i>
                                <h4 class="card-title mt-2">Enterprise-Level Security</h4>
                                <p class="card-text">Stay secure with cutting-edge protection measures and proactive threat
                                    monitoring.</p>
                            </div>
                        </div>

                        <div class="card text-center p-3" style="width: 18rem;">
                            <div class="card-body">
                                <i class="bi bi-cloud fs-1" style="color: #09687E"></i>
                                <h4 class="card-title mt-2">Real-Time Collaboration</h4>
                                <p class="card-text">Facilitate efficient teamwork with synchronized updates and shared
                                    access.</p>
                            </div>
                        </div>

                        <div class="card text-center p-3" style="width: 18rem;">
                            <div class="card-body">
                                <i class="bi bi-cloud fs-1" style="color: #09687E"></i>
                                <h4 class="card-title mt-2">Scalable Resources</h4>
                                <p class="card-text">Adapt hosting configurations to meet seasonal peaks or long-term
                                    business growth.</p>
                            </div>
                        </div>

                    </div>
                </div>
            @endfor
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <!-- Indicators -->
        <div class="carousel-indicators mt-3">
            @for ($k = 0; $k < 2; $k++)
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $k }}"
                    class="{{ $k === 0 ? 'active' : '' }}"></button>
            @endfor
        </div>
    </div>



    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                {{-- content-2 --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-img">
                        <img src="https://dummyimage.com/600x400/000/fff" alt="no available"
                            class="img-fluid services-img-2 rounded">

                    </div>
                </div>
                {{-- image-2 --}}
                <div class="col-lg-6">
                    <h3>Why Choose Mounteko for Sage Hosting Services?</h3>
                    <p>Mounteko specializes in delivering reliable, efficient, and secure Sage Hosting solutions tailored to
                        meet your unique business requirements. With our robust infrastructure and expert support, we help
                        businesses harness the full potential of their Sage applications.</p>
                    <ul class="feature-list">
                        <li>Unmatched Uptime</li>
                        <li>Comprehensive Security Measures</li>
                        <li>Dedicated Support</li>
                        <li>Scalability for Growth</li>
                        <li>Competitive Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>

            </div>

            <div class="row justify-content-center">
                <div class="col-xl-4 ">
                    <div class="card-img mb-3">
                        <img src="{{ asset('home/assets/img/faqimage.png') }}" alt="no available"
                            class="img-fluid services-img rounded hover-animate"
                            style="position: relative;width: 400px;height: 400px;">
                    </div>

                </div>
                <div class="col-xl-8">
                    <ul class="faq-list">
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                                What is Sage Cloud Hosting
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>Sage Cloud Hosting enables you to access your Sage software securely from the cloud,
                                    providing enhanced flexibility and collaboration.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq2">
                                How does Mounteko ensure data security for Sage hosting?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>We use advanced encryption, regular data backups, and proactive monitoring to secure your
                                    business information.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq3">
                                Can I use Sage applications on multiple devices?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>Yes, our hosting service allows you to access Sage software from any internet-connected
                                    device.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq4">
                                Is your Sage hosting service scalable?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>Absolutely. Our hosting plans are designed to grow with your business needs.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq5">
                                What kind of support does Mounteko provide?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>We offer 24/7 customer support to ensure your hosting experience is smooth and reliable.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq6">
                                Will Sage performance be impacted by hosting?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>No, our high-performance servers ensure optimal functionality and responsiveness of your
                                    Sage applications.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq7">
                                Can you help migrate my Sage software to the cloud?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                <p>Yes, we provide seamless migration services to transition your existing Sage setup to our
                                    cloud platform without downtime.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->




    @php
        $chunks = $cat_products->chunk(3);
    @endphp

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($chunks as $chunkIndex => $productChunk)
                <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                    <div class="row gx-5 m-5">
                        @foreach ($productChunk as $pro_item)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100 w-100">
                                    <div class="image-wrapper h-100">
                                        <img src="{{ asset('storage/' . optional($pro_item->product_banner)->media) }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $pro_item->product_title ?? '' }}</h3>
                                        <p class="card-text">
                                            {{ $pro_item->product_description ? substr(strip_tags($pro_item->product_description), 0, 100) : '' }}.....
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-info" href="{{ route('product', $pro_item->slug) }}">Read
                                            More</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($testimonial as $t)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset($t->pic) }}" class="testimonial-img" alt="">
                                <h3>{{ $t->name }}</h3>
                                <h4>{{ $t->position }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $t->description }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->



    <!-- ======= Blog Section ======= -->
    {{-- @if ($blogs && count($blogs) > 0)
        <section id="blog" class="blog section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Our <span>Blogs</span></h3>

                </div>
                <x-blog-slider :blogs="$blogs" />
            </div>
        </section>
    @endif --}}
    <!-- ======= END Blog Section ======= -->

@endsection
