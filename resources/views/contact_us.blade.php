<x-app-layout>
    <body class="page-template page-contact custom-page">
        <script>!function () { "use strict"; const t = document.body, o = getComputedStyle(t).getPropertyValue("--ghost-accent-color").trim(); o && t.classList.add(getContrast(o)) }();</script>
        <div class="custom-wrap">
            <div class="custom-container">
                <div class="custom-logo-wrap">
                    <div class="custom-logo global-logo is-header"> <a href="{{route('welcome')}}" class="is-logo"><img
                                src="../content/images/2022/10/reiro.svg" alt="Reiro home"></a>
                    </div>
                </div>
                <div class="custom-content">
                    <form method="POST" action="{{route('contact_form')}}">@csrf
                        <h1 class="custom-title">Contact us</h1>
                        <input type="text" name="name" placeholder="Your name" aria-label="Your name" required
                        @if (Auth::check())
                            value="{{Auth::user()->name}}" style="display: none;"
                        @endif>
                        <input type="email" name="email" placeholder="Your email address" aria-label="Your email address"
                            required
                            @if (Auth::check())
                            value="{{Auth::user()->email}}" style="display:  none;"
                        @endif>
                        <textarea name="message" placeholder="Your message" aria-label="Your message" required></textarea>
                        <button class="global-button" type="submit">Send message</button>
                    </form>
                </div>
            </div>
            <div class="custom-image global-bg-image"
                style="background-image: url(../content/images/2022/10/uby-yanes-KY01qp6xKlQ-unsplash.jpg)"></div>
        </div>

        <script>window.addEventListener("load", function () { var e = Array.prototype.slice.call(window.getComputedStyle(document.documentElement, "")).join("").match(/-(moz|webkit|ms)-/)[1]; if (console.log(e), "moz" === e) { const e = document.querySelector("input[data-members-email]"); if (e) { e.addEventListener("keyup", function (e, t) { let s; return (...o) => { clearTimeout(s), s = setTimeout(function () { e.apply(this, o) }, t) } }(() => { const t = e.value; function s(e) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e) } if (console.log(s(t)), !0 === s(t)) { const e = document.querySelector("form button"); e.disabled = !0, new Promise((e, s) => { console.log(t); const o = JSON.stringify({ email: t }), n = new XMLHttpRequest; n.addEventListener("readystatechange", function () { this.readyState === this.DONE && (console.log(this.responseText), '{"status":"valid"}' === this.responseText ? e() : '{"status":"role"}' === this.responseText ? e() : s()) }), n.open("POST/index.html", "https://app.mailercheck.com/api/v1/check/single"), n.setRequestHeader("content-type", "application/json"), n.setRequestHeader("authorization", "Bearer adeea5d5-f96f-4eb9-8a29-fb6972d7189f"), n.send(o) }).then(t => { e.disabled = !1 }).catch(e => { }) } }, 800)) } } else { const e = document.querySelector("form[data-members-form]"); if (e) { const s = document.querySelector("form[data-members-form] button"); var t = s.cloneNode(!0); t.classList.add("button-clone"), s.before(t), s.setAttribute("style", "display:none"), s.disabled = !0, t.addEventListener("click", function () { const o = document.querySelector("input[data-members-name]"), n = document.querySelector("input[data-members-email]"); if (o) if ("" == o.value || "" == n.value); else { const e = n.value; function a(e) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e) } if (console.log(a(e)), !0 === a(e)) { t.classList.add("button-valid"); var i = document.querySelector(".button-valid") } } if (!o) if ("" == n.value); else { const e = n.value; function a(e) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e) } if (console.log(a(e)), !0 === a(e)) { t.classList.add("button-valid"); i = document.querySelector(".button-valid") } } if (i) { e.classList.add("loading"), e.classList.remove("error"), (t.disabled = !0, new Promise((s, o) => { const a = n.value; console.log("Email validation:"), console.log(a); const i = JSON.stringify({ email: a }), l = new XMLHttpRequest; l.addEventListener("readystatechange", function () { if (this.readyState === this.DONE) if (console.log(this.responseText), '{"status":"valid"}' === this.responseText || '{"status":"role"}' === this.responseText) { const e = console.log("Email is valid :)"); s(e) } else { e.classList.remove("loading"), e.classList.add("error"), t.disabled = !1; const s = console.log("Email is not valid!"); o(s) } }), l.open("POST/index.html", "https://app.mailercheck.com/api/v1/check/single"), l.setRequestHeader("content-type", "application/json"), l.setRequestHeader("authorization", "Bearer adeea5d5-f96f-4eb9-8a29-fb6972d7189f"), l.send(i) })).then(e => { s.disabled = !1, s.click(), console.log("The form was sent") }) } }) } } });</script>
        <script>!function () { window.onscroll = (event) => { let a = document.createElement("a"); a.innerHTML = "See all Themes \u2192", a.setAttribute("class", "is-banner"), a.href = "https://fueko.net/themes/", a.target = "_blank", a.rel = "noopener", document.body.appendChild(a), window.onscroll = function (a) { n = document.body, window.innerHeight + window.scrollY >= document.body.offsetHeight ? n.classList.add("is-scroll-banner") : n.classList.remove("is-scroll-banner") } } }();</script>
    </body>
</x-app-layout>
{{--  --}}
