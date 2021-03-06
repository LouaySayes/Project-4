<?

"CREATE TABLE 'users'(
   'id_users' INT,
   'email' VARCHAR(50) ,
   PRIMARY KEY('id_users')
)";

"CREATE TABLE 'category'(
   id_category INT,
   category VARCHAR(50) ,
   PRIMARY KEY(id_category)
)";

"CREATE TABLE 'ad'(
   'id_ad' INT,
   'title' VARCHAR(50) ,
   'description' TEXT,
   'price' DECIMAL(15,2)  ,
   'location' VARCHAR(50) ,
   'ad_date' DATETIME,
   'id_users' INT NOT NULL,
   'id_category' INT NOT NULL,
   PRIMARY KEY('id_ad'),
   FOREIGN KEY('id_users') REFERENCES 'users'('id_users'),
   FOREIGN KEY('id_category') REFERENCES 'category'('id_category')
)";

"CREATE TABLE 'image'(
   'id_image' INT,
   'image' VARCHAR(255) ,
   'id_ad' INT NOT NULL,
   PRIMARY KEY('id_image'),
   FOREIGN KEY('id_ad') REFERENCES 'ad'('id_ad')
)";
?>