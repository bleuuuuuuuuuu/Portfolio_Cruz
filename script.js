document.addEventListener("DOMContentLoaded", function () {

    // Mobile menu
    var menuBtn = document.getElementById("menuBtn");
    var navLinks = document.getElementById("navLinks");

    function closeMenu() {
        navLinks.classList.remove("open");
        menuBtn.setAttribute("aria-expanded", "false");
        menuBtn.innerHTML = "&#9776;";
    }

    menuBtn.addEventListener("click", function () {
        var isOpen = navLinks.classList.toggle("open");
        menuBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        menuBtn.innerHTML = isOpen ? "&#10005;" : "&#9776;";
    });

    navLinks.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", closeMenu);
    });

    // Navbar and scroll
    var navbar = document.getElementById("navbar");
    var toTop = document.getElementById("toTop");
    var sections = document.querySelectorAll("main section[id]");
    var links = navLinks.querySelectorAll("a");

    function onScroll() {
        var y = window.scrollY;
        navbar.classList.toggle("scrolled", y > 20);
        toTop.classList.toggle("show", y > 500);

        var current = "home";
        sections.forEach(function (sec) {
            if (y >= sec.offsetTop - 120) current = sec.id;
        });
        links.forEach(function (a) {
            a.classList.toggle("active", a.getAttribute("href") === "#" + current);
        });
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    toTop.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    // Scroll reveal
    var revealEls = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        revealEls.forEach(function (el) { observer.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add("visible"); });
    }

    // Project filter
    var filterBtns = document.querySelectorAll(".filter");
    var cards = document.querySelectorAll(".project-card");

    filterBtns.forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterBtns.forEach(function (b) { b.classList.remove("active"); });
            btn.classList.add("active");
            var f = btn.getAttribute("data-filter");
            cards.forEach(function (card) {
                var show = (f === "all" || card.getAttribute("data-category") === f);
                card.classList.toggle("hide", !show);
            });
        });
    });

    // Lightbox
    var lightbox = document.getElementById("lightbox");
    var lbImg = document.getElementById("lightboxImg");
    var lbCaption = document.getElementById("lightboxCaption");
    var lbClose = document.getElementById("lightboxClose");
    var lastFocus = null;

    function openLightbox(src, caption) {
        lastFocus = document.activeElement;
        lbImg.src = src;
        lbImg.alt = caption || "";
        lbCaption.textContent = caption || "";
        lightbox.classList.add("open");
        lightbox.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        lbClose.focus();
    }

    function closeLightbox() {
        lightbox.classList.remove("open");
        lightbox.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
        if (lastFocus) lastFocus.focus();
    }

    document.querySelectorAll(".lightbox-trigger").forEach(function (el) {
        el.addEventListener("click", function () {
            openLightbox(el.getAttribute("data-src"), el.getAttribute("data-caption"));
        });
        el.addEventListener("keydown", function (e) {
            if (e.key === "Enter") el.click();
        });
    });

    lbClose.addEventListener("click", closeLightbox);
    lightbox.addEventListener("click", function (e) {
        if (e.target === lightbox) closeLightbox();
    });
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && lightbox.classList.contains("open")) closeLightbox();
    });
});