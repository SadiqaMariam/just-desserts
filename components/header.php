<?php 
    function getHeader(){
        return      
        <<<HTML
            <div class="header">
                <div class="headerTopWrapper">
                    <img class="img headerLogo" src="images/JustDessertsLogo.png" />
                    <div class="headerTopOptionsWrapper">
                        <button class="button headerCartButton">
                            <a href="">
                                <img class="img headerShoppingCartImg" src="images/shoppingCartIcon.png" />
                            </a>
                        </button>
                        <form class="form headerSearchOrderForm">
                            <input class = "input headerSearchOrderInput" type="text" name="headerSearchOrderInput" size="30" placeholder="Order Id">
                            <button type="submit" class="button headerSearchOrderButton">
                                <a href="">
                                    <img class="img headerSearchOrderButtonImg" src="images/searchIcon.png" />
                                </a>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="headerNavigation">
                    <a href="" class="headerNavigationActiveTab">Home</a>
                    <a href="">Menu</a>
                    <a href="">Contact</a>
                </div>
            </div>
HTML;
    }
?>