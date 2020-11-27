<!-- pour la couleur de mes articles : dom JS -->


<?php
            //article individuel (penser à modif pour avoir article gris, article rose... intercalés)
            // pour chaque itération
            // if article === true
            // echo "<article class=\"gris article\">";
            // else
            // echo "<article class=\"gris article\">";
            $article = true;
            foreach($listemploi as $article) {
                $article = !$article;
                if($article==true) {
                    echo "<article class=\"gris article\">";
                } else {
                    echo "<article class=\"rose article\">";
                }
            }


        ?>