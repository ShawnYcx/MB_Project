DROP TABLE IF EXISTS account, mem_bank;

CREATE TABLE users (
username varchar(10) PRIMARY KEY,
email varchar(20),
password varchar(20)
);

CREATE TABLE mem_bank(
id int auto_increment PRIMARY KEY,
subject text,
body text,
sync_date date,
user varchar(10),
FOREIGN KEY (user) REFERENCES users(username)
);