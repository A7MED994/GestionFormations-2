<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Accueil - GestionFormations</title>

<link rel="stylesheet"
href="/GestionFormations/assets/style.css">

<style>

/* HERO */

.hero{

    position:relative;

    overflow:hidden;

    background:linear-gradient(
        135deg,
        #071E3D,
        #0F2D52,
        #00A8E8
    );

    color:white;

    padding:120px 60px;

    border-radius:40px;

    text-align:center;

    box-shadow:0 25px 50px rgba(0,0,0,0.2);

    animation:fadeIn 1.2s ease;

}

/* BLOBS */

.blob{

    position:absolute;

    border-radius:50%;

    filter:blur(50px);

    opacity:0.4;

    animation:float 8s infinite ease-in-out;

}

.blob1{

    width:250px;
    height:250px;

    background:#00A8E8;

    top:-80px;
    left:-60px;

}

.blob2{

    width:300px;
    height:300px;

    background:#4facfe;

    bottom:-100px;
    right:-80px;

}

/* HERO CONTENT */

.hero-content{

    position:relative;

    z-index:2;

}

.hero h1{

    color:white;

    font-size:72px;

    line-height:1.15;

    margin-bottom:25px;

    animation:slideUp 1s ease;

}

.hero p{

    font-size:22px;

    max-width:850px;

    margin:auto;

    margin-bottom:45px;

    opacity:0.95;

    line-height:1.7;

    animation:fadeIn 1.5s ease;

}

/* BUTTONS */

.hero-buttons{

    display:flex;

    justify-content:center;

    gap:20px;

    flex-wrap:wrap;

}

.btn-secondary{

    display:inline-block;

    padding:14px 24px;

    border-radius:14px;

    text-decoration:none;

    background:rgba(255,255,255,0.15);

    backdrop-filter:blur(12px);

    color:white;

    border:1px solid rgba(255,255,255,0.25);

    transition:0.3s;

}

.btn-secondary:hover{

    transform:translateY(-4px);

    background:rgba(255,255,255,0.25);

}

/* STATS */

.stats{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(220px,1fr));

    gap:25px;

    margin-top:45px;

}

.stat-card{

    background:rgba(255,255,255,0.12);

    backdrop-filter:blur(14px);

    border:1px solid rgba(255,255,255,0.2);

    border-radius:24px;

    padding:30px;

    transition:0.3s;

    animation:fadeIn 2s ease;

}

.stat-card:hover{

    transform:translateY(-8px);

    background:rgba(255,255,255,0.18);

}

.stat-card h2{

    color:white;

    font-size:42px;

    margin-bottom:10px;

}

.stat-card p{

    font-size:17px;

    margin:0;

}

/* ANIMATIONS */

@keyframes float{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-25px);
    }

    100%{
        transform:translateY(0px);
    }

}

@keyframes fadeIn{

    from{
        opacity:0;
    }

    to{
        opacity:1;
    }

}

@keyframes slideUp{

    from{
        transform:translateY(40px);
        opacity:0;
    }

    to{
        transform:translateY(0);
        opacity:1;
    }

}

/* RESPONSIVE */

@media(max-width:768px){

    .hero{
        padding:80px 25px;
    }

    .hero h1{
        font-size:46px;
    }

    .hero p{
        font-size:18px;
    }

}

</style>

</head>

<body>

<div class="navbar">

<div class="logo">

GestionFormations

</div>

<div class="nav-links">

<a href="index.php?page=formations">
Formations
</a>

<a href="index.php?page=inscription">
Inscription
</a>

</div>

</div>

<div class="hero">

<div class="blob blob1"></div>

<div class="blob blob2"></div>

<div class="hero-content">

<h1>

Apprenez les compétences<br>
du futur 🚀

</h1>

<p>

Plateforme moderne de gestion des formations,
apprentissage en ligne et développement des compétences
dans les domaines technologiques les plus demandés.

</p>

<div class="hero-buttons">

<a class="btn"
href="index.php?page=formations">

Découvrir les formations

</a>

<a class="btn-secondary"
href="index.php?page=inscription">

Commencer maintenant

</a>

</div>

<div class="stats">

<div class="stat-card">

<h2>4+</h2>

<p>Formations disponibles</p>

</div>

<div class="stat-card">

<h2>100%</h2>

<p>Plateforme MVC moderne</p>

</div>

<div class="stat-card">

<h2>24/7</h2>

<p>Accès aux cours en ligne</p>

</div>

</div>

</div>

</div>

</body>

</html>