use mysql;

create database products;

	use products;

	create table product(
id int primary key auto_increment,
product_name varchar(99) not null,
price decimal(12,2) not null,
is_active boolean not null
);
	