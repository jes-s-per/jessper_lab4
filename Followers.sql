CREATE TABLE Followers (
  id INT NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  follower_id INT NOT NULL,
  PRIMARY KEY (id)
);
