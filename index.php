<?php

// About Me
$profile = [
    "name" => "Rei Marcus M. Cruz",
    "tagline" => "3rd Year IT Student / Working Student",
    "photo" => "thumbnails/profile.jpg",
    "intro" => "Hi! I'm a 3rd-year IT working student who works hard to support myself while pursuing my education. 
                Balancing work and studies isn't always easy, but I'm determined to keep learning, improving my skills,
                and building a better future for myself.",
    "education" => [
        ["school" => "Pamantasan ng Lungsod ng Valenzuela", "course" => "BS in Information Technology (3rd Year)", "years" => "2023 - Present"],
        ["school" => "St. Bernadette College of Valenzuela", "course" => "ICT Strand", "years" => "2021 - 2023"]
    ],
    "skills" => ["HTML", "CSS", "Java", "JavaScript", "PHP", "Canva"],
    "interests" => ["Motorcycling", "Gaming", "Music", "Basketball"],
    "motto" => "Small progress is still progress."
];

// Projects

$projects = [
    [
        "title"       => "TradeHub",
        "category"    => "Web Development",
        "description" => "A marketplace website where users can sell, buy, or trade their items.",
        "image"       => "thumbnails/tradehub.png",
        "link"        => "tradehub/Tradehub.html",
        "type"        => "link",
    ],
    [
        "title"       => "GBikes",
        "category"    => "Web Development",
        "description" => "A website for a second-hand motorcycle dealership.",
        "image"       => "thumbnails/gbikes.png",
        "link"        => "gbikes/Gbikes%20Website.html",
        "type"        => "link",
    ],
    [
        "title"       => "GreenLeafy Poster",
        "category"    => "Graphic Design",
        "description" => "A multimedia promotional poster for a matcha beverage brand.",
        "image"       => "thumbnails/greenleafy.png",
        "link"        => "",
        "type"        => "image",
    ],
    [
        "title"       => "Kayumi Logo",
        "category"    => "Graphic Design",
        "description" => "A logo design for a makeup brand.",
        "image"       => "thumbnails/kayumi.png",
        "link"        => "",
        "type"        => "image",
    ],
];

// Certificates
$certPdf = "credentials/certificates.pdf";

$achievements = [
    [
        "title"   => "National Certificate II - Computer Systems Servicing",
        "year"    => "2024",
        "caption" => "TESDA · Issued April 5, 2024",
        "page"    => 1,
        "thumb"   => "thumbnails/nc2.jpg",
    ],
    [
        "title"   => "Getting Started with Cisco Packet Tracer",
        "year"    => "2025",
        "caption" => "Cisco Networking Academy · Completed August 25, 2025",
        "page"    => 2,
        "thumb"   => "thumbnails/first.png",
    ],
    [
        "title"   => "Exploring Internet of Things with Cisco Packet Tracer",
        "year"    => "2025",
        "caption" => "Cisco Networking Academy · Completed September 2, 2025",
        "page"    => 3,
        "thumb"   => "thumbnails/iot.png",
    ],
    [
        "title"   => "Exploring Networking with Cisco Packet Tracer",
        "year"    => "2025",
        "caption" => "Cisco Networking Academy · Completed August 25, 2025",
        "page"    => 4,
        "thumb"   => "thumbnails/exploring.png",
    ],
    [
        "title"   => "Introduction to Packet Tracer Exam",
        "year"    => "2025",
        "caption" => "Cisco Networking Academy · Completed September 2, 2025",
        "page"    => 5,
        "thumb"   => "thumbnails/intro.png",
    ],
];

// Contact
$contact = [
    "email"    => "crz.reiii@gmail.com",
    "socials"  => [
        ["name" => "Facebook",  "icon" => "fa-brands fa-facebook-f", "url" => "https://www.facebook.com/rei.mrcs"],
        ["name" => "Instagram", "icon" => "fa-brands fa-instagram",  "url" => "https://www.instagram.com/r.crz25_"],
        ["name" => "GitHub",    "icon" => "fa-brands fa-github",     "url" => "https://github.com/bleuuuuuuuuuu"],
    ],
];

