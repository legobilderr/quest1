CREATE TABLE
if not EXISTS products
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar
(20),
    price INT
);

CREATE TABLE
if not EXISTS tags
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar
(20)
);

CREATE TABLE
if not exists relations
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    tag_id INT,
    FOREIGN KEY
(product_id) REFERENCES products
(id) ON
delete cascade ON
update cascade,
    FOREIGN KEY(tag_id) REFERENCES tags(id)
ON
delete cascade ON
update cascade 
);


insert into products
    (name, price)
values('spoon', 1);
insert into products
    (name, price)
values('chair', 3);
insert into products
    (name, price)
values('table', 5);

insert into tags
    (name)
values('red');
insert into tags
    (name)
values('wood');
insert into tags
    (name)
values('steel');
insert into tags
    (name)
values('big');
insert into tags
    (name)
values('small');
insert into tags
    (name)
values('orange');
insert into tags
    (name)
values('cheap');
insert into tags
    (name)
values('expensive');
insert into tags
    (name)
values('dark');
insert into tags
    (name)
values('light');
insert into tags
    (name)
values('heavy');

insert into relations
    (product_id, tag_id)
values(1, 1);
insert into relations
    (product_id, tag_id)
values(2, 2);
insert into relations
    (product_id, tag_id)
values(1, 3);
insert into relations
    (product_id, tag_id)
values(2, 4);
insert into relations
    (product_id, tag_id)
values(1, 5);
insert into relations
    (product_id, tag_id)
values(2, 6);
insert into relations
    (product_id, tag_id)
values(3, 7);
insert into relations
    (product_id, tag_id)
values(3, 8);
insert into relations
    (product_id, tag_id)
values(3, 9);
insert into relations
    (product_id, tag_id)
values(3, 10);
insert into relations
    (product_id, tag_id)
values(3, 11);


select products.name, products.id
from products
    left join relations on relations.product_id = products.id;


select tags.id, products.name as product_name, tags.name as tag_name
from relations
    left join products on products.id = relations.product_id
    left join tags on tags.id = relations.tag_id
where relations.product_id = 1
order by tag_name DESC;



select products.name as product_name, product_id, count(*)
from relations
    left join products on products.id = relations.product_id
    left join tags on tags.id = relations.tag_id
GROUP BY products.name,product_id
having count(tag_id)>10;

drop TABLE relations ;