<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

html {
    scroll-behavior: smooth;
}


body {
    line-height: 1.6;
    color: #222;
    scroll-behavior: smooth;
    width: 100%;
    overflow-x: hidden;
}

/* Navbar */
header {
    background: white;
    /*padding: 5px 15px;*/
    padding: 8px 18px;
    position: relative;
    top: 0;
    z-index: 500;
    /*height: 55px;*/
    height: 64px;
    display: flex;
    align-items: center;
}

.navbar {
    /*display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;*/
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.navbar .logo {
    color: white;
    font-weight: bold;
}

.inter-adi {
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
}

.navbar .logo img {
    max-height: 50px;
    width: auto;
    display: block;
}

.navbar ul {
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 45px;
}

.navbar ul li a {
  /*  color: black;
    font-weight: 100;
    text-decoration: none;*/
    color: #111;
    font-weight: 500;
    text-decoration: none;
    padding: 6px 4px;
    line-height: 1;
    font-family: "Inter", sans-serif;
}

.nav-cta {
    border: 1px solid #1E40AF;
    border-radius: 10px;
    color: #1E40AF;
}

.nav-cta-one {
    font-weight: bold;
    color: #1E40AF;
}

/* Hero */
.hero {
    position: relative;
    /* leave space for fixed header */
    padding-top: 64px;
    min-height: calc(100vh - 64px);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    overflow: hidden;
}

/* optional dark overlay for legibility */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(2, 8, 23, 0.45) 0%, rgba(2, 8, 23, 0.55) 100%);
    pointer-events: none;
    z-index: 1;
}

/* inner content centered and constrained */
.hero-inner {
    position: relative;
    z-index: 2;
    width: min(1100px, 92%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    padding: 40px 20px;
}

/* big responsive title with exact centering & spacing */
.hero-inner h1 {
    margin: 0;
    font-weight: 700;
    line-height: 1.05;
    /* responsive font size, clamps from 28px to 72px */
    font-size: clamp(2.6rem, 6vw, 4.5rem);
    /* ~42px — 72px */
    letter-spacing: -0.02em;
    text-wrap: balance;
}


/*.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 13px;
}*/



/* subtitle narrower, controlled width and readable */
.hero-sub {
    max-width: 850px;
    font-size: clamp(0.95rem, 1.6vw, 1.125rem);
    color: rgba(255, 255, 255, 0.92);
    margin-top: 6px;
    margin-bottom: 6px;
    line-height: 1.5;
}


.btn-group {
    margin-top: 24px;
    display: flex;
    gap: 16px;
    align-items: center;
    justify-content: center;
}

.btn {
     padding: 12px 22px;
    margin: 0;
    border-radius: 999px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: transform 140ms ease, box-shadow 140ms ease, opacity 140ms ease;
}

.btn-primary {
    background: #2d77f2;
    color: #fff;
    border: 2px solid rgba(0, 0, 0, 0.03);
    box-shadow: 0 10px 24px rgba(45, 119, 242, 0.18);
}

.btn-secondary {
    background: #fff;
    color: #000;
    border-radius: 8px;
}

.btn:hover {
    transform: translateY(-3px);
}

.btn-secondary:hover {
    opacity: 0.95;
}

/* ---------- Responsive ---------- */
@media (max-width: 980px) {
    .hero-inner {
        padding: 36px 18px;
    }

    .hero-inner h1 {
        font-size: clamp(2.3rem, 7.2vw, 3.6rem);
    }

    .nav-cta {
        padding: 7px 14px;
    }

    header {
        height: 60px;
        padding: 8px 14px;
    }
}

/* mobile: stack nav (keep your existing mobile rules, but ensure CTA still visible) */
/*@media (max-width: 768px) {
    .navbar {
        padding: 0 6px;
    }

    .navbar ul {
        display: none;
        
    }

  
    .nav-links {
        display: flex;
        flex-direction: column;
        gap: 8px;
        background: #fff;
        padding: 12px;
        border-radius: 8px;
    }

    .nav-cta {
        width: auto;
        align-self: center;
    }

    .hero-inner {
        width: min(960px, 96%);
        padding: 28px 14px;
    }

    .hero-inner h1 {
        font-size: clamp(1.8rem, 8.5vw, 2.6rem);
    }

    .btn {
        padding: 10px 16px;
    }
} */

/* tiny screens */
@media (max-width: 420px) {
    .hero-sub {
        font-size: 0.95rem;
        max-width: 92%;
    }

    .btn-group {
        flex-direction: column;
    }

    .btn {
        width: 90%;
        text-align: center;
    }
}


/* About: align text block and logo with sensible spacing */
.about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    /* space between text and logo */

    padding: 56px 60px;
    /* slightly reduced vertical padding */
}

/* text column grows, logo has fixed area */
.about-text {
    flex: 1 1 60%;
}

.about-logo {
    flex: 0 0 160px;
    /* reserve width for logo */
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Make heading sit directly above paragraph with a clear gap */
.about-text h2 {
    margin: 0 0 12px 0;
    /* small bottom margin to separate from paragraph */
    font-size: 1.8rem;
}

.about-text p {
    margin: 0;
    max-width: 920px;
    line-height: 1.6;
    color: #222;
}

/* logo sizing */
.about img {
    max-width: 150px;
    height: auto;
    display: block;
}

/* Responsive: stack vertically on small screens */
@media (max-width: 880px) {
    .about {
        flex-direction: column;
        text-align: center;
        padding: 36px 24px;
    }

    .about-logo {
        margin-top: 20px;
        flex: none;
    }

    .about-text h2 {
        font-size: 1.6rem;
    }
}

/* News */
.news {
    background: #f5f5f5;
    display: flex;
    align-items: center;
    padding: 10px 40px;
    gap: 10px;
}

.news .tag {
    background: #2d77f2;
    color: white;
    padding: 2px 8px;
    border-radius: 4px;
}

/* Research (updated) */
.research {
    padding: 72px 20px;
    text-align: center;
    background: #ffffff;
    /* change if needed */
    color: #0f172a;
    box-sizing: border-box;
}

.research .container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 18px;
}

.research h2 {
    margin: 0 0 10px;
    font-size: clamp(22px, 3.2vw, 30px);
    font-weight: 700;
    letter-spacing: -0.2px;
}

.research .lead {
    margin: 8px auto 28px;
    max-width: 880px;
    color: #374151;
    font-size: 16px;
    line-height: 1.6;
}

/* responsive grid of short info cards */
.info-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 18px;
    margin: 8px auto 28px;
    max-width: 1100px;
    align-items: stretch;
}

