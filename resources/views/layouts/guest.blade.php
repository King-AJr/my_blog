<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from reiro.fueko.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:50:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reiro</title>
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet" href="/assets/my_css" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,350;0,9..144,680;1,9..144,350;1,9..144,680&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,350;0,9..144,680;1,9..144,350;1,9..144,680&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="assets/css/screen85ba.css?v=1924d1ca6a">

    <script>
        /* getContrast.js
                        		––––––––––––––––––––––––––––––––––––––––––––––––––––
                        		Website : vanillajstoolkit.com/helpers/getcontrast/
                        		Authors : Chris Ferdinandi & Brian Suda
                        		License : MIT
                        		–––––––––––––––––––––––––––––––––––––––––––––––––––– */
        function getContrast(t) {
            "use strict";
            return "#" === t.slice(0, 1) && (t = t.slice(1)), 3 === t.length && (t = t.split("").map(function(t) {
                return t + t
            }).join("")), (299 * parseInt(t.substr(0, 2), 16) + 587 * parseInt(t.substr(2, 2), 16) + 114 * parseInt(t
                .substr(4, 2), 16)) / 1000 >= 128 ? "no-white-text" : "is-white-text"
        }
    </script>
    <meta name="description"
        content="tech blog for every level of expertise" />
    <link rel="canonical" href="{{route('welcome')}}" />
    <meta name="referrer" content="no-referrer-when-downgrade" />

    <meta property="og:site_name" content="Reiro" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Reiro" />
    <meta property="og:description"
        content="A minimal, functional theme for running a paid-membership publication on Ghost." />
    <meta property="og:url" content="https://reiro.fueko.net/" />
    <meta property="og:image"
        content="https://reiro.fueko.net/content/images/2022/10/kim-daniels-P2qImp_Mr2Y-unsplash.jpg" />
    <meta property="article:publisher" content="https://www.facebook.com/ghost" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Reiro" />
    <meta name="twitter:description"
        content="A minimal, functional theme for running a paid-membership publication on Ghost." />
    <meta name="twitter:url" content="https://reiro.fueko.net/" />
    <meta name="twitter:image"
        content="https://reiro.fueko.net/content/images/2022/10/kim-daniels-P2qImp_Mr2Y-unsplash.jpg" />
    <meta name="twitter:site" content="@fuekothemes" />
    <meta property="og:image:width" content="1627" />
    <meta property="og:image:height" content="1082" />

    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "publisher": {
        "@type": "Organization",
        "name": "Reiro",
        "url": "https://reiro.fueko.net/",
        "logo": {
            "@type": "ImageObject",
            "url": "https://reiro.fueko.net/content/images/2022/10/reiro.svg"
        }
    },
    "url": "https://reiro.fueko.net/",
    "image": {
        "@type": "ImageObject",
        "url": "https://reiro.fueko.net/content/images/2022/10/kim-daniels-P2qImp_Mr2Y-unsplash.jpg",
        "width": 1627,
        "height": 1082
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://reiro.fueko.net/"
    },
    "description": "A minimal, functional theme for running a paid-membership publication on Ghost."
}
    </script>

    <meta name="generator" content="Ghost 5.22" />
    <script defer src="https://cdn.jsdelivr.net/ghost/portal@~2.19/umd/portal.min.js" data-ghost="https://reiro.fueko.net/"
        data-key="3d825fc0e10091ccd9cd5c1f35" data-api="https://reiro.fueko.net/ghost/api/content/" crossorigin="anonymous">
    </script>

    <script async src="https://js.stripe.com/v3/"></script>


    <script defer src="https://cdn.jsdelivr.net/ghost/sodo-search@~1.1/umd/sodo-search.min.js"
        data-key="3d825fc0e10091ccd9cd5c1f35" data-styles="https://cdn.jsdelivr.net/ghost/sodo-search@~1.1/umd/main.css"
        data-sodo-search="https://reiro.fueko.net/" crossorigin="anonymous"></script>
    <script defer src="public/cards.min85ba.js?v=1924d1ca6a"></script>
    <link rel="stylesheet" type="text/css" href="public/cards.min85ba.css?v=1924d1ca6a">
    <script defer src="public/comment-counts.min85ba.js?v=1924d1ca6a"
        data-ghost-comments-counts-api="https://reiro.fueko.net/members/api/comments/counts/"></script>
    <script defer src="public/member-attribution.min85ba.js?v=1924d1ca6a"></script>
    <script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js"
        id="ZwSg9rf6GA" async defer></script>

</head>


