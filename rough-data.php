<?php
    include('widgets/header.php');
?>

<main>
    <style>
    :root {
        --global_color_black_shade: #2b2b2b;
        --global_color_heading: #4b4b4b;
        --global_color_main_first: #aa00e2;
    }

    .mainpage-image-box {
        width: 100%;
        background-color: #efefef;
    }

    .image-box-main-div {
        padding: 0px;
        margin: 0px;
        width: 100%;
        height: 600px;
    }

    .image-box-inner-div {
        background-position: center;
        background-image: url(images/carousel_slide_1.avif);
        width: 100%;
        height: 600px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .image-box-inner-div-cover {
        display: flex;
        align-items: center;
        width: 100%;
        height: 600px;
        background-color: #00000057;
    }

    .inner-div-cover-content-box {
        text-align: center;
    }

    .inner-div-cover-content-box P:nth-child(2) {
        margin-top: 1rem;
        margin-bottom: 4rem;
    }

    .inner-div-cover-content-box-text {
        text-transform: uppercase;
        font-size: 3rem;
        font-weight: 800;
        color: white;
        margin: 0;
    }

    .inner-div-cover-content-box-text span {
        color: var(--global_color_main_first);
        font-weight: 600;
    }

    .button-custom {
        background-color: var(--global_color_main_first);
        border-radius: 4px;
        padding: 15px 35px;
        border: none;
        text-decoration: none;
    }
    </style>
    <section class="mainpage-image-box">
        <div class="image-box-main-div">
            <div class="image-box-inner-div">
                <div class="image-box-inner-div-cover">
                    <div class="container inner-div-cover-content-box">
                        <p class="inner-div-cover-content-box-text">hi<span>,</span> i<br>am
                            danish<br>star <span>.</span>
                        </p>
                        <p class="text-center text-white"> UI/UX DESIGNER AND WEB DEVELOPER
                        </p>

                        <button type="button" class="button-custom text-white">Download Resume
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .education-main {
        background-color: #f9fbfd;
    }

    .education-main-top-heading {
        border-bottom: 1px solid #e5ebf2;
        width: 100%;
    }

    .education-main-top-heading div {
        text-align: center;
        padding: 60px 0px;
    }

    .education-main-top-heading div h3 {
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--global_color_heading);
    }

    .education-main-timeline {
        padding: 70px 0px;
    }

    .education-main-timeline .row {
        margin: 0;
    }

    .education-main-timeline .col-sm-4 {
        padding: 0px 4px;
    }

    .timeline-horizontal-experience h5,
    .timeline-horizontal-content h5 {
        color: #3c4258;
    }

    .timeline-horizontal-experience h6,
    .timeline-horizontal-content h6 {
        color: #636a82;
    }

    .timeline-horizontal-border {
        display: flex;
        align-items: center;
        padding: 30px 0;
    }

    .timeline-horizontal-border i {
        color: var(--global_color_black_shade);
        font-size: 10px;
        margin-right: 5px
    }

    .timeline-horizontal-border span {
        display: inline-block;
        background: #b2c1ce;
        height: 1px;
        width: 100%;
    }

    .timeline-horizontal-content h6 {
        margin: 15px 0px;
    }

    .timeline-horizontal-content .description {
        color: #999fb3;
    }
    </style>
    <style>
    @media only screen and (max-width: 992px) {

        .education-main-timeline .col-sm-4 {
            width: 100%;
            padding: 30px 4px;
        }
    }
    </style>
    <section class="education">
        <div class="education-main">
            <div class="education-main-top-heading">
                <div class="container">
                    <h3>Education</h3>
                </div>
            </div>
            <div class="container education-main-timeline">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="education-main-timeline-horizontal">
                            <div class="timeline-horizontal-experience">
                                <h5>2018 - 2021</h5>
                                <h6>Diploma of Computer Science Engineering</h6>
                            </div>
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle"></i>
                                <span></span>
                            </div>
                            <div class="timeline-horizontal-college">
                                <div class="timeline-horizontal-content">
                                    <h5>Government Polytechnic College</h5>
                                    <h6>Bathinda, Punjab, India</h6>
                                    <p class="description">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="education-main-timeline-horizontal">
                            <div class="timeline-horizontal-experience">
                                <h5>2021 - 2024</h5>
                                <h6>Undergraduate Diploma of Computer Engineering Technician</h6>
                            </div>
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle"></i>
                                <span></span>
                            </div>
                            <div class="timeline-horizontal-college">
                                <div class="timeline-horizontal-content">
                                    <h5>Northern Pures College</h5>
                                    <h6>Scarborough, Ontario, Canada</h6>
                                    <p class="description">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="education-main-timeline-horizontal">
                            <div class="timeline-horizontal-experience">
                                <h5>2024 - 2027</h5>
                                <h6>Graduation of Computer Science Engineering</h6>
                            </div>
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle"></i>
                                <span></span>
                            </div>
                            <div class="timeline-horizontal-college">
                                <div class="timeline-horizontal-content">
                                    <h5>Chandigarh University</h5>
                                    <h6>Chandigarh, India</h6>
                                    <p class="description">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <style>
    .skills-main-top-heading {
        border-bottom: 1px solid #e5ebf2;
    }

    .skills-main-top-heading div {
        text-align: center;
        padding: 60px 0px;
    }

    .skills-main-top-heading div h3 {
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--global_color_heading);
    }

    .skills-main-content .row {
        margin: 0;
    }

    .skills-main-content {
        padding: 80px 0px;
    }

    .skills-single>h6 {
        margin: 0;
        text-transform: uppercase;
        font-weight: 500;
        color: #636a82;
    }

    .skills-single .progress {
        background: #e6ecf3;
        height: 8px;
        margin-top: 15px;
        width: 85%;
        margin-bottom: 37px;
    }

    .skills-single .progress-bar {
        border-radius: 3px;
    }

    .skills-single-progress-text {
        display: flex;
    }

    .skills-single-progress-text>h6 {
        width: 10%;
        color: #636a82;
        position: relative;
        top: 8px;
        left: 10px;
        font-weight: 500;
    }
    </style>
    <style>
    @media only screen and (max-width: 992px) {

        .skills-main-content .col-sm-6 {
            width: 100%;
        }
    }
    </style>
    <section class="skills">
        <div class="skills-main">
            <div class="skills-main-top-heading">
                <div class="container">
                    <h3>skills</h3>
                </div>
            </div>
            <div class="container skills-main-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="skills-list">
                            <div class="skills-single">
                                <h6>Adobe Photoshop</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="10"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>90%</h6>
                                </div>
                            </div>
                            <div class="skills-single">
                                <h6>Adobe Illustrator</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="10"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>85%</h6>
                                </div>
                            </div>
                            <div class="skills-single">
                                <h6>Adobe After Effects</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width:97%" aria-valuenow="97" aria-valuemin="10" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>97%</h6>
                                </div>
                            </div>
                            <div class="skills-single">
                                <h6>Sketch</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width:90%" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>90%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="skills-list">
                            <div class="skills-single">
                                <h6>HTML</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width: 99%" aria-valuenow="99" aria-valuemin="10"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>99%</h6>
                                </div>
                            </div>
                            <div class="skills-single">
                                <h6>css 3 animations</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width: 87%" aria-valuenow="87" aria-valuemin="10"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>87%</h6>
                                </div>
                            </div>
                            <div class="skills-single">
                                <h6>communications</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width:82%" aria-valuenow="82" aria-valuemin="10" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>82%</h6>
                                </div>
                            </div>
                            <div class="skills-single">
                                <h6>Creativity</h6>
                                <div class="skills-single-progress-text">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width:96%" aria-valuenow="96" aria-valuemin="10" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6>96%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .profile-main-top-heading {
        border-bottom: 1px solid #e5ebf2;
        border-top: 1px solid #e5ebf2;
    }

    .profile-main-top-heading div {
        text-align: center;
        padding: 60px 0px;
    }

    .profile-main-top-heading>div>h3 {
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--global_color_heading);
    }

    .profile-main-content {
        padding: 100px 0px;
    }

    .profile-main-content .row {
        margin: 0;
    }

    .profile-logo-single {
        height: 150px;
        border-right: 1px solid #b2c1ce;
        overflow: hidden;
        position: relative;
    }

    .profile-logo-single-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    .profile-logo-single-center div {
        text-align: center;
    }

    .profile-main-content>.row>.col-sm-3:nth-child(4)>.profile-logo-single {
        border-right: none;
    }

    .profile-main-content>.row>.col-sm-3 {
        padding: 0;
    }


    .profile-logo-single-overlay {
        height: 150px;
        position: absolute;
        width: 100%;
        background: linear-gradient(to right, #d92cf9 0, #b636ff 100%);
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transition: .5s;
        -moz-transition: .5s;
        -ms-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
    }

    .profile-logo-single:hover .profile-logo-single-overlay {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        top: 0;
    }

    .profile-main-content-row-divider {
        width: 100%;
        height: 1px;
        background-color: #b2c1ce;
    }
    </style>
    <style>
    @media only screen and (max-width: 768px) {
        .profile-main-content .col-sm-3 {
            width: 100%;
        }

        .profile-main-content .col-sm-3 .profile-logo-single {
            border: none;
        }

        .profile-logo-single,
        .profile-logo-single-overlay {
            height: 200px;
        }

        .profile-logo-single {
            margin: 0px 50px;
        }

        .profile-main-content-row-divider {
            display: none;
        }

        .portfolio-main-content .col-sm-4 {
            width: 100%;
        }

        .portfolio-row1-main,
        .portfolio-row3-main,
        .portfolio-row2-main {
            height: 1040px;
        }

        .portfolio-single,
        .portfolio-single-image,
        .portfolio-single-overlay {
            height: 500px;
        }

        .portfolio-double,
        .portfolio-double-image,
        .portfolio-double-overlay {
            height: 1000px;
        }
    }

    @media only screen and (max-width: 576px) {
        .profile-logo-single {
            margin: 0px 80px;
        }
    }
    </style>
    <section class="profile">
        <div class="profile-main">
            <div class="profile-main-top-heading">
                <div class="container">
                    <h3>Profile</h3>
                </div>
            </div>
            <div class="container profile-main-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-main-content-row-divider"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="profile-logo-single">
                            <div class="profile-logo-single-center">
                                <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                <div class="profile-logo-text">
                                    <h5>icon name</h5>
                                </div>
                            </div>
                            <div class="profile-logo-single-overlay">
                                <div class="profile-logo-single-center">
                                    <div class="profile-logo-icon"><a href="#">asdfads</a></div>
                                    <div class="profile-logo-text">
                                        <h5>icon name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    @media only screen and (max-width: 992px) {
        .aboutme-box-content>div>div {
            width: 100%;
            text-align: center;
        }

        .aboutme-box-content-image {
            margin: 50px 40px 0px 40px;
        }

        .aboutme-box-content-info-single p {
            word-wrap: normal;
        }
    }
    </style>

    <style>
    .aboutme-box-main-div {
        padding-bottom: 80px;
    }

    .aboutme-box-top-heading {
        border-bottom: 1px solid #e5ebf2;
    }

    .aboutme-box-top-heading div {
        text-align: center;
        padding: 60px 0px;
    }

    .aboutme-box-top-heading div h3 {
        margin: 0;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--global_color_heading);
    }

    .aboutme-box-content {
        padding: 100px 0px 0px 0px;
    }

    .aboutme-box-content>div>div>p:nth-child(1) {
        color: #3c4258;
        font-weight: 700;
        line-height: 1.8;
    }

    .aboutme-box-content>div>div>p:nth-child(2),
    .aboutme-box-content>div>div>p:nth-child(3) {
        color: #999fb3;
    }

    .aboutme-box-content>div>div>p:nth-child(3) {
        margin: 0;
        padding-bottom: 50px;
        border-bottom: 1px solid #999fb3;
    }

    .aboutme-box-content div div p {
        line-height: 1.8;
    }

    .aboutme-box-content-image {
        background-position: center;
        background-image: url('images/img_3.JPG');
        margin-left: 5rem;
        height: 600px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .aboutme-box-content-image-cover {
        display: flex;
        align-items: end;
        width: 100%;
        height: 600px;
        background-color: #0000008f;
    }

    .aboutme-box-content-image-cover-content-box {
        text-align: center;
        width: 100%;
        align-items: center;
        background-color: #604435;
        color: white;
        height: 70px;
        display: flex;
    }

    .aboutme-box-content-image-cover-content-box>div {
        width: 100%;
    }

    .aboutme-box-content-image-cover-content-box>div>ul {
        display: flex;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .aboutme-box-content-image-cover-content-box>div>ul>li {
        width: 60px;
    }

    .aboutme-box-content-image-cover-content-box>div>ul>li img {
        width: 35px;
        height: auto;
    }

    .aboutme-box-content-info {
        padding-top: 30px;
    }

    .aboutme-box-content-info-single h5 {
        color: #636a82;
    }

    .aboutme-box-content-info-single p {
        color: #999fb3;
        word-wrap: break-word;
    }
    </style>

    <style>
    @media only screen and (max-width: 992px) {
        .aboutme-box-content>div>div {
            width: 100%;
            text-align: center;
        }

        .aboutme-box-content-image {
            margin: 50px 40px 0px 40px;
        }

        .aboutme-box-content-info-single p {
            word-wrap: normal;
        }
    }
    </style>
    <section class="aboutme-box">
        <div class="aboutme-box-main-div">
            <div class="aboutme-box-top-heading">
                <div class="container">
                    <h3>
                        About me
                    </h3>
                </div>
            </div>
            <div class="container aboutme-box-content">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="font-weight-bold">
                            I am a Professional UI/UX Designer and Web developer. Consectetur an
                            adipisi elita, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam quis nostrud.
                        </p>
                        <p>
                            As a professional UI/UX designer and web developer, I blend
                            creativity with
                            technical expertise to create engaging, user-friendly digital experiences. My role involves
                            understanding user needs, designing intuitive interfaces, and developing seamless websites
                            and
                            applications that deliver exceptional user experiences.
                        </p>
                        <p>
                            UI (User Interface) design focuses on the visual aspects of a product, including layout,
                            colors, typography, and interactive elements. I ensure that the interface is aesthetically
                            pleasing and aligns with the brand's identity. UX (User Experience) design, on the other
                            hand, is about the overall feel of the product. It involves user research, creating user
                            personas, wireframing, prototyping, and usability testing. My goal is to make the user's
                            interaction with the product as smooth and enjoyable as possible.
                        </p>
                        <div class="row aboutme-box-content-info">
                            <div class="col-sm-4">
                                <div class="aboutme-box-content-info-single">
                                    <h5>Phone</h5>
                                    <p>+91 8968-444-720</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="aboutme-box-content-info-single">
                                    <h5>Email</h5>
                                    <p>danishbansal60@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="aboutme-box-content-info-single">
                                    <h5>Website</h5>
                                    <p>www.webteens.in</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="aboutme-box-content-image">
                            <div class="aboutme-box-content-image-cover">
                                <div class="aboutme-box-content-image-cover-content-box">
                                    <div>
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="#"><img src="icons/instagram.png"></img></a></li>
                                            <li><a href="#"><img src="icons/linkedin.png"></img></a></li>
                                            <li><a href="#"><img src="icons/twitter.png"></img></a></li>
                                            <li><a href="#"><img src="icons/whatsapp.png"></img></a></li>
                                            <li><a href="#"><img src="icons/youtube.png"></img></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include("widgets/footer.php")
?>