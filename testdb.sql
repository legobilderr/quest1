CREATE TABLE answer1 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    tag_id INT,
    FOREIGN KEY
(product_id) REFERENCES products
(id) ,
    FOREIGN KEY
(tag_id) REFERENCES tags
(id) 
);


SELECT products.name
FROM products
WHERE products.id IN(
    SELECT tags.id
FROM tags
WHERE COUNT(tags.name) > 10
);
