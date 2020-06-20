
<?php
require 'STD.php';
require 'PRF.php';



$prof = new Professeur\Professeur('AHMED', array(

                    new etudiant\etudiant('MOUAD'),

                    new etudiant\etudiant('ISMAIL'),

                    new etudiant\etudiant('AMINE'),

                    new etudiant\etudiant('IMAD'),

                    new etudiant\etudiant('CHAIMAE'),

                    new etudiant\etudiant('REDA'),

                    new etudiant\etudiant('REDA'),

                    new etudiant\etudiant('REDA')
                                                   ));



$prof->Students("Dr");