# create table my_orders

create table Customers
(
  id int auto_increment primary key,
  email varchar(100) unique not null,
  name varchar(100) default "customer",
  phone tinyint unsigned not null
);

create table Deliveries
(
  id int auto_increment primary key,
  title varchar(255) not null,
  delivery_id smallint not null
);

create table Markets
(
  id int auto_increment primary key,
  phone tinyint not null unique,
  address varchar(255) not null,
  title varchar(255) not null
);

create table Products
(
  id int auto_increment primary key,
  title varchar(255) not null,
  price int unsigned not null
);

create table MarketsProducts
(
  id int auto_increment primary key,
  product_id int null,
  market_id  int null,
  foreign key (product_id) references Products (id) on delete set null,
  foreign key (market_id) references Markets (id) on delete set null
);


create table Orders (
  id int PRIMARY KEY auto_increment,
  status enum('pending', 'rejected', 'delivered') not null ,
  customer_id int,
  delivery_id int,
  market_id int,
  product_id int,
  foreign key (customer_id) references Customers(id),
  foreign key (delivery_id) references Deliveries(id),
  foreign key (market_id) references Markets(id),
  foreign key (product_id) references Products(id)
)