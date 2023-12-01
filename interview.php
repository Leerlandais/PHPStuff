<?php
$text = "";
$text2 = "";
if(isset($_GET['section'])){
    switch($_GET["section"]):
        case "inter2":
            $text = "Answer 1 Here";
            $text2 = "Different Answer 1";
            break;
        case "inter3":
            $text = "Answer 2";
            $text2 = "Different Answer 2";
            break;
        case "inter4":
            $text = "Answer 3, of course";
            $text2 = "Different Answer 3";
            break;
        case "inter5":
            $text = "Fourth answer";
            $text2 = "Different Answer 4";
            break;
        case "inter6":
            $text = "Another answer here";
            $text2 = "Different Answer 5";
            break;
    endswitch;

}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <hr>                
                <h1 id="hspec">Site Préformation de Lee Brennan</h1>    
                <hr>
            </div>         
            <ul>
                <a href="../index.html"><li>Home</li></a> 
                <a href="rapport.html"><li>Entreprise</li></a>
                <a href="interview.html"><li>Interview</li></a>
                <a href="../expo/museum.html"><li>Musée</li></a>
                <a href="../expo/galerie1.html"><li>Galerie</li></a>
                <a href="../conclusion.html"><li>Conclusion</li></a>
            </ul>
        </nav>
    </header>
    <section id="interpad">
        <h2>Interview</h2>
            <div>
                <p class="interintro">J'ai envoyé un message à quelques amis pour leur dire que je cherchais quelqu'un à interviewer pour mon site. J'ai eu de la chance et deux personnes de milieux très différents se sont portées volontaires. À gauche se trouve <a href="https://www.linkedin.com/in/jddpro" target="_blank">JD Davis</a>, qui travaille de manière indépendante à Austin, au Texas. À droite se trouve <a href="https://be.linkedin.com/in/martin-copyright" target="_blank">Martin Copyright</a>, qui travaille pour ERG ici même à Bruxelles </p>

                <p class="interintro"><em><strong>Cliquez sur une question pour voir comment ils ont répondu</strong></em></p>

            </div>
            <div class="row">
                <div class="column" id="col1">
                    <?php
                        if(empty($text)){

                            ?>
                            <img src="JD.png" alt="">
                            <p>un texte accueil</p>
                            <?php

                        }else{
                            echo "<p>$text</p>";
                        }

                    ?>
    <!--                <a href="https://www.linkedin.com/in/jddpro" target="_blank">                Hi JD, can I use your linkedin profile photo on my site or would you prefer a different one? --- Hi Lee, go ahead it's my favorite of me 
                    <img src="../images/JD.png" alt="JD" title="Photo profil de linkedin">       Salut JD, puis-je utiliser ta photo de profil LinkedIn sur mon site ou préférerais-tu une autre ? --- Salut Lee, vas-y, c'est ma préférée de moi -->
                    </a>
                </div> 
    <!-- J'avais vraiment envie de le faire, que en cliquant sur une question, les réponses pertinentes de chaque personne s'ouvriraient. Après 4 ou 5 heures à essayer de comprendre comment le faire (et en apprenant beaucoup au passage), j'ai su que cela ne pouvait pas être fait comme je le voulais. Par conséquent, j'ai créé 6 pages identiques pour que cela paraisse fonctionner. J'ai vraiment hâte d'écrire cela en utilisant JavaScript !!! -->            
                <div class="column" id="col2">
                    <ul>
                        <a href="?section=inter2"><li>Pourquoi avez-vous décidé de vous lancer dans l'informatique?</li></a>
                        <a href="?section=inter3"><li>Quel est ton parcours professionnel?</li></a>
                        <a href="?section=inter4"><li>Comment se déroule une journée typique pour vous?</li></a>
                        <a href="?section=inter5"><li>Quelles qualités sont éssentielles pour un bon développeur selon vous?</li></a>
                        <a href="?section=inter6"><li>Des tips pour la suite?</li></a>
                    </ul>
                </div> 
                    <?php
                        if(empty($text)){
                        
                            ?>
                            <img src="MC.png" alt="">
                            <p>un texte accueil</p>
                            <?php

                        }else{
                            echo "<p>$text</p>";
                        }

                        ?>

                
                   <a href="https://be.linkedin.com/in/martin-copyright" target="_blank">          <!-- Puis-je utiliser ton avatar LinkedIn sur mon site ? -->
                    <img src="../images/MC.png" alt="" title="Photo profil de son linkedin">      <!-- Mais bien sur -->
                    </a>
            </div>    
            </div>
    </section>
    <br><br><br>
    <footer><hr>
        <h4 id="copyright">
            &copy; Lee Brennan
        </h4> <hr>
    </footer>
   
</body>
</html>

