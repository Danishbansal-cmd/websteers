<?php
    include('widgets/header.php');
?>

<style>
:root {
    --global_color_main_first: #aa00e2;
}
</style>

<style>
.services-background {
    height: 600px;
    display: flex;
    align-items: center;
    background-image: url(images/services/services_1.avif);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
    background-attachment: fixed;
}

.services-background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #000000;
    opacity: 0.65;
    height: 100%;
}

.services-background-content {
    display: flex;
    flex-direction: column;
    position: relative;
}

.services-background-content h1 {
    color: white;
    font-weight: 700;
    margin-bottom: 30px;
    font-size: 3rem;
}

.services-background-content p {
    color: white;
    font-weight: 400;
}
</style>

<style>
.design-development {
    background-color: #f1f1f1;
    position: relative;
    z-index: 999;
    padding: 120px 0px;
}


.design-development-top h2 {
    color: #051e22;
    font-weight: 800;
    font-size: 2.7rem;
}

.design-development-top p {
    color: #6cc3b0;
    font-weight: 600;
    font-size: 1.4rem;
}

.design-development-image-main {
    width: 100%;
    position: relative;
}

.design-development-image {
    width: 90%;
    background-image: url(images/services/design_and_development.png);
    background-size: contain;
    background-repeat: no-repeat;
    position: relative;
    background-position: center center;
    height: 410px;
}

.design-development-image-color_box {
    background-color: #6cc3b0;
    position: absolute;
    right: 4em;
    width: 70%;
    height: 70%;
    bottom: -30px;
    z-index: -2;
}

.design-development-text {
    height: 100%;
    display: flex;
    align-items: center;
    margin-top: 30px;
}

.design-development-text ul {
    list-style-type: none;
    margin-bottom: 0px;
}

.design-development-text ul li {
    margin-bottom: 10px;
    font-size: 1rem;
    font-weight: 500;
}

.design-development-text li::before {
    content: "";
    position: relative;
    top: 5px;
    margin-right: 10px;
    display: inline-block;
    background-image: url(icons/tick.png);
    background-size: 100% 100%;
    width: 20px;
    height: 20px;
}
</style>
<style>
@media only screen and (max-width: 992px) {
    .design-development>.container {
        max-width: 100%;
    }
}

@media only screen and (max-width: 900px) {
    .design-development-text>ul {
        padding-left: 0px;
    }
}

@media only screen and (max-width: 1400px) {
    .design-development-image-color_box {
        right: 1em;
    }
}

@media only screen and (max-width: 1200px) {
    .design-development-image-color_box {
        right: -2em;
    }
}

@media only screen and (max-width: 980px) {
    .design-development-image-color_box {
        bottom: 0px;
    }

    .design-development-text ul li {
        font-size: 0.8rem;
    }
}

@media only screen and (max-width: 800px) {
    .design-development-image-color_box {
        height: 50%;
        bottom: 2em;
    }
}

@media only screen and (max-width: 680px) {

    .design-development>.container>.row>.col-sm-8,
    .design-development>.container>.row>.col-sm-4 {
        width: 100%;
    }

    .design-development-text>ul {
        padding-left: 40px;
        padding-top: 30px;
    }

    .design-development-image-color_box {
        bottom: 0em;
        height: 70%;
    }
}

@media only screen and (max-width: 400px) {

    .design-development-top h2 {
        font-size: revert;
    }
}
</style>

