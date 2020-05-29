CREATE TABLE account_password(
	password_id serial PRIMARY KEY,
	password_contents VARCHAR (30) NOT NULL
);

CREATE TABLE user_name (
	user_id serial PRIMARY KEY,
	username VARCHAR (50) UNIQUE NOT NULL,
	CONSTRAINT username_id_fkey FOREIGN KEY (user_id)
	REFERENCES account_password (password_id)

);

CREATE TABLE note(
	note_id serial PRIMARY KEY,
	note_contents STRING
);

CREATE TABLE rating(
	rating_id serial PRIMARY KEY,
	day_rating integer NOT NULL
);

CREATE TABLE day(
	day_id serial PRIMARY KEY,
	day_date DATE,
	CONSTRAINT day_id_fkey FOREIGN KEY (day_id)
	REFERENCES note (note_id)
);
