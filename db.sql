CREATE TABLE register (
	 user_id nt(11) AUTO_INCREMENT PRIMARY KEY not null,
	 username varchar(256) not null,	 
	user_email varchar(256) not null,
	user_password varchar(256) not null,	
);
--Testing the insertiion to db
-- INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Test', 'TEst', 'test@gmail.com', 'testadmin', 'test123');