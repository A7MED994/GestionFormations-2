<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Nos Formations</title>

<link rel="stylesheet"
href="/GestionFormations/assets/style.css">

<style>

/* HERO */

.page-header{

    background:linear-gradient(
        135deg,
        #071E3D,
        #0F2D52,
        #00A8E8
    );

    padding:80px 50px;

    border-radius:35px;

    color:white;

    text-align:center;

    margin-bottom:50px;

    position:relative;

    overflow:hidden;

    box-shadow:0 20px 50px rgba(0,0,0,0.18);

}

.page-header h1{

    color:white;

    font-size:60px;

    margin-bottom:20px;

}

.page-header p{

    font-size:20px;

    opacity:0.95;

}

/* GRID */

.formations-grid{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(350px,1fr));

    gap:35px;

}

/* CARD */

.formation{

    background:white;

    border-radius:30px;

    overflow:hidden;

    position:relative;

    box-shadow:0 15px 40px rgba(0,0,0,0.08);

    transition:0.4s;

    border:1px solid #eef2f7;

}

.formation:hover{

    transform:
    translateY(-12px)
    scale(1.02);

    box-shadow:0 25px 50px rgba(0,0,0,0.16);

}

/* TOP */

.card-top{

    padding:35px;

    background:linear-gradient(
        135deg,
        #0F2D52,
        #00A8E8
    );

    color:white;

}

.card-top h2{

    color:white;

    font-size:30px;

    margin-bottom:15px;

}

/* CONTENT */

.card-content{

    padding:30px;

}

.card-content p{

    line-height:1.8;

    color:#555;

    margin-bottom:20px;

}

/* BADGES */

.badges{

    display:flex;

    gap:12px;

    flex-wrap:wrap;

    margin-bottom:25px;

}

.badge{

    padding:10px 14px;

    border-radius:30px;

    font-size:14px;

    font-weight:600;

}

.duration{

    background:#eef7ff;

    color:#0077b6;

}

.level{

    background:#eafaf1;

    color:#27ae60;

}

/* PRICE */

.price{

    font-size:42px;

    font-weight:700;

    color:#00A8E8;

    margin-bottom:25px;

}

.price span{

    font-size:18px;

    color:#888;

}

/* ICON */

.course-icon{

    font-size:55px;

    margin-bottom:20px;

}

/* BUTTON */

.btn-course{

    width:100%;

    display:block;

    text-align:center;

    padding:16px;

    border-radius:16px;

    background:linear-gradient(
        135deg,
        #0F2D52,
        #00A8E8
    );

    color:white;

    text-decoration:none;

    font-weight:600;

    transition:0.3s;

}

.btn-course:hover{

    transform:translateY(-3px);

    opacity:0.95;

}

/* FLOATING GLOW */

.glow{

    position:absolute;

    width:180px;

    height:180px;

    background:#00A8E8;

    border-radius:50%;

    filter:blur(80px);

    opacity:0.15;

    top:-50px;

    right:-50px;

}

/* RESPONSIVE */

@media(max-width:768px){

    .page-header{

        padding:60px 25px;

    }

    .page-header h1{

        font-size:42px;

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

<a href="index.php">

Accueil
</a>

<a href="index.php?page=formations">

Formations

</a>

<a href="index.php?page=inscription">

Inscription

</a>

</div>

</div>

<div class="page-header">

<h1>

Nos Formations 🚀

</h1>

<p>

Développez vos compétences avec des formations
modernes et professionnelles.

</p>

</div>

<div class="formations-grid">

<?php foreach ($formations as $f): ?>

<div class="formation">

<div class="glow"></div>

<div class="card-top">

<div class="course-icon">

🎓

</div>

<h2>

<?= htmlspecialchars($f['titre']) ?>

</h2>

</div>

<div class="card-content">

<p>

<?= htmlspecialchars($f['description']) ?>

</p>

<div class="badges">

<div class="badge duration">

⏳ <?= htmlspecialchars($f['duree']) ?>

</div>

<div class="badge level">

📘 <?= htmlspecialchars($f['niveau']) ?>

</div>

</div>

<div class="price">

<?= htmlspecialchars($f['prix']) ?>

<span>DT</span>

</div>

<a class="btn-course"
href="index.php?page=inscription&formation_id=<?= $f['id'] ?>">

S'inscrire maintenant

</a>

</div>

</div>

<?php endforeach; ?>

</div>

</body>

</html>