@media (min-width: 800px) {
    .info-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* small info card */
.info-card {
    background: #f8fafc;
    border-radius: 12px;
    padding: 18px;
    text-align: left;
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.04);
    border: 1px solid rgba(15, 23, 42, 0.03);
    min-height: 110px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.info-card h3 {
    margin: 0 0 8px;
    font-size: 16px;
    color: #0f172a;
}

.info-card p {
    margin: 0;
    color: #525560;
    font-size: 14px;
    line-height: 1.5;
}

/* CTA */
.cta-wrap {
    margin-top: 18px;
}

.btn.btn-primary {
    display: inline-block;
    padding: 10px 18px;
    background: #2563eb;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    box-shadow: 0 8px 18px rgba(37, 99, 235, 0.12);
    transition: transform .12s ease, box-shadow .12s ease;
}

.btn.btn-primary:hover,
.btn.btn-primary:focus {
    transform: translateY(-3px);
    box-shadow: 0 14px 28px rgba(37, 99, 235, 0.14);
}

/* remove or override the old card styles (if present) */
.cards,
.card,
.card-img {
    display: none !important;
}

/* Beliefs */
.beliefs {
    padding: 60px 40px;
    text-align: center;
}

.belief-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.belief-card {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    width: 250px;
}

/* Mentors */
.mentors {
    text-align: center;
    padding: 60px 40px;
}

.mentor-list {
    display: flex;
    justify-content: center;
    gap: 30px;
}

.mentor {
    width: 120px;
    height: 120px;
    background: #ddd;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}


/* Program */
.program-banner {
    background: #1439b3;
    color: white;
    text-align: center;
    padding: 25px 40px;
    /* reduced top-bottom padding */
}

.program-banner h2 {
    margin-top: 0;
    /* remove extra top gap */
    margin-bottom: 15px;
    /* space below heading */
}

.program-banner p {
    margin: 0 auto 20px;
    /* no top margin, even space below */
    max-width: 700px;
    /* keeps text nicely aligned */
    line-height: 1.5;
}

.program-highlights {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 10px;
    /* smaller, more even spacing */
}

.highlight {
    background: white;
    color: #222;
    padding: 12px 18px;
    border-radius: 6px;
}

@media (max-width: 768px) {
    .program-highlights {
        flex-direction: column;
        gap: 18px;
        align-items: center;
    }

    .highlight {
        width: 100%;
        max-width: 400px;
    }
}

.intake-button {
    display: inline-block;
    margin-top: 30px;
    padding: 12px 24px;
    background-color: white;
    color: #2d77f2;
    font-weight: bold;
    text-decoration: none;
    border-radius: 6px;
    transition: background 0.3s ease, color 0.3s ease;
}

.intake-button:hover {
    background-color: #e6e6e6;
}

@media (max-width: 600px) {
    .intake-button {
        padding: 10px 20px;
        font-size: 0.9rem;
    }
}

/* Stats */
.stats {
    display: flex;
    justify-content: space-around;
    padding: 40px;
    background: #f5f5f5;
    text-align: center;
}

.stats-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    /* spread items evenly on wide screens */
    gap: 20px;
    align-items: flex-start;
}

/* Each stat column */
.stat {
    flex: 1 1 0;
    text-align: center;
    min-width: 140px;
    /* prevents columns from getting too narrow */
}

/* Big blue number */
.stat-number {
    font-size: 36px;
    /* large number like the photo */
    line-height: 1;
    font-weight: 700;
    color: #1439b3;
    /* brand blue */
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}

/* Small blue label under number */
.stat-label {
    font-size: 12px;
    color: #1439b3;
    /* slightly lighter blue for labels */
    font-weight: 600;
    text-transform: none;
    opacity: 0.95;
}

/* Responsive: stack vertically on smaller screens */
@media (max-width: 768px) {
    .stats-inner {
        flex-direction: column;
        gap: 18px;
        align-items: center;
    }

    .stat {
        width: 100%;
        max-width: 420px;
    }

    .stat-number {
        font-size: 32px;
    }
}

/* Stats-new */
.stats-new {
    /*  display: flex;
    justify-content: space-around;
    align-items: center;
    align-content: center; */
    padding: 5px;
    background: #2d77f2;
    text-align: center;
}

.stats-inner-new {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    gap: 20px;
    align-items: center;
}

/* Each stat column */
.stat-new {
    flex: 1 0 1;
    text-align: center;
    min-width: 140px;
    /* prevents columns from getting too narrow */
}

/* Small blue label under number */
.stat-label-new {
    font-size: 12px;
    color: white;
    /* slightly lighter blue for labels */
    font-weight: 600;
    text-transform: none;
    opacity: 0.95;
}

/* Responsive: stack vertically on smaller screens */
@media (max-width: 768px) {
    .stats-inner-new {
        flex-direction: column;
        gap: 14px;
        align-items: center;
    }

    .stat-new {
        width: 100%;
        max-width: 420px;
    }

    .stat-number-new {
        font-size: 32px;
    }
}

/* Contact */
.contact {
    text-align: center;
    padding: 80px 20px;
    /* more breathing room around the section */
    background: #fff;
    /* keep or remove depending on your background */
}

/* Heading spacing & scale */
.contact h2 {
    font-size: clamp(1.6rem, 2.6vw, 2.25rem);
    /* responsive heading */
    margin: 0 0 32px 0;
    /* clear space below heading */
    line-height: 1.1;
    font-weight: 600;
    letter-spacing: -0.02em;
    color: #111;
}

/* Form container */
.contact form {
    display: flex;
    flex-direction: column;
    max-width: 560px;
    /* a bit wider for nicer spacing on desktop */
    margin: 0 auto;
    gap: 18px;
    /* bigger gap between inputs */
    padding: 12px;
    /* slight inner padding so inputs don't touch edges on narrow screens */
    box-sizing: border-box;
}

/* Inputs & textarea */
.contact input,
.contact textarea {
    padding: 14px 14px;
    font-size: 1rem;
    border: 1px solid #d7d7d7;
    border-radius: 8px;
    outline: none;
    transition: box-shadow .18s ease, border-color .12s ease;
    width: 100%;
    box-sizing: border-box;
}

/* nicer focus state */
.contact input:focus,
.contact textarea:focus {
    border-color: #2d77f2;
    box-shadow: 0 6px 18px rgba(45, 119, 242, 0.08);
}

/* make textarea taller */
.contact textarea {
    min-height: 160px;
    resize: vertical;
    line-height: 1.5;
}

/* Button styling */
.contact button {
    padding: 14px 18px;
    background: #2d77f2;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: transform .08s ease, box-shadow .12s ease;
}

/* button hover/focus */
.contact button:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 26px rgba(45, 119, 242, 0.12);
}

.contact button:active {
    transform: translateY(0);
}

/* response message styling */
#responseMessage {
    margin-top: 16px;
    min-height: 20px;
    /* prevents layout jump when message appears */
    color: #094;
    font-weight: 500;
}

/* Responsive adjustments */
@media (max-width: 480px) {
    .contact {
        padding: 56px 16px;
    }

    .contact h2 {
        margin-bottom: 22px;
    }

    .contact form {
        gap: 12px;
        padding: 8px;
        max-width: 100%;
    }

    .contact textarea {
        min-height: 130px;
    }
}

/* Publishers */
.publishers {
    text-align: center;
    padding: 60px 40px;
}

.publisher-logos {
    display: flex;
    justify-content: center;
    gap: 40px;
}

.publisher-logos img {
    max-height: 60px;
}

.publishers h2 {
    font-size: 2rem;
    margin-bottom: 40px;
    margin-top: 0;
}


