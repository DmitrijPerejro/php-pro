alter table Customers modify phone int
alter table Markets modify phone int

insert into Customers (name, email, phone) values ('user1', 'user1@email.com', 0971112233);
insert into Customers (name, email, phone) values ('user2', 'user2@email.com', 0971112233);
insert into Customers (name, email, phone) values ('user3', 'user3@email.com', 0971112233);
insert into Customers (name, email, phone) values ('user4', 'user4@email.com', 0971112233);
insert into Customers (name, email, phone) values ('user5', 'user5@email.com', 0971112233);

insert into Markets (phone, address, title) values (505050, 'Groove st. 1', 'Market 1');
insert into Markets (phone, address, title) values (505051, 'Groove st. 2', 'Market 2');
insert into Markets (phone, address, title) values (505052, 'Groove st. 3', 'Market 3');
insert into Markets (phone, address, title) values (505053, 'Groove st. 4', 'Market 4');
insert into Markets (phone, address, title) values (505054, 'Groove st. 5', 'Market 5');

insert into Deliveries(title, delivery_id) values ('Delivery 1', 1);
insert into Deliveries(title, delivery_id) values ('Delivery 2', 10);
insert into Deliveries(title, delivery_id) values ('Delivery 3', 12);
insert into Deliveries(title, delivery_id) values ('Delivery 4', 12);
insert into Deliveries(title, delivery_id) values ('Delivery 5', 199);

insert into Products (title, price) values ('product 1', 100);
insert into Products (title, price) values ('product 2', 200);
insert into Products (title, price) values ('product 3', 300);
insert into Products (title, price) values ('product 4', 400);
insert into Products (title, price) values ('product 5', 500);

insert into MarketsProducts (market_id, product_id) values (1, 1);
insert into MarketsProducts (market_id, product_id) values (2, 1);
insert into MarketsProducts (market_id, product_id) values (3, 1);
insert into MarketsProducts (market_id, product_id) values (1, 4);
insert into MarketsProducts (market_id, product_id) values (2, 4);

insert into Orders(status, customer_id, delivery_id, market_id, product_id)
values ('pending', 2, 2, 2, 1);
insert into Orders(status, customer_id, delivery_id, market_id, product_id)
values ('pending', 2, 2, 2, 2);
insert into Orders(status, customer_id, delivery_id, market_id, product_id)
values ('pending', 2, 2, 2, 3);
insert into Orders(status, customer_id, delivery_id, market_id, product_id)
values ('pending', 2, 2, 2, 4);
insert into Orders(status, customer_id, delivery_id, market_id, product_id)
values ('pending', 2, 2, 2, 5);

update Orders set status = 'rejected' where id = 1;
update Customers set name = 'Valera' where email = 'user1@email.com';

delete from Customers where name = 'Valera';
delete from Orders where status = 'rejected';

select name from Customers where id > 1
select * from Deliveries where delivery_id between 11 and 200
select count(*) as total from MarketsProducts

select
    Products.title,
    Products.price,
    Products.id as product_id,
    Markets.id as market_id
from MarketsProducts
inner JOIN
Markets ON MarketsProducts.market_id = Markets.id
inner JOIN
Products ON MarketsProducts.product_id = Products.id
ORDER BY price DESC

select count(*) as totalOrders from Orders
inner JOIN Customers C
on Orders.customer_id = C.id

alter table Customers add column birth date;

drop table MarketsProducts