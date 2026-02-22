

Requêtes 1–3 : Jointures sur 2 tables

-- Requête 1 : Commandes avec le nom du client (INNER JOIN)

SELECT * 
FROM commandes
INNER JOIN utilisateurs on commandes.utilisateur_id = utilisateurs.id

-- Requête 2 : Utilisateurs qui n'ont JAMAIS commandé (LEFT JOIN + IS NULL)
nothing

-- Requête 3 : Produits avec leur catégorie

SELECT p.nom, c.libelle
FROM produits p
LEFT JOIN categories c ON p.categorie_id = c.id

-- Requête 4 : Montant total par commande (3 tables)

SELECT c.id AS commande, c.date_commande, SUM(l.quantite * p.prix) AS total
FROM commandes c
JOIN lignes_commande l ON c.id = l.commande_id
JOIN produits p ON p.id = l.produit_id
GROUP BY c.id

Refrenced the solution once

-- Requête 5 : Clients ayant dépensé plus de 150€ (HAVING)

SELECT c.id AS commande, u.nom, SUM(l.quantite * l.prix_unitaire) AS total
FROM commandes c
JOIN lignes_commande l ON c.id = l.commande_id
JOIN utilisateurs u ON u.id = c.utilisateur_id
GROUP BY u.nom
HAVING total > 150 

-- Requête 8 : CA par catégorie (4 tables)

SELECT ca.libelle, COUNT(DISTINCT(p.id)) AS amount ,SUM(l.quantite * p.prix) AS total
FROM commandes c
INNER JOIN lignes_commande l ON c.id = l.commande_id
INNER JOIN produits p ON p.id = l.produit_id
INNER JOIN categories ca ON p.categorie_id = ca.id
GROUP BY ca.libelle;

Refrenced the solution once


