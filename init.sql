
CREATE TABLE IF NOT EXISTS articles (
	id SERIAL,
	designation text,
	prix_ht money,
	category varchar(256)
);

CREATE TABLE IF NOT EXISTS articles_categories (
	name varchar(256) PRIMARY KEY,
	parent varchar(256)
);


CREATE TABLE IF NOT EXISTS commandes (
	id SERIAL,
	author varchar(256),
	fournisseur varchar(256),
	status varchar(256)
);

CREATE TABLE IF NOT EXISTS commandes_articles (
	id_commande integer,
	id_article integer,
	quantity integer,
	status varchar(256),
	PRIMARY KEY(id_commande, id_article)
);
