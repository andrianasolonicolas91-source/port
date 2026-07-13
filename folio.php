<?php
// ==========================
// Données du portfolio
// ==========================
$nom = "ANDRIANASOLO";
$prenom = "Nicolas";
$age = 20;
$formation = "Développement d'Application Web";
$titre = "Étudiant en Développement Web";
$ecole = "École Nationale d'Informatique (ENI) - Fianarantsoa";
$niveau = "2ème année";
$email = "andrianasolonicolas91@gmail.com";
$telephone = "+261 38 46 036 16";
$ville = "Antananarivo, Madagascar";
$photo = "nico.png";

$competences = [
    "HTML5 / CSS3",
    "PHP",
    "JavaScript",
    "MySQL",
    "Bootstrap",
    "Git / GitHub",
    "Réseaux (OSPF / RIP)"
];

$projets = [
    [
        "titre" => "Gestion de Banque",
        "contexte" => "Projet de fin d'année - L1",
        "description" => "Application permettant de déposer, retirer de l'argent et créer un compte utilisateur."
    ],
    [
        "titre" => "Gestion de Réservation de Voyage",
        "contexte" => "Projet réalisé en classe",
        "description" => "Permet d'ajouter un voyageur et de choisir sa place préférée. Si c'est une famille, un seul membre est ajouté ; le reste des places est simplement réservé."
    ],
    [
        "titre" => "Gestion de Colis",
        "contexte" => "Projet coopérative",
        "description" => "Permet d'ajouter un colis dans la coopérative, d'envoyer une notification par email et d'afficher un reçu au format PDF."
    ],
    [
        "titre" => "Routage IP (OSPF & RIP)",
        "contexte" => "Projet réseaux",
        "description" => "Configuration des protocoles de routage OSPF et RIP, avec mise en place de leur interconnexion."
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio de <?php echo htmlspecialchars($prenom . " " . $nom); ?></title>
<style>
    :root {
        --green: #00ff41;
        --green-dim: #0a8f2f;
        --dark: #0d0208;
        --panel: #071a0d;
        --gray: #7fdb9a;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body {
        background: var(--dark);
        color: var(--green);
        font-family: 'Courier New', Consolas, monospace;
        line-height:1.6;
        position: relative;
        overflow-x:hidden;
    }

    /* Fond animé style Matrix */
    #matrix-bg {
        position: fixed;
        top:0; left:0;
        width:100%; height:100%;
        z-index:-1;
        opacity:0.55;
    }

    header {
        text-align:center;
        padding: 70px 20px 40px;
        position:relative;
    }

    .avatar-wrap {
        width:150px;
        height:150px;
        margin: 0 auto 25px;
        border-radius:50%;
        overflow:hidden;
        border: 3px solid var(--green);
        box-shadow: 0 0 15px var(--green), 0 0 35px rgba(0,255,65,0.4);
        animation: pulse-glow 2.5s infinite ease-in-out;
    }
    .avatar-wrap img {
        width:100%;
        height:100%;
        object-fit:cover;
        filter: grayscale(15%) contrast(1.05);
    }
    @keyframes pulse-glow {
        0%,100% { box-shadow: 0 0 15px var(--green), 0 0 30px rgba(0,255,65,0.35); }
        50% { box-shadow: 0 0 25px var(--green), 0 0 55px rgba(0,255,65,0.6); }
    }

    header h1 {
        font-size: 2.3rem;
        letter-spacing:2px;
        text-shadow: 0 0 8px var(--green);
    }
    header h1::before { content: "> "; color: var(--green-dim); }

    #typed-subtitle {
        font-size:1.1rem;
        color: var(--gray);
        margin-top:10px;
        min-height:1.4em;
        border-right: 2px solid var(--green);
        display:inline-block;
        padding-right:4px;
        white-space:nowrap;
        overflow:hidden;
    }

    nav {
        background: rgba(7,26,13,0.9);
        border-top: 1px solid var(--green-dim);
        border-bottom: 1px solid var(--green-dim);
        position: sticky;
        top:0;
        z-index:10;
        backdrop-filter: blur(4px);
    }
    nav ul {
        list-style:none;
        display:flex;
        justify-content:center;
        gap:30px;
        padding:14px 0;
        flex-wrap:wrap;
    }
    nav a {
        text-decoration:none;
        color: var(--green);
        font-weight:600;
        transition: 0.2s;
        letter-spacing:1px;
    }
    nav a::before { content: "$ "; color: var(--green-dim); }
    nav a:hover {
        text-shadow: 0 0 8px var(--green);
        color:#fff;
    }

    section {
        max-width: 900px;
        margin: 0 auto;
        padding: 55px 20px;
        position:relative;
    }
    section h2 {
        font-size:1.6rem;
        margin-bottom:25px;
        color: var(--green);
        text-shadow: 0 0 6px var(--green);
        border-bottom: 1px dashed var(--green-dim);
        display:inline-block;
        padding-bottom:6px;
    }
    section h2::before { content: "// "; color: var(--green-dim); }

    .terminal-box {
        background: var(--panel);
        border: 1px solid var(--green-dim);
        border-radius: 8px;
        box-shadow: 0 0 12px rgba(0,255,65,0.15);
        padding:20px;
    }
    .terminal-box::before {
        content: "● ● ●";
        display:block;
        color: var(--green-dim);
        letter-spacing:4px;
        margin-bottom:14px;
        font-size:0.8rem;
    }

    .about-grid {
        display:grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }
    .about-grid div { padding:6px 0; }
    .about-grid strong { color:#fff; }
    .about-grid span.tag { color: var(--gray); }

    .skills-list {
        display:flex;
        flex-wrap:wrap;
        gap:12px;
    }
    .skills-list span {
        background: transparent;
        border: 1px solid var(--green);
        color: var(--green);
        padding:8px 16px;
        border-radius:4px;
        font-size:0.9rem;
        font-weight:600;
        transition:0.2s;
    }
    .skills-list span:hover {
        background: var(--green);
        color: var(--dark);
        box-shadow: 0 0 10px var(--green);
    }

    .projects-grid {
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap:20px;
    }
    .project-card {
        background: var(--panel);
        padding:20px;
        border-radius:8px;
        border: 1px solid var(--green-dim);
        transition: 0.25s;
    }
    .project-card:hover {
        border-color: var(--green);
        box-shadow: 0 0 15px rgba(0,255,65,0.3);
        transform: translateY(-3px);
    }
    .project-card .contexte {
        display:inline-block;
        font-size:0.75rem;
        color: var(--dark);
        background: var(--green);
        padding:2px 8px;
        border-radius:3px;
        margin-bottom:10px;
        font-weight:bold;
    }
    .project-card h3 { margin-bottom:8px; color:#fff; }
    .project-card p { color: var(--gray); font-size:0.92rem; }

    .contact-box p { margin-bottom:10px; }
    .contact-box strong { color:#fff; }
    .contact-box a { color: var(--green); text-decoration:none; }
    .contact-box a:hover { text-shadow: 0 0 8px var(--green); }

    footer {
        text-align:center;
        padding:25px;
        border-top: 1px solid var(--green-dim);
        color: var(--gray);
        margin-top:40px;
        font-size:0.85rem;
    }
</style>
</head>
<body>

<canvas id="matrix-bg"></canvas>

<header>
    <div class="avatar-wrap">
        <img src="<?php echo htmlspecialchars($photo); ?>" alt="Photo de <?php echo htmlspecialchars($prenom); ?>">
    </div>
    <h1><?php echo htmlspecialchars($prenom . " " . $nom); ?></h1>
    <div id="typed-subtitle"></div>
</header>

<nav>
    <ul>
        <li><a href="#apropos">apropos</a></li>
        <li><a href="#competences">competences</a></li>
        <li><a href="#projets">projets</a></li>
        <li><a href="#contact">contact</a></li>
    </ul>
</nav>

<section id="apropos">
    <h2>À propos de moi</h2>
    <div class="terminal-box">
        <div class="about-grid">
            <div><span class="tag">nom:</span> <strong><?php echo htmlspecialchars($nom); ?></strong></div>
            <div><span class="tag">prenom:</span> <strong><?php echo htmlspecialchars($prenom); ?></strong></div>
            <div><span class="tag">age:</span> <strong><?php echo htmlspecialchars($age); ?> ans</strong></div>
            <div><span class="tag">formation:</span> <strong><?php echo htmlspecialchars($formation); ?></strong></div>
            <div><span class="tag">ecole:</span> <strong><?php echo htmlspecialchars($ecole); ?></strong></div>
            <div><span class="tag">niveau:</span> <strong><?php echo htmlspecialchars($niveau); ?></strong></div>
            <div><span class="tag">ville:</span> <strong><?php echo htmlspecialchars($ville); ?></strong></div>
            <div><span class="tag">statut:</span> <strong>Étudiant</strong></div>
        </div>
    </div>
</section>

<section id="competences">
    <h2>Compétences</h2>
    <div class="skills-list">
        <?php foreach ($competences as $competence): ?>
            <span><?php echo htmlspecialchars($competence); ?></span>
        <?php endforeach; ?>
    </div>
</section>

<section id="projets">
    <h2>Projets</h2>
    <div class="projects-grid">
        <?php foreach ($projets as $projet): ?>
            <div class="project-card">
                <span class="contexte"><?php echo htmlspecialchars($projet['contexte']); ?></span>
                <h3><?php echo htmlspecialchars($projet['titre']); ?></h3>
                <p><?php echo htmlspecialchars($projet['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="contact">
    <h2>Contact</h2>
    <div class="terminal-box contact-box">
        <p><strong>email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
        <p><strong>telephone:</strong> <?php echo htmlspecialchars($telephone); ?></p>
        <p><strong>localisation:</strong> <?php echo htmlspecialchars($ville); ?></p>
    </div>
</section>

<footer>
    &copy; <?php echo date("Y"); ?> - Portfolio de <?php echo htmlspecialchars($prenom . " " . $nom); ?>
</footer>

<script>
// ===== Animation fond Matrix =====
const canvas = document.getElementById('matrix-bg');
const ctx = canvas.getContext('2d');
function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = document.body.scrollHeight;
}
resizeCanvas();
window.addEventListener('resize', resizeCanvas);

const chars = "アカサタナハマヤラワ01アイウエオガギグゲゴサシスセソABCDEFGH0123456789";
const fontSize = 16;
let columns = Math.floor(canvas.width / fontSize);
let drops = Array(columns).fill(1);

function drawMatrix() {
    ctx.fillStyle = "rgba(13, 2, 8, 0.08)";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = "#00ff41";
    ctx.font = fontSize + "px monospace";
    for (let i = 0; i < drops.length; i++) {
        const text = chars[Math.floor(Math.random() * chars.length)];
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }
        drops[i]++;
    }
}
setInterval(drawMatrix, 40);

// ===== Effet de frappe (typing) sur le sous-titre =====
const phrases = [
    "> Étudiant en Développement d'Application Web",
    "> 2ème année - ENI Fianarantsoa",
    "> Passionné de code & de réseaux"
];
let phraseIndex = 0, charIndex = 0, deleting = false;
const typedEl = document.getElementById('typed-subtitle');

function typeLoop() {
    const current = phrases[phraseIndex];
    if (!deleting) {
        typedEl.textContent = current.substring(0, charIndex + 1);
        charIndex++;
        if (charIndex === current.length) {
            deleting = true;
            setTimeout(typeLoop, 1400);
            return;
        }
    } else {
        typedEl.textContent = current.substring(0, charIndex - 1);
        charIndex--;
        if (charIndex === 0) {
            deleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
        }
    }
    setTimeout(typeLoop, deleting ? 35 : 55);
}
typeLoop();
</script>

</body>
</html>