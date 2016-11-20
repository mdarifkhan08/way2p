create table ip_address(
id int(11) unsigned not null auto_increment,
ip_address varchar(30) not null,
page_link varchar(255) not null,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
changed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key(id)
);

create table contact(
id int(11) unsigned not null auto_increment,
email varchar(255) default null,
message text default null,
ip_address varchar(30) default null,
primary key(id)
);