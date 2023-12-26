<!-- Footer -->

<script>
    function filterFunctionone() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInputFilter");
        filter = input.value.toUpperCase();
        div = document.getElementById("mobrog-v1-myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }

</script>






<!-- Footer-Section start -->
<footer>
    <div class="top_footer" id="contact">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <!-- footer link 1 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="abt_side">
                        <div class="logo"><a class="navbar-brand" href="index.html"> <img src="web_assets/images/logo.png"
                                    alt="image"></a></div>
                      
                        
                    </div>
                </div>

                <!-- footer link 2 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            
                        </ul>
                    </div>
                </div>

                <!-- footer link 3 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="links">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#features">Features</a></li>
                            

                        </ul>
                    </div>
                </div>

                <!-- footer link 4 -->
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="links">
                        <h3>About Us</h3>
                        <p>Desire Wallet is dedicated to serve humanity by adding resources for people in need.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>

    <!-- last footer -->
    <div class="bottom_footer">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
            
                <div class="col-md-12 text-center">
                    <p>© Copyright 2023 By  <a href="index.php">desirewallet.online</a></p>
                </div>
                <div class="col-md-3">
                    <p class="developer_text">

                       



                    </p>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>

</footer>
<!-- Footer-Section end -->


<script>
    var selected_language = "en-US";
    if (selected_language == "de-DE") {
        selected_language = "de"
    }

    var elemented = document.querySelectorAll('[data-id="' + selected_language + '"]')[0];

    if (elemented) {
        document.querySelector(".mobrog-v1-selected-language").innerHTML = elemented.innerHTML + `  <img src="web_assets/images/language_selector_icon.png" alt="language-indicator-icon" width="14" height="14">`;
    } else {
        document.querySelector(".mobrog-v1-selected-language").innerHTML =
            `Select language <img src="web_assets/images/language_selector_icon.png" alt="language-indicator-icon" width="14" height="14">`;
    }

    if (document.getElementById("mobrog-current-year")) {
        document.getElementById("mobrog-current-year").innerHTML = new Date().getFullYear();
    }
</script>


<script src="web_assets/js/js2be0.html?fileid=inline-javascript.js"></script>

<script src="web_assets/js/selectLanguage.js"></script>

<script src="web_assets/js/script_Trustpilot.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="web_assets/css/styler.css">


<!-- Cookie Consent (--change nothing--) -->
<div class="mobrog-privacyM-first-container display-none" style="display: none!important;">
    <div class="mobrog-privacyM-first">
        <h1>Privacy Manager</h1>
        <p>This site
            uses several types of technical and functional Cookies. Your provide your consent using this interface
            in
            compliance with the corresponding legal basis (Art. 6 (1) a GDPR). Your choices regarding the use of
            Cookies
            are stored until January 1, 2030. You are free to revoke and reconfigure your choices using the "Privacy
            Manager" icon
            located at the middle-right side of the screen. The providers we use are located outside the EU,
            specifically in the USA. It is currently not possible to conclude data protection contracts with these
            providers that meet the requirements of the high European data protection standard. We would like to
            point
            out that when using these services, your data will be processed in the in the US, a third country that
            is
            insecure from a data protection perspective. In this context, there is a risk that your data may be
            processed by authorities located there for purposes of which we are not aware. Of such processing, you
            will
            normally not learn anything and you will not be able to use any active legal protection. If you consent
            to
            the use of one or more of these service providers, you consent to these transfers at the same time
            pursuant
            to Art. 49 (1) lit. a GDPR. You can revoke this consent at any time.
        </p>
        <div class="mobrog-privacyM-first-buttons">
            <button onclick="accept_all()" id="cookiesubmit1" class="mobrog-privacyM-allow"> <i
                    class="fa-solid fa-check"></i> Accept All</button>
            <button onclick="deny_all()" id="cookiedenyt1" class="mobrog-privacyM-decline"><i
                    class="fa-solid fa-xmark"></i> Decline
                All</button>
            <button class="mobrog-privacyM-menage" id="mobrog-privacyM-menageCookies">Manage Cookies</button>
        </div>
    </div>
</div>


<!-- Div to show more info (--change nothing--) -->
<div class="mobrog-privacy-moreInfo-container display-none" style="display: none!important;">
    <div class="mobrog-privacy-moreInfo-close-div">
        <span class="mobrog-privacy-moreInfo-close"><i class="fa-solid fa-circle-arrow-left"></i></span>
    </div>
    <div class="mobrog-privacy-moreInfo-div">
    </div>
</div>



<!-- All Items (you can add new list item) -->
<div class="mobrog-privacyM display-none" style="display: none!important;">
    <div class="mobrog-privacyM-back">
        <span class="mobrog-privacyM-back-button"><i class="fa-solid fa-angles-left"></i></span>
    </div>
    <div class="mobrog-privacyM-container">
        <div class="mobrog-privacyM-items-info">
            <div class="mobrog-privacyM-items-div">
                <div class="mobrog-privacyM-items">
                    <div class="mobrog-privacyM-items-list">

                        <!-- Coppy start (change all "item1")-->
                        <div class="mobrog-privacyM-checkBox-item">
                            <input id="chnecessary" type="checkbox" checked="true" disabled>
                            <div class="mobrog-privacyM-items-click" name="item1">
                                Necessary Cookies <i class="fa-solid fa-angles-right"></i></div>
                        </div>
                        <div class="mobrog-privacyM-content-info-show">
                            <div class="mobrog-privacyM-content-info item1 display-none"></div>
                        </div>
                        <!-- Coppy end-->

                        <div class="mobrog-privacyM-checkBox-item">
                            <input type="checkbox" id="chadpushup">
                            <div class="mobrog-privacyM-items-click" name="item2">AdPushup <i
                                    class="fa-solid fa-angles-right"></i>
                            </div>
                        </div>
                        <div class="mobrog-privacyM-content-info-show">
                            <div class="mobrog-privacyM-content-info item2 display-none"></div>
                        </div>


                        <div class="mobrog-privacyM-checkBox-item">
                            <input type="checkbox" id="chgoogle">
                            <div class="mobrog-privacyM-items-click" name="item3"> Google Analytics <i
                                    class="fa-solid fa-angles-right"></i>
                            </div>
                        </div>
                        <div class="mobrog-privacyM-content-info-show">
                            <div class="mobrog-privacyM-content-info item3 display-none"></div>
                        </div>


                        <div class="mobrog-privacyM-checkBox-item">
                            <input type="checkbox" id="chbing">
                            <div class="mobrog-privacyM-items-click" name="item4">Microsoft Advertising <i
                                    class="fa-solid fa-angles-right"></i>
                            </div>
                        </div>
                        <div class="mobrog-privacyM-content-info-show">
                            <div class="mobrog-privacyM-content-info item4 display-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobrog-privacyM-info"></div>
        </div>
    </div>
    <div class="mobrog-privacyM-buttons-container">
        <button onclick="accept_all()" id="cookiesubmit2" class="mobrog-privacyM-allow"><i
                class="fa-solid fa-check"></i> Accept All</button>
        <button onclick="deny_all()" id="cookiedenyt2" class="mobrog-privacyM-decline"><i class="fa-solid fa-xmark"></i>
            Decline
            All</button>
        <button onclick="accept_selected()" id="cookieselected" class="mobrog-privacyM-accept-seleced">Accept
            Selected Options</button>
    </div>
</div>



<!-- All contents (you can add new contents) -->
<div class="display-none" style="display: none!important;">

    <!-- Coppy start (change all "item1"(should be the same with content class) and "moreInfo1"(should be the same with moreInfoContent class))-->
    <div class="mobrog-privacyM-info-content item1">
        <div class="mobrog-privacyM-viewDatails">
            <button class="mobrog-privacyM-viewDatails-link moreInfo1"> View Details </button>
        </div>
        <h3><i class="fa-solid fa-cookie-bite"></i> Necessary Cookies</h3>
        <p> Necessary cookies required for our site to function properly. These
            include Cookies that allow us to ensure security and quality of our service. By using our services,
            you accept our <a href="https://surveybello.com/en-US/terms-and-conditions/"
                class="mobrog-privacyM-info-content-a" target="_blank">Terms of Use</a>
            and
            <a class="mobrog-privacyM-info-content-a" target="_blank"
                href="https://surveybello.com/en-US/privacy-policy/">Privacy
                Policy</a>.
        </p>
    </div>
    <!-- Coppy end-->


    <div class="mobrog-privacyM-info-content item2">
        <div class="mobrog-privacyM-viewDatails">
            <button class="mobrog-privacyM-viewDatails-link moreInfo2"> View Details </button>
        </div>
        <h3><i class="fa-solid fa-file"></i> AdPushup</h3>
        <p> We use AdPushup to serve relevant ads to visitors on our web pages. Read more
            regarding AdPushup's terms of service and privacy policy at <a class="mobrog-privacyM-info-content-a"
                target="_blank" href="https://www.adpushup.com/terms-of-service/">this link</a>.</p>

    </div>
    <div class="mobrog-privacyM-info-content item3">
        <div class="mobrog-privacyM-viewDatails">
            <button class="mobrog-privacyM-viewDatails-link moreInfo3"> View Details </button>
        </div>
        <h3><i class="fa-solid fa-chart-mixed"></i> Google Analytics</h3>
        <p>We use Google Analytics, a service by Google, to gather statistics regarding the visitors to our web
            portals. Read more regarding this service in <a target="_blank" class="mobrog-privacyM-info-content-a"
                href="https://policies.google.com/technologies/partner-sites">Google’s Terms of Use</a>.</p>

    </div>
    <div class="mobrog-privacyM-info-content item4">
        <div class="mobrog-privacyM-viewDatails">
            <button class="mobrog-privacyM-viewDatails-link moreInfo4"> View Details </button>
        </div>
        <h3><i class="fa-solid fa-file"></i> Microsoft Advertising</h3>
        <p>We use Microsoft Advertising to gather statistics regarding the number of visitors who are directed to
            our service via our display ads placed on the Bing search engine. Read more regarding this service in
            <a target="_blank" class="mobrog-privacyM-info-content-a"
                href="https://about.ads.microsoft.com/en-us/resources/policies/microsoft-advertising-agreement">Bing’s
                Terms of Use</a>.
        </p>

    </div>
</div>



<!-- More info contents (you can add new more info contents) -->
<div class="display-none" style="display: none!important;">
    <!-- Coppy start (change all "moreInfo1"(should be the same with moreInfoContent class))-->
    <div class="mobrog-privacy-moreInfo-container-info moreInfo1">
        <div class="mobrog-privacy-moreInfo">
            <h2>Necessary Cookies</h2>
            <div class="mobrog-privacy-moreInfo-list">
                <p>Personally identifiable information is only collected directly from the user upon our voluntary
                    registration process. In addition to the user-specific parameters required upon registration,
                    several details are store collectively as a result of users’ interactions with our website. The
                    collective data is never linked back to individual users. Collective data is transmitted to us
                    through our use of first-party Cookies and data logs. This data is then stored for the purposes
                    of (1) analyzing user behavior, and (2) fraud prevention. The data collected in the context of
                    necessary Cookies, is neither transmitted to third-party services nor stored in storage sites
                    operated by organizations other than SURVEYBELLO. Read about what data we store and how the data is
                    processed at <a href="https://surveybello.com/en-US/privacy-policy/">this link</a>. Your data is
                    also terminated from
                    our storage sites in
                    compliance with
                    our <a href="https://surveybello.com/en-US/terms-and-conditions/">terms and conditions of use</a>
                    when you choose to delete
                    your account. </p>
            </div>

        </div>
    </div>
    <!-- Coppy end-->

    <div class="mobrog-privacy-moreInfo-container-info moreInfo2">
        <div class="mobrog-privacy-moreInfo">
            <h2>AdPushup</h2>
            <div class="mobrog-privacy-moreInfo-list">
                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>Which data is stored by SURVEYBELLO?</b>
                    <p>No information is stored by SURVEYBELLO.</p>
                </div>


                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>What data does AdPushup collect?</b>
                    <p>AdPushup collects data through their partners by embedding code on their partners’
                        websites. When you use our service or if you visit SURVEYBELLO, your browser may send
                        AdPushup certain information about you as described below:</p>
                    <p>AdPushup utilizes technologies such as Cookies, beacons, tags and scripts designed by
                        Zelto, Inc. and their partners (such as advertising, marketing and analytics),
                        affiliates, or analytics or service providers. AdPushup may receive reports based on the
                        use of these technologies by these companies on an individual as well as aggregated
                        basis. AdPushup’s partners may also use such technologies to deliver advertisements to
                        you. Upon using AdPushup on partner websites, including SURVEYBELLO, your browser may send
                        log files to AdPushup or their advertisement partners. These log files may include
                        information such as your (1) web request, (2) Internet Protocol (“IP”) address, (3)
                        browser type, (4) referring / exit pages and URLs, (5) number of clicks, (6) domain
                        names, (7) landing pages, (8) pages viewed, and other such information. AdPushup and
                        their respective partners do not link this automatically-collected data to personally
                        identifiable information. </p>
                </div>


                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>For what purpose are the Cookies set?</b>
                    <p>AdPushup uses cookies to remember users’ settings, authentication, preferences and
                        analytics. The data collected from AdPushup’s partner websites (ad publishers) including
                        the data sent through SURVEYBELLO are used to analyze usage of the respective websites in
                        assessing trends, administering the site, tracking users’ movements around the site and
                        to gather Desire Walletgraphic information about our user base as a whole. Read more about how
                        and what data is processed by AdPushup at <a
                            href="https://www.adpushup.com/privacy-policy/">this link</a>.</p>
                </div>

                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>AdPushup in combination with Google Fonts</b>
                    <p>Google Fonts is loaded in combination with AdPushUp. Google Fonts can therefore not be disabled.
                        Google Fonts will not be loaded if the entire AdPushup service is disabled.
                        We use Google Fonts from Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Ireland,
                        as a service to provide fonts for our online offering.
                        To obtain these fonts, you connect to servers of Google Ireland Limited, whereby your IP address
                        is transmitted. This processing takes place based on your consent.
                        The concrete storage period of the processed data cannot be influenced by us, but is determined
                        by Google Ireland Limited. Further information can be found in the privacy policy for
                        Google Fonts: <a
                            href="https://policies.google.com/privacy">https://policies.google.com/privacy</a>.</p>
                </div>

                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>What is the exact list of partners that AdPushup sends data to? </b>
                    <p>AdPushup has an extensive list of partners that can potentially benefit from collecting your
                        data. Therefore, when you browse through our website, some of these partners are chosen by
                        AdPushup to display ads and potentially collection data regarding your behavior on our website.
                        The full list of these partners and their domains are listed <a href="#">here</a>.</p>
                </div>


            </div>
        </div>
    </div>

    <div class="mobrog-privacy-moreInfo-container-info moreInfo3">
        <div class="mobrog-privacy-moreInfo">
            <h2>Google Analytics</h2>
            <div class="mobrog-privacy-moreInfo-list">
                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>Which data is stored by SURVEYBELLO?</b>
                    <p>No information is stored by SURVEYBELLO.</p>
                </div>

                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>What data does Google Analytics collect?</b>
                    <p>Google Analytics collects the following information through the default implementation:
                    </p>
                    <ul>
                        <li>Number of users visiting the website</li>
                        <li>Session statistics</li>
                        <li>Approximate geolocation of users</li>
                        <li>Browser and device information</li>
                    </ul>
                    <p>See a full list of the default <a
                            href="https://support.google.com/firebase/answer/9234069?visit_id=637968507432194410-147402315&amp;rd=1">events</a>
                        and <a
                            href="https://support.google.com/firebase/answer/9268042?visit_id=637968507432194410-147402315&amp;rd=1">user
                            properties</a>
                        collected by
                        Google Analytics.
                    </p>
                </div>


                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>For what purpose are the Cookies set?</b>
                    <p>Google Analytics sets Cookies to help our business identify trends and patterns in how
                        visitors engage with our website. Features enable data collection, analysis, monitoring,
                        visualization, reporting of user behavior.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="mobrog-privacy-moreInfo-container-info moreInfo4">
        <div class="mobrog-privacy-moreInfo">
            <h2>Microsoft Advertising</h2>
            <div class="mobrog-privacy-moreInfo-list">
                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>Which data is stored by SURVEYBELLO?</b>
                    <p>No information is stored by SURVEYBELLO.</p>
                </div>


                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>What data does Microsoft receive?</b>
                    <p>You can read exactly what data is collected by Microsoft and how this data is processed at <a
                            href="https://privacy.microsoft.com/en-us/privacystatement">this link</a>. </p>
                </div>


                <div class="mobrog-privacy-moreInfo-list-question">
                    <b>For what purpose are the Cookies set?</b>
                    <p>Here at SURVEYBELLO, we use Microsoft Advertising as a third-party advertising suite to help us
                        perform the following tasks:</p>
                    <ul>
                        <li>Track the number of users who register on our platform after discovering us on Bing,
                            Microsoft’s own search engine.</li>
                        <li>Identify which pages are viewed by users before they register for our service.</li>
                    </ul>
                    <p>Microsoft on the other hand, uses their collected data to provide you with rich, interactive
                        experiences. In particular, they use data to:</p>
                    <ul>
                        <li>Provide their various products, which include updating, securing, and troubleshooting,
                            as well as providing support. It also includes sharing data, when it is required to
                            provide the service or carry out the transactions users request.</li>
                        <li>Improve and develop their products.</li>
                        <li>Personalize their products and make recommendations.</li>
                        <li>Advertise and market to you, which includes sending promotional communications,
                            targeting advertising, and presenting you with relevant offers.</li>
                    </ul>
                    <p>They also use the data to operate their business, which includes analyzing their own
                        performance, meeting their own legal obligations, in addition to developing workforce, and
                        doing research.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobrog-privacyM-button-openCookie" style="display: none;">
    <img onclick="cookie_ui_reset()" id="openCookie" src="web_assets/images/privacy-manager-button_new.png" alt="">
</div>







<!-- COOKIE POP-UP  -->
<script src="web_assets/js/js9761.html?fileid=pm4-script.js"></script>
<script src="web_assets/js/js20c3.html?fileid=privacy-manager.js"></script>
<!-- END OF COOKIE POP-UP -->


<!-- bootstrap-js-Link -->
<script src="web_assets/js/navigation.js"></script>
<!-- bootstrap-js-Link -->
<script src="web_assets/js/bootstrap.min.js"></script>
<!-- main-js-Link -->
<script src="web_assets/js/main.js"></script>

</body>

<!-- Mirrored from surveybello.com/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 06:17:20 GMT -->

</html>