<main class="services">
    <section class="services-background">
        <div class="services-background-overlay"></div>
        <div class="container services-background-content">
            <h1>Our Services</h1>
            <p>
                At Websteers, we specialize in delivering comprehensive digital solutions, including expert SEO services
                to boost your online presence, creative website design and development tailored to your brand, efficient
                project management, and impactful graphic design. We also offer targeted ad marketing strategies to
                drive growth and maximize ROI for your business.
            </p>
        </div>
    </section>


    <Section class="design-development" id="design-development">
        <div class="container">
            <div class="design-development-top">
                <h2>Website Design and Development</h2>
                <p>We make Creative Flexible and affordable Website Design.</p>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="design-development-image-main">
                        <div class="design-development-image">
                            <div class="design-development-image-color_box">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="design-development-text">
                        <ul>
                            <li>Responsive Web Design</li>
                            <li>Creative Design</li>
                            <li>User Friendly Navigations</li>
                            <li>Search Engine Friendly</li>
                            <li>High Ranking Keywords</li>
                            <li>Boost Your Sales</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    .what-is-seo-image-main {
        width: 100%;
        position: relative;
    }

    .what-is-seo-image {
        background-image: url(images/services/seo_1.jpg);
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
        background-position: center center;
        padding: 400px 0px;
    }

    .what-is-seo-text h2 {
        color: #051e22;
        font-weight: 800;
        font-size: 2.2rem;

    }

    .what-is-seo-text p {
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 3em;
    }

    .button-custom-text {
        color: #051e22;
        font-size: 1.5rem;
        font-weight: 800;
        text-transform: uppercase;
    }

    .button-custom {
        background-color: var(--global_color_main_first);
        border-radius: 4px;
        padding: 15px 35px;
        border: none;
        text-decoration: none;
    }

    .what-is-seo>.container>.row>.col-sm-5 {
        display: flex;
        align-items: center;
        position: relative;
    }

    .what-is-seo-image-overlay {
        position: absolute;
        width: 300px;
        height: 100px;
        top: 0;
        right: 0;
    }
    </style>
    <style>
    @media only screen and (min-width: 1400px) {
        .what-is-seo>.container {
            max-width: 1400px;
        }
    }

    @media only screen and (max-width: 992px) {
        .what-is-seo>.container {
            max-width: 100%;
        }
    }

    @media only screen and (max-width: 860px) {
        .what-is-seo {
            padding: 100px 0px;
        }

        .what-is-seo-text {
            padding-bottom: 50px 0px;
        }

        .what-is-seo>.container>.row>.col-sm-5 {
            width: 100%;
        }

        .what-is-seo>.container>.row>.col-sm-7 {
            display: none;
        }
    }
    </style>
    <section class="what-is-seo" id="SEO">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="what-is-seo-text">
                        <h2>What is<br>Search Engine<br>Optimization</h2>
                        <p>
                            SEO, or Search Engine Optimization, is the practice of enhancing a website's visibility
                            on search engines like Google. It involves optimizing various aspects of a website,
                            including its content, structure, and technical elements, to improve its ranking in
                            search results for relevant keywords. Effective SEO helps a website attract more organic
                            (non-paid) traffic by making it easier for search engines to understand and index the
                            content.
                        </p>
                        <h3 class="button-custom-text">Optimize Your Site Now!!!</h3>
                        <a href="./contact-us-websteers.php"><button class="button-custom text-white">Contact Us
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="what-is-seo-image-main">
                        <div class="what-is-seo-image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .how-seo-helps {
        padding: 140px 0px;
    }

    .how-seo-helps {
        background-color: #f1f1f1;
    }

    .tools-we-need-content {
        margin-bottom: 4em;
    }

    .how-seo-helps-content h2,
    .tools-we-need-content h2 {
        color: #051e22;
        font-weight: 800;
        font-size: 2.2rem;
    }

    .how-seo-helps-content p,
    .tools-we-need-content p {
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 3em;
    }

    .how-seo-helps-optimize-main {}
    </style>
    <style>
    @media only screen and (max-width: 992px) {
        .how-seo-helps>.container {
            max-width: 100%;
        }
    }
    </style>
    <section class="how-seo-helps">
        <div class="container">
            <div class="how-seo-helps-content">
                <h2>How does SEO helps</h2>
                <p>
                    SEO helps a website by significantly increasing its visibility and accessibility to users searching
                    for relevant content online. By optimizing a website's structure, content, and technical aspects,
                    SEO improves its ranking in search engine results pages (SERPs), making it more likely to be found
                    by potential visitors. Higher rankings mean more organic traffic, which is often more targeted and
                    relevant, leading to increased engagement, conversions, and revenue. Additionally, SEO ensures that
                    a website is user-friendly, fast, and accessible on all devices, enhancing the overall user
                    experience.
                </p>
            </div>
            <div class="tools-we-need-content">
                <h2>
                    Tools we Use
                </h2>
                <p>
                    To achieve effective SEO, a variety of tools and techniques are employed to optimize different
                    aspects of a website. Keyword research is the foundation, using tools like Google Keyword Planner,
                    SEMrush, or Ahrefs to identify the most relevant and high-traffic keywords. On-page optimization
                    techniques involve refining the website's content, meta tags, headings, and URLs to align with these
                    keywords. Off-page SEO focuses on building quality backlinks from authoritative sites, using
                    strategies like guest blogging, outreach, and social media engagement. Technical SEO tools such as
                    Google Search Console, Screaming Frog, and GTmetrix help identify and fix issues related to site
                    speed, mobile-friendliness, crawlability, and security. Analytics tools like Google Analytics and
                    Moz provide insights into the performance of SEO efforts, allowing continuous refinement and
                    improvement.
                </p>
            </div>
            <div class="how-seo-helps-optimize-main">
                <h3 class="button-custom-text">
                    Optimize Your Site Now!!!
                </h3>
                <a href="./contact-us-websteers.php">
                    <button class="button-custom text-white">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </section>

    <style>
    .manage-site {
        padding: 120px 0px;
    }

    .manage-site-content h2 {
        margin-bottom: 20px;
        font-weight: 800;
    }

    .manage-site-content p {
        font-size: 0.9rem;
        font-weight: 400;
        margin-bottom: 30px;
    }

    .manage-site-image-box {
        background-image: url(images/managing_site_2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 500px;
        border: 10px solid #f1f1f1;
    }

    .manage-site>.container>.row>.col-sm-4 {
        padding: 0px;
    }

    .manage-site>.container>.row>.col-sm-8 {
        padding-left: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
    <style>
    @media only screen and (max-width: 992px) {
        .manage-site>.container {
            max-width: 100%;
        }
    }

    @media only screen and (max-width: 768px) {
        .manage-site>.container>.row>.col-sm-4 {
            width: 100%;
        }

        .manage-site>.container>.row>.col-sm-8 {
            width: 100%;
        }

        .manage-site-content {
            margin-bottom: 30px;
        }
    }
    </style>
    <section class="manage-site" id="manage-site">
        <div class="container">
            <div class="small-heading-text">
                <p>No Overhead, Only Happiness</p>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="manage-site-content">
                        <h2>Tired of Managing your site?</h2>
                        <p>
                            <b>We help you</b> to update the content, design and seo of your site on a monthly basis to
                            maintain
                            your position in a market. You focus on building and other areas of business that needs
                            assistance and overlook, we on the other hand will continue to build the online presence for
                            your brand. Updating the content as per needs of the market, changing trends and new product
                            is easy with us. To appeal the most users and audience we use incremental approach, where
                            the feedback of the people provides the valuable information and key points to improve the
                            design aspect of the site. Our SEO experts are always on work to improve the position and
                            ranking of the site to make it appear on top for the relevant keywords, it always result in
                            increasing traffic which is the only end goal of managing site.
                        </p>
                        <h3 class="button-custom-text">To Avoid Overhead!!!</h3>
                        <a href="./contact-us-websteers.php"><button class="button-custom text-white">Contact Us
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="manage-site-image">
                        <div class="manage-site-image-box"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .graphics {
        background-color: #f9f9f9;
        padding: 100px 0px;
    }

    .graphics h1 {
        font-weight: 800;
        margin-bottom: 40px;
    }

    .graphics-image {
        background-image: url(images/graphics_main_1.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 640px;
        border-radius: 5px;
        position: relative;
    }

    .graphics-image:last-child {
            height: 500px;
        }

    .graphics-image-overlay-text {
        padding: 10px 10px;
    }

    .graphics-image-overlay-text p {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0px;
        color: #ff7918;
    }
    </style>
    <style>
    @media only screen and (max-width: 576px) {
        .graphics-image:last-child {
            height: 200px;
            background-size: contain;
        }
    }

    @media only screen and (max-width: 1400px) {
        .graphics-image {
            height: 550px;
        }
        
        .graphics-image:last-child {
            height: 430px;
        }
    }

    @media only screen and (max-width: 1200px) {
        .graphics-image {
            height: 460px;
        }

        .graphics-image:last-child {
            height: 360px;
        }
    }

    @media only screen and (max-width: 992px) {
        .graphics-image {
            height: 340px;
        }

        .graphics-image:last-child {
            height: 270px;
        }
    }

    @media only screen and (max-width: 768px) {
        .graphics > .container {
            max-width: 100%;
        }
        
        .graphics-image {
            height: 360px;
            background-size: contain;
        }

        .graphics-image:last-child {
            height: 290px;
        }
    }

    @media only screen and (max-width: 600px) {
        .graphics-image {
            height: 270px;
            background-size: contain;
        }

        .graphics-image:last-child {
            height: 215px;
        }
    }

    @media only screen and (max-width: 450px) {
        .graphics-image {
            height: 225px;
            background-size: contain;
        }

        .graphics-image:last-child {
            height: 180px;
        }
    }
    </style>
    <section class="graphics" id="graphics">
        <div class="container">
            <h1>We create Graphics that speak louder than itself.</h1>
            <div class="graphics-image-overlay-text">
                <p>Want Stunning Fashion Graphic</p>
            </div>
            <div class="graphics-image">
            </div>
            <br><br>
            <div class="graphics-image-overlay-text">
                <p>Represent Photography Website</p>
            </div>
            <div class="graphics-image" style="background-image:url(images/graphics_main_2.png)">
            </div>
        </div>
    </section>

    <style>
    .ads-marketing {
        border-bottom: 1px solid white;
    }

    .ads-marketing>.container {
        padding: 0px 0px;
    }

    .ads-marketing>.container>.row>.col-sm-8 {
        position: relative;
        display: flex;
        align-items: center;
        background-color: black;
        color: white;
        padding: 0px 50px;
    }

    .ads-marketing>.container>.row>.col-sm-4 {
        padding: 0px;
    }

    .ads-marketing-content-heading {
        display: flex;
        flex-direction: row;
        margin-bottom: 40px;
    }

    .ads-marketing-content-heading img {
        margin-top: 5px;
        margin-right: 8px;
        height: 30px;
        width: 30px;
    }

    .ads-marketing-content-heading h5 {
        text-transform: uppercase;
        font-weight: 800;
        font-size: 1.3rem;
        margin-bottom: 0px;
    }

    .ads-marketing-content-heading p {
        font-size: 1rem;
        letter-spacing: 1.5px;
        margin-top: -6px;
        margin-bottom: 0px;
    }

    .ads-marketing-content>h1 {
        text-transform: uppercase;
        font-size: 3rem;
        font-weight: 700;
        line-height: 45px;
        margin-bottom: 1rem;
    }

    .ads-marketing-content>h1 span {
        color: #6cc3b0;
        font-weight: 700;
    }

    .ads-marketing-content>p:last-child {
        font-size: 0.9rem;
    }

    .ads-marketing-image {
        background-image: url(images/ads_marketing_woman.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 500px;
    }

    .call-now-image {
        background-image: url(images/call_now.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 100px;
        height: 100px;
        position: absolute;
        right: 0px;
        bottom: 50%;
        transform: translate(50%, 80%);
    }

    .shape-image {
        background-image: url(images/shape.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 120px;
        height: 120px;
        position: absolute;
        right: 0px;
        bottom: 60%;
        transform: translate(-140%, -50%);
    }
    </style>
    <style>
    @media only screen and (min-width: 300px) {
        .ads-marketing>.container {
            max-width: 100%;
        }
    }

    @media only screen and (max-width: 927px) {
        .shape-image {
            transform: translate(-80%, 20%);
        }
    }

    @media only screen and (max-width: 880px) {

        .ads-marketing>.container>.row>.col-sm-8,
        .ads-marketing>.container>.row>.col-sm-4 {
            width: 100%;
        }

        .ads-marketing-image {
            background-position: 0px 0px;
        }

        .ads-marketing-content {
            padding: 80px 0px
        }

        .shape-image {
            transform: translate(-30%, -50%);
        }

        .call-now-image {
            right: unset;
            bottom: 0;
            transform: translate(100%, 50%);
            left: 0;
        }
    }

    @media only screen and (max-width: 576px) {
        .shape-image {
            display: none;
        }

        .ads-marketing-content>h1 {
            font-size: revert;
            line-height: 1.2;
        }
    }

    @media only screen and (max-width: 400px) {
        .ads-marketing>.container>.row>.col-sm-8 {
            padding: 0px 10px;
        }
    }
    </style>
    <section class="ads-marketing" id="ads-marketing">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="ads-marketing-content">
                        <div class="ads-marketing-content-heading">
                            <img src="icons/megaphone.png" alt="megaphone">
                            <div>
                                <h5>Marketing Agency</h5>
                                <p>Let's Reach the world</p>
                            </div>
                        </div>
                        <h1><span>The best </span>creative marketing agency</h1>
                        <p>Contact us now and book a session!</p>
                        <p>
                            Websteers offers comprehensive ads marketing services that maximize your brand’s visibility
                            across various digital platforms. Utilizing powerful tools like Google Ads, Facebook Ads,
                            Instagram Ads, and LinkedIn Campaigns, we create targeted and data-driven ad strategies that
                            effectively reach your audience.
                            <!-- Our team focuses on optimizing ad spend, crafting
                            compelling creatives, and delivering measurable results that boost conversions and drive
                            growth. With Websteers, your ad campaigns are in expert hands, ensuring maximum ROI and
                            impactful engagement. -->
                        </p>
                    </div>
                    <div class="call-now-image"></div>
                    <div class="shape-image"></div>
                </div>
                <div class="col-sm-4">
                    <div class="ads-marketing-image"></div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
    include('widgets/footer.php');
?>