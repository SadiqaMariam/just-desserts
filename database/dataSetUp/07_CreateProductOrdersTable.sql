CREATE TABLE JustDesserts.ProductOrders (
    OrderId varchar(8) NOT NULL,
    ProductId int NOT NULL,
    Quantity int DEFAULT 1,
    CONSTRAINT PRIMARY KEY (OrderId, ProductId),
    CONSTRAINT FOREIGN KEY  (OrderId) REFERENCES Orders(OrderId),
    CONSTRAINT FOREIGN KEY  (ProductId) REFERENCES Products(ProductId)
);