@media (max-width: 768px) {
    .publisher-logos {
        flex-direction: column;
        align-items: center;
    }

    .publishers h2 {
        font-size: 3rem;
        margin: 20px;
        margin-bottom: 60px;
    }
    
     .publishers h2 {
        font-size: 1.5rem;
        margin-bottom: 30px;
    }
}


@media (max-width: 480px) {
    .publishers h2 {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
}

/* Programs Section */
.programs {
    width: 90%;
    max-width: 1100px;
    margin: 20px auto;
    padding: 50px 0;
    text-align: center;
    background: white;
}

.programs h2 {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 40px;
}

.program {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 45px;
    gap: 30px;
}

.program img {
    width: 45%;
    border-radius: 8px;
    object-fit: cover;
    margin: 25px;
}

.program-content {
    width: 55%;
    text-align: left;
}

.program-content h3 {
    font-size: 1.7rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #000;
}

.program-content p {
    font-size: 0.95rem;
    color: #000;
    line-height: 1.6;
}

/* Reverse layout for alternating rows */
.program.reverse {
    flex-direction: row-reverse;
}

/* Responsive */
@media (max-width: 768px) {
    .program {
        flex-direction: column;
        text-align: center;
        margin: 40px;
    }

    .program.reverse {
        flex-direction: column;
    }

    .program img,
    .program-content {
        width: 100%;
    }

    .program-content {
        text-align: center;
    }
}


/* ---------- HAMBURGER (mobile only) ---------- */
.hamburger {
    display: none;
    /* hidden by default — shown in media query */
    background: white;
    border: none;
    cursor: pointer;
    padding: 8px;
    margin-left: 12px;
    z-index: 1100;
}

/* bars */
.hamburger .bar {
    display: block;
    width: 24px;
    height: 2.5px;
    margin: 5px 0;
    background: black;
    border-radius: 2px;
    transition: transform 0.25s ease, opacity 0.25s ease;
}

/* transform to "X" when open */
.hamburger.open .bar:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
}

.hamburger.open .bar:nth-child(2) {
    opacity: 0;
    pointer-events: none;
}

.hamburger.open .bar:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
}

/* Mobile-specific behavior */
@media (max-width: 768px) {
    /* header {
        padding: 8px 16px;
    }*/

    .navbar {
        align-items: center;
        justify-content: space-between;
       /* flex-wrap: nowrap; */
        gap: 8px;
    }

    /* show hamburger button on mobile */
    .hamburger {
        display: block;
        z-index: 1100;
        /* keep it above the menu */
    }

    /* Nav links: initially hidden with smooth max-height transition 
    .nav-links {
        width: 100%;
        list-style: none;
        margin: 8px 0 0 0;
        padding: 0;
        overflow: hidden;
        max-height: 0;
        transition: max-height 300ms ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        background: transparent;
    } */
    
     .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1040;
        /* above header content but below hamburger if needed */
        width: 100%;
        list-style: none;
        margin: 8px 0 0 0;
        padding: 0;
        overflow: hidden;
        /* visually collapsed when closed */
        max-height: 0;
        /* collapsed */
        display: flex;
        /* keep it rendered */
        flex-direction: column;
        align-items: center;
        gap: 6px;
        background-color: white;
        /* visible overlay */
        transition: max-height 320ms ease, padding 220ms ease;
        box-shadow: 0 8px 20px rgba(2, 8, 23, 0.08);
        border-radius: 8px;
        /* allow vertical scrolling for long menus when open */
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        /* soft clip so we don't exceed viewport visually */
        max-width: 100%;
    }


    /* when open, allow enough height for the items */
    .nav-links.open {
        max-height: calc(100vh - 64px);
        /* full viewport minus header */
        padding: 12px 12px 18px 12px;
    }

    .nav-links li {
        width: auto;
        margin: 10px 0;
    }

    .nav-links li a {
        display: inline-block;
        padding: 8px 12px;
        font-size: 15px;
        /*color: #fff;*/
        color: #111;
        text-decoration: none;
        white-space: nowrap;
    }

    /* Make sure logo doesn't get too big on mobile */
    .navbar .logo img {
        max-height: 48px;
        width: auto;
        display: block;
    }

    /* adjust hero spacing to avoid overlap */
    .hero {
        padding-top: 60px;
        padding-left: 18px;
        padding-right: 18px;
        height: auto;
    }
}

/* extra tiny tweak */
@media (max-width: 380px) {
    .navbar .logo img {
        max-height: 45px;
    }

    .nav-links li a {
        font-size: 14px;
        padding: 7px 10px;
    }
}


/* Prevent horizontal scrollbars and white space on mobile */
html,
body {
    width: 100%;
    overflow-x: hidden;
}

/* Ensure navbar behaves correctly across all browsers */
.nav-links {
    display: flex;
    gap: 20px;
}

.program,
.about,
.stats,
.news,
.research,
.publishers {
    width: 100%;
    max-width: 100vw;
    margin: 0 auto;
    overflow-x: hidden;
}

/*@media (max-width: 768px) {
    .nav-links {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        max-height: 0;
        overflow: hidden;
        background-color: white;
        transition: max-height 0.3s ease;
    }

    .nav-links.open {
        max-height: 500px;
      
    }

  
    .program,
    .about,
    .stats,
    .news,
    .research,
    .publishers {
        width: 100%;
        max-width: 100vw;
        margin: 0 auto;
        overflow-x: hidden;
    }
}*/

/* -------------------- GUDSKY SECTIONS -------------------- */
:root {
    --gudsky-page-bg: #ffffff;
    --gudsky-muted: #f0f0f2;
    --gudsky-panel-blue: #e6f0fb;
    --gudsky-card-gray: #f3f4f5;
    --gudsky-text: #111;
    --gudsky-muted-text: #6b7280;
    --gudsky-accent-yellow: #eab308;
    --gudsky-shadow: 0 6px 14px rgba(20, 20, 30, 0.07);
    --gudsky-rounded: 12px;
    --gudsky-max-width: 1200px;
}

/* small reset for the gudsky components only */
.gudsky-section * {
    box-sizing: border-box;
}

.gudsky-section {
    /* each section can be placed anywhere; it centers its inner content */
    padding: 36px 20px;
    font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: var(--gudsky-text);
    display: block;
    background: transparent;
}

/* inner centered container inside a section */
.gudsky-inner {
    max-width: var(--gudsky-max-width);
    margin-left: auto;
    margin-right: auto;
}

/* titles & lead text */
.gudsky-section h2.section-title,
.gudsky-section h3.section-title {
    margin: 0 0 8px 0;
    font-size: 20px;
    font-weight: 700;
}

.gudsky-section p.lead {
    margin: 8px 0 22px;
    color: var(--gudsky-muted-text);
    font-size: 15px;
    text-align: center;
}

/* ---------------- ABOUT + ANNOUNCEMENTS ---------------- */
.gudsky-about-wrap {
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 32px;
    align-items: start;
    margin-bottom: 48px;
}

