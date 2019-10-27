CREATE DATABASE JustDesserts;

CREATE TABLE JustDesserts.Products (
    ProductId int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255) NOT NULL UNIQUE,
    Description varchar(512),
    Price Decimal(8, 2),
    Category varchar(255),
    Image varchar(255)
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Dark chocolate Cake", 
    "Dark black chocolate is a form of chocolate containing cocoa solids, cocoa butter and sugar, without the milk found in milk chocolate. Government and industry standards of what products may be labeled 'dark chocolate' vary by country and market.",
    32.00,
    "cake",
    "DarkChocolateCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Red Velvet Cake", 
    "Red velvet cake is traditionally a red, red-brown, crimson or scarlet colored chocolate layer cake, layered with white cream cheese or ermine icing. Traditional recipes do not use food coloring, with the red color due to non-Dutched, anthocyanin-rich cocoa.",
    28.00,
    "cake",
    "RedVelvetCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Blackout Cake", 
    "Blackout cake, sometimes called Brooklyn Blackout cake, is a chocolate cake filled with chocolate pudding and topped with chocolate cake crumbs. It was invented during World War II by a Brooklyn bakery chain named Ebinger's, in recognition of the mandatory blackouts to protect the Brooklyn Navy Yard.",
    29.00,
    "cake",
    "BlackoutCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Green Tea Cake", 
    "Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.", 
    22.00,
    "cake",
    "GreenTeaCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Strawberry Cake", 
    "The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.", 
    24.00,
    "cake",
    "StraeberryCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Vanilla Cake", 
    "Strawberry cake is a cake that uses strawberry as a primary ingredient. Strawberries may be used in the cake batter, atop cakes and in a strawberry cake's frosting. Some are served chilled or partially frozen, and they are sometimes served as a Valentine's Day dish.", 
    24.00,
    "cake",
    "VanillaCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Lemon Cake", 
    "This batter is made with freshly grated lemon zest and fresh lemon juice. When it the cake comes out of the oven it is infused with a homemade lemon syrup to give it an extra lemon kick, and then after cooling down the pound cake is topped with the most delicious lemon glaze.",
    18.00,
    "cake",
    "LemonCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Caramel Cake", 
    "This caramel cake recipe is perfect for that die hard caramel fan in your life. Homemade caramel sauce is used in the cake layers, frosting, and the drip!",
    24.00,
    "cake",
    "CaramelCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Mocha Cake", 
    "This mocha cake is moist, fluffy and packed with chocolate and coffee flavor. Between each layer you'll find a mocha buttercream, chocolate ganache and chopped chocolate covered espresso beans.",
    26.00,
    "cake",
    "MochaCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Raspberry Cake", 
    "The Raspberry Cake is made with plump, juicy raspberries. The perfect cake for summertime. Excellent for all occasions, make it for a barbecue or potluck, and it will disappear! It only takes 10 ingredients to make this dessert cake",
    21.00,
    "cake",
    "RaspberryCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Cookies Cream Cake", 
    "This Oreo Cookies and Cream Layer Cake is layers of moist vanilla cake loaded with crushed Oreos. The cake is filled with a chocolate fudge filling and topped with an easy Oreo buttercream.",
    24.00,
    "cake",
    "CookiesCreamCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Cream Cheese Cake", 
    "Cream cheese is a fresh, soft mild tasting cheese produced from unskimmed cow's milk. Given that it is made from a combination cream and milk, the cheese has a high fat content",
    24.00,
    "cake",
    "CreamCheeseCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Peanut Butter", 
    "Peanut butter is a food paste or spread made from ground dry-roasted peanuts. It often contains additional ingredients that modify the taste or texture, such as salt, sweeteners, or emulsifiers. ",
    22.00,
    "cake",
    "PeanutButterCake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Green Tea Cupcake", 
    "Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.", 
    1.80,
    "cupcake",
    "GreenTeaCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Blackout Cupcake", 
    "Blackout cupcake, sometimes called Brooklyn Blackout cupcake, is a chocolate cupcake filled with chocolate pudding and topped with chocolate cupcake crumbs. It was invented during World War II by a Brooklyn bakery chain named Ebinger's, in recognition of the mandatory blackouts to protect the Brooklyn Navy Yard.",
    2.00,
    "cupcake",
    "BlackoutCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Red Velvet Cupcake", 
    "Red velvet cupcake is traditionally a red, red-brown, crimson or scarlet colored chocolate layer cupcake, layered with white cream cheese or ermine icing. Traditional recipes do not use food coloring, with the red color due to non-Dutched, anthocyanin-rich cocoa.",
    2.00,
    "cupcake",
    "RedVelvetCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Vanilla Cupcake", 
    "Strawberry cupcake is a cupcake that uses strawberry as a primary ingredient. Strawberries may be used in the cupcake batter, atop cupcakes and in a strawberry cupcake's frosting. Some are served chilled or partially frozen, and they are sometimes served as a Valentine's Day dish.", 
    2.00,
    "cupcake",
    "VanillaCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Mocha Cupcake", 
    "This mocha cupcake is moist, fluffy and packed with chocolate and coffee flavor. Between each layer you'll find a mocha buttercream, chocolate ganache and chopped chocolate covered espresso beans.",
    2.20,
    "cupcake",
    "MochaCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Caramel Cupcake", 
    "This caramel cupcake recipe is perfect for that die hard caramel fan in your life. Homemade caramel sauce is used in the cupcake layers, frosting, and the drip!",
    1.80,
    "cupcake",
    "CaramelCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Cream Cheese Cupcake", 
    "Cream cheese is a fresh, soft mild tasting cheese produced from unskimmed cow's milk. Given that it is made from a combination cream and milk, the cheese has a high fat content",
    2.00,
    "cupcake",
    "CreamCheeseCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Cookies Cream Cupcake", 
    "This Oreo Cookies and Cream Layer Cupcake is layers of moist vanilla cupcake loaded with crushed Oreos. The cupcake is filled with a chocolate fudge filling and topped with an easy Oreo buttercream.",
    1.80,
    "cupcake",
    "CookiesCreamCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Dark chocolate Cupcake", 
    "Dark black chocolate is a form of chocolate containing cocoa solids, cocoa butter and sugar, without the milk found in milk chocolate. Government and industry standards of what products may be labeled 'dark chocolate' vary by country and market.",
    1.90,
    "cupcake",
    "DarkChocolateCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Strawberry Cupcake", 
    "The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.", 
    1.60,
    "cupcake",
    "StraeberryCupcake.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Blackout Icecream", 
    "Blackout icecream, sometimes called Brooklyn Blackout icecream, is a chocolate icecream filled with chocolate pudding and topped with chocolate crumbs. It was invented during World War II by a Brooklyn bakery chain named Ebinger's, in recognition of the mandatory blackouts to protect the Brooklyn Navy Yard.",
    1.10,
    "icecream",
    "BlackoutIceCream.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Vanilla Icecream", 
    "Strawberry icecream is a icecream that uses strawberry as a primary ingredient. Strawberries may be used in the icecream batter, atop icecreams and in a strawberry icecream's frosting. Some are served chilled or partially frozen, and they are sometimes served as a Valentine's Day dish.", 
    1.10,
    "icecream",
    "VanillaIceCream.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Strawberry Icecream", 
    "The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.", 
    1.10,
    "icecream",
    "StraeberryIceCream.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Mocha Icecream", 
    "This mocha icecream is moist, fluffy and packed with chocolate and coffee flavor. Between each layer you'll find a mocha buttercream, chocolate ganache and chopped chocolate covered espresso beans.",
    1.20,
    "icecream",
    "MochaIceCream.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Caramel Icecream", 
    "This caramel icecream recipe is perfect for that die hard caramel fan in your life. Homemade caramel sauce is used in the icecream layers, frosting, and the drip!",
    1.00,
    "icecream",
    "CaramelIceCream.png"
);

INSERT INTO JustDesserts.Products (Name, Description, Price, Category, Image)
VALUES (
    "Cookies Cream Icecream", 
    "This Oreo Cookies and Cream Layer IceCream is layers of moist vanilla icecream loaded with crushed Oreos. The icecream is filled with a chocolate fudge filling and topped with an easy Oreo buttercream.",
    1.00,
    "icecream",
    "CookiesCreamIceCream.png"
);