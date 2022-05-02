# Code-Camp-Defi-ETNA
Code Camp du défi ETNA 
En groupe avec : Erwan_G, Johanna_M, Clément_V
I - Trombinoscope Employés
II - Ajout de profil
III - Profil
IV - Modification et Suppression de profil

I - Trombinoscope Employés

À la page /service , nous avons accès au trombinoscope des employés, avec une icone "Service" qui indique que nous sommes sur une page destinée aux employés en Service.
En dessous, on retrouve un select qui catégorise les différents services disponible, lorsque l'on clique sur le service voulu, les profils concernés par ce service seront affiché.

!!-------------------------------------------------------------------------------------------------------------------------------!! On peux apercevoir un contenaire avec "Responsable" en Titre, cette fonctionnalitée n'est pas disponible pour le moment mais elle permettrai d'affiché les reponsables concernés par leurs service.
!!-------------------------------------------------------------------------------------------------------------------------------!!  
Les employés sont affiché en colonne avec la photo de profil, le nom ainsi qu'un bouton "voir profil"

Le header est constitué de "Trombi des employés" qui permet de diriger vers la page trombi et il est aussi constitué d'un logo 'ajouté' qui permet de diriger vers la page ajouter un profil.

II - Ajout de profil

Une page plutot simple avec des champs à remplir ;

- nom
- Prénom
- Photo de profil
- Service : le service dont l'employé fait parti
- Responsable : Si l'utilisateur est le responsable d'un service, choisir le Service dont il est responsable si non le laisser en tant que employé
- Tags : Les profils peuvent avoir des tags pour définir un role plus précis à propos d'eux.
  !!-- Pour le moment l'utilisateur ne peux avoir seulement qu'un tag --!!
- Télèphone
- Email

Ainsi qu'un bouton pour valider la création du profil qui crée le profil puis nous renvoi au Trombinoscope avec tout les profils.

III - Profil

En cliquant sur "Voir Profil" de l'utilisateur souhaité on accède à son profil.

En arrivant sur cette page on aperçoit la photo de profil de l'utilisateur ainsi qu'un contenaire contenant les informations de l'employé.

- Le nom
- Le prénom
- Le service de l'employé, si le champ "Service" n'est pas rempli lors de la création du profil, il sera alors affiché "No-Service"
- L'email
- Le numéro de télephone
- Le responsable !!-- NB: Il faut remplir ce champ en tant que Employé si l'utilisateur n'est pas un Responsable de service, si le champ "Responsable" n'est pas rempli il sera un simple "Membre Etna" --!!
- Le tag !!-- NB: Si le champ n'est pas rempli il possèdera un tag "Utilisateur".

En rouge on peux constater qu'il y a deux boutons :
Modifier et Supprimer.

IV - Modification et Suppression de profil

La Modification de profil, comme son nom l'indique permet de modifier le profil, ce bouton redirige vers la page "modifProfil" qui est la même que l'ajout de profil, on re-rempli les champs avec les bonnes informations ou les changement puis on clique sur "Modifier le profil".

Pour la suppression de profil, L'utilisateur sera avertit qu'il supprimera le profil avec un pop up, Il devra alors valider la suppression ou l'annuler.

Conclusion :

Le site est pensé de façons simple avec un front accordé à celui de l'ETNA pour que l'utilisateur ait une meilleure compréhension du site et qu'il ne soit pas "perdu".
On ne pouvait pas refaire un front pour ce trombi si non l'utilisateur se croirait sur un autre site, le code couleur de l'etna est respecté ; Le blanc, Bleu, Vert, Rouge pour une meilleure compréhension des informations donnés. De plus le responcive fonctionne très bien.

NB : Le manque de temps nous a pas permis d'ajouter des fonctionnalités importante comme l'API et d'autres fonctionnalités que l'on a pensé en commencant ce projet.

Ce Projet fut plaisant à réaliser,
Merci d'avoir lu ce Read Me
Bonne Soirée/Bonne Journée.