/* left column */
.gudsky-about-left {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.gudsky-about-card {
    background: var(--gudsky-panel-blue);
    border-radius: 10px;
    padding: 20px 22px;
    box-shadow: var(--gudsky-shadow);
    border-left: 6px solid rgba(0, 0, 0, 0.02);
    color: var(--gudsky-text);
    font-size: 14px;
}

.gudsky-about-card p {
    margin: 0 0 10px 0;
    color: #18202b;
}

.gudsky-about-card strong {
    font-weight: 700;
}

.gudsky-goals {
    background: var(--gudsky-panel-blue);
    border-radius: 12px;
    padding: 18px 20px;
    box-shadow: var(--gudsky-shadow);
}

.gudsky-goals ul {
    margin: 0;
    padding-left: 20px;
    color: #0f1724;
    font-size: 14px;
}

.gudsky-goals li {
    margin-bottom: 8px;
}

.gudsky-founder {
    display: flex;
    gap: 10px;
    align-items: flex-start;
}

.gudsky-founder-quote {
    background: linear-gradient(180deg, rgba(220, 234, 249, 0.95), rgba(230, 240, 252, 1));
    border-radius: 8px;
    padding: 18px 20px;
    box-shadow: var(--gudsky-shadow);
    position: relative;
    flex: 1;
    font-size: 14px;
    color: #12202b;
}

.gudsky-founder-quote p {
    margin: 0 0 10px 0;
}

.gudsky-founder-attr {
    margin-top: 6px;
    display: block;
    font-weight: 700;
    color: #0b2540;
    font-size: 13px;
}

/* announcements sidebar */
.gudsky-announcements {
    background: linear-gradient(#fff, #f7f7f7);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--gudsky-shadow);
    border: 1px solid rgba(0, 0, 0, 0.04);
}

.gudsky-announcements .ann-head {
    background: linear-gradient(#ffd24d, #f2b000);
    padding: 14px 18px;
    font-weight: 700;
    color: #6b2f00;
    font-size: 16px;
}

.gudsky-ann-body {
    padding: 18px;
    height: 380px;
}

.gudsky-ann-post {
    background: white;
    border-radius: 8px;
    padding: 12px;
    box-shadow: 0 3px 8px rgba(10, 10, 20, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.04);
    font-size: 13px;
    display: flex;
    gap: 12px;
    align-items: flex-start;
}

.gudsky-ann-post .meta {
    flex: 1;
}

.gudsky-ann-post .meta h4 {
    margin: 0 0 6px 0;
    font-size: 13px
}

.gudsky-ann-post .meta p {
    margin: 0 0 6px 0;
    color: var(--gudsky-muted-text);
    font-size: 12px
}

.gudsky-ann-post .meta a {
    font-size: 13px;
    color: #1d4ed8;
    text-decoration: none
}

.gudsky-ann-post .date {
    text-align: right;
    min-width: 60px;
    color: #6b7280;
    font-size: 12px;
}

/* WHY CHOOSE US (flexbox version) */
.gudsky-why {
    text-align: center;
    margin: 36px 0 48px;
}

.gudsky-why .why-title {
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 8px;
}

.gudsky-why .why-desc {
    max-width: 900px;
    margin: 0 auto 28px;
    color: var(--gudsky-muted-text);
    font-size: 14px;
    line-height: 1.45;
}

/* flex container: cards wrap */
.gudsky-why-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 22px;
    justify-content: space-between;
    align-items: flex-start;
    /* allow uniform top alignment for cards with different heights */
    margin-top: 10px;
}

/* base (mobile) card: full width */
.gudsky-feature-card {
    width: 100%;
    display: flex;
    gap: 16px;
    align-items: flex-start;
    /* mobile: start so multi-line text looks natural */
    background: #efefef;
    border-radius: 12px;
    padding: 18px 18px;
    box-shadow: 0 8px 18px rgba(15, 20, 25, 0.06);
    box-sizing: border-box;
    min-height: 110px;
}

/* icon block */
.gudsky-feature-icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: #9fbff0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 64px;
    box-shadow: inset 0 -6px 0 rgba(0, 0, 0, 0.02);
}

/* ensure svg scales nicely */
.gudsky-feature-icon svg {
    width: 28px;
    height: 28px;
    display: block;
}

/* text block: left aligned */
.gudsky-feature-text {
    text-align: left;
    flex: 1 1 auto;
}

/* title + subtitle spacing — aligned vertically centered on desktop via media queries */
.gudsky-feature-title {
    font-weight: 700;
    margin: 0 0 6px 0;
    font-size: 15px;
    color: #0b2540;
    line-height: 1.15;
}

.gudsky-feature-sub {
    margin: 0;
    font-size: 13px;
    color: #444;
    line-height: 1.35;
}

/* --- Responsive column sizing --- */
/* 2 columns for medium screens */
@media (min-width:640px) {
    .gudsky-feature-card {
        align-items: center;
        /* vertically center icon with single-line titles where possible */
        padding: 20px;
        min-height: 130px;
    }

    .gudsky-feature-card {
        width: calc((100% - 22px) / 2);
    }

    /* two cards per row (one gap of 22px) */
}

/* 3 columns for wide screens */
@media (min-width:1000px) {
    .gudsky-feature-card {
        width: calc((100% - 44px) / 3);
        /* three cards per row (two gaps of 22px => 44px total) */
        min-height: 140px;
    }

    .gudsky-feature-card {
        padding: 22px;
        gap: 18px;
    }

    .gudsky-feature-icon {
        width: 56px;
        height: 56px;
        flex: 0 0 56px;
    }

    .gudsky-feature-icon svg {
        width: 24px;
        height: 24px;
    }

    .gudsky-feature-title {
        font-size: 15px;
    }

    .gudsky-feature-sub {
        font-size: 13px;
    }
}

/* small screens: tighten spacing and increase readability */
@media (max-width:420px) {
    .gudsky-why {
        margin: 22px 0 32px;
    }

    .gudsky-feature-card {
        padding: 14px;
        gap: 12px;
    }

    .gudsky-feature-icon {
        width: 48px;
        height: 48px;
        flex: 0 0 48px;
    }

    .gudsky-feature-icon svg {
        width: 20px;
        height: 20px;
    }

    .gudsky-feature-title {
        font-size: 14px;
    }

    .gudsky-feature-sub {
        font-size: 13px;
    }
}


/* ---------------- TESTIMONIALS ---------------- */
.gudsky-testimonials {
    background: #f6f7f8;
    border-radius: 16px;
    padding: 28px 18px;
    margin: 26px 0 60px;
}

.gudsky-testimonials .test-title {
    text-align: center;
    font-weight: 700;
    color: #1f4fb3;
    margin-bottom: 22px;
    font-size: 18px;
}

.gudsky-test-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
}

.gudsky-test-card {
    background: white;
    border-radius: 10px;
    padding: 16px;
    box-shadow: 0 8px 18px rgba(10, 10, 20, 0.06);
    min-height: 160px;
    font-size: 14px;
}

.gudsky-test-card h4 {
    margin: 0 0 8px 0;
    font-size: 15px;
    color: #1a2430;
    font-weight: 700;
}

.gudsky-test-card p {
    margin: 0 0 10px 0;
    color: #4b5563;
    font-size: 13px;
}

.gudsky-stars {
    display: flex;
    gap: 4px;
}

/* RESPONSIVE */
@media (max-width:1100px) {
    .gudsky-about-wrap {
        grid-template-columns: 1fr 300px;
        gap: 20px;
    }

    .gudsky-ann-body {
        height: auto;
    }
}

