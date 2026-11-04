# Blog — Relations et Cardinalités

> Modélisation des relations entre les entités selon la méthode Merise.

## 1. Présentation

Ce document définit les relations entre les entités du système Blog, leurs cardinalités ainsi que les règles de gestion associées.

### Entités concernées

- `VILLE` : représente les villes des auteurs.
- `AUTEUR` : représente les personnes qui rédigent les articles.
- `ARTICLE` : représente les publications du blog.
- `CATEGORIE` : permet de classer les articles.
- `TAG` : permet d'associer des mots-clés aux articles.

---

## 2. Tableau récapitulatif des relations

| Entité A | Cardinalité A | Relation | Cardinalité B | Entité B |
|:---|:---:|:---:|:---:|:---|
| VILLE | (1,N) | accueille | (1,1) | AUTEUR |
| AUTEUR | (1,N) | rédige | (1,1) | ARTICLE |
| CATEGORIE | (0,N) | regroupe | (1,1) | ARTICLE |
| ARTICLE | (0,N) | possède | (0,N) | TAG |

---

## 3. Détail des règles de gestion

### 3.1. Relation VILLE — AUTEUR

**Verbe :** Accueille

**Cardinalités :**
- VILLE : (1,N)
- AUTEUR : (1,1)

**Règle de gestion :**

Une ville accueille un ou plusieurs auteurs. Un auteur habite dans une seule ville.

**Type de relation :** 1–N

### 3.2. Relation AUTEUR — ARTICLE

**Verbe :** Rédige

**Cardinalités :**
- AUTEUR : (1,N)
- ARTICLE : (1,1)

**Règle de gestion :**

Un auteur rédige un ou plusieurs articles. Chaque article est rédigé par un seul auteur.

**Type de relation :** 1–N

### 3.3. Relation CATEGORIE — ARTICLE

**Verbe :** Regroupe

**Cardinalités :**
- CATEGORIE : (0,N)
- ARTICLE : (1,1)

**Règle de gestion :**

Une catégorie peut regrouper zéro ou plusieurs articles. Chaque article appartient obligatoirement à une seule catégorie.

**Type de relation :** 1–N

### 3.4. Relation ARTICLE — TAG

**Verbe :** Possède

**Cardinalités :**
- ARTICLE : (0,N)
- TAG : (0,N)

**Règle de gestion :**

Un article peut posséder zéro ou plusieurs tags. Un tag peut être associé à zéro ou plusieurs articles.

**Type de relation :** N–N

---

## 4. Synthèse des cardinalités

| Relation | Type |
|:---|:---:|
| VILLE — AUTEUR | 1–N |
| AUTEUR — ARTICLE | 1–N |
| CATEGORIE — ARTICLE | 1–N |
| ARTICLE — TAG | N–N |

### Rappel méthodologique

Une cardinalité est définie à partir de deux critères :

1. **Minimum :** participation obligatoire (1) ou facultative (0).
2. **Maximum :** participation unique (1) ou multiple (N).

Les cardinalités permettent de déterminer la nature des relations entre les entités dans le Modèle Conceptuel de Données (MCD).

---

## 5. Conclusion

Les relations et les cardinalités définies dans ce document constituent la base de la modélisation conceptuelle de la base de données du Blog.

Elles permettront de construire un Modèle Conceptuel de Données (MCD) cohérent, conformément à la méthode Merise.

