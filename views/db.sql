CREATE DATABASE IF NOT EXISTS unefa_challenge;

use unefa_challenge;

CREATE TABLE IF NOT EXISTS questions (
					id 	     INT(10)      AUTO_INCREMENT,
					user_id      INT DEFAULT  NULL,
					category_id  INT DEFAULT  NULL,
					question     VARCHAR(255) NOT NULL,
					answer       BOOLEAN      DEFAULT 1,
					PRIMARY KEY(id)
		       );