@media (max-width:900px) {
    .gudsky-why-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .gudsky-test-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .gudsky-about-wrap {
        grid-template-columns: 1fr;
    }

    .gudsky-announcements {
        order: 2;
    }
}

@media (max-width:640px) {
    .gudsky-why-grid {
        grid-template-columns: 1fr;
    }

    .gudsky-test-grid {
        grid-template-columns: 1fr;
    }

    .gudsky-feature-card {
        padding: 16px;
    }

    .gudsky-feature-icon {
        width: 48px;
        height: 48px;
    }

    .gudsky-announcements {
        margin-top: 10px;
    }
}

@media (max-width:420px) {
    .gudsky-inner {
        padding: 0 6px;
    }

    .gudsky-about-card,
    .gudsky-goals,
    .gudsky-founder-quote {
        padding: 14px;
    }

    .gudsky-founder-attr {
        font-size: 12px;
    }
}


body {
    font-family: Arial, sans-serif;
}

footer {
    background-color: #f5f5f5;
    color: #000;
    font-size: 14px;
}

.footer-top {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 40px;
}

.footer-section {
    flex: 1 1 200px;
    margin-bottom: 12px;
}

.footer-section h4 {
    margin-bottom: 15px;
    font-size: 16px;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 8px;
}

.footer-section a {
    color: inherit;
    text-decoration: none;
}

.footer-section a:hover {
    text-decoration: underline;
}

.social-icons {
    display: flex;
    gap: 12px;
    margin-bottom: 15px;
}

.social-icons a {
    font-size: 20px;
    color: #000;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #0073e6;
}