<body class="home-template">
    <script>
        ! function() {
            "use strict";
            const t = document.body,
                o = getComputedStyle(t).getPropertyValue("--ghost-accent-color").trim();
            o && t.classList.add(getContrast(o))
        }();
    </script>
    <div class="global-wrap">
        <div class="global-cover"
            style="background-image:url(content/images/size/w1600/2022/10/kim-daniels-P2qImp_Mr2Y-unsplash.jpg)"></div>

        <div class="global-content">
            <header class="header-section">
                <div class="header-wrap">
                    <div class="header-logo global-logo is-header"> <a href="{{route('welcome')}}" class="is-logo"><img
                                src="storage/images/logo.png" alt="king-aj"></a>
                    </div>
                    <div class="header-nav">
                        <span class="header-search search-open is-mobile" data-ghost-search><svg role="img"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.877 18.456l5.01 5.011c.208.197.484.308.771.308a1.118 1.118 0 00.809-1.888l-5.011-5.01c3.233-4.022 2.983-9.923-.746-13.654l-.291-.29a.403.403 0 00-.095-.075C13.307-.77 7.095-.649 3.223 3.223c-3.997 3.998-3.997 10.489 0 14.485 3.731 3.731 9.633 3.981 13.654.748zm-.784-13.617a7.96 7.96 0 010 11.254 7.961 7.961 0 01-11.253 0 7.96 7.96 0 010-11.254 7.961 7.961 0 0111.253 0z" />
                            </svg>
                        </span>
                        <input id="toggle" class="header-checkbox" type="checkbox">
                        <label class="header-toggle" for="toggle">
                            <span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </label>
                        <nav>
                            <ul>
                                @auth
                                @if (Auth::user()->role == 'user')
                                <li><a href="{{route('become_author')}}">Become an Author</a></li>
                                @endif
                                    @if (Auth::user()->role == 'admin')
                                        <li><a href="{{route('view_request')}}">Request</a></li>
                                        <li><a href="{{route('pending_articles')}}">Pending Articles</a></li>
                                    @endif
                                    @if (Auth::user()->role == 'writer' || Auth::user()->role == 'admin')
                                        <li><a href="{{route('add_article')}}">Add Article</a></li>
                                        <li><a href="{{route('drafts')}}">Draft</a></li>
                                    @endif
                                @endauth
                                <li><a href="{{route('view_contact')}}">Contact Us</a></li>
                            </ul>
                            <ul>
                                <li class="header-search search-open is-desktop" data-ghost-search><svg role="img"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m16.822 18.813 4.798 4.799c.262.248.61.388.972.388.772-.001 1.407-.637 1.407-1.409 0-.361-.139-.709-.387-.971l-4.799-4.797c3.132-4.108 2.822-10.005-.928-13.756l-.007-.007-.278-.278a.6985.6985 0 0 0-.13-.107C13.36-1.017 7.021-.888 3.066 3.067c-4.088 4.089-4.088 10.729 0 14.816 3.752 3.752 9.65 4.063 13.756.93Zm-.965-13.719c2.95 2.953 2.95 7.81 0 10.763-2.953 2.949-7.809 2.949-10.762 0-2.951-2.953-2.951-7.81 0-10.763 2.953-2.95 7.809-2.95 10.762 0Z" />
                                    </svg>
                                </li>
                                @auth
                                <li class="signin"><a href="{{ route('logout') }}">Sign out</a></li>
                                @endauth
                                @guest
                                    <li class="signin"><a href="{{ route('login') }}">Sign in</a></li>
                                @endguest

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>


            {{ $slot }}
            <footer class="footer-section global-footer">
                <div class="global-padding">
                    <small class="subscribe-form-subtitle global-subtitle">Newsletter</small>
                    <div class="subscribe-form global-radius">
                        <div class="global-dynamic-color">
                            <h3 class="subscribe-title">Get all the latest posts delivered straight to your inbox.</h3>
                        </div>
                        <div class="subscribe-wrap">
                            <form data-members-form="subscribe" data-members-autoredirect="false">
                                <input data-members-email type="email" placeholder="Your email address"
                                    aria-label="Your email address" required>
                                <button class="global-button no-color" type="submit">Subscribe</button>
                            </form>
                            <div class="subscribe-alert global-dynamic-color">
                                <span class="alert-loading global-alert">Processing your application</span>
                                <span class="alert-success global-alert">Please check your inbox and click the link to
                                    confirm your subscription.</span>
                                <span class="alert-error global-alert">There was an error sending the email</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-wrap global-padding">
                    <div class="footer-copyright">
                        &copy; <a href="{{route('welcome')}}">King-Aj's Blog</a> 2023.
                        Published by <a href="{{route('welcome')}}" target="_blank"
                            rel="noopener noreferrer">King-AJ's Empire</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="assets/js/global85ba.js?v=1924d1ca6a"></script>
    <script src="assets/js/index85ba.js?v=1924d1ca6a"></script>
    <script>
        ! function() {
            "use strict";
            const p = new URLSearchParams(window.location.search),
                isAction = p.has("action"),
                isStripe = p.has("stripe"),
                success = p.get("success"),
                action = p.get("action"),
                stripe = p.get("stripe"),
                n = document.getElementById("notifications"),
                a = "is-subscribe",
                b = "is-signin",
                c = "is-signup",
                f = "is-update-email",
                d = "is-expired",
                e = "is-checkout-success";
            p && (isAction && (action == "subscribe" && success == "true" && n.classList.add(a), action == "signup-paid" &&
                    success == "true" && n.classList.add(a), action == "signin" && success == "true" && n.classList.add(
                        b), action == "signup" && success == "true" && n.classList.add(c), action == "updateEmail" &&
                    success == "true" && n.classList.add(f), success == "false" && n.classList.add(d)), isStripe &&
                stripe == "success" && n.classList.add(e), (isAction || isStripe) && setTimeout(function() {
                    window.history.replaceState(null, null, window.location.pathname), n.classList.remove(a, b, c,
                        d, e, f)
                }, 5000))
        }();
    </script>

    <script>
        window.addEventListener("load", function() {
            var e = Array.prototype.slice.call(window.getComputedStyle(document.documentElement, "")).join("")
                .match(/-(moz|webkit|ms)-/)[1];
            if (console.log(e), "moz" === e) {
                const e = document.querySelector("input[data-members-email]");
                if (e) {
                    e.addEventListener("keyup", function(e, t) {
                        let s;
                        return (...o) => {
                            clearTimeout(s), s = setTimeout(function() {
                                e.apply(this, o)
                            }, t)
                        }
                    }(() => {
                        const t = e.value;

                        function s(e) {
                            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)
                        }
                        if (console.log(s(t)), !0 === s(t)) {
                            const e = document.querySelector("form button");
                            e.disabled = !0, new Promise((e, s) => {
                                console.log(t);
                                const o = JSON.stringify({
                                        email: t
                                    }),
                                    n = new XMLHttpRequest;
                                n.addEventListener("readystatechange", function() {
                                        this.readyState === this.DONE && (console.log(this
                                                .responseText), '{"status":"valid"}' ===
                                            this.responseText ? e() :
                                            '{"status":"role"}' === this.responseText ?
                                            e() : s())
                                    }), n.open("POST/index.html",
                                        "https://app.mailercheck.com/api/v1/check/single"), n
                                    .setRequestHeader("content-type", "application/json"), n
                                    .setRequestHeader("authorization",
                                        "Bearer adeea5d5-f96f-4eb9-8a29-fb6972d7189f"), n.send(
                                        o)
                            }).then(t => {
                                e.disabled = !1
                            }).catch(e => {})
                        }
                    }, 800))
                }
            } else {
                const e = document.querySelector("form[data-members-form]");
                if (e) {
                    const s = document.querySelector("form[data-members-form] button");
                    var t = s.cloneNode(!0);
                    t.classList.add("button-clone"), s.before(t), s.setAttribute("style", "display:none"), s
                        .disabled = !0, t.addEventListener("click", function() {
                            const o = document.querySelector("input[data-members-name]"),
                                n = document.querySelector("input[data-members-email]");
                            if (o)
                                if ("" == o.value || "" == n.value);
                                else {
                                    const e = n.value;

                                    function a(e) {
                                        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)
                                    }
                                    if (console.log(a(e)), !0 === a(e)) {
                                        t.classList.add("button-valid");
                                        var i = document.querySelector(".button-valid")
                                    }
                                } if (!o)
                                if ("" == n.value);
                                else {
                                    const e = n.value;

                                    function a(e) {
                                        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)
                                    }
                                    if (console.log(a(e)), !0 === a(e)) {
                                        t.classList.add("button-valid");
                                        i = document.querySelector(".button-valid")
                                    }
                                } if (i) {
                                e.classList.add("loading"), e.classList.remove("error"), (t.disabled = !0,
                                    new Promise((s, o) => {
                                        const a = n.value;
                                        console.log("Email validation:"), console.log(a);
                                        const i = JSON.stringify({
                                                email: a
                                            }),
                                            l = new XMLHttpRequest;
                                        l.addEventListener("readystatechange", function() {
                                                if (this.readyState === this.DONE)
                                                    if (console.log(this.responseText),
                                                        '{"status":"valid"}' === this
                                                        .responseText || '{"status":"role"}' ===
                                                        this.responseText) {
                                                        const e = console.log("Email is valid :)");
                                                        s(e)
                                                    } else {
                                                        e.classList.remove("loading"), e.classList
                                                            .add("error"), t.disabled = !1;
                                                        const s = console.log(
                                                            "Email is not valid!");
                                                        o(s)
                                                    }
                                            }), l.open("POST/index.html",
                                                "https://app.mailercheck.com/api/v1/check/single"), l
                                            .setRequestHeader("content-type", "application/json"), l
                                            .setRequestHeader("authorization",
                                                "Bearer adeea5d5-f96f-4eb9-8a29-fb6972d7189f"), l.send(
                                                i)
                                    })).then(e => {
                                    s.disabled = !1, s.click(), console.log("The form was sent")
                                })
                            }
                        })
                }
            }
        });
    </script>
</body>

<!-- Mirrored from reiro.fueko.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:51:20 GMT -->

</html>

{{-- </div>
        </div>
    </body>
</html> --}}
