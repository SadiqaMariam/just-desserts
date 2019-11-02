<?php 
    function getMenuOptions(){
        return      
<<<HTML
        <div class="menuWrapper">
            <div class="menuContent">
                <div class="menuOptionWrapper menuPageCakesWrapper">
                    <a href="cakes.php">
                        <img src="images/menuCakes.png"><br><br>
                        <span>Cakes</span>
                    </a>
                </div>
                <div class="menuOptionWrapper menuPageIcecreamsWrapper">
                    <a href="icecreams.php">
                        <img src="images/menuIceCreams.png"><br><br>
                        <span>Ice Creams</span>
                    </a>
                </div>
                <div class="menuOptionWrapper menuPageCupcakesWrapper">
                    <a href="cupcakes.php">
                        <img src="images/menuCupcakes.png"><br><br>
                        <span>Cup cakes</span>
                    </a>
                </div>
            </div>
        </div>
HTML;
    }
?>