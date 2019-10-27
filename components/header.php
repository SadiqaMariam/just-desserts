<?php 
    session_start();
    function getHeader($currentPage){
        $getHeaderNavigationWithActiveTab = function ($currentPage, $navTab){
            $navRef = $navTab.".php";
            $navTabName = ucfirst($navTab);
            $navClass = "";
    
            if($currentPage === $navTab){
                $navClass = "headerNavigationActiveTab";
            }
    
            return "<a href={$navRef} class={$navClass}>{$navTabName}</a>";
        };

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
                    {$getHeaderNavigationWithActiveTab($currentPage, "home")}
                    {$getHeaderNavigationWithActiveTab($currentPage, "menu")}
                    {$getHeaderNavigationWithActiveTab($currentPage, "contact")}
                </div>
            </div>
HTML;
    }
?>