.bottom-links {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.footer-bottom {
    background-color: #1439b3;
    color: #fff;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
}

.footer-bottom .left p:first-child {
    font-weight: bold;
    margin-bottom: 5px;
}

.footer-bottom .right {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.footer-bottom .right a {
    color: #fff;
    text-decoration: none;
}

.footer-bottom .right a:hover {
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-top {
        flex-direction: column;
        padding: 30px 20px;
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }

    .footer-bottom .right {
        justify-content: center;
    }

    .bottom-links {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 10px;
    }
}


/* Fade in / fade out base styles */
:root {
    --fade-duration: 560ms;
    --fade-easing: cubic-bezier(.2, .9, .25, 1);
}

/* Respect reduced motion */
@media (prefers-reduced-motion: reduce) {
    .animate-on-scroll {
        transition: none !important;
        animation: none !important;
        opacity: 1 !important;
        transform: none !important;
    }
}

/* Initial hidden state */
.animate-on-scroll {
    opacity: 0;
    transform: translateY(12px);
    will-change: opacity, transform;
    transition: opacity var(--fade-duration) var(--fade-easing),
        transform var(--fade-duration) var(--fade-easing);
    /* allow per-element delay via inline style var --delay */
    transition-delay: var(--delay, 0ms);
}

/* When element is visible */
.animate-on-scroll.is-visible {
    opacity: 1;
    transform: none;
}

/* Optional explicit fade-out class if you want to control via JS */
.animate-on-scroll.is-hidden {
    opacity: 0;
    transform: translateY(-8px);
    transition-duration: 360ms;
}

/* Example small tweaks for nicer staggered animation on card grids */
.info-grid .info-card.animate-on-scroll,
.gudsky-why-grid .gudsky-feature-card.animate-on-scroll {
    /* Slightly shorter duration for items */
    --fade-duration: 420ms;
    transition-delay: var(--delay, 0ms);
}

/* Make the CTA and headings slightly more prominent */
h2.animate-on-scroll,
.lead.animate-on-scroll,
.cta-wrap.animate-on-scroll {
    --fade-duration: 640ms;
    transition-delay: var(--delay, 0ms);
}

/* utility: make sure images/icons don't jump when animating */
.gudsky-feature-icon img {
    display: block;
    backface-visibility: hidden;
}

/* Floating "Ask Gudsky" button */
/* Community Page Link */
.ask-gudsky-fab {
  position: fixed;
  right: 24px;
  bottom: 24px;
  z-index: 9999;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 24px;
  border-radius: 999px;
  background-color: #facc15;   /* gudsky-yellow-accent */
  color: #1e3a8a;              /* gudsky-blue-primary */
  font-size: 14px;
  font-weight: 700;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.25s ease, color 0.25s ease,
              transform 0.2s ease;
  box-shadow: 0 0 0 0 rgba(250, 204, 21, 0.7);
}

/* pulse animation from designer */
@keyframes pulse-shadow {
  0%   { box-shadow: 0 0 0 0 rgba(250, 204, 21, 0.7); }
  70%  { box-shadow: 0 0 0 10px rgba(250, 204, 21, 0); }
  100% { box-shadow: 0 0 0 0 rgba(250, 204, 21, 0); }
}

.ask-gudsky-fab.animate-pulse-shadow {
  animation: pulse-shadow 2s infinite;
}

.ask-gudsky-fab:hover {
  background-color: #ffffff;
  color: #1e3a8a;
  transform: scale(1.05);
}
.ask-gudsky-icon {
  width: 18px;
  height: 18px;
  transition: transform 0.2s ease;
}
.ask-gudsky-fab:hover .ask-gudsky-icon {
  transform: translateX(4px);
}






    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudsky Research Foundation</title>
    <link rel="icon" type="image/png" href="./images/GudskyLOGO.png">
    <link rel="stylesheet" href="style.css">
    <!-- put this inside <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-...replace-if-you-verify..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@568&family=Inter:opsz@14..32&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
        
</head>


<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="images/Goodsky-Mental-Health-Retreat-Australia.webp" alt="Gudsky Logo">
            </div>
            <!-- Hamburger button (visible only on small screens) -->
            <button class="hamburger" id="navToggle" aria-label="Toggle navigation" aria-expanded="false"
                aria-controls="mainNav">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="nav-links" id="mainNav">
                <li><a href="#home" class="inter-adi">Home</a></li>
                <!--<li><a href="./ResearchIntake.html" class="inter-adi">Research Intake 2026</a></li>-->
                <li><a href="./ResearchIntake.html" class="inter-adi nav-cta"><span class="nav-cta-one">Research Intake
                            2026</span></a></li>
                <li><a href="./publications.html" class="inter-adi">Publications</a></li>
                <li><a href="./coming-soon.html" class="inter-adi">Career</a></li>
                <li><a href="./coming-soon.html" class="inter-adi">Membership</a></li>
                <li><a href="./research-support.html" class="inter-adi">Research Support</a></li>
                <li><a href="./about.html" class="inter-adi">About Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero"
        style="background-image: url('images/hp.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="hero-overlay"></div>
         <div class="hero-inner">
        <h1>Gudsky Research Foundation</h1>
        <p class="hero-sub">Advancing knowledge through innovative research programs, comprehensive educational initiatives, and
            community engagement for a better tomorrow.</p>
        <div class="btn-group">
            <a href="#publications" class="btn btn-primary">Our Research</a>
            <a href="#contactUs" class="btn btn-secondary">Contact Us</a>
        </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats-new">
        <div class="stats-inner-new">
            <div class="stat-new">
                <div class="stat-label-new">15 + Published Papers</div>
            </div>

            <div class="stat-new">
                <div class="stat-label-new">UG and PG Guidance</div>
            </div>

            <div class="stat-new">
                <div class="stat-label-new">Cutting Edge technology</div>
            </div>

            <div class="stat-new">
                <div class="stat-label-new">Research and Development Community</div>
            </div>
        </div>
    </section>

    <!-- New About Us-->
    <section class="gudsky-section" id="gudsky-about">
        <div class="gudsky-inner">
            <div class="gudsky-about-wrap" aria-labelledby="about-title">
                <div class="gudsky-about-left">
                    <div style="display:flex;align-items:center; gap:10px; margin-bottom:4px">
                        <h2 class="section-title" id="about-title">About Us</h2>
                    </div>

                    <article class="gudsky-about-card animate-on-scroll" data-delay="80" aria-label="About text">
                        <p><strong>Founded in 2022, Gudsky Research Foundation</strong> is a registered non-profit
                            organization dedicated to bridging the gap between academia and industry. Officially
                            registered
                            in 2024 under the Ministry of Corporate Affairs, Government of India, Gudsky is recognized
                            as an
                            <strong>AICTE-approved, ISO-certified, and Startup India–registered organization.</strong>
                        </p>

                        <p>What began as a small, student-led research initiative has evolved into a dynamic community
                            empowering students, researchers, and professionals to explore innovation in Artificial
                            Intelligence, Robotics, and Emerging Technologies. Through guided mentorship, hands-on
                            training,
                            and collaborative projects, we are building a research-driven ecosystem that fosters
                            creativity,
                            critical thinking, and real-world impact.</p>
                    </article>

                    <div>
                        <h3 style="margin:18px 0 8px 0; font-size:18px; font-weight:700">Our Goals by 2028</h3>
                        <div class="gudsky-goals animate-on-scroll" data-delay="80">
                            <ul>
                                <li>Train 1,000+ students in Research &amp; Development (R&amp;D)</li>
                                <li>Facilitate the publication of 100+ impactful research papers</li>
                                <li>Build collaborations with 50+ research institutions and 100+ colleges worldwide</li>
                                <li>Create a global network of mentors, scholars, and industry professionals</li>
                            </ul>
                        </div>
                    </div>

                    <div style="margin-top:6px">
                        <h3 style="margin:18px 0 8px 0; font-size:18px; font-weight:700">Founder's Message</h3>
                        <div class="gudsky-founder animate-on-scroll" data-delay="80">
                            <div class="gudsky-founder-quote">
                                <p>“At Gudsky, we believe research is the foundation of innovation and progress. Our
                                    mission
                                    is to inspire and guide the next generation of thinkers, creators, and
                                    problem-solvers
                                    who will shape the future through science and technology.”</p>
                                <span class="gudsky-founder-attr">— Abhishek Kumar Shukla, Founder - Gudsky Research
                                    Foundation</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ANNOUNCEMENTS -->
                <aside class="gudsky-announcements" aria-label="Announcements and Updates">
                    <div class="ann-head animate-on-scroll" data-delay="80">Announcements &amp; Updates</div>
                    <div class="gudsky-ann-body">
                        <div class="gudsky-ann-post" role="article" aria-labelledby="ann-title">
                            <div class="meta">
                                <h4 id="ann-title">AI Workshop 2026</h4>
                                <p>Hands-on workshop on AI basics and career guidance. Seats limited — register now.</p>
                                <a href="./Ai-workshop.html">Register now</a>
                            </div>   
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="stats-inner">
            <div class="stat">
                <div class="stat-number">650+</div>
                <div class="stat-label">Students Enrolled</div>
            </div>

            <div class="stat">
                <div class="stat-number">40+</div>
                <div class="stat-label">Research Projects</div>
            </div>

            <div class="stat">
                <div class="stat-number">30+</div>
                <div class="stat-label">Expert Faculty</div>
            </div>

            <div class="stat">
                <div class="stat-number">20+</div>
                <div class="stat-label">Years Experience</div>
            </div>
        </div>
    </section>


    <!-- Research -->
    <section id="publications" class="research">
        <div class="container">
            <h2 class="animate-on-scroll">Our Research and Beliefs</h2>

            <!-- single lead line describing devotion -->
            <p class="lead" class="lead animate-on-scroll" data-delay="80">
                Gudsky Research Foundation is deeply devoted to advancing knowledge through collaborative, ethical,
                and impact-driven research that addresses real-world challenges.
            </p>

            <!-- short organizational highlights -->
            <div class="info-grid" aria-hidden="false">
                <div class="info-card animate-on-scroll">
                    <h3>Mission</h3>
                    <p>To foster interdisciplinary research, equip emerging researchers, and translate ideas into
                        societal
                        impact.</p>
                </div>

                <div class="info-card animate-on-scroll">
                    <h3>Focus Areas</h3>
                    <p>AI & ML, IoT & Embedded Systems, Sustainable Technologies, Human–Computer Interaction, and
                        Transportation Systems.</p>
                </div>

                <div class="info-card animate-on-scroll">
                    <h3>Collaboration</h3>
                    <p>We partner with universities, industry, and public bodies to co-create projects, internships and
                        funding opportunities.</p>
                </div>

                <div class="info-card animate-on-scroll">
                    <h3>Open Calls</h3>
                    <p>Periodic calls for proposals and student research internships — check our Opportunities page for
                        current listings.</p>
                </div>

                <div class="info-card animate-on-scroll">
                    <h3>Transparency & Ethics</h3>
                    <p>All projects follow ethical guidelines, with emphasis on reproducibility, data privacy, and open
                        dissemination.</p>
                </div>

                <div class="info-card animate-on-scroll">
                    <h3>Get Involved</h3>
                    <p>Want to collaborate or publish with us? Contact our research coordinator for partnership and
                        publication queries.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="cta-wrap animate-on-scroll" data-delay="300">
                <a href="publications.html" class="btn btn-primary">Explore Publications</a>
            </div>
        </div>
    </section>

    <section class="gudsky-section" id="gudsky-why">
        <div class="gudsky-inner">
            <div class="gudsky-why" aria-labelledby="why-title">
                <h2 class="why-title" id="why-title">Why Choose US</h2>
                <p class="why-desc">Choose Gudsky for an unparalleled commitment to excellence, driven by a "Quality and
                    India-first attitude." We integrate cutting-edge research with practical education to nurture the
                    next
                    generation of leaders and innovators.</p>

                <!-- flex-based responsive grid -->
                <div class="gudsky-why-grid" role="list">
                    <div class="gudsky-feature-card animate-on-scroll" role="listitem">
                        <div class="gudsky-feature-icon" aria-hidden="true">
                            <!-- icon kept same -->
                            <img src="./images/mentor.svg" alt="icon" width="24" height="24" />
                        </div>

                        <div class="gudsky-feature-text">
                            <div class="gudsky-feature-title">Mentorship by Experts</div>
                            <p class="gudsky-feature-sub">Learn directly from leading researchers.</p>
                        </div>
                    </div>

                    <div class="gudsky-feature-card animate-on-scroll" role="listitem">
                        <div class="gudsky-feature-icon" aria-hidden="true">
                            <img src="./images/learn.svg" alt="icon" width="24" height="24" />
                        </div>

                        <div class="gudsky-feature-text">
                            <div class="gudsky-feature-title">Hands-On Learning</div>
                            <p class="gudsky-feature-sub">Work on real-world AI projects.</p>
                        </div>
                    </div>

                    <div class="gudsky-feature-card animate-on-scroll" role="listitem">
                        <div class="gudsky-feature-icon" aria-hidden="true">
                            <img src="./images/Research.svg" alt="icon" width="24" height="24" />
                        </div>

                        <div class="gudsky-feature-text">
                            <div class="gudsky-feature-title">Research Ecosystem</div>
                            <p class="gudsky-feature-sub">Turn ideas into impactful innovations.</p>
                        </div>
                    </div>

                    <div class="gudsky-feature-card animate-on-scroll" role="listitem">
                        <div class="gudsky-feature-icon" aria-hidden="true">
                            <img src="./images/collaboration.svg" alt="icon" width="24" height="24" />
                        </div>

                        <div class="gudsky-feature-text">
                            <div class="gudsky-feature-title">Strong Collaborations</div>
                            <p class="gudsky-feature-sub">Access global research and internship opportunities.</p>
                        </div>
                    </div>

                    <div class="gudsky-feature-card animate-on-scroll" role="listitem">
                        <div class="gudsky-feature-icon" aria-hidden="true">
                            <img src="./images/Vision.svg" alt="icon" width="24" height="24" />
                        </div>

                        <div class="gudsky-feature-text">
                            <div class="gudsky-feature-title">Mission-Driven Vision</div>
                            <p class="gudsky-feature-sub">Empowering 1,000+ students by 2028.</p>
                        </div>
                    </div>

                    <div class="gudsky-feature-card animate-on-scroll" role="listitem">
                        <div class="gudsky-feature-icon" aria-hidden="true">
                            <img src="./images/Research.svg" alt="icon" width="24" height="24" />
                        </div>

                        <div class="gudsky-feature-text">
                            <div class="gudsky-feature-title">Research Labs</div>
                            <p class="gudsky-feature-sub">Establish your own campus research lab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Programs Section -->
    <section class="programs">
        <h2>Our Programs</h2>

        <div class="program animate-on-scroll" data-delay="120">
            <img src="./images/Group 130.png"
                alt="Data Science & Analytics">
            <div class="program-content">
                <h3>Dronacharya Open Learning Program</h3>
                <p>
                    The Dronacharya Open Learning Program is a free learning initiative offered on the Gudsky
                    Research Foundation's Youtube Channel. It is designed to provide both theoretical and practical
                    exposure to emerging technologies like Machine Learning and Artificial Intelligence through
                    structured courses.
                </p>
            </div>
        </div>

        <div class="program animate-on-scroll" data-delay="120">
            <img src="./images/img155.png" alt="Machine Learning">
            <div class="program-content">
                <h3>Research Lab Setup</h3>
                <p>
                    Gudsky Research Foundation helps schools and colleges establish advanced research labs.
                    They offer their own lab architectures tailored to an institution's budget and provide
                    integral, hands on training as a part of the setup.
                </p>
            </div>
        </div>

        <div class="program animate-on-scroll" data-delay="120">
            <img src="./images/img255.png" alt="Community Engagement">
            <div class="program-content">
                <h3>Research Training Program</h3>
                <p>
                    Join our initiatives to bring science and technology to the public. We believe in making
                    knowledge accessible and inspiring the next generation through outreach and collaborative
                    projects.
                </p>
            </div>
        </div>
    </section>

    <!-- Stats -->
   <!-- <section class="stats">
        <div class="stats-inner">
            <div class="stat">
                <div class="stat-number">650+</div>
                <div class="stat-label">Students Enrolled</div>
            </div>

            <div class="stat">
                <div class="stat-number">40+</div>
                <div class="stat-label">Research Projects</div>
            </div>

            <div class="stat"> 
                <div class="stat-number">30+</div>
                <div class="stat-label">Expert Faculty</div>
            </div>

            <div class="stat">
                <div class="stat-number">20+</div>
                <div class="stat-label">Years Experience</div>
            </div>
        </div>
    </section> -->
    

    <section class="contact" id="contactUs">
        <h2>Collaborate with Us</h2>
        <form id="contactForm" method="POST" action="submit.php">
            <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
            <input type="email" id="email" name="email" placeholder="Email Address" required>
            <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            <textarea id="message" name="message" placeholder="Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <p id="responseMessage"></p>
    </section>

    <!-- Publishers -->
    <section class="publishers">
        <h2>Our Publishers</h2>
        <div class="publisher-logos animate-on-scroll" data-delay="120">
            <img src="./images/springer-logo.png" alt="springer-logo">
            <img src="./images/ieee-logo.png" alt="IEEE">
            <img src="./images/IIT_Kharagpur.png" alt="IIT_Kharagpur">
            <img src="./images/SCRS.png" alt="SCRS">
            <img src="./images/Taylor-Francis-Group.png" alt="SCRS">
            <img src="./images/NIT-K.png" alt="SMIT_Logo">
            <img src="./images/NIT-J.png" alt="NIT Kurukshetra">
        </div>
    </section>

    <section class="gudsky-section" id="gudsky-testimonials">
        <div class="gudsky-inner">
            <div class="gudsky-testimonials animate-on-scroll" data-delay="80" aria-labelledby="testi-title">
                <h3 class="test-title" id="testi-title">Testimonials</h3>

                <div class="gudsky-test-grid">
                    <div class="gudsky-test-card">
                        <h4>Samridhi - 2025</h4>
                        <p>My experience with Gudsky Research Foundation has been truly transformative. The foundation
                            has
                            provided me with a platform to explore my research interests, develop my technical skills,
                            and
                            boost my confidence. Through Gudsky, I've had the opportunity to work on challenging
                            projects,
                            collaborate with like-minded individuals, and receive guidance from experienced mentors. As
                            a
                            result, I've not only enhanced my research skills but also developed a stronger sense of
                            self-assurance and a growth mindset. I'm grateful for the support and opportunities provided
                            by
                            Gudsky, and I look forward to continuing my growth and development with the foundation.</p>
                        <div class="gudsky-stars" aria-hidden="true">
                            <!-- star icons -->
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                        </div>
                    </div>

                    <div class="gudsky-test-card">
                        <h4>Manjeet Kumar - 2024</h4>
                        <p>My association with Gudsky Research Foundation has been a pivotal moment in my academic
                            journey.
                            Through this esteemed organization, I've acquired invaluable skills that have empowered me
                            to
                            excel in research and development. Notably, I've gained expertise in publishing research
                            papers,
                            a crucial aspect of academic success. I've learned how to select topics that are relevant,
                            timely, and impactful, and how to conduct thorough research to produce high-quality papers.
                            Furthermore, I've developed essential teamwork skills, understanding the importance of
                            collaboration, communication, and mutual respect in achieving common goals. These skills
                            have
                            not only enhanced my research capabilities but also prepared me for future challenges in
                            academia and beyond.</p>
                        <div class="gudsky-stars" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                        </div>
                    </div>

                    <div class="gudsky-test-card">
                        <h4>Pakhi Kansal -2024</h4>
                        <p>The environments is very cooperative. They give you space to voice out your ideas and give
                            you a
                            chance to implement them and make them into reality. I recieved full support whenever
                            possible.
                            I am happy to be a part of this wonderful process and foundation.</p>
                        <div class="gudsky-stars" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                        </div>
                    </div>

                    <div class="gudsky-test-card">
                        <h4>Khushi Kumari - 2025</h4>
                        <p>The overall experience has been really good and knowledgeable. Got to learn and implement a
                            lot
                            of new concepts and the mentor support was incredible.</p>
                        <div class="gudsky-stars" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ffc107">
                                <path
                                    d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.789 1.402 8.169L12 18.896 4.664 23.168l1.402-8.169L.132 9.21l8.2-1.192z" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./Coming-Soon.html">Career</a></li>
                    <li><a href="./ResearchIntake.html">Research</a></li>
                    <li><a href="./about.html">About</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Programs</h4>
                <ul>
                    <li><a href="./ResearchIntake.html">Research Methodology</a></li>
                    <li><a href="./ResearchIntake.html">Data Analytics</a></li>
                    <li><a href="./ResearchIntake.html">Technology Innovation</a></li>
                    <li><a href="./ResearchIntake.html">Academic Writing</a></li>
                    <li><a href="./ResearchIntake.html">Professional Development</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Contact Info</h4>
                <p>Mail: <a href="mailto:connect@gudsky.org">connect@gudsky.org</a></p>
                <p>Phone: +91 84205 36631</p>
                <p>Address: 1/11 Anandnagar Vidyasagar Pally, Liluah, Howrah - 711203</p>
            </div>

            <div class="footer-section">
                <h4>Connect with Us</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/gudskyresearch/"><i class="fa-brands fa-facebook-square"
                            aria-hidden="true"></i></a>
                    <a href="https://x.com/gudsky_research"><i class="fa-brands fa-x-twitter"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/gudskyresearch/"><i class="fa-brands fa-instagram"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/gudsky/?viewAsMember=true"><i
                            class="fa-brands fa-linkedin" aria-hidden="true"></i></a>

                </div>
                <div class="bottom-links">
                    <a href="#">Sitemap</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="left">
                <p><strong>Gudsky Research Foundation</strong></p>
                <p>&copy; 2025 Gudsky Research Foundation. All rights reserved.</p>
            </div>
            <div class="right">
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </footer>


    <script>
        /* document.getElementById("contactForm").addEventListener("submit", async function (e) {
             e.preventDefault();
 
             const fullName = document.getElementById("fullName").value.trim();
             const email = document.getElementById("email").value.trim();
             const phone_number = document.getElementById("phone_number").value.trim();
             const message = document.getElementById("message").value.trim();
             const responseEl = document.getElementById("responseMessage");
 
             responseEl.innerText = "Sending...";
 
             try {
                 const res = await fetch("./contact.php", {
                     method: "POST",
                     headers: { "Content-Type": "application/json" },
                     body: JSON.stringify({ fullName, email, phone_number, message })
                 });
 
                 const data = await res.json().catch(() => ({}));
 
                 // inside your fetch success handling
                 if (!res.ok) {
                   responseEl.innerText = (data.errors ? data.errors.join(' ') : data.message) || `Server error (${res.status})`;
                   return;
                 }
 
 
                 responseEl.innerText = data.message || "Message sent!";
                 // optionally clear the form:
                 document.getElementById("contactForm").reset();
 
             } catch (err) {
                 console.error("Network error:", err);
                 responseEl.innerText = "Network error — try again later.";
             }
         }); */
        (function () {
            const toggleBtn = document.getElementById('navToggle');
            const nav = document.getElementById('mainNav');

            if (!toggleBtn || !nav) return;

            toggleBtn.addEventListener('click', function () {
                const isOpen = nav.classList.toggle('open');
                toggleBtn.classList.toggle('open', isOpen);
                toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            // Close the menu when user taps a link (mobile UX)
            nav.addEventListener('click', function (e) {
                if (e.target.tagName === 'A' && nav.classList.contains('open')) {
                    nav.classList.remove('open');
                    toggleBtn.classList.remove('open');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                }
            });

            // Optional: close on ESC key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && nav.classList.contains('open')) {
                    nav.classList.remove('open');
                    toggleBtn.classList.remove('open');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                    toggleBtn.focus();
                }
            });
        })();
        
          /**
                        * animateOnScroll
                        * - Adds/removes "is-visible" on elements with class "animate-on-scroll".
                        * - Supports data-delay attribute (ms) for stagger.
                        * - Options: rootMargin, threshold, once.
                        */
        (function () {
            const selector = '.animate-on-scroll';
            const elements = Array.from(document.querySelectorAll(selector));
            if (!elements.length) return;

            // Config
            const config = {
                root: null,
                rootMargin: '0px 0px -10% 0px', // trigger slightly before element fully enters
                threshold: 0.12,
                once: false // set to true to animate only first time
            };

            // Apply per-element CSS custom property for delay if data-delay is present,
            // or if inside a container we want to auto-stagger we set them later.
            elements.forEach(el => {
                const d = el.getAttribute('data-delay');
                if (d) el.style.setProperty('--delay', `${parseInt(d, 10)}ms`);
            });

            // Auto-stagger for grid children (optional):
            // For each grid container (info-grid, gudsky-why-grid), apply incremental delays.
            ['.info-grid', '.gudsky-why-grid'].forEach(containerSel => {
                document.querySelectorAll(containerSel).forEach(container => {
                    const items = Array.from(container.querySelectorAll(selector));
                    items.forEach((it, i) => {
                        // don't override explicit data-delay
                        if (!it.hasAttribute('data-delay')) {
                            const delay = i * 90; // 90ms between items
                            it.style.setProperty('--delay', `${delay}ms`);
                        }
                    });
                });
            });

            // IntersectionObserver callback
            const io = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const el = entry.target;
                    if (entry.isIntersecting) {
                        // add visible class
                        el.classList.add('is-visible');
                        el.classList.remove('is-hidden');
                        if (config.once) {
                            io.unobserve(el);
                        }
                    } else {
                        // remove visible class so it fades out when leaving viewport
                        // If once=true we don't remove — element stays visible after first reveal.
                        if (!config.once) {
                            el.classList.remove('is-visible');
                            el.classList.add('is-hidden');
                        }
                    }
                });
            }, { root: config.root, rootMargin: config.rootMargin, threshold: config.threshold });

            // Observe
            elements.forEach(el => io.observe(el));

            // Expose a simple API in case you want to change 'once' at runtime.
            window.__animateOnScroll = {
                setOnce: (v) => { config.once = !!v; }
            };
        })();
        
    </script>
    
    <!-- Floating Action Button: Ask Gudsky -->
<a href="community.html" class="ask-gudsky-fab animate-pulse-shadow">
  <span class="ask-gudsky-label">Ask Gudsky</span>
  <svg class="ask-gudsky-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
    </path>
  </svg>
</a>


</body>

</html>
