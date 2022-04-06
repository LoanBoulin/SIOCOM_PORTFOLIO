# SIOCOM_PORTFOLIO

## Description

Le projet SIOCOM_PORTFOLIO est une évolution du projet Portfolio, son objectif est d'ajouter des fonctionnalités de communication et de travail entre les professeurs et les élèves de la section SIO du Lycée Jean Rostand

### Spécifications techniques
Le langage utilisé est **PHP**, avec le framework **Symfony 5**. Le moteur de templates utilisé est **Twig**.

## L'application

### Accès

Adresse de l'application [SIOCOM](172.20.177.77/portfolio_SIOCOM/public) (accessible uniquement depuis le réseau local SIO): 
``` 
172.20.177.77/portfolio_SIOCOM/public
```

### Authentification et autorisation

Les autorisations et contrôles d'accès sont basés sur 3 rôles principaux :

- **Etudiants** : 
    - ``` flo.rousseau14210@gmail.com / mpFlorian ```
    - ``` loanboulin@gmail.com / mpLoan ```
- **Enseignants** : 
    - ``` zakina.annouche@ac-normandie.fr / mpZakina ```
- **Administrateurs** : 
    - ```adminOld@rostand.fr / mpAdmin ```


## Base de données 

### Accès

La [base de données MySQL](http://172.20.177.77/phpmyadmin/index.php?route=/sql&server=1&db=portfolioV3) (accessible uniquement depuis le réseau local SIO): 
``` 
http://172.20.177.77/phpmyadmin/index.php?route=/sql&server=1&db=portfolioV3

ADM_SIOC / mpAdmSioc
```

### Script

Le [script SQL](https://github.com/LoanBoulin/SIOCOM_PORTFOLIO/blob/main/BDD/portfolio.sql) de la base de données, directement importable : 
``` 
https://github.com/LoanBoulin/SIOCOM_PORTFOLIO/blob/main/BDD/portfolio.sql
```

### Modèle conceptuel des données

Le [MCD](https://github.com/LoanBoulin/SIOCOM_PORTFOLIO/blob/main/BDD/MCD.png) de la base de données, ayant subi de légères modifications : 

![MCD](https://github.com/LoanBoulin/SIOCOM_PORTFOLIO/blob/main/BDD/MCD.png)

## FTP

Le FTP est utilisable avec les identifiants : 
``` 
Hôte : 172.20.177.77
Identifiant : root
Mot de passe : @dm5RV77
Port : 22
```

## GitHub

Le [GitHub](https://github.com/LoanBoulin/SIOCOM_PORTFOLIO/) du projet, contenant l'application & le script de BDD: 
``` 
https://github.com/LoanBoulin/SIOCOM_PORTFOLIO/
```
## Auteurs

- [Antonin DEPOILLY](https://www.github.com/ADepoilly)
- [Loan BOULIN](https://www.github.com/LoanBoulin)
- [Victor RENAULT](https://www.github.com/0Victor1)
- [Florian ROUSSEAU](https://www.github.com/Florian-Rousseau1)


## A Faire

- Ajouter les comptes
- Ajouter des ressources à un post
- Affichage date dans formulaire
- Faire toute la partie des ressources
- Corriger le probleme de la suppression d'un groupe
- Corriger le probleme de l'ajout d'un groupe dans un projetDef
