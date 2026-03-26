import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";
Alpine.plugin(intersect);
window.Alpine = Alpine;

// ── Preloader ────────────────────────────────────────────────────
function initPreloader() {
    const loader = document.getElementById("preloader");
    if (!loader) return;
    window.addEventListener("load", () => {
        setTimeout(() => {
            loader.classList.add("fade-out");
            setTimeout(() => {
                loader.style.display = "none";
            }, 700);
        }, 1800);
    });
}

// ── Scroll Progress ──────────────────────────────────────────────
function initScrollProgress() {
    const bar = document.getElementById("scroll-progress");
    if (!bar) return;
    window.addEventListener(
        "scroll",
        () => {
            const total =
                document.documentElement.scrollHeight - window.innerHeight;
            bar.style.width =
                Math.min((window.scrollY / total) * 100, 100) + "%";
        },
        { passive: true },
    );
}

// ── Custom Cursor Glow ───────────────────────────────────────────
function initCursorGlow() {
    const cursor = document.getElementById("cursor-glow");
    if (!cursor || window.innerWidth < 768) return;
    let mouseX = 0,
        mouseY = 0,
        curX = 0,
        curY = 0;
    document.addEventListener("mousemove", (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });
    const animate = () => {
        curX += (mouseX - curX) * 0.12;
        curY += (mouseY - curY) * 0.12;
        cursor.style.left = curX + "px";
        cursor.style.top = curY + "px";
        requestAnimationFrame(animate);
    };
    animate();
    document
        .querySelectorAll("a, button, .service-card, .portfolio-card, .card")
        .forEach((el) => {
            el.addEventListener("mouseenter", () =>
                cursor.classList.add("expand"),
            );
            el.addEventListener("mouseleave", () =>
                cursor.classList.remove("expand"),
            );
        });
    document.addEventListener("mouseleave", () => (cursor.style.opacity = "0"));
    document.addEventListener("mouseenter", () => (cursor.style.opacity = "1"));
}

// ── Navbar Scroll + Scroll Spy ───────────────────────────────────
function initNavbar() {
    const navbar = document.querySelector(".navbar");
    if (!navbar) return;

    // Scroll state
    window.addEventListener(
        "scroll",
        () => {
            navbar.classList.toggle("scrolled", window.scrollY > 50);
            runScrollSpy();
        },
        { passive: true },
    );

    // Scroll spy — highlights active nav link based on visible section
    const sections = document.querySelectorAll("section[data-nav]");
    const navLinks = document.querySelectorAll(".nav-links a[data-nav]");

    function runScrollSpy() {
        if (!sections.length || !navLinks.length) return;
        let current = "";
        sections.forEach((sec) => {
            const top = sec.getBoundingClientRect().top;
            if (top <= 120) current = sec.getAttribute("data-nav");
        });
        navLinks.forEach((link) => {
            link.classList.toggle(
                "active",
                link.getAttribute("data-nav") === current,
            );
        });
    }
}

// ── Page Transition ──────────────────────────────────────────────
function initPageTransitions() {
    const overlay = document.getElementById("page-transition");
    if (!overlay) return;
    overlay.classList.add("active");
    setTimeout(() => overlay.classList.remove("active"), 100);
    document.querySelectorAll("a[href]").forEach((link) => {
        const href = link.getAttribute("href");
        if (
            !href ||
            href.startsWith("#") ||
            href.startsWith("mailto") ||
            href.startsWith("tel") ||
            link.target === "_blank"
        )
            return;
        link.addEventListener("click", (e) => {
            e.preventDefault();
            overlay.classList.add("active");
            setTimeout(() => {
                window.location.href = href;
            }, 450);
        });
    });
}

// ── Scroll Reveal ────────────────────────────────────────────────
function initReveal() {
    const els = document.querySelectorAll(".reveal");
    if (!els.length) return;
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08, rootMargin: "0px 0px -30px 0px" },
    );
    els.forEach((el) => observer.observe(el));
}

