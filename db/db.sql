CREATE DATABASE IF NOT EXISTS unefa_challenge;

use unefa_challenge;

CREATE TABLE IF NOT EXISTS questions (
					id 	     INT      AUTO_INCREMENT,
					user_id      INT DEFAULT  NULL,
					category_id  INT DEFAULT  NULL,
					question     TEXT,
					answer       BOOLEAN      DEFAULT 1,
					PRIMARY KEY(id)
		       );