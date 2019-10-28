CREATE TABLE JustDesserts.Products (
    ProductId int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255) NOT NULL UNIQUE,
    Description varchar(512),
    Price Decimal(8, 2),
    Category varchar(255),
    Image varchar(255)
);