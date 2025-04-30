<style>
    .background-image, [data-bg-src] {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
.choose-tabs-wrapper {
    border-radius: 30px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    background: #1E2127;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    box-shadow: 0px 16px 48px 0px rgba(18, 20, 26, 0.64);
}
.choose-tabs-tabs.nav-tabs {
    border-bottom: none;
    padding: 60px;
    display: block;
}
.choose-tabs-tabs.nav-tabs .nav-item.show .nav-link, .choose-tabs-tabs.nav-tabs .nav-link.active {
    color: var(--white-color);
    background-color: var(--theme-color);
    border-color: var(--theme-color);
}
.choose-tabs-tabs .nav-link:not(:last-child) {
    margin-bottom: 20px;
}
.choose-tabs-tabs .nav-link {
    position: relative;
    border-radius: 100px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    background: #1D2128;
    padding: 18px 40px;
    font-family: var(--title-font);
    font-size: 20px;
    line-height: 20px;
    font-weight: 600;
    min-width: 330px;
    color: var(--white-color);
    text-align: left;
    display: block;
    box-shadow: none;
}

.choose-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    gap: 30px;
    border-left: 1px solid rgba(255, 255, 255, 0.1);
    padding: 60px;
}
.mb-30 {
    margin-bottom: 30px;
}
.title-area {
    margin-bottom: calc(var(--section-title-space) - 10px);
    position: relative;
    z-index: 2;
}
.choose-wrapper .choose-image {
    min-width: 276px;
    height: 300px;
    border-radius: 30px;
}
.choose-image {
    min-width: 632px;
    margin-left: 65px;
}
.th-anim {
    position: relative;
    display: -ms-inline-flexbox;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: inline-flex;
    visibility: hidden;
    overflow: hidden;
}
.choose-wrapper .choose-image img {
    width: 100%;
    border-radius: 30px;
}
.th-anim img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    -webkit-transform-origin: left;
    -ms-transform-origin: left;
    transform-origin: left;
}
img:not([draggable]), embed, object, video {
    max-width: 100%;
    height: auto;
}

</style>
<div class="overflow-hidden space background-image"
    style="background-image: url(&quot;assets/img/bg/choose_bg_2.jpg&quot;);">
    <div class="container th-container5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center"><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon bg-mask"
                                style="mask-image: url(&quot;assets/img/theme-img/title_shape_1.svg&quot;);"></span> <img
                                src="assets/img/theme-img/title_shape_1.svg" alt="shape"></div>Why Work With Us
                    </span>
                    <h2 class="sec-title text-white">Why people are very loved to working with us?</h2>
                </div>
            </div>
        </div>
        <div class="choose-tabs-wrapper">
            <div class="nav nav-tabs choose-tabs-tabs" id="nav-tab" role="tablist"><button class="nav-link active"
                    id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button">Expertise and
                    Experience</button> <button class="nav-link" id="nav-step2-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-step2" type="button">Quality Workmanship</button> <button class="nav-link"
                    id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3" type="button">Commitment to
                    Safety</button> <button class="nav-link" id="nav-step4-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-step4" type="button">Reliability and Consistency</button></div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-step1" role="tabpanel">
                    <div class="choose-wrapper">
                        <div class="choose-content">
                            <div class="title-area mb-30">
                                <h5 class="sec-title mb-3 text-white">Expertise and Experience</h5>
                                <p class="box-text">While Google Ads is undoubtedly a powerful advertising platform,
                                    it’s important to recognize that there are various other avenues to effectively
                                    display ads...</p>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><i class="far fa-check-circle text-body"></i>Best Service for You</li>
                                    <li><i class="far fa-check-circle text-body"></i>Keeping Your Team Productive</li>
                                    <li><i class="far fa-check-circle text-body"></i>Predictable Costs 24/</li>
                                </ul>
                            </div><a href="contact.html" class="th-btn style6 style-radius">Get Started</a>
                        </div>
                        <div class="choose-image th-anim"
                            style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><img
                                src="assets/img/normal/choose_img_1.jpg" alt=""
                                style="transform: translate(0px, 0px); pointer-events: all !important;"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                    <div class="choose-wrapper">
                        <div class="choose-content">
                            <div class="title-area mb-30">
                                <h5 class="sec-title mb-3 text-white">Quality Workmanship</h5>
                                <p class="box-text">While Google Ads is undoubtedly a powerful advertising platform,
                                    it’s important to recognize that there are various other avenues to effectively
                                    display ads...</p>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><i class="far fa-check-circle text-body"></i>Best Service for You</li>
                                    <li><i class="far fa-check-circle text-body"></i>Keeping Your Team Productive</li>
                                    <li><i class="far fa-check-circle text-body"></i>Predictable Costs 24/</li>
                                </ul>
                            </div><a href="contact.html" class="th-btn style6 style-radius">Get Started</a>
                        </div>
                        <div class="choose-image th-anim"
                            style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><img
                                src="assets/img/normal/choose_img_2.jpg" alt=""
                                style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                    <div class="choose-wrapper">
                        <div class="choose-content">
                            <div class="title-area mb-30">
                                <h5 class="sec-title mb-3 text-white">Commitment to Safety</h5>
                                <p class="box-text">While Google Ads is undoubtedly a powerful advertising platform,
                                    it’s important to recognize that there are various other avenues to effectively
                                    display ads...</p>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><i class="far fa-check-circle text-body"></i>Best Service for You</li>
                                    <li><i class="far fa-check-circle text-body"></i>Keeping Your Team Productive</li>
                                    <li><i class="far fa-check-circle text-body"></i>Predictable Costs 24/</li>
                                </ul>
                            </div><a href="contact.html" class="th-btn style6 style-radius">Get Started</a>
                        </div>
                        <div class="choose-image th-anim"
                            style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><img
                                src="assets/img/normal/choose_img_3.jpg" alt=""
                                style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-step4" role="tabpanel">
                    <div class="choose-wrapper">
                        <div class="choose-content">
                            <div class="title-area mb-30">
                                <h5 class="sec-title mb-3 text-white">Reliability and Consistency</h5>
                                <p class="box-text">While Google Ads is undoubtedly a powerful advertising platform,
                                    it’s important to recognize that there are various other avenues to effectively
                                    display ads...</p>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><i class="far fa-check-circle text-body"></i>Best Service for You</li>
                                    <li><i class="far fa-check-circle text-body"></i>Keeping Your Team Productive</li>
                                    <li><i class="far fa-check-circle text-body"></i>Predictable Costs 24/</li>
                                </ul>
                            </div><a href="contact.html" class="th-btn style6 style-radius">Get Started</a>
                        </div>
                        <div class="choose-image th-anim"
                            style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><img
                                src="assets/img/normal/choose_img_4.jpg" alt=""
                                style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
