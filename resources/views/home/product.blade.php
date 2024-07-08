@extends('home.includes.layout')
@section('title', 'Contact Us')
@section('header-area')
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
            --primary-color: "#3721de";
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
    </style>
@endsection
@section('content')
    <style>
        .carousel-item img {
            height: 200px;
        }
    </style>
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Service Details</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Service Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    {{-- Silder  --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-inner">
                @foreach ($medias as $md)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $md->media) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Innovation Trove</h5>
                            {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Slider End --}}

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="services-list">
                    <a href="#service-details" class="active">Service Details</a>
                    @if ($features)
                    <a href="#featured-services">Featured Services</a>
                    @endif
                    @if ($whyus)
                    <a href="#whyus-services">Why-Us Services</a>
                    @endif
                    @if ($counters)
                    <a href="#counts">Counts</a>
                    @endif

                    @if ($testimonials)
                    <a href="#testimonials">Testimonials</a>
                    @endif

                    @if ($faqs)
                    <a href="#faq">FAQ</a>
                    @endif

                </div>
                </div> --}}

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/' . $products->content_img->media) }}" alt="no available"
                                class="img-fluid services-img rounded">
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    {!! $products->product_description !!}
                </div>
            </div>

        </div>

    </section>
    <!-- /Service Details Section -->

    <!-- Why Us Details Section -->
    <section id="whyus-services" class="counts">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <h2>How it work</h2>
            </div>
            <div class="heading">
                Standard Work Process
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        @forelse ($products->whyus as $data)
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon"><i class="{{ $data->icon }}"></i></div>
                                <h3 class="title">{{ $data->title }}</h3>
                                <p class="description">
                                    {!! $data->detail !!}
                                </p>
                            </a>
                        </div>
                        @empty
                            <p>No data uploaded</p>
                        @endforelse


                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Why Us Details Section -->

    <!-- Product banner Details Section -->
    <section id="whyus-services" class="counts">
        <div class="container" data-aos="fade-up">
            <img src="{{ asset('home/assets/img/product-demo-banner.png') }}" style="width: inherit;" />
        </div>
    </section>
    <!-- /Product banner Details Section -->


    <!-- Contact Details Section -->
    <section id="whyus-services" class="counts">
        <div class="container" data-aos="fade-up">
            <div class="cta-sec6 background-image bg-theme" data-bg-src="{{ asset('home/assets/img/cta_bg_6.jpg') }}">
                <div class="cta-content">
                    <div class="cta-wrapper">
                        <div class="cta-icon"><a href="tel:+91{{ settingValue('phone') }}"><img
                                    src="{{ asset('home/assets/img/call.svg') }}" alt=""></a>
                        </div>
                        <div class="media-body"><span class="header-info_label text-white">Call For More Info</span>
                            <p class="header-info_link"><a href="tel:+91{{ settingValue('phone') }}">{{ settingValue('phone') }}</a></p>
                        </div>
                    </div>
                    <div class="title-area mb-0">
                        <h4 class="sec-title text-white">Let’s Request a Schedule For Free Consultation</h4>
                    </div>
                    <div class="cta-group"><a href="{{ route('contactUs') }}" class="th-btn th-border style-radius">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Details Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($features as $fs)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="{{ $fs->icon ?? '' }}"></i></div>
                            <h4 class="title"><a href="">{{ $fs->title ?? '' }}</a></h4>
                            <p class="description">{!! $fs->detail ?? '' !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach ($counters as $ct)
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="{{ $ct->icon ?? '' }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter">{{ $ct->count ?? '' }}</span>
                            <p>{{ $ct->title ?? '' }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section> --}}
    <!-- End Counts Section -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <img class="mb-4 mb-lg-0" src="{{ asset('home/assets/img/contact-us-media.png') }}"
                        style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 php-email-form">
                    <div class="section-title">
                        <h2>GET IN TOUCH</h2>
                        <h3>Don't Be Shy <span><br />Send Us a Message</span></h3>

                    </div>
                    <form action="{{ route('contactStore') }}" method="post" role="form">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>

            </div>

            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/' . $products->faqImg->media) }}" alt="no available"
                                class="img-fluid services-img rounded">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <ul class="faq-list">
                        @foreach ($faqs as $faq)
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question"
                                    href="#faq{{ $faq->id ?? '' }}">
                                    {{ $faq->question ?? '' }}<i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq{{ $faq->id ?? '' }}" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        {{ $faq->answer ?? '' }}
                                    </p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->


    <!-- ======= Blog Section ======= -->
    <section class="user-blog" class="footer-top">
        <div class="container">

            <div class="heading">
                Blogs
            </div>

            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-12 ">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/th.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 ">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/services.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 ">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/cta.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 ">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/whyus.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-12 ">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/th.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/services.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 ">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/cta.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <img src="{{ asset('home/assets/img/whyus.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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



        </div>
    </section>



    <!-- End Blog Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $tm)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('storage/' . $tm->testimonial_image) }}" class="testimonial-img"
                                    alt="">
                                <h3>{{ $tm->name ?? '' }}</h3>
                                <h4>{{ $tm->designation ?? '' }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $tm->comment ?? '' }}
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



@endsection