// ── Animated Counters ────────────────────────────────────────────
function initCounters() {
    const counters = document.querySelectorAll("[data-counter]");
    if (!counters.length) return;
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseInt(el.dataset.counter, 10);
                const suffix = el.dataset.suffix || "";
                let current = 0;
                const step = target / (2000 / 16);
                const timer = setInterval(() => {
                    current = Math.min(current + step, target);
                    el.textContent = Math.floor(current) + suffix;
                    if (current >= target) clearInterval(timer);
                }, 16);
                observer.unobserve(el);
            });
        },
        { threshold: 0.5 },
    );
    counters.forEach((el) => observer.observe(el));
}

// ── Testimonials Slider ──────────────────────────────────────────
function initTestimonials() {
    const wrapper = document.querySelector(".testimonials-wrapper");
    const track = document.querySelector(".testimonials-track");
    const cards = document.querySelectorAll(".testimonial-card");
    if (!track || cards.length < 2) return;
    let index = 0;
    const visible =
        window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    function slide() {
        const max = Math.max(0, cards.length - visible);
        index = index + 1 > max ? 0 : index + 1;
        track.style.transform =
            "translateX(-" + index * (cards[0].offsetWidth + 24) + "px)";
    }
    let timer = setInterval(slide, 4000);
    if (wrapper) {
        wrapper.addEventListener("mouseenter", () => clearInterval(timer));
        wrapper.addEventListener("mouseleave", () => {
            timer = setInterval(slide, 4000);
        });
    }
}

// ── Service Accordion ────────────────────────────────────────────
function initServiceAccordion() {
    document.querySelectorAll(".service-header").forEach((header) => {
        header.addEventListener("click", () => {
            const body = header
                .closest(".service-full-card")
                .querySelector(".service-body");
            const chev = header.querySelector(".service-chevron");
            const isOpen = body.classList.contains("open");
            document
                .querySelectorAll(".service-body.open")
                .forEach((b) => b.classList.remove("open"));
            document
                .querySelectorAll(".service-chevron.open")
                .forEach((c) => c.classList.remove("open"));
            if (!isOpen) {
                body.classList.add("open");
                if (chev) chev.classList.add("open");
            }
        });
    });
}

// ── Mobile Menu ──────────────────────────────────────────────────
function initMobileMenu() {
    const btn = document.querySelector(".hamburger");
    const menu = document.querySelector(".nav-links");
    if (!btn || !menu) return;
    let open = false;
    btn.addEventListener("click", () => {
        open = !open;
        if (open) {
            menu.style.cssText =
                "display:flex;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:rgba(12,9,6,0.97);padding:1.5rem 2rem;border-bottom:1px solid rgba(201,144,26,0.2);backdrop-filter:blur(20px);gap:1.5rem;z-index:499;";
        } else {
            menu.style.cssText = "";
        }
        btn.setAttribute("aria-expanded", open);
    });
}

// ── Toast Notification ───────────────────────────────────────────
function initToast() {
    const toast = document.getElementById("form-toast");
    if (!toast) return;
    setTimeout(() => toast.classList.add("toast-visible"), 200);
    setTimeout(() => toast.classList.remove("toast-visible"), 5000);
}

// ── Marquee pause on hover ────────────────────────────────────────
function initMarquee() {
    const track = document.querySelector(".marquee-track");
    if (!track) return;
    track.addEventListener(
        "mouseenter",
        () => (track.style.animationPlayState = "paused"),
    );
    track.addEventListener(
        "mouseleave",
        () => (track.style.animationPlayState = "running"),
    );
}

// ── Init ─────────────────────────────────────────────────────────
document.addEventListener("DOMContentLoaded", () => {
    initPreloader();
    initScrollProgress();
    initCursorGlow();
    initNavbar();
    initPageTransitions();
    initReveal();
    initCounters();
    initTestimonials();
    initServiceAccordion();
    initMobileMenu();
    initToast();
    initMarquee();
});

Alpine.start();
