<?php
   function getTableau()
   {
      $tab = array(
            "name" => "mainBalise",                                 // <mainBalise
            "attributs" => array(
                  "encodage" => "utf8",                             //     encodage = "utf8"
                  "language" => "fr",                               //     language = "fr"
                  "style"    => "presentation.css",                 //     style = "presentation.css"
               ),                                                   // >
            0 => array(
                  "name" => "presentation",                         //     <presentation>
                  "attributs" => array(),
                  0 => "Texte de présentation de l'",               //         Texte de présentation de l'
                  1 => array(
                        "name" => "strong",                         //         <strong>
                        "attributs" => array(),
                        0 => "offre de formation",                  //             offre de formation
                     ),                                             //         </strong>
                  2 => "universitaire.",                            //     </presentation>
               ),
            1 =>array(
                  "name" => "parcours",                             //     <parcours>
                  "attributs" => array(),
                  0 => array(
                        "name" => "unparcours",                     //         <unparcours
                        "attributs" => array(
                              "id" => "13",                         //             id = "13"
                           ),                                       //         >
                        0 => array(
                              "name" => "niveau",                   //             <niveau>
                              "attributs" => array(),
                              0 => "Licence",                       //                 Licence
                           ),                                       //             </niveau>
                        1 => array(
                              "name" => "nom",                      //             <nom>
                              "attributs" => array(),
                              0 => "Informatique",                  //                 Informatique
                           ),                                       //             </nom>
                        2 => array(
                              "name" => "ues",                      //             <ues>
                              "attributs" => array(),
                              0 => array(
                                    "name" => "ue",                 //                 <ue
                                    "attributs" => array(
                                          "id" => "1372",           //                     id = "1372"
                                       ),                           //                 >
                                    0 => array(
                                          "name" => "semestre",     //                     <semestre>
                                          "attributs" => array(),
                                          0 => "5",                 //                         5
                                       ),                           //                     </semestre>
                                 ),                                 //                 </ue>
                              1 => array(
                                    "name" => "ue",                 //                 <ue
                                    "attributs" => array(
                                          "id" => "2714",           //                     id = "2714"
                                       ),                           //                 >
                                    0 => array(
                                          "name" => "semestre",     //                     <semestre>
                                          "attributs" => array(),
                                          0 => "5",                 //                         5
                                       ),                           //                     </semestre>
                                 ),                                 //                 </ue>
                              2 => array(
                                    "name" => "ue",                 //                 <ue
                                    "attributs" => array(
                                          "id" => "1279",           //                     id = "1279"
                                       ),                           //                 >
                                    0 => array(
                                          "name" => "semestre",     //                     <semestre>
                                          "attributs" => array(),
                                          0 => "6",                 //                         6
                                       ),                           //                     </semestre>
                                 ),                                 //                 </ue>
                           ),                                       //             </ues>
                     ),                                             //         </unparcours>
                  1 => array(
                        "name" => "unparcours",                     //         <unparcours
                        "attributs" => array(
                              "id" => "22",                         //             id = "22"
                           ),                                       //         >
                        0 => array(
                              "name" => "niveau",                   //             <niveau>
                              "attributs" => array(),
                              0 => "Licence",                       //                 Licence
                           ),                                       //             </niveau>
                        1 => array(
                              "name" => "nom",                      //             <nom>
                              "attributs" => array(),
                              0 => "Mathématiques",                  //                 Mathématiques
                           ),                                       //             </nom>
                        2 => array(
                              "name" => "ues",                      //             <ues>
                              "attributs" => array(),
                              0 => array(
                                    "name" => "ue",                 //                 <ue
                                    "attributs" => array(
                                          "id" => "1004",           //                     id = "1004"
                                       ),                           //                 >
                                    0 => array(
                                          "name" => "semestre",     //                     <semestre>
                                          "attributs" => array(),
                                          0 => "2",                 //                         2
                                       ),                           //                     </semestre>
                                 ),                                 //                 </ue>
                              1 => array(
                                    "name" => "ue",                 //                 <ue
                                    "attributs" => array(
                                          "id" => "22283",          //                     id = "22283"
                                       ),                           //                 >
                                    0 => array(
                                          "name" => "semestre",     //                     <semestre>
                                          "attributs" => array(),
                                          0 => "2",                 //                         2
                                       ),                           //                     </semestre>
                                 ),                                 //                 </ue>
                           ),                                       //             </ues>
                     ),                                             //         </unparcours>
               ),                                                   //     </parcours>
            2 =>array(
                  "name" => "ues",                                  //     <ues>
                  "attributs" => array(),
                  0 => array(
                        "name" => "ue",                             //         <ue
                        "attributs" => array(
                              "id" => "22283",                      //             id = "22283"
                           ),                                       //         >
                        0 => array(
                              "name" => "nom",                      //             <nom>
                              "attributs" => array(),
                              0 => "Probabilités",                  //                 Probabilités
                           ),                                       //             </nom>
                        1 => array(
                              "name" => "volume",                   //             <volume>
                              "attributs" => array(),
                              0 => "60",                            //                 60
                           ),                                       //             </volume>
                     ),                                             //         </ue>
                  1 => array(
                        "name" => "ue",                             //         <ue
                        "attributs" => array(
                              "id" => "1279",                       //             id = "1279"
                           ),                                       //         >
                        0 => array(
                              "name" => "nom",                      //             <nom>
                              "attributs" => array(),
                              0 => "Bases de données",              //                 Bases de données
                           ),                                       //             </nom>
                        1 => array(
                              "name" => "volume",                   //             <volume>
                              "attributs" => array(),
                              0 => "56",                            //                 56
                           ),                                       //             </volume>
                     ),                                             //         </ue>
               ),                                                   //     </ues>
            3 => array(
                  "name" => "conclusion",                           //     <conclusion>
                  "attributs" => array(),
               ),                                                   //     </conclusion>
         );                                                         // </mainBalise>

      return $tab;
   }
?>