// Escape text
function e($text) { return htmlspecialchars((string)$text, ENT_QUOTES, 'UTF-8'); }

// Placeholder image
function img($path, $label = "Image") {
    if ($path !== "" && file_exists(__DIR__ . "/" . $path)) {
        return e($path);
    }
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="800" height="600" viewBox="0 0 800 600">'
         . '<rect width="800" height="600" fill="#dbeafe"/>'
         . '<circle cx="400" cy="250" r="60" fill="#93c5fd"/>'
         . '<rect x="300" y="340" width="200" height="30" rx="15" fill="#93c5fd"/>'
         . '<text x="400" y="440" font-family="Arial" font-size="28" fill="#1d4ed8" text-anchor="middle">'
         . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</text></svg>';
    return 'data:image/svg+xml;base64,' . base64_encode($svg);
}

// Logo name
$firstName = "Reiquan";

// Project categories
$categories = array_values(array_unique(array_column($projects, "category")));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($profile["name"]) ?> | Portfolio</title>
    <meta name="description" content="<?= e($profile["name"]) ?>'s personal portfolio">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Certificates */
        .certs-card {
            max-width: 760px; margin: 0 auto;
            background: #101c33; border: 1px solid var(--blue-100);
            border-radius: var(--radius); padding: 34px; box-shadow: var(--shadow);
        }
        .certs-card h3 {
            font-size: 1.5rem; letter-spacing: .06em; text-transform: uppercase;
            color: var(--blue-900); margin: 0 0 20px;
        }
        .certs-preview {
            display: block; width: fit-content; max-width: 100%; margin: 0 0 14px;
            border-radius: 10px; overflow: hidden; cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .5); border: 1px solid var(--blue-100);
            transition: transform .3s;
        }
        .certs-preview:hover { transform: translateY(-3px); }
        .certs-preview img { max-height: 340px; width: auto; max-width: 100%; display: block; transition: opacity .2s; }
                .certs-caption {
            font-style: italic; text-transform: uppercase; letter-spacing: .04em;
            font-size: .8rem; color: var(--blue-700); margin-bottom: 26px; min-height: 1.4em;
        }
        .certs-list { list-style: none; position: relative; padding-left: 28px; }
        .certs-list::before {
            content: ""; position: absolute; left: 5px; top: 14px; bottom: 14px;
            width: 2px; background: #34d399; border-radius: 2px;
        }
        .certs-list li {
            position: relative; display: flex; justify-content: space-between; align-items: center; gap: 14px;
            padding: 8px 6px; color: var(--muted); font-size: .95rem;
        }
        .certs-list li::before {
            content: ""; position: absolute; left: -28px; top: 50%; transform: translateY(-50%);
            width: 12px; height: 12px; border-radius: 50%; background: #34d399;
            box-shadow: 0 0 0 4px #101c33;
        }
        .certs-year { flex: 0 0 auto; font-weight: 700; font-size: .8rem; color: var(--blue-700); }
        .certs-btn { margin-top: 24px; }
        @media (max-width: 480px) { .certs-card { padding: 24px 18px; } }

        /* Project cards */
        .project-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            max-width: 1200px; margin: 0 auto; align-items: stretch;
        }
        .project-card { display: flex; flex-direction: column; height: 100%; }
        .project-body { display: flex; flex-direction: column; flex: 1; }
        .project-body h3 { line-height: 1.35; }
        .project-body p { flex: 1; }
        .project-body .btn { align-self: flex-start; margin-top: auto; }

        /* Contact */
        .contact-single { grid-template-columns: 1fr; max-width: 520px; }
        .contact-single .card { text-align: center; padding: 36px 28px; }
        .contact-single .email-link { font-size: 1.1rem; }
        .contact-single .socials { justify-content: center; }

        /* Project thumbnails */
        a.project-thumb { display: block; }
        .project-thumb { cursor: pointer; }

        /* Contact colors */
        .contact-single .card h3 { color: var(--blue-900); }
        .contact-single .card h3 i { color: var(--blue-700); }
        .contact-single .email-link { color: #ffffff; }
        .contact-single .email-link:hover { color: var(--blue-700); }
        .contact-single .socials a { color: #ffffff; }
        .contact-single .socials a[aria-label="Facebook"]  { background: #1877f2; }
        .contact-single .socials a[aria-label="Instagram"] { background: linear-gradient(45deg, #f09433, #dc2743, #bc1888); }
        .contact-single .socials a[aria-label="GitHub"]    { background: #30363d; border: 1px solid #4b5563; }
        .contact-single .socials a:hover { filter: brightness(1.2); }
    </style>
</head>
<body>

<!-- Navigation -->
<header class="navbar" id="navbar">
    <a href="#home" class="logo"><?= e($firstName) ?><span>.</span></a>
    <button class="menu-btn" id="menuBtn" aria-label="Open menu" aria-expanded="false">
        &#9776;
    </button>
    <nav class="nav-links" id="navLinks">
        <a href="#home">Home</a>
        <a href="#about">About Me</a>
        <a href="#projects">Projects</a>
        <a href="#achievements">Achievements</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<main>

<!-- Home -->
<section class="hero" id="home">
    <div class="hero-text reveal">
        <p class="hello">Hello there! I'm</p>
        <h1><?= e($profile["name"]) ?></h1>
        <p class="tagline"><?= e($profile["tagline"]) ?></p>
        <div class="hero-buttons">
            <a href="#projects" class="btn btn-primary">See My Projects</a>
            <a href="#contact" class="btn btn-outline">Say Hi</a>
            <a href="credentials/res.pdf" class="btn btn-outline" target="_blank" rel="noopener noreferrer">
                <i class="fa-solid fa-file-lines"></i> View Resume
            </a>
        </div>
    </div>
    <div class="hero-photo reveal">
        <img src="<?= img($profile["photo"], "Your Photo") ?>" alt="Photo of <?= e($profile["name"]) ?>">
    </div>
</section>

<!-- About Me -->
<section class="section" id="about">
    <h2 class="section-title reveal">About Me</h2>
    <p class="section-sub reveal">A little bit about who I am</p>

    <div class="about-grid">
        <div class="card reveal">
            <h3><i class="fa-solid fa-user"></i> Introduction</h3>
            <p><?= e($profile["intro"]) ?></p>
        </div>

        <div class="card reveal">
            <h3><i class="fa-solid fa-graduation-cap"></i> Education</h3>
            <ul class="edu-list">
                <?php foreach ($profile["education"] as $edu): ?>
                <li>
                    <strong><?= e($edu["school"]) ?></strong>
                    <span><?= e($edu["course"]) ?></span>
                    <small><?= e($edu["years"]) ?></small>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card reveal">
            <h3><i class="fa-solid fa-code"></i> Skills</h3>
            <div class="tags">
                <?php foreach ($profile["skills"] as $skill): ?>
                    <span class="tag"><?= e($skill) ?></span>
                <?php endforeach; ?>
            </div>
            <h3 class="mt"><i class="fa-solid fa-heart"></i> Interests</h3>
            <div class="tags">
                <?php foreach ($profile["interests"] as $interest): ?>
                    <span class="tag tag-light"><?= e($interest) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <blockquote class="motto reveal">
        <i class="fa-solid fa-quote-left"></i>
        <p><?= e($profile["motto"]) ?></p>
    </blockquote>
</section>

<!-- Projects -->
<section class="section alt" id="projects">
    <h2 class="section-title reveal">My Projects</h2>
    <p class="section-sub reveal">Things I've made and activities I've done</p>

    <?php if (empty($projects)): ?>
        <p class="empty">No projects yet. Add some in the $projects array in index.php!</p>
    <?php endif; ?>

    <div class="project-grid">
        <?php foreach ($projects as $p):
            $isLink = ($p["type"] === "link" && !empty($p["link"]));
            $src = img($p["image"], $p["title"]);
        ?>
        <article class="project-card reveal" data-category="<?= e($p["category"]) ?>">
            <?php if ($isLink): ?>
            <!-- Website project -->
            <a class="project-thumb" href="<?= e($p["link"]) ?>" target="_blank" rel="noopener noreferrer" aria-label="Open <?= e($p["title"]) ?>">
                <img src="<?= $src ?>" alt="<?= e($p["title"]) ?>" loading="lazy">
                <span class="badge"><?= e($p["category"]) ?></span>
            </a>
            <?php else: ?>
            <!-- Graphic project -->
            <div class="project-thumb lightbox-trigger" role="button" tabindex="0"
                 data-src="<?= $src ?>" data-caption="<?= e($p["title"]) ?>" aria-label="View <?= e($p["title"]) ?>">
                <img src="<?= $src ?>" alt="<?= e($p["title"]) ?>" loading="lazy">
                <span class="badge"><?= e($p["category"]) ?></span>
            </div>
            <?php endif; ?>
            <div class="project-body">
                <h3><?= e($p["title"]) ?></h3>
                <p><?= e($p["description"]) ?></p>
                <?php if ($isLink): ?>
                    <a class="btn btn-primary btn-sm" href="<?= e($p["link"]) ?>" target="_blank" rel="noopener noreferrer">
                        View Project <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                <?php else: ?>
                    <button class="btn btn-primary btn-sm lightbox-trigger"
                            data-src="<?= $src ?>" data-caption="<?= e($p["title"]) ?>">
                        View Project <i class="fa-solid fa-expand"></i>
                    </button>
                <?php endif; ?>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- Achievements -->
<section class="section" id="achievements">
    <h2 class="section-title reveal">Achievements</h2>
    <p class="section-sub reveal">Awards, certificates and moments I'm proud of</p>

    <div class="certs-card reveal">
        <h3>Certificates</h3>

        <!-- Certificate preview -->
        <a class="certs-preview" href="<?= e($certPdf) ?>" target="_blank" rel="noopener noreferrer" title="Open all certificates (PDF)">
            <img src="<?= img($achievements[0]["thumb"], "Certificates") ?>" alt="Preview of my certificates">
        </a>
        <p class="certs-caption">TESDA NC II &amp; Cisco Networking Academy certificates</p>

        <ul class="certs-list">
            <?php foreach ($achievements as $a): ?>
            <li>
                <span><?= e($a["title"]) ?></span>
                <span class="certs-year"><?= e($a["year"]) ?></span>
            </li>
            <?php endforeach; ?>
        </ul>

        <a class="btn btn-primary btn-sm certs-btn" href="<?= e($certPdf) ?>" target="_blank" rel="noopener noreferrer">
            View all certificates <i class="fa-solid fa-arrow-up-right-from-square"></i>
        </a>
    </div>
</section>

<!-- Contact -->
<section class="section alt" id="contact">
    <h2 class="section-title reveal">Contact Me</h2>
    <p class="section-sub reveal">Let's talk! I'd love to hear from you</p>

    <div class="contact-grid contact-single">
        <div class="card reveal">
            <h3><i class="fa-solid fa-envelope"></i> Email</h3>
            <p><a class="email-link" href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= urlencode($contact["email"]) ?>" target="_blank" rel="noopener noreferrer"><?= e($contact["email"]) ?></a></p>
            <h3 class="mt"><i class="fa-solid fa-share-nodes"></i> Find me online</h3>
            <div class="socials">
                <?php foreach ($contact["socials"] as $s): ?>
                    <a href="<?= e($s["url"]) ?>" target="_blank" rel="noopener noreferrer"
                       aria-label="<?= e($s["name"]) ?>" title="<?= e($s["name"]) ?>">
                        <i class="<?= e($s["icon"]) ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

</main>

<footer class="footer">
    <p>© <?= date("Y") ?> <?= e($profile["name"]) ?></p>
</footer>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" aria-hidden="true">
    <button class="lightbox-close" id="lightboxClose" aria-label="Close preview">&times;</button>
    <figure>
        <img id="lightboxImg" src="" alt="">
        <figcaption id="lightboxCaption"></figcaption>
    </figure>
</div>

<button class="to-top" id="toTop" aria-label="Back to top"><i class="fa-solid fa-chevron-up"></i></button>

<script src="script.js"></script>
</body>
</html>